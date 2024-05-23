<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zafram
 */

get_header();

$blog_sidebar = zafram_options('zafram_blog_setting');
$opt = get_option('zafram');
$defult_blog_format  = isset( $opt['defult_blog_format']) ? $opt['defult_blog_format'] : '0';

?>

	<main id="primary" class="site-main">

	<?php get_template_part('template-parts/banner/banner', 'blog'); 

		zafram_wrapper_start($blog_sidebar);

		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			/* Start the Loop */
			if($defult_blog_format == '0'){
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/blog/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
				endwhile;
			}elseif($defult_blog_format == '1'){ ?>
				
			<div class="_skin_2 dl_row  page type-page status-publish hentry">
				<?php 
					while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/blog/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'grid' ) );
					endwhile;
				?>
			</div>
			<?php }else{ 
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/blog/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
				endwhile;
			 }
			 ?>

			<?php 
			zafram_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		zafram_wrapper_end( $blog_sidebar );
		 ?>
		 
	</main><!-- #main -->

<?php

get_footer();

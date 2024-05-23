<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage zafram
 * @since zafram 1.0
 */

$opt = get_option( 'zafram' );
$post_title_length  = isset($opt['post_title_length']) ? $opt['post_title_length'] : '';
$is_post_author     = isset($opt['is_post_author']) ? $opt['is_post_author'] : '1';
$is_post_date       = isset($opt['is_post_date']) ? $opt['is_post_date'] : '1';

?>

<div class="dl_col_lg_6 dl_col_sm_ blog_grid">
    <div class="droit-post__area blog_grid_masonory style_5 zoom_in_effect">
        <a href="#" class="post_thumb">
            <div class="droit-post__thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
        </a>
        <?php
            $category = get_the_category();
        ?>
        <a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>" class="dl_tag droit-post__category"><?php echo  esc_html( $category[0]->cat_name ); ?></a>
        <div class="blog_grid_masonory_content">		
            <h3 class="dl_title droit-post__title"> 
            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), $post_title_length); ?></a> </h3>
            <?php get_template_part( 'template-parts/blog/excerpt/excerpt', get_post_format() ); ?>
            <div class="dl_post_meta">
                <?php if($is_post_author == '1'): ?>
                <p class="dl_post_author droit-post_author">
                    <?php zafram_posted_by(); ?>
                </p>
                <?php endif; ?>
                <?php if($is_post_date == '1'): ?>
                    <p class="dl_date droit-post__date"><?php echo get_the_date(); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
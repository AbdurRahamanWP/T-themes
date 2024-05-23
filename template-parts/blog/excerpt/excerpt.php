<?php
/**
 * Show the excerpt.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage zafram
 * @since zafram 1.0
 */

 $opt = get_option( 'zafram' );
 $blog_excerpt = isset($opt['blog_excerpt']) ? $opt['blog_excerpt'] : '50';
 ?>
   <div class='blog_excerpt'> <?php echo wp_trim_words(get_the_content(), $blog_excerpt);?> </div>

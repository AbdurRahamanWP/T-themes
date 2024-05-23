<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zafram
 */
$opt = get_option('zafram');
$is_defult_footer            = isset( $opt['is_defult_footer']) ? $opt['is_defult_footer'] : 'yes';
$zafram_footer_background    = isset( $opt['zafram_footer_background']['url']) ? $opt['zafram_footer_background']['url'] : '';



$footer_text = zafram_options('zafram_copyright_txt', 'Copyright &copy; 2023 <a href="#">Target-Themes</a> | All rights reserved');
$footer_id = '';

if ( isset( $post->ID) && function_exists('header_footer_template_id')) {
    $footer_id = header_footer_template_id('footer', $post->ID);
}



if ( $footer_id != '' && class_exists( '\Elementor\Plugin' ) && $is_defult_footer !== 'yes' ) {
    echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $footer_id );
}else{ ?>
    <?php if($is_defult_footer == 'yes') : ?>
        <footer id="colophon" class="site-footer" <?php if(!empty($zafram_footer_background)): ?> data-bg-img="<?php echo esc_url($zafram_footer_background); ?>"  <?php endif; ?>>
            <?php 
                if (is_active_sidebar('footer_widgets')):
            ?>
                <div class="container custom_container">
                    <div class="row justify-content-between">
                        <?php dynamic_sidebar( 'footer_widgets' ); ?> 
                    </div>
                </div>
            <?php endif; ?>
        
            <div class="site-info container">
                <?php echo wp_kses_post($footer_text); ?>
            </div><!-- .site-info -->
        </footer><!-- #colophon -->
    <?php endif; ?>
</div><!-- #page -->
<?php }
 wp_footer(); ?>
</body>
</html>

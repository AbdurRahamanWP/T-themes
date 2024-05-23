<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zafram
 */

$opt = get_option('zafram');
$sticky  = isset( $opt['is_sticky']) ? $opt['is_sticky'] : '';
$is_topbar  = isset( $opt['is_topbar']) ? $opt['is_topbar'] : '';

$top_phone_number  = isset( $opt['top_phone_number']) ? $opt['top_phone_number'] : '';
$top_emailid       = isset( $opt['top_emailid']) ? $opt['top_emailid'] : '';
$top_address       = isset( $opt['top_address']) ? $opt['top_address'] : '';
$top_btn_label     = isset( $opt['top_btn_label']) ? $opt['top_btn_label'] : '';
$top_btn_url       = isset( $opt['top_btn_url']) ? $opt['top_btn_url'] : '';

 $show_top_bar    = function_exists( 'get_field' ) ? get_field( 'show_top_bar' ) : '';
 $header_style    = function_exists( 'get_field' ) ? get_field( 'header_style' ) : '';


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if($is_topbar =='yes' && $show_top_bar =='1'): ?>
    <div class="topbar-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="topbar-inner">
              <div class="topbar-contact">
                <ul class="topbar-contact-list">
                <?php if(!empty($top_phone_number)): ?>
                  <li>
                    <a href="tel:<?php echo zafram_extention_wp_kses( $top_phone_number ); ?>"><i class="icofont-ui-call"></i>
                        <?php echo zafram_extention_wp_kses( $top_phone_number ); ?>
                    </a >
                  </li>
                  <?php endif; ?>

                  <?php if(!empty($top_emailid)): ?>
                  <li>
                    <a href="mailto:<?php echo zafram_extention_wp_kses( $top_emailid ); ?>"><i class="icofont-envelope"></i>
                        <?php echo zafram_extention_wp_kses( $top_emailid ); ?>
                    </a >
                  </li>
                  <?php endif; ?>

                  <?php if(!empty($top_address)): ?>
                  <li>
                    <a href=""><i class="icofont-google-map"></i>
                        <?php echo zafram_extention_wp_kses( $top_address ); ?>
                    </a >
                  </li>
                  <?php endif; ?>
                </ul>
              </div>
              <div class="topbar-language">
                <div class="topbar-language-img">
                    <div class="header-menu-btn style-2">
                        <a href="contact.html" class="theme-btn">Let’s Talk <i class="fi fi-rr-arrow-small-right"></i></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php endif; ?>



<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'zafram' ); ?></a>
    <?php

    global $post;
        $header_id = '';
        if (isset($post->ID) && function_exists('header_footer_template_id')) {
            $header_id = header_footer_template_id('header', $post->ID);
        }
            if ( $header_id != '' && class_exists('\Elementor\Plugin' ) ) {
            echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $header_id );
        }else{
    ?>
    <?php  if($header_style == 'Style Two'){ ?>
      <header id="masthead" class="site-header styleTwo <?php if($sticky == 'yes'){echo "sticky_nav";}elseif($sticky == 'no'){ echo ""; }else{echo "sticky_nav";} ?>">
          <?php get_template_part( 'template-parts/header/nav/content',  'nav'); ?>
     </header><!-- #masthead -->
    <?php }else{ ?>

      <header id="masthead" class="site-header <?php if($sticky == 'yes'){echo "sticky_nav";}elseif($sticky == 'no'){ echo ""; }else{echo "sticky_nav";} ?>">
          <?php get_template_part( 'template-parts/header/nav/content',  'nav'); ?>
     </header><!-- #masthead -->

    <?php } ?>
<?php } ?>


<?php
echo  $pid = $post->ID;
echo '<br>';
do_action('banner_section_after_menu',$pid);

?>

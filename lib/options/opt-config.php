<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'zafram';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Theme Settings', 'zafram' ),
        'customizer'           => true,
		'dev_mode'             => false,
		'forced_dev_mode_off'  => true,
        'admin_bar_priority'   => 50,
        'page_priority'        => 58,
        'save_defaults'        => true,
        'show_import_export'   => true,
        'transient_time'   => 60 * MINUTE_IN_SECONDS,
        'async_typography'   => false,
        'menu_type'   => 'menu',
        'allow_sub_menu'   => true,
    );

    
    Redux::setArgs( $opt_name, $args );
    
	require ZAFRAM_THEMEROOT_DIR . '/lib/options/opt_header.php';
    require ZAFRAM_THEMEROOT_DIR . '/lib/options/opt_menu.php';
	require ZAFRAM_THEMEROOT_DIR . '/lib/options/opt_banner.php';
	require ZAFRAM_THEMEROOT_DIR . '/lib/options/opt_banner_search.php';
	require ZAFRAM_THEMEROOT_DIR . '/lib/options/opt_blog.php';
    require ZAFRAM_THEMEROOT_DIR . '/lib/options/opt_404.php';
    require ZAFRAM_THEMEROOT_DIR . '/lib/options/opt_typo.php';
    require ZAFRAM_THEMEROOT_DIR . '/lib/options/opt_style.php';
	require ZAFRAM_THEMEROOT_DIR . '/lib/options/opt_footer.php';
    require ZAFRAM_THEMEROOT_DIR . '/lib/options/opt_woocomemrce.php';
    require ZAFRAM_THEMEROOT_DIR . '/lib/options/opt_custom_posts.php';

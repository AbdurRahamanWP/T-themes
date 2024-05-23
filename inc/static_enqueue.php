<?php 
/**
 * Enqueue scripts and styles.
 */
 
function zafram_fonts_url() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = '';

    /* Body font */
    if ( 'off' !== 'on' ) {
        $fonts[] = "Nunito Sans:200,300,400,500,600,700,800,900";
    }

    $is_ssl = is_ssl() ? 'https' : 'http';

    if ( $fonts ) {
        $fonts_url = add_query_arg( array(
            'family' => urlencode( implode( '|', $fonts ) ),
            'subset' => urlencode( $subsets ),
        ), "$is_ssl://fonts.googleapis.com/css" );
    }

    return $fonts_url;
}


function zafram_scripts() {
    wp_enqueue_style('zaframfonts', zafram_fonts_url(), array(), null); 
    
	wp_enqueue_style( 'zafrm-style', get_stylesheet_uri(), array(), ZAFRAM_VERSION );
	wp_style_add_data( 'zafrm-style', 'rtl', 'replace' );
	wp_enqueue_style( 'mediaelementplayer', ZAFRAM_CSS.'/mediaelementplayer.css', array( 'zafrm-style' ), ZAFRAM_VERSION );
	wp_enqueue_style( 'zafram_fontawesome', ZAFRAM_CSS.'/all.min.css', array( 'zafrm-style' ), ZAFRAM_VERSION );
    wp_enqueue_style( 'themify_icon', ZAFRAM_CSS.'/themify-icons.css', array( 'zafrm-style' ), ZAFRAM_VERSION );
	wp_enqueue_style( 'zafram_icon_moon', ZAFRAM_CSS.'/icon-moon.css', array( 'zafrm-style' ), ZAFRAM_VERSION );

	wp_enqueue_style( 'zaframstylemain', get_theme_file_uri('/assets/css/style.css'), array(), ZAFRAM_VERSION );
	wp_enqueue_style( 'stylezafram', get_theme_file_uri('/assets/css/style-zafram.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'stylewoocommerce', get_theme_file_uri('/assets/css/woocommerce.css'), array(), ZAFRAM_VERSION );

    // Theme Style start 
    
    wp_enqueue_style( 'about-us', get_theme_file_uri('/assets/theme/css/about-us.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'agency-skills', get_theme_file_uri('/assets/theme/css/agency-skills.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'blog', get_theme_file_uri('/assets/theme/css/blog.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'brands', get_theme_file_uri('/assets/theme/css/brands.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'breadcrumbs', get_theme_file_uri('/assets/theme/css/breadcrumbs.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'call-action', get_theme_file_uri('/assets/theme/css/call-action.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'company-fact', get_theme_file_uri('/assets/theme/css/company-fact.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'contact-us', get_theme_file_uri('/assets/theme/css/contact-us.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'faq', get_theme_file_uri('/assets/theme/css/faq.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'footer', get_theme_file_uri('/assets/theme/css/footer.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'header', get_theme_file_uri('/assets/theme/css/header.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'hero-area', get_theme_file_uri('/assets/theme/css/hero-area.css'), array(), ZAFRAM_VERSION );

    wp_enqueue_style( 'portfolio', get_theme_file_uri('/assets/theme/css/portfolio.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'pricing', get_theme_file_uri('/assets/theme/css/pricing.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'reset', get_theme_file_uri('/assets/theme/css/reset.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'services', get_theme_file_uri('/assets/theme/css/services.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'strap', get_theme_file_uri('/assets/theme/css/strap.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'team', get_theme_file_uri('/assets/theme/css/team.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'testimonial', get_theme_file_uri('/assets/theme/css/testimonial.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'topbar', get_theme_file_uri('/assets/theme/css/topbar.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'what-we-do', get_theme_file_uri('/assets/theme/css/what-we-do.css'), array(), ZAFRAM_VERSION );


    wp_enqueue_style( 'animatemin', get_theme_file_uri('/assets/theme/plugins/css/animate.min.css'), array(), ZAFRAM_VERSION );
   // wp_enqueue_style( 'bootstrapmin', get_theme_file_uri('/assets/theme/plugins/css/bootstrap.min.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'cubeportfoliomin', get_theme_file_uri('/assets/theme/plugins/css/cube-portfolio.min.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'icofont', get_theme_file_uri('/assets/theme/plugins/css/icofont.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'maginificpopupmin', get_theme_file_uri('/assets/theme/plugins/css/maginific-popup.min.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'niceselectmin', get_theme_file_uri('/assets/theme/plugins/css/nice-select.min.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'owlcarouselmin', get_theme_file_uri('/assets/theme/plugins/css/owl.carousel.min.css'), array(), ZAFRAM_VERSION );
    wp_enqueue_style( 'uicons', get_theme_file_uri('/assets/theme/plugins/css/uicons.css'), array(), ZAFRAM_VERSION );

    // theme Style End

   //  Enqueue script   
	wp_enqueue_script( 'mediaelement-and-player', ZAFRAM_JS. '/mediaelement-and-player.min.js', array('jquery'), ZAFRAM_VERSION, true );
	wp_enqueue_script( 'parallaxie', ZAFRAM_JS. '/parallaxie.js', array('jquery'), ZAFRAM_VERSION, true );
	wp_enqueue_script( 'zaframmain', ZAFRAM_JS . '/main.js', array('jquery'), ZAFRAM_VERSION, true );
    wp_enqueue_script( 'zaframactive', ZAFRAM_JS . '/active.js', array('jquery'), ZAFRAM_VERSION, true );
    // wp_enqueue_script( 'backToTop', ZAFRAM_JS . '/backToTop.js', array('jquery'), ZAFRAM_VERSION, true );
    wp_enqueue_script( 'bootstrapmin', ZAFRAM_JS . '/bootstrap.min.js', array('jquery'), ZAFRAM_VERSION, true );
    wp_enqueue_script( 'cubeportfoliomin', ZAFRAM_JS . '/cube-portfolio.min.js', array('jquery'), ZAFRAM_VERSION, true );
    wp_enqueue_script( 'jquery_counterup', ZAFRAM_JS . '/jquery.counterup.min.js', array('jquery'), ZAFRAM_VERSION, true );
   // wp_enqueue_script( 'jquery_min', ZAFRAM_JS . '/jquery.min.js', array('jquery'), ZAFRAM_VERSION, true );
    wp_enqueue_script( 'jquery-migrate', ZAFRAM_JS . '/jquery-migrate.js', array('jquery'), ZAFRAM_VERSION, true );
    wp_enqueue_script( 'magnific_popup', ZAFRAM_JS . '/magnific-popup.min.js', array('jquery'), ZAFRAM_VERSION, true );
    wp_enqueue_script( 'mediaelement', ZAFRAM_JS . '/mediaelement-and-player.min.js', array('jquery'), ZAFRAM_VERSION, true );
    wp_enqueue_script( 'modernizer_min', ZAFRAM_JS . '/modernizer.min.js', array('jquery'), ZAFRAM_VERSION, true );
    //wp_enqueue_script( 'nice_select_min', ZAFRAM_JS . '/nice-select.min.js', array('jquery'), ZAFRAM_VERSION, true );
    wp_enqueue_script( 'owl_carousel_min', ZAFRAM_JS . '/owl.carousel.min.js', array('jquery'), ZAFRAM_VERSION, true );
    wp_enqueue_script( 'parallax', ZAFRAM_JS . '/parallax.js', array('jquery'), ZAFRAM_VERSION, true );
    wp_enqueue_script( 'parallaxie', ZAFRAM_JS . '/parallaxie.js', array('jquery'), ZAFRAM_VERSION, true );
    //wp_enqueue_script( 'simpleParallax_min', ZAFRAM_JS . '/simpleParallax.min.js', array('jquery'), ZAFRAM_VERSION, true );
    //wp_enqueue_script( 'waypoints_min', ZAFRAM_JS . '/waypoints.min.js', array('jquery'), ZAFRAM_VERSION, true );
    wp_enqueue_script( 'wow_min', ZAFRAM_JS . '/wow.min.js', array('jquery'), ZAFRAM_VERSION, true );


    // Theme JS emd

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


    wp_deregister_style('extendify-utilities');


    $dynamic_css = '';
   
    
    $opt = get_option('zafram');

    if ( !empty($opt['mobile_menu_dropdown_bg']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .navbar .navbar-collapse{
                    background: {$opt['mobile_menu_dropdown_bg']} !important;
                }
            }";
    }

    if ( !empty($opt['mobile_menu_font_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .menu > .nav-item .nav-link, .menu > .nav-item.mega_menu{
                    color: {$opt['mobile_menu_font_color']} !important;
                }
            }";
    }

    if ( !empty($opt['mobile_menu_hover_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .menu > .nav-item.active .nav-link{
                    color: {$opt['mobile_menu_hover_color']} !important;
                }
                .menu > .nav-item.hover .nav-link{
                    color: {$opt['mobile_menu_hover_color']} !important;
                }
            }";
    }


    if ( !empty($opt['mobile_menu_dropdown_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .menu > .nav-item .mobile_dropdown_icon{
                    color: {$opt['mobile_menu_dropdown_color']} !important;
                }
            }";
    }

    if ( !empty($opt['hamburger_menu_icon_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .navbar-toggler span{
                    background: {$opt['hamburger_menu_icon_color']} !important;
                }
            }";
    }

    if ( !empty($opt['hamburger_menu_icon_color_sticky']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .navbar_fixed .navbar-toggler span{
                    background: {$opt['hamburger_menu_icon_color_sticky']} !important;
                }
            }";
    }


    wp_add_inline_style( 'zafrm-style', $dynamic_css );

}
add_action( 'wp_enqueue_scripts', 'zafram_scripts' );
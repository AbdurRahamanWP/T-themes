<?php
// Header Section
Redux::set_section( 'zafram', array(
    'title'            => esc_html__( 'Header', 'zafram' ),
    'id'               => 'zafram_header_sec',
    'customizer_width' => '400px',
    'icon'             => 'el el-arrow-up',
));


Redux::set_section( 'zafram', array(
    'title'            => esc_html__( 'Header Settings', 'zafram' ),
    'id'               => 'zafram_header_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

        array(
            'id'       => 'is_sticky',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Sticky', 'zafram'),
            'options' => array(
                'yes' => esc_html__('Yes', 'zafram'), 
                'no' => esc_html__('No', 'zafram'), 
             ), 
            'default' => 'yes'
        ),

        array(
            'id'       => 'zafram_header_layout',
            'type'     => 'image_select',
            'title'    => __('Header Layout', 'zafram'), 
            'subtitle' => __('Select your header layout', 'zafram'),
            'options'  => array(
                'container'      => array(
                    'alt'   => 'Container', 
                    'img'   => ReduxFramework::$_url.'assets/img/3cm.png'
                ),
                'container-fluid'      => array(
                    'alt'   => 'Container-Fluid', 
                    'img'   => ReduxFramework::$_url.'assets/img/1col.png'
                ),
            ),
            'default' => 'container'
        ),

        array(
            'id'       => 'is_header_bg_color',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Background', 'zafram'),
            'options' => array(
                'yes' => esc_html__('Yes', 'zafram'), 
                'no' => esc_html__('No', 'zafram'), 
             ), 
            'default' => 'yes'
        ),

        array(
            'title'     => esc_html__( 'Background Color Normal', 'zafram' ),
            'id'        => 'menu_bg_color',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.site-header .navbar' ),
            'required'  => array( 'is_header_bg_color', '=', 'yes' )
        ),

        array(
            'title'     => esc_html__( 'Background Color Sticky', 'zafram' ),
            'id'        => 'menu_bg_color_sticky',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.site-header.sticky_nav.navbar_fixed .navbar' ),
        ),

        array(
            'title'     => esc_html__( 'Header Padding Normal', 'zafram' ),
            'subtitle'  => esc_html__( 'Padding around the header. Input the padding as clockwise (Top Right Bottom Left)', 'zafram' ),
            'id'        => 'header_padding',
            'type'      => 'spacing',
            'output'    => array( '.site-header .navbar' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),

        array(
            'title'     => esc_html__( 'Header Padding Sticky', 'zafram' ),
            'subtitle'  => esc_html__( 'Padding around the header. Input the padding as clockwise (Top Right Bottom Left)', 'zafram' ),
            'id'        => 'header_padding_sticky',
            'type'      => 'spacing',
            'output'    => array( '.navbar_fixed .navbar .menu > .nav-item' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),

    )
) );

// Logo
Redux::set_section( 'zafram', array(
    'title'            => esc_html__( 'Logo Option', 'zafram' ),
    'id'               => 'zafram_logo_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Upload logo', 'zafram' ),
            'subtitle'  => esc_html__( 'Upload here a image file for your logo', 'zafram' ),
            'id'        => 'zafram_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => ZAFRAM_IMAGES.'/default_logo/logo.svg'
            )
        ),

        array(
            'title'     => esc_html__( 'Sticky header logo', 'zafram' ),
            'id'        => 'zafram_sticky_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => ZAFRAM_IMAGES.'/default_logo/logo.svg'
            )
        ),

        array(
            'title'     => esc_html__( 'Retina Logo', 'zafram' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'zafram' ),
            'id'        => 'zafram_retina_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => ZAFRAM_IMAGES.'/default_logo/retina_dark_logo.png'
            )
            
        ),

        array(
            'title'     => esc_html__( 'Retina Sticky Logo', 'zafram' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'zafram' ),
            'id'        => 'zafram_retina_sticky_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => ZAFRAM_IMAGES.'/default_logo/retina_dark_logo.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Logo dimensions', 'zafram' ),
            'subtitle'  => esc_html__( 'Set a custom height width for your upload logo.', 'zafram' ),
            'id'        => 'logo_dimensions',
            'type'      => 'dimensions',
            'units'     => array( 'em','px','%' ),
            'output'    => 'img.site-logo'
        ),

        array(
            'title'     => esc_html__( 'Padding', 'zafram' ),
            'subtitle'  => esc_html__( 'Padding around the logo. Input the padding as clockwise (Top Right Bottom Left)', 'zafram' ),
            'id'        => 'logo_padding',
            'type'      => 'spacing',
            'output'    => array( 'img.site-logo' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
    )
) );

/**
 * Menu Settings
 */
Redux::set_section( 'zafram', array(
    'title'            => esc_html__( 'Header Button', 'zafram' ),
    'id'               => 'header_styling_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
            array(
                'id'       => 'is_menu_btn',
                'type'     => 'button_set',
                'title'    => esc_html__('Show Button', 'zafram'),
                'options' => array(
                    'yes' => esc_html__('Yes', 'zafram'), 
                    'no' => esc_html__('No', 'zafram'), 
                 ), 
                'default' => 'no'
            ),

            array(
                'title'     => esc_html__( 'Button label', 'zafram' ),
                'subtitle'  => esc_html__( 'Leave the button label field empty to hide the menu action button.', 'zafram' ),
                'id'        => 'menu_btn_label',
                'type'      => 'text',
                'default'   => esc_html__( 'Get Started', 'zafram' ),
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),
    
            array(
                'title'     => esc_html__( 'Button URL', 'zafram' ),
                'id'        => 'menu_btn_url',
                'type'      => 'text',
                'default'   => '#',
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),
            array(
                'title'     => esc_html__( 'Button Target', 'zafram' ),
                'id'        => 'is_target_blank',
                'type'      => 'switch',
                'on'        => esc_html__( 'On', 'zafram' ),
                'off'       => esc_html__( 'Off', 'zafram' ),
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),
            array(
                'id'          => 'header_action_btn_typo',
                'type'        => 'typography',
                'title'       => __('Typography', 'zafram'),
                'google'      => true,
                'font-backup' => true,
                'color'       => false,
                'output'      => array('.btn_get'),
                'units'       => 'px',
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),
    
            /**
             * Button colors
             * Style will apply on the Non sticky mode and sticky mode of the header
             */
            array(
                'title'     => esc_html__( 'Button Colors', 'zafram' ),
                'subtitle'  => esc_html__( 'Button style attributes on normal (non sticky) mode.', 'zafram' ),
                'id'        => 'button_colors',
                'type'      => 'section',
                'indent'    => true,
                'required'  => array( 'is_menu_btn', '=', 'yes' ),
            ),
    
            array(
                'title'     => esc_html__( 'Font color', 'zafram' ),
                'id'        => 'menu_btn_font_color',
                'type'      => 'color',
                'output'    => array( '.nav_bar .btn_get' ),
            ),
            
            array(
                'title'     => esc_html__( 'Border Color', 'zafram' ),
                'id'        => 'menu_btn_border_color',
                'type'      => 'color',
                'mode'      => 'border-color',
                'output'    => array( '.btn_get' ),
            ),
            
            array(
                'title'     => esc_html__( 'Background Color', 'zafram' ),
                'id'        => 'menu_btn_bg_color',
                'type'      => 'color',
                'mode'      => 'background',
                'output'    => array( '.navbar .btn_get' ),
            ),
    
            // Button color on hover stats
            array(
                'title'     => esc_html__( 'Hover Font Color', 'zafram' ),
                'subtitle'  => esc_html__( 'Font color on hover stats.', 'zafram' ),
                'id'        => 'menu_btn_hover_font_color',
                'type'      => 'color',
                'output'    => array( '.navbar .nav_bar .btn_get:hover' ),
            ),
            array(
                'title'     => esc_html__( 'Hover Border Color', 'zafram' ),
                'id'        => 'menu_btn_hover_border_color',
                'type'      => 'color',
                'mode'      => 'border-color',
                'output'    => array( '.navbar .btn_get:hover' ),
            ),
            array(
                'title'     => esc_html__( 'Hover background color', 'zafram' ),
                'subtitle'  => esc_html__( 'Background color on hover stats.', 'zafram' ),
                'id'        => 'menu_btn_hover_bg_color',
                'type'      => 'color',
                'output'    => array(
                    'background' => '.navbar .btn_get:hover',
                    'border-color' => '.navbar_fixed .navbar .btn_get:hover'
                ),
            ),
            array(
                'id'     => 'button_colors-end',
                'type'   => 'section',
                'indent' => false,
            ),
    
            /*
             * Button colors on sticky mode
             */
            array(
                'title'     => esc_html__( 'Sticky Button Style', 'zafram' ),
                'subtitle'  => esc_html__( 'Button colors on sticky mode.', 'zafram' ),
                'id'        => 'button_colors_sticky',
                'type'      => 'section',
                'indent'    => true,
                'required'  => array( 'is_menu_btn', '=', 'yes' ),
            ),
            array(
                'title'     => esc_html__( 'Border color', 'zafram' ),
                'id'        => 'menu_btn_border_color_sticky',
                'type'      => 'color',
                'mode'      => 'border-color',
                'output'    => array( '.navbar_fixed .navbar .btn_get' ),
            ),
            array(
                'title'     => esc_html__( 'Font color', 'zafram' ),
                'id'        => 'menu_btn_font_color_sticky',
                'type'      => 'color',
                'output'    => array( '.navbar_fixed .navbar .btn_get' ),
            ),
            array(
                'title'     => esc_html__( 'Background color', 'zafram' ),
                'id'        => 'menu_btn_bg_color_sticky',
                'type'      => 'color',
                'mode'      => 'background',
                'output'    => array( '.navbar_fixed .navbar .btn_get' ),
            ),
    
            // Button color on hover stats
            array(
                'title'     => esc_html__( 'Hover font color', 'zafram' ),
                'subtitle'  => esc_html__( 'Font color on hover stats.', 'zafram' ),
                'id'        => 'menu_btn_hover_font_color_sticky',
                'type'      => 'color',
                'output'    => array( '.navbar_fixed .navbar .btn_get.btn-meta:hover' ),
            ),
            array(
                'title'     => esc_html__( 'Hover background color', 'zafram' ),
                'subtitle'  => esc_html__( 'Background color on hover stats.', 'zafram' ),
                'id'        => 'menu_btn_hover_bg_color_sticky',
                'type'      => 'color',
                'output'    => array(
                    'background' => '.navbar_fixed .navbar .btn_get.btn-meta:hover',
                ),
            ),
            array(
                'title'     => esc_html__( 'Hover border color', 'zafram' ),
                'subtitle'  => esc_html__( 'Background color on hover stats.', 'zafram' ),
                'id'        => 'menu_btn_hover_border_color_sticky',
                'type'      => 'color',
                'output'    => array(
                    'border-color' => '.navbar_fixed .navbar .btn_get.btn-meta:hover',
                ),
            ),
    
            array(
                'id'     => 'button_colors-sticky-end',
                'type'   => 'section',
                'indent' => false,
            ),
    
            array(
                'title'     => esc_html__( 'Button padding', 'zafram' ),
                'subtitle'  => esc_html__( 'Padding around the menu action button.', 'zafram' ),
                'id'        => 'menu_btn_padding',
                'type'      => 'spacing',
                'output'    => array( '.btn_get' ),
                'mode'      => 'padding',
                'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),

    )
));


/**
 * Menu Settings
 */
Redux::set_section( 'zafram', array(
    'title'            => esc_html__( 'Header TopBar', 'zafram' ),
    'id'               => 'header_topbar_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
        array(
            'id'       => 'is_topbar',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Top Bar', 'zafram'),
            'options' => array(
                'yes' => esc_html__('Yes', 'zafram'), 
                'no' => esc_html__('No', 'zafram'), 
             ), 
            'default' => 'yes'
        ),

        array(
            'title'     => esc_html__( 'Phone Number', 'zafram' ),
            'subtitle'  => esc_html__( 'Enter The Phone Number For Header Topbar', 'zafram' ),
            'id'        => 'top_phone_number',
            'type'      => 'text',
            'default'   => esc_html__( '+880-1827-609441', 'zafram' ),
            'required'  => array( 'is_topbar', '=', 'yes' )
        ),


        array(
            'title'     => esc_html__( 'Email ID', 'zafram' ),
            'subtitle'  => esc_html__( 'Enter The Email ID For Header Topbar', 'zafram' ),
            'id'        => 'top_emailid',
            'type'      => 'text',
            'default'   => esc_html__( 'webrahaman@gmail.com', 'zafram' ),
            'required'  => array( 'is_topbar', '=', 'yes' )
        ),

        array(
            'title'     => esc_html__( 'Address', 'zafram' ),
            'subtitle'  => esc_html__( 'Enter The Address For Header Topbar', 'zafram' ),
            'id'        => 'top_address',
            'type'      => 'text',
            'default'   => esc_html__( '374 FA Tower, William Road, Melbourne, USA', 'zafram' ),
            'required'  => array( 'is_topbar', '=', 'yes' )
        ),

        array(
            'title'     => esc_html__( 'Button label', 'zafram' ),
            'subtitle'  => esc_html__( 'Leave the button label field empty to hide the menu action button.', 'zafram' ),
            'id'        => 'top_btn_label',
            'type'      => 'text',
            'default'   => esc_html__( 'Get Started', 'zafram' ),
            'required'  => array( 'is_topbar', '=', 'yes' )
        ),

        array(
            'title'     => esc_html__( 'Button URL', 'zafram' ),
            'id'        => 'top_btn_url',
            'type'      => 'text',
            'default'   => '#',
            'required'  => array( 'is_topbar', '=', 'yes' )
        ),

    )
));
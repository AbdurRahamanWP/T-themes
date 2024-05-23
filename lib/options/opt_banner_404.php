<?php 
Redux::set_section('zafram', array(
    'title'            => esc_html__( '404 Banner', 'zafram' ),
    'id'               => 'zafram_404_banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'zafram_404_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show 404  Banner', 'zafram'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'zafram'), 
                'hide' => esc_html__('Hide Banner', 'zafram'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'zafram_404_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Title', 'zafram'),
            'options' => array(
                'show' => esc_html__('Show', 'zafram'), 
                'hide' => esc_html__('Hide', 'zafram'), 
            ), 
            'default' => 'show'
        ),
        array(
            'title'    => esc_html__('404 Banner Titile', 'zafram'),
            'type' => 'text',
            'id'       => 'zafram_404_banner_title',
            'placeholder' => esc_html__( '404 Banner Titile', 'zafram'),
            'required'    => array('zafram_404_title', '=', 'show')
        ),
        array(
            'id'       => 'zafram_404_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Breadcrumb', 'zafram'),
            'options' => array(
                'show' => esc_html__('Show', 'zafram'), 
                'hide' => esc_html__('Hide', 'zafram'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'zafram_404_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'zafram'),
            'default'  => array(
                'url'=> ZAFRAM_IMAGES.'/blog/banner/banner.png',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'zaframs_404_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog-breadcrumbs-area-two.banner-404 .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));
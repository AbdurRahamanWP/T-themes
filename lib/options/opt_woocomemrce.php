<?php
// Shop Banner 

Redux::set_section('zafram', array(
	'title'     => esc_html__( 'Shop Settings', 'zafram' ),
	'id'        => 'Woo_settings_opt',
	'icon'      => 'dashicons dashicons-admin-post',
	'fields'    => array(
    
        array( 
        'title'    => esc_html__('Shop Page Title', 'zafram'),
        'id' => 'zafram_shop_title',
        'type' => 'text',
        'default'   => 'Shop Page',
        ),

        array( 
            'title'    => esc_html__('Shop Single Title', 'zafram'),
            'desc'    => esc_html__('Keep the field blank to appear the product name.', 'zafram'),
            'id' => 'zafram_shop_single_title',
            'type' => 'text',
            'default'   => 'Product Details',
            ),

        array(
            'id'        => 'shop_layout',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Product Sidebar', 'zafram'),
            'subtitle'  => esc_html__('Show Product Sidebart ', 'zafram'),
            'options'   => array(
                'show'  => esc_html__('Show Sidebar', 'zafram'),
                'hide'  => esc_html__('Hide Sidebar', 'zafram'),
            ), 
            'default'   => 'hide',
        ),

        array(
			'title'         => esc_html__( 'Shop Title', 'zafram' ),
			'id'            => 'shop_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.shop .breadcrumb_content .page-title.page_title.shop_title' ),
		),

        array(
			'title'         => esc_html__( 'Shop Single Breadcrumb', 'zafram' ),
			'id'            => 'shop_breadcrumb_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.shop .breadcrumb_content .breadcrumbs span, .shop .breadcrumb_content .breadcrumbs span a' ),
		),

        array(
            'id'       => 'zafram_shop_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'zafram'),
            'default'  => array(
                'url'=> ZAFRAM_IMAGES.'/blog/banner/banner.png',
            ),
            'url'      => false

        ),

      )
));

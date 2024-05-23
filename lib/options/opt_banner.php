<?php

Redux::set_section('zafram', array(
    'title'            => esc_html__( 'Banner Setting', 'zafram' ),
    'id'               => 'headers_banner_settings_opt',
    'icon'             => 'el el-picture',
));

// Page Banner 
Redux::set_section('zafram', array(
    'title'            => esc_html__( 'Page Banner', 'zafram' ),
    'id'               => 'Banner',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'zafram_page_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Page Banner', 'zafram'),
            'subtitle' => esc_html__('Show Hide Page Banner Globally ', 'zafram'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'zafram'), 
                'hide' => esc_html__('Hide Banner', 'zafram'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'zafram_page_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Page Breadcrumb', 'zafram'),
            'options' => array(
                'show' => esc_html__('Show', 'zafram'), 
                'hide' => esc_html__('Hide', 'zafram'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'zafram_page_banner_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Page Title', 'zafram'),
            'options' => array(
                'show' => esc_html__('Show', 'zafram'), 
                'hide' => esc_html__('Hide', 'zafram'), 
            ), 
            'default' => 'show'
        ),

        array(
			'title'         => esc_html__( 'Page Title', 'zafram' ),
			'id'            => 'page_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.page-banner .breadcrumb_content .page_title.banne-blog' ),
		),

        array(
			'title'         => esc_html__( 'Breadcrumb Text', 'zafram' ),
			'id'            => 'breadcrumb_page_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.page-banner .breadcrumbs span a, .page-banner .breadcrumbs span' ),
		),

        array(
            'id'       => 'zafram_page_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'zafram'),
            'default'  => array(
                'url'=> ZAFRAM_IMAGES.'/blog/banner/banner.png',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'zafram_page_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog-breadcrumbs-area-two.page-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

// Blog Banner 

Redux::set_section('zafram', array(
    'title'            => esc_html__( 'Blog Banner', 'zafram' ),
    'id'               => 'blog_banner',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'zafram_blog_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Blog Banner', 'zafram'),
            'subtitle' => esc_html__('Show Hide Blog Banner Globally ', 'zafram'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'zafram'), 
                'hide' => esc_html__('Hide Banner', 'zafram'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'zafram_blog_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Blog Breadcrumb', 'zafram'),
            'options' => array(
                'show' => esc_html__('Show', 'zafram'), 
                'hide' => esc_html__('Hide', 'zafram'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'zafram_blog_banner_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Blog Title', 'zafram'),
            'options' => array(
                'show' => esc_html__('Show', 'zafram'), 
                'hide' => esc_html__('Hide', 'zafram'), 
            ), 
            'default' => 'show'
        ),
        //
        array(
			'title'     => esc_html__( 'Blog Title', 'zafram' ),
			'id'        => 'blog_title',
			'type'      => 'text',
			'default'   => esc_html__( 'Blog List', 'zafram' ),
		),

		array(
			'title'         => esc_html__( 'Blog Title', 'zafram' ),
			'id'            => 'blog_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.breadcrumb_content .page_title.banne-blog' ),
		),

        //
        array( 
        'title'    => esc_html__('Blog title', 'zafram'),
        'id' => 'zafram_blog_title',
        'type' => 'text',
         'required' => array('zafram_blog_banner_title', '=' , 'show')
        ),
        array(
            'id'       => 'zafram_blog_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'zafram'),
            'default'  => array(
                'url'=> ZAFRAM_IMAGES.'/blog/banner/banner.png',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'zafram_blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog-breadcrumbs-area-two .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

// Shop Banner 


// Single page blog 

Redux::set_section('zafram', array(
    'title'            => esc_html__( 'Single Blog Banner', 'zafram' ),
    'id'               => 'single_blog_banner',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'zafram_single_blog_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Single Blog Banner', 'zafram'),
            'subtitle' => esc_html__('Show Hide Banner Globally ', 'zafram'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'zafram'), 
                'hide' => esc_html__('Hide Banner', 'zafram'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'zafram_single_blog_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Breadcrumb', 'zafram'),
            'options' => array(
                'show' => esc_html__('Show', 'zafram'), 
                'hide' => esc_html__('Hide', 'zafram'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'zafram_single_blog_banner_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Title', 'zafram'),
            'options' => array(
                'show' => esc_html__('Show', 'zafram'), 
                'hide' => esc_html__('Hide', 'zafram'), 
            ), 
            'default' => 'show'
        ),

        array(
			'title'         => esc_html__( 'Single Title', 'zafram' ),
			'id'            => 'single_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.post_single .breadcrumb_content .page_title.banne-blog' ),
		),

        array(
			'title'         => esc_html__( 'Date and Author Text', 'zafram' ),
			'id'            => 'date_author_single_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.post_single .breadcrumb_content span a, .post_single .breadcrumb_content span' ),
		),

        array(
            'id'       => 'zafram_single_blog_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'zafram'),
            'default'  => array(
                'url'=> ZAFRAM_IMAGES.'/blog/banner/banner.png',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'zaframs_single_blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog-breadcrumbs-area-two.blog-single-page .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

//  Archive page 

Redux::set_section('zafram', array(
    'title'            => esc_html__( 'Archive Banner', 'zafram' ),
    'id'               => 'archive_blog_banner',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'zafram_arcive_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Archive  Banner', 'zafram'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'zafram'), 
                'hide' => esc_html__('Hide Banner', 'zafram'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'zafram_archive_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Breadcrumb', 'zafram'),
            'options' => array(
                'show' => esc_html__('Show', 'zafram'), 
                'hide' => esc_html__('Hide', 'zafram'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'zafram_arcive_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Archive Title', 'zafram'),
            'options' => array(
                'show' => esc_html__('Show', 'zafram'), 
                'hide' => esc_html__('Hide', 'zafram'), 
            ), 
            'default' => 'show'
        ),

        array(
			'title'         => esc_html__( 'Archive Title', 'zafram' ),
			'id'            => 'archive_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.archive_page .breadcrumb_content .page-title.page_title' ),
		),

        array(
			'title'         => esc_html__( 'Archive Breadcrumb', 'zafram' ),
			'id'            => 'breadcrumbs_archive_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.archive .breadcrumb_content .breadcrumbs span' ),
		),

        array(
            'id'       => 'zafram_arcive_description',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Archive Description', 'zafram'),
            'options' => array(
                'show' => esc_html__('Show', 'zafram'), 
                'hide' => esc_html__('Hide', 'zafram'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'zafram_archive_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'zafram'),
            'default'  => array(
                'url'=> ZAFRAM_IMAGES.'/blog/banner/banner.png',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'zaframs_archive_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog-breadcrumbs-area-two.search-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

//  search page 


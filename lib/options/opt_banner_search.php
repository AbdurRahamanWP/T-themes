<?php 

Redux::set_section('zafram', array(
    'title'            => esc_html__( 'Search Banner', 'zafram' ),
    'id'               => 'zafram_search_blog_banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(

        array(
            'id'       => 'zafram_search_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'zafram'),
            'default'  => array(
                'url'=> ZAFRAM_IMAGES.'/blog/banner/banner.png',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'zaframs_search_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog-breadcrumbs-area-two.archive-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));


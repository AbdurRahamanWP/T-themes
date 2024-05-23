<?php
// Blog Title Bar
Redux::set_section('zafram', array(
	'title'     => esc_html__( 'Blog Layout', 'zafram' ),
	'id'        => 'blog_titlebar_settings',
	'icon'      => 'dashicons dashicons-admin-post',
	'fields'    => array(
    array(
        'id'       => 'zafram_blog_setting',
        'type'     => 'image_select',
        'title'    => __('Blog Layout', 'zafram'), 
        'subtitle' => __('Select your blog Layout', 'zafram'),
        'options'  => array(
            'full'      => array(
                'alt'   => '1 Column', 
                'img'   => ReduxFramework::$_url.'assets/img/1col.png'
            ),
            'left'      => array(
                'alt'   => '2 Column Left', 
                'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
            ),
            'right'      => array(
                'alt'   => '2 Column Right', 
                'img'  => ReduxFramework::$_url.'assets/img/2cr.png'
            ),
        ),
        'default' => 'right'
    ),

    array(
        'title'     => esc_html__( 'Blog Format', 'zafram' ),
        'id'        => 'defult_blog_format',
        'type'      => 'switch',
        'on'        => esc_html__( 'Grid Style', 'zafram' ),
        'off'       => esc_html__( 'List Style', 'zafram' ),
        'default'   => 'off',
    ),
    
    array( 
        'id' => 'zafram_read_more_text_button',
        'title'    => __('Read More Button Text', 'zafram'), 
        'type' => 'text',
        'default' => 'Read More'
    ),

    array(
        'title'     => esc_html__( 'Comment Number', 'zafram' ),
        'id'        => 'is_post_comment',
        'type'      => 'switch',
        'on'        => esc_html__( 'Show', 'zafram' ),
        'off'       => esc_html__( 'Hide', 'zafram' ),
        'default'   => 'Show',
    ),

    ///
    array(
        'title'     => esc_html__( 'Post title length', 'zafram' ),
        'subtitle'  => esc_html__( 'Blog post title length in Description', 'zafram' ),
        'id'        => 'post_title_length',
        'type'      => 'slider',
        'default'   => 10,
        "min"       => 10,
        "step"      => 1,
        "max"       => 500,
        'display_value' => 'text',
    ),

    array(
        'title'     => esc_html__( 'Post word excerpt', 'zafram' ),
        'subtitle'  => esc_html__( 'If post excerpt is empty, the excerpt content will take from the post content. Define here how much word you want to show along with the each posts in the blog page.', 'zafram' ),
        'id'        => 'blog_excerpt',
        'type'      => 'slider',
        'default'   => 40,
        "min"       => 1,
        "step"      => 1,
        "max"       => 500,
        'display_value' => 'text'
    ),

    array(
        'title'     => esc_html__( 'Post author', 'zafram' ),
        'id'        => 'is_post_author',
        'type'      => 'switch',
        'on'        => esc_html__( 'Show', 'zafram' ),
        'off'       => esc_html__( 'Hide', 'zafram' ),
        'default'   => 'Show',
    ),

    array(
        'title'     => esc_html__( 'Post date', 'zafram' ),
        'id'        => 'is_post_date',
        'type'      => 'switch',
        'on'        => esc_html__( 'Show', 'zafram' ),
        'off'       => esc_html__( 'Hide', 'zafram' ),
        'default'   => 'Show',
    ),

    ///

	)
));



/*** Headers Typography ***/
Redux::set_section( 'zafram', array(
    'title'            => esc_html__( 'Blog Single', 'zafram' ),
    'id'               => 'blog_single_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
        array(
            'id'       => 'zafram_display_blog_single_tags',
            'type'     => 'button_set',
            'title'    => esc_html__('Display Post Tags', 'zafram'),
            'options' => array(
                'yes' => 'Yes', 
                'no' => 'No', 
             ), 
            'default' => 'no'
        ),
        
        array(
            'id'       => 'zafram_display_blog_share',
            'type'     => 'button_set',
            'title'    => esc_html__('Display Social Share?', 'zafram'),
            'options' => array(
                'yes' => 'Yes', 
                'no' => 'No', 
             ), 
            'default' => 'no'
        ),

        array( 
            'id' => 'zafram_social_title_text',
            'title'    => __('Shared Title', 'zafram'), 
            'type' => 'text',
            'default' => 'Shared'
        ),

        array(
            'id'       => 'is_social_share_links',
            'type'     => 'checkbox',
            'title'    => __('Checked Share Links', 'zafram'),
            'options'  => array(
                'facebook' => __('Facebook', 'zafram'),
                'twitter'  => __('Twitter', 'zafram'),
                'pinterest'=> __('Pinterest', 'zafram'),
                'linkedin' => __('Linkedin', 'zafram')
            ),
            'default' => array(
                'facebook'  => '1', 
                'twitter'   => '1', 
                'pinterest' => '0',
                'linkedin' => '1'
            ),
        ),

        array(
            'id'       => 'zafram_display_blog_comments',
            'type'     => 'button_set',
            'title'    => esc_html__('Display Comments Section', 'zafram'),
            'options' => array(
                'yes' => 'Yes', 
                'no' => 'No', 
             ), 
            'default' => 'yes'
        ),


        array(
            'id'       => 'zafram_display_blog_author',
            'type'     => 'button_set',
            'title'    => esc_html__('Display Author Section', 'zafram'),
            'options' => array(
                'yes' => 'Yes', 
                'no' => 'No', 
             ), 
            'default' => 'yes'
        ),

    )
));






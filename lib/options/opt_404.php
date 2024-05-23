<?php

Redux::setSection('zafram', array(
    'title'     => esc_html__('404 Page Settings', 'zafram'),
    'id'        => '404_0pt',
    'icon'      => 'dashicons dashicons-admin-post',
    'fields'    => array(

        array(
            'title'     => esc_html__('Heading Text', 'zafram'),
            'id'        => 'error_heading',
            'type'      => 'text',
            'default'   => esc_html__("404", 'zafram'),
        ),

        array(
            'title'     => esc_html__('Title', 'zafram'),
            'id'        => 'error_title',
            'type'      => 'text',
            'default'   => esc_html__('Page not found', 'zafram'),
        ),

        array(
            'title'     => esc_html__('Subtitle', 'zafram'),
            'id'        => 'error_subtitle',
            'type'      => 'textarea',
            'default'   => esc_html__('We are sorry, the page you have looked for does not exist in our database! Maybe go to our home page or try to use a search?', 'zafram'),
        ),

        array(
            'title'     => esc_html__('Home button label', 'zafram'),
            'id'        => 'error_home_btn_label',
            'type'      => 'text',
            'default'   => esc_html__('Go Back to home Page', 'zafram'),
            
        ),

        array(
            'id'          => 'btn_font_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Button Text Color', 'zafram' ),
            'output'      => array(
                'color' => '.error_btn',
            ),
        ),

        array(
            'id'          => 'btn_font_color_hover',
            'type'        => 'color',
            'title'       => esc_html__( 'Button Text Hover Color', 'zafram' ),
            'output'      => array(
                'color' => '.error_btn:hover',
            ),
        ),

        array(
            'id'          => 'btn_bg_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Button Background Color', 'zafram' ),
            'output'      => array(
                'background' => '.error_btn',
            ),
        ),

        array(
            'id'          => 'btn_bg_color_hover',
            'type'        => 'color',
            'title'       => esc_html__( 'Button Background Hover Color', 'zafram' ),
            'output'      => array(
                'background' => '.error_btn:hover',
            ),
        ),
        array(
            'id'          => 'page_bg_color',
            'type'        => 'background-color',
            'title'       => esc_html__( 'Page Background Color', 'zafram' ),
            'output'    => array(
                'background' => '.error_section',
            ),
            'type'      => 'color',
        ),

    )
));

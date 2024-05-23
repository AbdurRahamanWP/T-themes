<?php
// Header Section
// color 

Redux::set_section( 'zafram', array(
    'title'            => esc_html__( 'Page Layout', 'zafram' ),
    'id'               => 'zafram_page_opt',
    'icon'             => 'el el-cogs',
    'fields'           => array(
      
        array(
            'id'       => 'zafram_page_setting',
            'type'     => 'image_select',
            'title'    => __('Page Layout', 'zafram'), 
            'subtitle' => __('Select your Page Layout', 'zafram'),
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
    )
) );
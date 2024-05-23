<?php
/**
 * Custom Post Types
 */
Redux::set_section( 'zafram', array(
    'title'     => esc_html__( 'Custom Post Types', 'zafram' ),
    'id'        => 'cpt_opt',
    'icon'      => 'dashicons dashicons-admin-post',
));

/**
 * Post Types
 */
Redux::set_section( 'zafram', array(
    'title'     => esc_html__( 'Post Types', 'zafram' ),
    'id'        => 'cpt',
    'icon'      => '',
    'subsection'=> true,
    'fields'    => array(
        array(
            'id'        => 'cpt_note',
            'type'      => 'info',
            'style'     => 'success',
            'title'     => esc_html__( 'Enable Disable Custom Post Types', 'zafram' ),
            'icon'      => 'dashicons dashicons-info',
            'desc'      => esc_html__( 'If you want, you can disable any custom post type of zafram from here.', 'zafram' )
        ),

        array(
            'id'       => 'is_service_cpt',
            'type'     => 'switch',
            'title'    => esc_html__('Services', 'zafram' ),
            'on'       => esc_html__( 'Enabled', 'zafram' ),
            'off'      => esc_html__( 'Disabled', 'zafram' ),
            'default'  => true,
        ),
        array(
            'id'       => 'is_project_cpt',
            'type'     => 'switch',
            'title'    => esc_html__('Project', 'zafram' ),
            'on'       => esc_html__( 'Enabled', 'zafram' ),
            'off'      => esc_html__( 'Disabled', 'zafram' ),
            'default'  => true,
        ),
        array(
            'id'       => 'is_team_cpt',
            'type'     => 'switch',
            'title'    => esc_html__('Team', 'zafram' ),
            'on'       => esc_html__( 'Enabled', 'zafram' ),
            'off'      => esc_html__( 'Disabled', 'zafram' ),
            'default'  => true,
        ),
    )
));

/**
 * Slug Re-write
 */
// Redux::set_section( 'zafram', array(
//     'title'     => esc_html__( 'Post Type Slugs', 'zafram' ),
//     'id'        => 'zafram_cp_slugs',
//     'icon'      => '',
//     'subsection'=> true,
//     'fields'    => array(
//         array(
//             'id'        => 'cp_slug_note',
//             'type'      => 'info',
//             'style'     => 'warning',
//             'title'     => esc_html__( 'Slug Re-write:', 'zafram' ),
//             'icon'      => 'dashicons dashicons-info',
//             'desc'      => sprintf (
//                 '%1$s <a href="%2$s"> %3$s</a> %4$s',
//                 esc_html__( "These are the custom post's slugs offered by zafram. You can customize the permalink structure (site_domain/post_type_slug/post_slug) by changing the post type slug (post_type_slug) from here. Don't forget to save the permalinks settings from", 'zafram' ),
//                 get_admin_url( null, 'options-permalink.php' ),
//                 esc_html__( 'Settings > Permalinks', 'zafram' ),
//                 esc_html__( 'after changing the slug value.', 'zafram' )
//             )
//         ),
        
//         array(
//             'title'     => esc_html__( 'Service Slug', 'zafram' ),
//             'id'        => 'service_slug',
//             'type'      => 'text',
//             'required'  => array( 'is_service_cpt', '=', '1' ),
//             'default'   => 'service'
//         ),
        
//         array(
//             'title'     => esc_html__( 'Project Slug', 'zafram' ),
//             'id'        => 'project_slug',
//             'type'      => 'text',
//             'required'  => array( 'is_project_cpt', '=', '1' ),
//             'default'   => 'project'
//         ),
        
//         array(
//             'title'     => esc_html__( 'Team Slug', 'zafram' ),
//             'id'        => 'team_slug',
//             'type'      => 'text',
//             'required'  => array( 'is_team_cpt', '=', '1' ),
//             'default'   => 'team'
//         ),
//     )
// ));
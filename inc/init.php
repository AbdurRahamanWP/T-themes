<?php 

require ZAFRAM_THEMEROOT_DIR . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require ZAFRAM_THEMEROOT_DIR . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require ZAFRAM_THEMEROOT_DIR . '/inc/template-functions.php';
/**
 * zafram helper 
 */
require ZAFRAM_THEMEROOT_DIR . '/inc/helper.php';

/**
 * zafram comment area
*/
require ZAFRAM_THEMEROOT_DIR.'/inc/classes/comment_walker.php';
/**
 * zafram nav walker
*/
require ZAFRAM_THEMEROOT_DIR.'/inc/classes/main-nav-walker.php';
/**
 * Customizer additions.
 */
require ZAFRAM_THEMEROOT_DIR . '/inc/customizer.php';

/**
 * zafram Enqueue 
 */

require ZAFRAM_THEMEROOT_DIR . '/inc/static_enqueue.php';

/**
 * zafram Admin Enqueue 
 */

require ZAFRAM_THEMEROOT_DIR . '/inc/admin_enqueue.php';


/**
 * zafram breadcrumbs
 */

require ZAFRAM_THEMEROOT_DIR . '/inc/breadcrumbs.php';

/**
 * zafram Tgm
 */
require ZAFRAM_THEMEROOT_DIR . '/inc/plugin_activation.php';


/**
 * One Click Demo Import
 */
require ZAFRAM_THEMEROOT_DIR . '/inc/one_click_demo_config.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require ZAFRAM_THEMEROOT_DIR . '/inc/jetpack.php';
}

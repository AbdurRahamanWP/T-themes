<?php 
/**
 * zafram admin Enqueue 
 */

add_action( 'admin_enqueue_scripts', 'zafram_admin_enqueues');

function zafram_admin_enqueues() {
  
    if(function_exists('get_current_screen')){
    
        $screen = get_current_screen(); 
        
        if($screen->base == 'toplevel_page_zafram_options') {
            wp_enqueue_style( 'zafram-redux-style', ZAFRAM_CSS.'/redux-style.css' );
        }
    }
    
}

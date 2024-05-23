<?php
/**
 * Show the appropriate content for the Audio post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage zafram
 * @since zafram 1.0
 */

$content = get_the_content();

if ( has_block( 'core/audio', $content ) ) {
	zafram_print_first_instance_of_block( 'core/audio', $content );
} elseif ( has_block( 'core/embed', $content ) ) {
	zafram_print_first_instance_of_block( 'core/embed', $content );
} else {
	zafram_print_first_instance_of_block( 'core-embed/*', $content );
}

// Add the excerpt.
the_excerpt();
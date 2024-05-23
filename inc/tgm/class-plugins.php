<?php
defined( 'ABSPATH' ) || exit;

/**
 * Plugin installation and activation for WordPress themes
 */
class zafram_Register_Plugins {

	public function __construct() {
		add_filter( 'insight_core_tgm_plugins', [ $this, 'register_required_plugins' ] );

		//add_filter( 'insight_core_compatible_plugins', [ $this, 'register_compatible_plugins' ] );
	}

	public function register_required_plugins( $plugins ) {
		/*
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$new_plugins = array(
			array(
				'name'      => esc_html__( 'Elementor', 'zafram' ),
				'slug'      => 'elementor',
				'required'  => true,
			),
	
			array(
				'name'               => esc_html__( 'Droit Addons For Elementor', 'zafram' ),
				'slug'               => 'droit-elementor-addons',
				'required'           => true,
			),
	
			array(
				'name'               => esc_html__( 'Droit Dark Mode', 'zafram' ),
				'slug'               => 'droit-dark-mode',
				'required'           => true,
			),
			
			array(
				'name'               => esc_html__( 'zafram Core', 'zafram' ), // The plugin name.
				'slug'               => 'zafram-core', // The plugin slug (typically the folder name).
				'source'             => 'http://zafram.droitlab.com/downloadfile/zafram-core_1.0.2.zip', // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
	
			array(
				'name'               => esc_html__( 'Redux Framework', 'zafram' ),
				'slug'               => 'redux-framework',
				'required'           => true,
			),
	
			array(
				'name'               => esc_html__( 'Contact Form 7', 'zafram' ),
				'slug'               => 'contact-form-7',
				'required'           => true,
			),
	
			array(
				'name'               => esc_html__( 'Advanced Custom Fields', 'zafram' ),
				'slug'               => 'advanced-custom-fields',
				'required'           => true,
			),
	
			array(
				'name'      => esc_html__( 'One Click Demo Import', 'zafram' ),
				'slug'      => 'one-click-demo-import',
				'required'  => false,
			),
	
			array(
				'name'      => esc_html__( 'WooCommerce', 'zafram' ),
				'slug'      => 'woocommerce',
				'required'  => false,
			),
	
			array(
				'name'      => esc_html__( 'Bookly - Online Booking and Scheduling', 'zafram' ),
				'slug'      => 'bookly-responsive-appointment-booking-tool',
				'required'  => false,
			),
		);

		return array_merge( $plugins, $new_plugins );
	}
}

new zafram_Register_Plugins();

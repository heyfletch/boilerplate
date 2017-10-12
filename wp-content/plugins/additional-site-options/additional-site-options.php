<?php
/*
	Plugin Name: Additional Site Specific Options
	Description: Settings and functions specific to this site
	Version: 0.5.0
	Author: Fletcher Digital
	Author URI: https://fletcherdigital.com
	Copyright: Fletcher Digital
	Text Domain: fletcher
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

// Init functionality dependent on ACF after the ACF plugin is loaded
add_action('init', 'fd_init_after_acf');

function fd_init_after_acf() {
	if( class_exists( 'acf' ) ) {

		// Add Options Page
		$options_page = acf_add_options_page(array(
			'page_title' => 'Additional Site Options',
			'menu_title' => 'Options',
			'menu_slug' => 'site-options',
			'position' => 60,
			'icon_url' => 'dashicons-marker',
			'capability' => 'edit_posts',
			'redirect' => true
		));

		// Add Options Sub Pages
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Website-wide Info',
			'menu_title' 	=> 'Site Info',
			'parent_slug' 	=> $options_page['menu_slug'],
		));

		// Add Options Sub Pages
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Admin Area Options',
			'menu_title' 	=> 'Admin Options',
			'parent_slug' 	=> $options_page['menu_slug'],
		));

		// Disable plugin notifications
		$hide = get_field('hide_plugin_updates', 'option');
		if( $hide ) { include_once( dirname(__file__).'/includes/disable-plugin-notifications.php' ); }


		// Remove stuff from the WordPress toolbar
		$clean = get_field('hide_toolbar_items', 'option');
		if( $clean ) { include_once( dirname(__file__).'/includes/remove-admin-bar-items.php' ); }


	  // Save ACF json to /acf-json dir inside this plugin
	  add_filter('acf/settings/save_json', function() {
      return dirname(__FILE__) . '/acf-json';
	  });


	  // Include /acf-json dir in the places ACF looks for json files
	  add_filter('acf/settings/load_json', function($paths) {
      $paths[] = dirname(__FILE__) . '/acf-json';
      return $paths;
	  });


		//// Add style to acf pages
		// function my_acf_admin_enqueue_scripts() {
		// 	wp_enqueue_style( 'acf-css', plugins_url( 'acf-styles.css', __FILE__ ) );
		// }
		// add_action('acf/input/admin_enqueue_scripts', 'my_acf_admin_enqueue_scripts');


	  // Includes:
		include_once( dirname(__file__).'/includes/acf-helpers.php' );

	}
}


//// Misc Site Functionality

// General includes, not ACF dependent
include_once( dirname(__file__).'/includes/site-shortcodes.php' );
include_once( dirname(__file__).'/includes/site-cpt.php' );
include_once( dirname(__file__).'/includes/tinymce-mods.php' );


// Add an All Settings link to access the All Settings page
function all_settings_link() {
  add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');
}
add_action('admin_menu', 'all_settings_link');

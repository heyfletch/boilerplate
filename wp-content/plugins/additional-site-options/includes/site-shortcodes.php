<?php
// Functionality pertaining to Shortcodes

// Add Shortcode for Theme URI
add_shortcode( 'theme_uri', 'site_theme_uri' );
function site_theme_uri() {

	// Determine if this is a parent or child theme and use wp function to get theme uri
  $theme_uri = is_child_theme()
	  ? get_stylesheet_directory_uri()
	  : get_template_directory_uri();

  return trailingslashit( $theme_uri );
}


// Add Shortcode for Theme Image Directory
add_shortcode( 'theme-images', 'site_theme_images' );
function site_theme_images() {

	// Code
    $theme_images = site_theme_uri() . 'dist/images';

    return $theme_images;
}


<?php

// Remove stuff from the WordPress toolbar
add_action( 'admin_bar_menu', 'remove_wp_toolbar_stuff', 999 );
function remove_wp_toolbar_stuff( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'comments' );			// Remove comments button
	$wp_admin_bar->remove_node( 'new-content' );	// Remove New dropdown button
	$wp_admin_bar->remove_node( 'wp-logo' );
	$wp_admin_bar->remove_node( 'itsec_admin_bar_menu' );	// iThemes Security
}

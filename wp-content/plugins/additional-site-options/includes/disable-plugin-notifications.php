<?php

// disable all plugin notifications, at least temporarily
remove_action('load-update-core.php','wp_update_plugins');
add_filter('pre_site_transient_update_plugins','__return_null');

// Disable specific plugin updates
// function filter_plugin_updates( $value ) {
// 	// Disable Visual Composer
//   unset( $value->response['js_composer/js_composer.php'] );
//   return $value;
// }
// add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );

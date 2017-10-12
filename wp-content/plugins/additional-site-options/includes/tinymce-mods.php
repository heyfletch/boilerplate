<?php

# This allows all html elements, and stops TinyMCE from stripping empty tags
# https://www.leighton.com/blog/stop-tinymce-in-wordpress-3-x-messing-up-your-html-code

// Stops TinyMCE from removing certain tags or empty tags
// To do: still strips <br> and empty line breaks. alternative?

function override_mce_options($initArray) {
	$opts = '*[*]';
	$initArray['valid_elements'] = $opts;
	$initArray['extended_valid_elements'] = $opts;
	return $initArray;
}
add_filter('tiny_mce_before_init', 'override_mce_options');

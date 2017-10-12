<?php

// Display an ACF field, if it exists, with optional HTML tags
function the_data( $the_acf_field, $html_tag = 'p', $tag_class = '', $prefix = '', $postfix = '' ) {

	if ( function_exists('get_field') && get_field( $the_acf_field )) {

		$content  = '<' . $html_tag;

		if ( $tag_class ) {
			$content .= ' class="' . $tag_class . '"';
		}

		$content .= '>';
		$content .= $prefix;
		$content .= get_field( $the_acf_field );
		$content .= '</' . $html_tag . '>';
		$content .= $postfix;

		echo $content;
	}
}

// takes a text phone # like (555) 555-1212 and converts link with microdata
function phone_link( $the_acf_field = 'phone_number' ) {

	$phone_text = get_field( $the_acf_field, 'option' );

	$phone_digits  = preg_replace("/[^0-9]/", "", $phone_text);

	echo '<a itemprop="telephone" href="tel:+1' . $phone_digits . '">' . $phone_text . '</a>';

}

// get site wide contact email address
function email_link( $the_acf_field = 'email_address' ) {

	$email = get_field( $the_acf_field, 'option' );

	echo '<a href="mailto:' . $email . '">' . $email . '</a>';

}

// get site wide contact email address
function external_url( $the_acf_field ) {

	$link = get_field( $the_acf_field, 'option' );

	echo $link;

}

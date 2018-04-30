<?php
   
if( function_exists('acf_add_options_page') ) {
	$args = array(
		'page_title' => 'Optionen',
		'menu_slug' => 'optionen',
		'icon_url' => 'dashicons-admin-generic',
		'position' => 2,
	);

	acf_add_options_page($args);

}
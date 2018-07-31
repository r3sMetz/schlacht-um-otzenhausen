<?php
function cwos_add_admin_page(){
	$cwos_admin_page_args = array(
		CWOS_PLUGINNAME,
		CWOS_PLUGINNAME,
		'manage_options',
		cwos_create_admin_slug(),
		'cwos_render_admin_page',
		'dashicons-heart',
		71
	);
	add_menu_page(...$cwos_admin_page_args);
}

add_action('admin_menu','cwos_add_admin_page');

function cwos_render_admin_page(){
	require ( dirname(plugin_dir_path(__FILE__)) . '/views/cwos-admin-view.php' );
}


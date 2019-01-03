<?php
   
// Theme Version
$theme_version = null;
if(ini_get('allow_url_fopen')){
	$package_json_raw   = file_get_contents(get_theme_file_path('/package.json'));

	if($package_json_raw) {
		$package_json_array = json_decode( $package_json_raw, true );
		$theme_version = isset($package_json_array['version']) ? $package_json_array['version'] : null;
	}
}
define('SUO_THEME_VERSION',WP_ENV === 'production' ? $theme_version : microtime());
<?php
// Define site host
if(isset($_SERVER['X_FORWARDED_HOST']) && ! empty($_SERVER['X_FORWARDED_HOST'])) {
	$hostname = $_SERVER['X_FORWARDED_HOST'];
} else {
	$hostname = $_SERVER['HTTP_HOST'];
}

// Set Enviorment Constant
switch($hostname){
    case 'suo':
        define('WP_ENV', 'local');
        break;
	case 'suo-festival.de':
		define('WP_ENV', 'production');
		break;
	default:
		define('WP_ENV', 'production');
}

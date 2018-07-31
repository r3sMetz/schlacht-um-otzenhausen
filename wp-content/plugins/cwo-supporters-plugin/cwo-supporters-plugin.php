<?php
/*
 * Plugin Name: CWO Supporters
 * Description: Formular und Listenverwaltung für CWO-Streetteams.
 * Version: 1.0
 * Author: Sascha Metz
 */
defined( 'ABSPATH' ) or die( 'Nope!' );

// Define Constants
define( 'CWOS_PLUGINNAME', 'CWO Supporter' );
define( 'CWOS_PLUGINFILE', 'cwo-supporters-plugin.php' );

// Import Functions
require( __DIR__ . '/includes/cwos-functions.php' );

// Initialize at activation

// Set Ajax
require(__DIR__.'/includes/cwos-ajax.php');

// Setup Admin Page
require( __DIR__ . '/partials/cwos-admin-page.php' );

// Load Admin CSS and JS
require( __DIR__ . '/partials/cwos-admin-setup.php' );



<?php
//Composer
require 'vendor/autoload.php';

// ACF Options Page
require('includes/options_page.php');

// Clean WordPress
require('includes/wp_cleaner.php');
require('includes/clearBackend.php');

// Menues
require('includes/menues.php');

// Theme Setup
require('includes/theme-setup.php');

// Controller
require('includes/controller/global-controller.php');
require('includes/controller/query-controller.php');
require('includes/controller/front-page-controller.php');

//Post Saved
require('includes/post_saved.php');

// Posttypes
require('includes/posttype_bands.php');
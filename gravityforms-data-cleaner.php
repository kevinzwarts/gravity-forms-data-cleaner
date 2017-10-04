<?php
/*
Plugin Name: Zwarts Form Data Cleaner
Plugin URI: https://kevinzwarts.nl/
Description: Form data cleaner to clean form data after a given period of time or manually from a certain date
Version: 0.1
Author: Kevin Zwarts
Author URI: https://bitbucket.org/kevinzwarts/
License: GPLv2 or later
*/

use \ZwartsFormDataCleaner\Settings\Plugin;
use \ZwartsFormDataCleaner\FormCleanerInitializer;

defined('ABSPATH') or die('No script kiddies please!');

define('GRAVITYFORMS_DATA_CLEANER_VERSION', '0.1');
define('GRAVITYFORMS_DATA_CLEANER__PLUGIN_DIR', plugin_dir_path(__FILE__));


// Use composer to autoload our classes
require_once __DIR__ . '/vendor/autoload.php';

$plugin = new Plugin();
$plugin->loadSettingsPage();
//
$cleaner = new FormCleanerInitializer();
$cleaner->clean();
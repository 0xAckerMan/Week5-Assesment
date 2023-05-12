<?php
/**
 * @package Myassessment
 */

/*
Plugin Name: Cohort Registration
Plugin URI: http://...
Description: This is my weekly assessment plugin build from scratch
Version: 1.0.0
Author: Joel Kores
Author URI: https://k0r3s.me
License: GPLv2 or later
Text Domain: Weekly-Assessment
*/


//SECURING MY PLUGIN
defined('ABSPATH') or die('Caught you hacker');

if (file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once dirname(__FILE__). '/vendor/autoload.php';
}

define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url( __FILE__));

if (class_exists('Inc\init')){
    Inc\init::register_services();
}

//Plugin Name : Weekly Assesment

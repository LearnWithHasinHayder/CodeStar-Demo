<?php
/*
Plugin Name: CodeStar Demo
Plugin URI:
Description: Demonstration of CodeStar Framework for Learn With Hasin Hayder Plugin Development Course
Version: 1.0
Author: LWHH
Author URI: https://hasin.me
License: GPLv2 or later
Text Domain: codestar-demo
Domain Path: /languages/
*/
function csdemo_assets() {
	load_plugin_textdomain( 'codestar-demo', false, plugin_dir_url( __FILE__ ) . "/languages" );
}

add_action( 'plugins_loaded', 'csd_assets' );


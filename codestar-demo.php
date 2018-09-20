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
define( 'CS_ACTIVE_FRAMEWORK', false );
define( 'CS_ACTIVE_TAXONOMY', false );
define( 'CS_ACTIVE_SHORTCODE', false );
define( 'CS_ACTIVE_CUSTOMIZE', false );
define( 'CS_ACTIVE_LIGHT_THEME', true );
require_once( plugin_dir_path( __FILE__ ) . "lib/csf/cs-framework.php" );
require_once( plugin_dir_path( __FILE__ ) . "inc/metabox.php" );
function csdemo_assets() {
	load_plugin_textdomain( 'codestar-demo', false, plugin_dir_path( __FILE__ ) . "/languages" );
}

add_action( 'plugins_loaded', 'csdemo_assets' );


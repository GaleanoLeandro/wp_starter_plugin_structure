<?php
/**
 * @package StarterPlugin
 */

/**
 * Plugin Name: Starter plugin
 * Plugin URI: http://wprincipiante.es
 * Description: Starter basic structure for develop wordpress plugins.
 * Version: 1.0.0
 * Author: Leandro Galeano
 * Author URI: 
 * License: GPLv2 or later
 *
 * Text Domain: starter-plugin
 * Domain Path: /languages/
 */

if ( !defined('ABSPATH') ) {
    die;
}

/**
 * Define contants.
 */
// Plugin Folder Path.
if ( ! defined( 'STARTER_PLUGIN_DIR' ) ) {
	define( 'STARTER_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}

// Plugin Folder URL.
if ( ! defined( 'STARTER_PLUGIN_URL' ) ) {
	define( 'STARTER_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

// Plugin Root File.
if ( ! defined( 'STARTER_PLUGIN_NAME' ) ) {
	define( 'STARTER_PLUGIN_NAME', __FILE__ );
}

// Require autoloader
require_once 'autoloader.php';

use StarterPlugin\Init;

use StarterPlugin\Base\Activate;
use StarterPlugin\Base\Deactivate;

register_activation_hook( __FILE__, [Activate::class, 'on_activate']);
register_deactivation_hook( __FILE__, [Deactivate::class, 'on_deactivate']);

// Initialize all the core classes of the plugin 
if (class_exists( Init::class )) {
    Init::register_services();
}
<?php
/**
 * @package AndyPlugin
 */

/**
 * Plugin Name: Andy plugin
 * Plugin URI: http://wprincipiante.es
 * Description: Primer intento de plugin con POO en php.
 * Version: 1.0.0
 * Author: Leandro Galeano
 * Author URI: 
 * License: GPLv2 or later
 *
 * Text Domain: andy-plugin
 * Domain Path: /languages/
 */

if ( !defined('ABSPATH') ) {
    die;
}

// Define constants
define( 'AP_DIR', plugin_dir_path(__FILE__) ); 
define( 'AP_URL', plugin_dir_url(__FILE__) );
define( 'AP_NAME', plugin_basename(__FILE__) );

// Require 
require_once AP_DIR . 'inc/Init.php';

require_once AP_DIR . 'inc/Base/Activate.php';
require_once AP_DIR . 'inc/Base/Deactivate.php';

register_activation_hook( __FILE__, ['Activate', 'on_activate']);
register_deactivation_hook( __FILE__, ['Deactivate', 'on_deactivate']);

// Initialize all the core classes of the plugin 
if (class_exists( 'Init' )) {
    Init::register_services();
}
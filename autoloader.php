<?php
/**
 * Autoloader, inspired by PSR4.
 *
 * @package StarterPlugin
 */

/**
 * Register the autoloader.
 *
 * @param string $class
 */
spl_autoload_register( function ( $class ) {

	// Our base namespace for all plugin classes.
	$prefix = 'StarterPlugin\\';

	// Does the class use the namespace prefix?
	$len = strlen( $prefix );
	if ( strncmp( $prefix, $class, $len ) !== 0 ) {
		// No, move to the next registered autoloader.
		return;
	}

	// Base directory for the namespace prefix.
	$base_dir = __DIR__ . '/inc/';

	// Get the relative class name.
	$relative_class = substr( $class, $len );

	// Replace the namespace prefix with the base directory.
	// Replace namespace separators with directory separators in the relative
	// class name. Append with .php.
	$file = $base_dir . str_replace( '\\', '/', $relative_class ) . '.php';

	// Finally, require the file.
	if ( file_exists( $file ) ) {
		require_once $file;
	} else {
		echo "File $file not found";
	}
} );

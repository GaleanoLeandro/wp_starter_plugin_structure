<?php
/**
 * @package AndyPlugin
 */

//  Pages
require_once plugin_dir_path(__FILE__) . 'Pages/Admin.php';

// Base
require_once plugin_dir_path(__FILE__) . 'Base/Enqueue.php';
require_once plugin_dir_path(__FILE__) . 'Base/Activate.php';
require_once plugin_dir_path(__FILE__) . 'Base/Deactivate.php';
require_once plugin_dir_path(__FILE__) . 'Base/SettingsLink.php';

final class Init
{
    /**
     * Store all the classes inside an array
     * @return array Full list of classes
     */
    public static function get_services()
    {
        return [
            Admin::class,
            Enqueue::class,
            SettingsLink::class,
        ];
    }

    /**
     * Loop through the classes, initialize them,
     * and call the register() method of the class 
     * if it exist.
     * @return
     */
    public static function register_services()
    {
        foreach ( self::get_services() as $class) {
            $service = self::instantiate( $class );

            if ( method_exists( $service, 'register') ) {
                $service->register();
            }
        }
    }
    /**
     * Initialize the class
     * @param class $class  class from the services array
     * @return class instance  new instance of the class
     */
    private static function instantiate ( $class )
    {
        return new $class();
    }
}

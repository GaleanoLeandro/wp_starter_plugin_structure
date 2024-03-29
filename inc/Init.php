<?php
/**
 * @package StarterPlugin
 */

namespace StarterPlugin;

use StarterPlugin\Pages\Admin;
use StarterPlugin\Base\Enqueue;
use StarterPlugin\Base\SettingsLink;

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

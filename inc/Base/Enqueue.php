<?php
/**
 * @package AndyPlugin
 */

class Enqueue
{
    public function register()
    {
        add_action('admin_enqueue_scripts', [ $this, 'load' ]);
    }

    public function load()
    {
        // Enqueue all our scriptss
        wp_enqueue_style('ap-style', AP_URL . 'style.min.css');
        wp_enqueue_script('ap-script', AP_URL . 'script.min.js');

    }
}

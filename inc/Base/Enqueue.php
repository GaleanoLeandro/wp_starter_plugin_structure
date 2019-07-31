<?php
/**
 * @package StarterPlugin
 */

namespace StarterPlugin\Base;

class Enqueue
{
    public function register()
    {
        add_action('admin_enqueue_scripts', [ $this, 'load' ]);
    }

    public function load()
    {
        // Enqueue all our scriptss
        wp_enqueue_style('ap-style', STARTER_PLUGIN_URL . 'style.min.css');
        wp_enqueue_script('ap-script', STARTER_PLUGIN_URL . 'script.min.js');

    }
}

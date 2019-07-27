<?php
/**
 * @package AndyPlugin
 */

class Admin
{
    public function register()
    {
        add_action( 'admin_menu', [ $this, 'add_admin_pages' ]);
    }

    public function add_admin_pages () 
    {
        add_menu_page( 'Andy Plugin', 'Andy', 'manage_options', 'andy_plugin', [ $this, 'admin_index'], 'dashicons-networking');
    }

    function admin_index () 
    {
        // Require template
        require_once AP_DIR . 'admin/views/index.php';
    }
}
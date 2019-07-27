<?php
/**
 * @package AndyPlugin
 */

class SettingsLink
{
    protected $pluginName;

    function __construct () 
    {
        $this->pluginName = AP_NAME;
    }
    public function register()
    {
        add_filter( "plugin_action_links_$this->pluginName", [ $this, 'settings_link' ]);
    }

    public function settings_link ( $links ) {
        $settings_link = '<a href="admin.php?page=andy_plugin">Settings</a>';
        array_push($links, $settings_link);
        return $links;
    }
}
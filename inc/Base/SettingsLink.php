<?php
/**
 * @package StarterPlugin
 */

namespace StarterPlugin\Base;

class SettingsLink
{
    protected $pluginName;

    function __construct () 
    {
        $this->pluginName = STARTER_PLUGIN_NAME;
    }
    public function register()
    {
        add_filter( "plugin_action_links_$this->pluginName", [ $this, 'settings_link' ]);
    }

    public function settings_link ( $links ) {
        $settings_link = '<a href="admin.php?page=starter_plugin">Settings</a>';
        array_push($links, $settings_link);
        return $links;
    }
}
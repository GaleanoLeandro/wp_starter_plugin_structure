<?php
/**
 * @package StarterPlugin
 */

namespace StarterPlugin\Api\Callbacks;

/**
 * This class requiring templates
 * for registered menus and submenus.
 */
class AdminCallbacks
{
    /**
     * @return {templateFile}.php
     */
    public function adminDashboard()
    {
        return require_once STARTER_PLUGIN_DIR . 'templates/admin/index.php';
    }

    public function SubpageExample()
    {
        return require_once STARTER_PLUGIN_DIR . 'templates/admin/subpage.php';
    }
}
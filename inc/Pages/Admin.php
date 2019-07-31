<?php
/**
 * @package StarterPlugin
 */

namespace StarterPlugin\Pages;

use StarterPlugin\Api\MenusApi;
use StarterPlugin\Api\Callbacks\AdminCallbacks;

class Admin
{
    public $pages;
    public $subpages;
    public $callbacks;
    public $menu;

    public function register()
    {
        $this->callbacks = new AdminCallbacks();

        $this->menu = new MenusApi();

        $this->setPages();
        $this->setSubPages();

        $this->menu->addPages( $this->pages )->withSubPages('Dashboard example')->addSubPages( $this->subpages)->register();
    }

    private function setPages()
    {
        $this->pages = [
            [
                'page_title' => 'StarterPlugin',
                'menu_title' => 'Starter Plugin',
                'capability' => 'manage_options',
                'menu_slug' => 'starter_plugin',
                'callback' => [ $this->callbacks, 'adminDashboard' ],
                'icon_url' => 'dashicons-networking',
                'position' => 110
            ]
        ];
    }

    private function setSubPages()
    {
        $this->subpages = [
            [
                'parent_slug' => 'starter_plugin',
                'page_title' => 'Subpage Example',
                'menu_title' => 'Subpage',
                'capability' => 'manage_options',
                'menu_slug' => 'subpage_example',
                'callback' => [ $this->callbacks, 'SubpageExample' ]
            ],
        ];
    }
}
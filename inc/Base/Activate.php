<?php
/**
 * @package StarterPlugin
 */

namespace StarterPlugin\Base;

class Activate
{
    public static function on_activate () {
        // Flush rewrite rules
        flush_rewrite_rules();
    }
}
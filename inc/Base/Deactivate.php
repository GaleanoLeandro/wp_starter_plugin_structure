<?php
/**
 * @package StarterPlugin
 */

namespace StarterPlugin\Base;

class Deactivate
{
    public static function on_deactivate () {
        // Flush rewrite rules
        flush_rewrite_rules();
    }
}
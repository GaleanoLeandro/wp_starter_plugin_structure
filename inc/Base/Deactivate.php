<?php
/**
 * @package AndyPlugin
 */

class Deactivate
{
    function on_deactivate () {
        // Flush rewrite rules
        flush_rewrite_rules();
    }
}
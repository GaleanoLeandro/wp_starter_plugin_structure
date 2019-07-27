<?php
/**
 * @package AndyPlugin
 */

class Activate
{
    function on_activate () {
        // Generated a CPT
        // $this->custom_post_type();
        // Flush rewrite rules
        flush_rewrite_rules();
    }
}
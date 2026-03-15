<?php

// Plugin initialization
function my_plugin_init() {
    // Code to run during plugin initialization
}
add_action('init', 'my_plugin_init');

// Activation hook
function my_plugin_activate() {
    // Code to run on plugin activation
}
register_activation_hook(__FILE__, 'my_plugin_activate');

// Deactivation hook
function my_plugin_deactivate() {
    // Code to run on plugin deactivation
}
register_deactivation_hook(__FILE__, 'my_plugin_deactivate');

?>
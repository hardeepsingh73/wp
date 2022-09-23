<?php

// Plugin Name:  Custom Plugin

if (!defined('ABSPATH')) {
    header('Location: /');
    die;
}

//Get Plugin Folder Path
if (!defined('PLUGIN_PATH')) {
    define('PLUGIN_PATH', plugin_dir_path(__FILE__));
}
// Register Activation Hook File
require_once PLUGIN_PATH . 'inc/register_activation_hook.php';

//Register Activation Hook 
register_activation_hook(__FILE__, 'plugin_activation');


// Submenu Function File
require_once PLUGIN_PATH . 'inc/sub_menufun.php';

//Create Menus
function plugin_menu_function()
{
    add_menu_page('Custom Plugin', 'Custom Plugin', 'manage_options', 'plugin_slug', 'menu_function', 'dashicons-admin-home');
    add_submenu_page('plugin_slug', 'Page Title', 'Menu Title', 'manage_options', 'plugin_slug', 'menu_function');
    add_submenu_page('plugin_slug', 'Page Title', '2nd Menu Title', 'manage_options', '2plugin_slug', '2ndmenu_function');
}
add_action('admin_menu', 'plugin_menu_function');


//Register Deactivation Hook File
require_once PLUGIN_PATH . 'inc/register_deactivation_hook.php';

//Register Deactivation Hook 
register_deactivation_hook(__FILE__, 'plugin_deactivation');

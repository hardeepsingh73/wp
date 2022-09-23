<?php

function plugin_activation()
{
    /*** Plugin Table ***/
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_table';
    //Check Table Exits In Database
    if ($wpdb->get_var("show tables like '$table_name'") != $table_name) {

        // Query - Create Table
        $sql = "CREATE TABLE `$table_name` (";
        $sql .= " `id` int(11) NOT NULL auto_increment, ";
        $sql .= " `email` varchar(500) NOT NULL, ";
        $sql .= " `fname` varchar(500) NOT NULL, ";
        $sql .= " PRIMARY KEY `id` (`id`) ";
        $sql .= ") ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;";

        // Include Upgrade Script
        require_once(ABSPATH . '/wp-admin/includes/upgrade.php');

        // Create Table
        dbDelta($sql);
    }
}

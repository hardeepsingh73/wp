<?php
function plugin_deactivation()
{
    /*** Drop Database Table ***/
    global $wpdb, $table_prefix;
    $table_name = $table_prefix . 'custom_table';

    $truncate_table_query = "drop TABLE $table_name;";
    $wpdb->query($truncate_table_query);
}

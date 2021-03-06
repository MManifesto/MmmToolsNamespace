<?php
namespace MmmToolsNamespace {

    require_once('url-tools.php');

    function load_admin_assets() {
        $admin_path = get_admin_folder_path();

        wp_enqueue_style('select2', $admin_path . '/assets/css/select2.css', false, null);
        wp_enqueue_style('font-awesome', $admin_path . '/assets/css/font-awesome.css', false, null);
        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_style('tools_admin_css', $admin_path . '/assets/css/mmm_roots_admin.css', false, null);
        wp_enqueue_media();
        wp_enqueue_script( 'wp-color-picker');
        wp_enqueue_script('select2', $admin_path . '/assets/js/select2.js', false, null);
        wp_enqueue_script('select2-sortable', $admin_path . '/assets/js/select2.sortable.js', false, null);
        wp_enqueue_script('jquery-ui', $admin_path . '/assets/js/jquery-ui.min.js', false, null);
        wp_enqueue_script('jquery-ui-timepicker', $admin_path . '/assets/js/jquery-ui-timepicker-addon.js', false, null);
        wp_enqueue_script('tools_admin_js', $admin_path . '/assets/js/mmm_roots_admin.js', false, null);
    }

    function load_font_awesome() {
        $admin_path = get_admin_folder_path();

        wp_enqueue_style('tools_font-awesome', $admin_path . '/assets/css/font-awesome.css', false, null);
    }
}
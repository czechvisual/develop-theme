<?php

namespace developtheme\config\setup;

// Binds JS handlers to make Theme Customizer preview reload changes asynchronously
function customize_preview_js() {
    wp_enqueue_script( 'customizer', get_template_directory_uri() . '/public/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}

add_action( 'customize_preview_init', __NAMESPACE__ . '\customize_preview_js' );

// Remove Dashboard Meta Boxes
function remove_dashboard_widgets() {
    global $wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
}

add_action( 'wp_dashboard_setup', __NAMESPACE__ . '\remove_dashboard_widgets' );

function add_custom_guide_dashboard_widget() {
    wp_add_dashboard_widget(
        'dashboard_widget', // Widget ID
        'Custom Guide', // Widget title
        'custom_guide_dashboard_widget_content' // Callback function
    );
}

add_action('wp_dashboard_setup', __NAMESPACE__ . '\add_custom_guide_dashboard_widget');

function custom_guide_dashboard_widget_content() {
    esc_html_e( "Hello World, this is my first Dashboard Widget!", "textdomain" );
}

// Change Admin Menu Order
function custom_menu_order( $menu_ord ) {
    if ( !$menu_ord ) return true;
    return array(
        // 'index.php', // Dashboard
        // 'separator1', // First separator
        // 'edit.php?post_type=page', // Pages
        // 'edit.php', // Posts
        // 'upload.php', // Media
        // 'gf_edit_forms', // Gravity Forms
        // 'genesis', // Genesis
        // 'edit-comments.php', // Comments
        // 'separator2', // Second separator
        // 'themes.php', // Appearance
        // 'plugins.php', // Plugins
        // 'users.php', // Users
        // 'tools.php', // Tools
        // 'options-general.php', // Settings
        // 'separator-last', // Last separator
    );
}

add_filter( 'custom_menu_order', '__return_true' );
add_filter( 'menu_order', __NAMESPACE__ . '\custom_menu_order' );

// Hide Admin Areas that are not used
function remove_menu_pages() {
    // remove_menu_page( 'link-manager.php' );
}

add_action( 'admin_menu', __NAMESPACE__ . '\remove_menu_pages' );



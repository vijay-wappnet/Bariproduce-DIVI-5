<?php
/**
 * Plugin Name: Custom Disable Updates
 * Description: Disable WordPress core, theme, and plugin updates.
 * Version: 1.0
 * Author: Ashley Behlen
 * Author URI: https://www.breatheanddelegate.com/ 
 */

// Disable WordPress core updates
define('WP_AUTO_UPDATE_CORE', false);
define( 'AUTOMATIC_UPDATER_DISABLED', true );

add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );

// Disable theme updates
remove_action('load-update-core.php', 'wp_update_themes');
add_filter('pre_site_transient_update_themes', '__return_null');

// Disable plugin updates
remove_action('load-update-core.php', 'wp_update_plugins');
add_filter('pre_site_transient_update_plugins', '__return_null');
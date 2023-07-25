<?php
/**
 * Symbiotica Starter Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Symbiotica_Starter_Theme
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/*
* Include files and functions
*/
require_once( __DIR__ . '/inc/theme-settings.php');         // Initialize theme default settings.
require_once( __DIR__ . '/inc/theme-setup.php');            // Theme setup and custom theme supports.
require_once( __DIR__ . '/inc/theme-menus.php');            // Register theme menus.
require_once( __DIR__ . '/inc/theme-widgets.php');          // Register widget area.

require_once( __DIR__ . '/inc/enqueue.php');               // Enqueue scripts and styles.
require_once( __DIR__ . '/inc/ctp.php');                   // Register Custom Post types
require_once( __DIR__ . '/inc/image-sizes.php');           // Custom image sizes

require_once( __DIR__ . '/inc/theme-extras.php');          // Customize theme, extra settings
require_once( __DIR__ . '/inc/theme-cleanup.php');         // Cleaning worpdress garbage
require_once( __DIR__ . '/inc/shortcodes.php');            // Shortcodes
require_once( __DIR__ . '/inc/customizer.php');            // Theme customizer
require_once( __DIR__ . '/inc/hooks.php');                 // Theme Hooks
require_once( __DIR__ . '/inc/woo.php');                 // Woo

require_once( __DIR__ . '/inc/wp_bootstrap_mobile_navwalker.php'); 


//// Change search form button text //// 
add_filter('get_search_form', 'change_search_submit_text', 10, 2);
function change_search_submit_text($form, $args) {
    $form = str_replace('value="Search"', 'value=""', $form);
    return $form;
}

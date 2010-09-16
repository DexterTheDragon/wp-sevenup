<?php
/*
Plugin Name: WP-sevenUp
Plugin URI: http://github.com/DexterTheDragon/wp-sevenup
Description: WordPress plugin to enable the <a href="http://code.google.com/p/sevenup/">sevenup</a> ie6 detection script
Version: 1.0
Author: Kevin Carter
Author URI: http://dexterthedragon.com
*/

define('SEVENUP_URL', WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)));
// create default options
add_option('sevenup_enableClosing', 'true');
add_option('sevenup_enableQuitBuggingMe', 'true');
add_option('sevenup_overlayColor', '#000000');
add_option('sevenup_lightboxColor', '#ffffff');
add_option('sevenup_lightboxBorder', '#6699ff');
add_option('sevenup_downloadLink', '');
add_option('sevenup_overrideLightbox', 'false');
add_option('sevenup_lightboxHTML', '');
add_option('sevenup_showToAllBrowsers', 'false');

add_action('wp_head', 'sevenup_header');
add_action('admin_menu', 'sevenup_menu');

function sevenup_header() {
    include 'sevenup_header.html.php';
}

function sevenup_menu() {
    add_submenu_page('plugins.php', 'WP-SevenUp', 'WP-SevenUp', 'manage_options', 'wp-sevenup', 'sevenup_options');
    register_setting('sevenup-options', 'sevenup_enableClosing');
    register_setting('sevenup-options', 'sevenup_enableQuitBuggingMe');
    register_setting('sevenup-options', 'sevenup_overlayColor');
    register_setting('sevenup-options', 'sevenup_lightboxColor');
    register_setting('sevenup-options', 'sevenup_lightboxBorder');
    register_setting('sevenup-options', 'sevenup_downloadLink');
    register_setting('sevenup-options', 'sevenup_overrideLightbox');
    register_setting('sevenup-options', 'sevenup_lightboxHTML');
    register_setting('sevenup-options', 'sevenup_showToAllBrowsers');
}

function sevenup_options() {
    include 'sevenup_options.html.php';
}
?>

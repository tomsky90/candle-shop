<?php
/**
 * @package candles-shop
 */

error_reporting(0);

if (!defined('_S_VERSION')) {
    define('S_VERSION', '1.6.7');
}

require_once 'inc/menus.php';

function moj_sklep_wspiera_woocommerce()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'moj_sklep_wspiera_woocommerce');


add_theme_support('post-thumbnails');
function init_scripts()
{
    wp_register_style('main-css', get_template_directory_uri() . '/assets/css/main.css?v=5.2', [], false, 'all');
    wp_enqueue_style('main-css');

    wp_register_script('main-js', get_template_directory_uri() . '/assets/js/script-min.js?v=1.0', [], false, true);
    wp_enqueue_script('main-js');



}
add_action('wp_enqueue_scripts', 'init_scripts');


function labella_theme_setup()
{

    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ));
}
add_action('after_setup_theme', 'labella_theme_setup');

function remove_admin_bar_bump()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_bar_bump');

add_filter('get_custom_logo', 'change_logo_class');


function change_logo_class($html)
{

    $html = str_replace('custom-logo', 'nav__logo', $html);


    return $html;
}


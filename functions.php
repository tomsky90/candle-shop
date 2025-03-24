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

function dodaj_swiper_assets()
{
    // Dodanie stylów Swiper.js
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');

    // Dodanie skryptu Swiper.js
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);


}
add_action('wp_enqueue_scripts', 'dodaj_swiper_assets');


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


function custom_woocommerce_shop_header()
{
    ?>
    <div class="shop-header">
        <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="search" class="search-field" placeholder="Search products…"
                value="<?php echo get_search_query(); ?>" name="s" />
            <input type="hidden" name="post_type" value="product" />
            <button type="submit">Search</button>
        </form>

        <?php if (is_active_sidebar('woocommerce-filters')): ?>
            <div class="shop-filters">
                <?php dynamic_sidebar('woocommerce-filters'); ?>
            </div>
        <?php endif; ?>
    </div>
    <?php
}
add_action('woocommerce_shop_loop_header', 'custom_woocommerce_shop_header', 5); // Priority 5 to make it appear first



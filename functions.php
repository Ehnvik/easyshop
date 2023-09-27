<?php function easyshop_register_styles()
{
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style('easyshop-style', get_template_directory_uri() . "/style.css", array('easyshop-bootstrap'), $version, 'all');
    wp_enqueue_style('easyshop-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), '5.3.2', 'all');
}

add_action('wp_enqueue_scripts', 'easyshop_register_styles');

function easyshop_register_scripts()
{
    wp_enqueue_script('easyshop-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js", array(), '5.3.2', true);
}

add_action('wp_enqueue_scripts', 'easyshop_register_scripts');

function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

function easyshop_menus()
{
    $location = array(
        'primary' => 'Primary Header Menu'
    );

    register_nav_menus($location);
}

add_action('init', 'easyshop_menus');

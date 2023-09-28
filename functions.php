<?php function easyshop_register_styles()
{
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style('easyshop-style', get_template_directory_uri() . "/style.css", array('easyshop-bootstrap'), $version, 'all');
    wp_enqueue_style('easyshop-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), '5.3.2', 'all');
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1', 'all');
    wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1', 'all');
}

add_action('wp_enqueue_scripts', 'easyshop_register_styles');

function easyshop_register_scripts()
{
    $version = wp_get_theme()->get("Version");
    wp_enqueue_script('easyshop-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js", array(), '5.3.2', true);
    wp_enqueue_script('easyshop-fontawesome', "https://kit.fontawesome.com/e8ced85d7a.js", array(), '', true);
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true);
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('easyshop-jquery', get_template_directory_uri() . "/assets/js/jquery.js", array('jquery', 'slick-js'), $version, true);
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



function easyshop_widgets()
{
    register_sidebar(array(
        'name' => __('Footer Area One'),
        'id' => 'footer_area_one',
        'description' => __('Footer Area One'),
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => __('Footer Area Two'),
        'id' => 'footer_area_two',
        'description' => __('Footer Area Two'),
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => __('Footer Area Three'),
        'id' => 'footer_area_three',
        'description' => __('Footer Area Three'),
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'easyshop_widgets');



if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'     => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'Theme Options',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));
}

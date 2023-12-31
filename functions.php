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
    wp_enqueue_script('easyshop-javascript', get_template_directory_uri() . "/assets/js/script.js", array(), $version, true);
}

add_action('wp_enqueue_scripts', 'easyshop_register_scripts');

function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

function custom_woocommerce_single_variation_add_to_cart_button()
{
    global $product;
?>
    <div class="single-product-cart">
        <div class="quantity-selector">
            <button class="minus-button" type="button" onclick="adjustQuantity('minus')">
                <i class="fa fa-minus"></i>
            </button>
            <input class="quantity-number-input" type="number" id="quantity" name="quantity" value="1" min="1" placeholder="Quantity" readonly>
            <button class="plus-button" type="button" onclick="adjustQuantity('plus')">
                <i class="fa fa-plus"></i>
            </button>
        </div>
        <button type="submit" class="single_add_to_cart_button button alt"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>
        <input type="hidden" name="add-to-cart" value="<?php echo absint($product->get_id()); ?>" />
        <input type="hidden" name="product_id" value="<?php echo absint($product->get_id()); ?>" />
        <input type="hidden" name="variation_id" class="variation_id" value="0" />
    </div>
<?php
}

remove_action('woocommerce_single_variation', 'woocommerce_single_variation_add_to_cart_button', 20);
add_action('woocommerce_single_variation', 'custom_woocommerce_single_variation_add_to_cart_button', 20);


?>

<?php

function update_cart_product_quantity()
{
?>

    <div class="single-product-cart">
        <div class="quantity-selector">
            <button class="minus-button" type="button" onclick="adjustQuantity('minus')">
                <i class="fa fa-minus"></i>
            </button>
            <input class="quantity-number-input" type="number" id="quantity" name="quantity" value="1" min="1" placeholder="Quantity" readonly>
            <button class="plus-button" type="button" onclick="adjustQuantity('plus')">
                <i class="fa fa-plus"></i>
            </button>
        </div>
    </div>
<?php
}

function easyshop_search_filter_pages($query)
{

    if ($query->is_search) {

        $query->set('post_type', 'product');

        $query->set('wc_query', 'product_query');
    }

    return $query;
}



add_filter('pre_get_posts', 'easyshop_search_filter_pages');





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

    register_sidebar(array(
        'name' => 'Header Search',
        'id' => 'header_search',
        'before_widget' => '<div class="header-search-container">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => ''
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
?>

<?php function my_excerpt_length($length)
{
    return  8;
}
add_filter('excerpt_length', 'my_excerpt_length');
?>

<?php function post_type_stores()
{
    $supports = array(
        'title', // Gör det möjligt att fylla i en titel till inläggen
        'editor', // Det här är content delen till inläggen
        'custom-fields', // Gör det möjligt att koppla ACF till inläggen (fungerar även utan)
    );

    $labels = array(
        'name' => _x('Stores', 'plural'), // Plural form av post-type som visas i admin-sidopanelen
        'singular_name' => _x('Stores', 'singular'), // Singular form av post-type när man redigerar ett enskilt inlägg
        'menu_name' => _x('Stores', 'admin menu'), // Namnet på post-typen som visas i wordPress admin-menyn
        'name_admin_bar' => _x('Stores', 'admin bar'), // Namnet som visas på admin toolbar
        'add_new' => _x('Add New', 'add new'), // Texten för "Lägg till ny" knappen när man vill skapa ett inlägg i sidopanelen
        'add_new_item' => __('Add New Store'), // Texten till rubriken när man skapar ett nytt inlägg
        'edit_item' => __('Edit Store'), // Texten för att redigera ett inlägg
        'all_items' => __('All Stores'), // Texten för att visa alla inlägg i sidopanelen
    );


    $args = array(
        'supports' => $supports, // Vilka "content" delar som ska användas i post-typen
        'labels' => $labels, // Namn och text som syns i UI:t
        'public' => true, // Om alla användare ska kunna skapa denna post-types
        'query_var' => true, // Skapa en query-variabel för post-typen
        'rewrite' => array('slug' => 'stores'), // Hur man når post-typen (t.ex. som inläggsida) http://localhost/stores/
        'has_archive' => false, // Ska post-typen ha arkiv-sida? Likt inlägg
        'hierarchical' => false, // Ska de behandlas som sidor (true) eller inlägg (false)?
    );

    register_post_type('stores', $args); // Registrerar stores
}

add_action('init', 'post_type_stores'); // Aktiverar post_type_stores 
?>
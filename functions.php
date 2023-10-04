<?php function easyshop_register_styles()
{
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style('followandrew-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'easyshop_register_styles');

function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
?>

<?php function my_excerpt_length($length)
{
    return  8;
}
add_filter('excerpt_length', 'my_excerpt_length');
?>


<!--  -->

<?php


function post_type_news()
{
    $supports = array(
        'title', /*Ger själva inläget en rubrik*/

        'editor', /*Det är som en p tag där du skriver ut
        texter som du vill ska synnas för inlägget*/

        'author',/*Att man namger vem som har skrivit inlägget*/

        'thumbnail', /*Gör att man kan lägga till bild*/

        'excerpt',/*Ett utdrag i WordPress är en term som används för artikelsammanfattning
        med en länk till hela posten. Ett utdrag kan genereras automatiskt av 
        ett WordPress-tema eller genom att använda taggen 
        <!--more - > i inläggsinnehållet.*/

        'custom-fields',/* 
        I WordPress används anpassade fält för att lägga till ytterligare
        information relaterad till ett inlägg eller en sida.
        */

        'comments', /*Att man kan tillåta kommentarer */

        'revisions', /*Revisionssystemet lagrar ett register över varje sparat utkast eller publicerad uppdatering. */

        'post-formats',
    );

    $labels = array(
        'name' => _x('Stores', 'plural'),
        'singular_name' => _x('Stors', 'singular'),
        'menu_name' => _x('Stores', 'admin menu'),
        'name_admin_bar' => _x('Shops', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New shop news'),
        'new_item' => __('Shop news'),
        'edit_item' => __('Edit shop news'),
        'view_item' => __('View shop news'),
        'all_items' => __('All shop news'),
        'search_items' => __('Search news'),
        'not_found' => __('No news found.'),
    );

    $args = array(
        'supports' => $supports, // Vilka "content" delar som ska användas i post-typen
        'labels' => $labels, // Namn och text som syns i UI:t
        'public' => true, // Om alla användare ska kunna skapa denna post-types
        'query_var' => true, // Skapa en query-variabel för post-typen
        'rewrite' => array('slug' => 'shops'), // Hur man når post-typen (t.ex. som inläggsida) http://localhost/news/
        'has_archive' => true, // Ska post-typen ha arkiv-sida? Likt inlägg
        'hierarchical' => false, // Ska de behandlas som sidor (true) eller inlägg (false)?
    );

    register_post_type('news', $args);
}

add_action('init', 'post_type_news');


?>
<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        global $product;

        // Kontrollerar om inlägget faktiskt är en produkt.
        if ($product) :

            // Visa produktbild
            echo woocommerce_get_product_thumbnail();

            // Visa produktnamn/titel
            the_title('<h2 class="woocommerce-loop-product__title">', '</h2>');

            // Visa kort beskrivning/utdrag
            the_excerpt();

            // Visa knapp beroende på produkttyp
            if ($product->is_type('simple')) {
                echo '<a href="' . esc_url($product->add_to_cart_url()) . '" class="button add_to_cart_button">' . esc_html($product->add_to_cart_text()) . '</a>';
            } elseif ($product->is_type('variable')) {
                echo '<a href="' . esc_url(get_the_permalink()) . '" class="button product_type_variable">' . esc_html('Select options') . '</a>';
            } elseif ($product->is_type('external')) {
                echo '<a href="' . esc_url($product->get_product_url()) . '" class="button product_type_external">' . esc_html($product->get_button_text()) . '</a>';
            }

        endif;

    endwhile;
else :
    echo '<p>Inget innehåll hittades.</p>';
endif;

get_footer();

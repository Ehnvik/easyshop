<?php

global $product;

if ($product) :
?>
    <div class="searched-product-container">
        <a class="searched-product-link-container" href="<?php echo esc_url(get_the_permalink())  ?>">
            <?php echo woocommerce_get_product_thumbnail(); ?>

            <?php the_title('<h2 class="woocommerce-loop-product__title">', '</h2>'); ?>

            <p class="<?php echo esc_attr(apply_filters('woocommerce_product_price_class', 'price')); ?>"><?php echo $product->get_price_html(); ?></p>

            <?php
            if ($product->is_type('simple')) {
                echo '<a href="' . esc_url($product->add_to_cart_url()) . '" class="searched-items-button">' . esc_html($product->add_to_cart_text()) . '</a>';
            } elseif ($product->is_type('variable')) {
                echo '<a href="' . esc_url(get_the_permalink()) . '" class="searched-items-button">' . esc_html('Select options') . '</a>';
            } elseif ($product->is_type('external')) {
                echo '<a href="' . esc_url($product->get_product_url()) . '" class="searched-items-button">' . esc_html($product->get_button_text()) . '</a>';
            }
            ?>
        </a>
    </div>
<?php
endif;

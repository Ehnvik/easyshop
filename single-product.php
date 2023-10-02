<?php get_header(); ?>

<div class="main-single-product-container">

    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <?php wc_get_template_part('content', 'single-product'); ?>
    <?php endwhile;
    ?>
</div>

<?php get_footer(); ?>
<?php get_header(); ?>



<?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <?php wc_get_template_part('content', 'single-product'); ?>
<?php endwhile;
?>


<?php get_footer(); ?>

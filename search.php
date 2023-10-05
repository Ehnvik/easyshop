<?php get_header(); ?>

<h3 class="search-page-title"><?php wp_title('',  true, 'left'); ?>:</h3>

<div class="searched-products-wrapper">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', 'search');
        endwhile;
    else :
        echo '<p>Inget innehåll hittades.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>
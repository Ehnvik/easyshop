<?php get_header(); ?>
    <?php
    while (have_posts()) : the_post();

        if (is_page('Contact Us')) {
            get_template_part('template-parts/content', 'contact');
        } elseif (is_page('Stores')) {
            echo '<h1 class="news-title">' . get_the_title() . '</h1>';
            get_template_part('template-parts/content', 'stores');
            break;
        } else {
            echo '<h1 class="news-title">' . get_the_title() . '</h1>';
            the_content();
        }
    endwhile;
    ?>
<?php get_footer(); ?>
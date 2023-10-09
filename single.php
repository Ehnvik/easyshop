<?php get_header();
?>

<div class="theSingleInlägg">
    <?php
    if (have_posts()) : the_post();

        $current_post_type = get_post_type();

        if ($current_post_type == 'stores') {
            get_template_part('template-parts/content-single', 'store');
        } elseif ($current_post_type == 'post') {
            get_template_part('template-parts/content-single', 'news');
        }

    endif;
    ?>
</div>

<?php
get_footer();
?>
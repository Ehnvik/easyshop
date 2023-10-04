<?php get_header() ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        get_template_part('template-parts/content', 'contact');
    endwhile;
else :
    echo '<p>Inget innehåll hittades.</p>';
endif;
?>



<?php get_footer() ?>
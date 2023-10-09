<?php get_header() ?>
<h1 class="news-title"><?php wp_title('', true, 'right'); ?></h1>
<div class="theAllNews">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', 'news')
    ?>
    <?php
        endwhile;
    endif;
    ?>
</div>



<?php get_footer() ?>
<?php
get_header();
?>

<a href="<?php the_permalink("http://localhost/easyshop3/wordpress/shops/store1/") ?>">Affär1</a>
<a href="<?php the_permalink("http://localhost/easyshop/wordpress/shops/store2/") ?>">Affär2</a>
<a href="<?php the_permalink("http://localhost/easyshop3/wordpress/shops/store3/") ?>">Affär3</a>
<a href="<?php the_permalink("http://localhost/easyshop3/wordpress/shops/store4/") ?>">Affär4</a>





<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        the_title();
        the_content();
    endwhile;
endif;
?>

<?php
get_footer();
?>
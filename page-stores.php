<?php
get_header();
?>

<a href="<?php the_permalink("http://localhost/easyshop3/wordpress/stores/store1/") ?>">Affär1</a>
<a href="<?php the_permalink("http://localhost/easyshop/wordpress/stores/store2/") ?>">Affär2</a>
<a href="<?php the_permalink("http://localhost/easyshop3/wordpress/stores/store3/") ?>">Affär3</a>
<a href="<?php the_permalink("http://localhost/easyshop3/wordpress/stores/store4/") ?>">Affär4</a>




<?php $args = array('post_type' => 'stores', 'posts_per_page' => 10);
$loop = new WP_Query($args);
while ($loop->have_posts()) : $loop->the_post();

    echo '<div class="entry-content">';
    the_content();
?>
    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
<?php
    echo '</div>';
endwhile;
?>

<?php
get_footer();
?>
<div class="store">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php echo the_post_thumbnail() ?>
        </a>
        <h1 class="the-Title">
            <?php the_title();  ?>
            </a>
        </h1>
        <div class="theStore">
            <?php the_excerpt(); ?>
        </div>
    </article>
</div>
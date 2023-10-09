<div class="store">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php echo the_post_thumbnail() ?>
        </a>
        <h2 class="the-Title">
            <?php the_title();  ?>
            </a>
        </h2>
        <div class="thetore">
            <?php the_excerpt(); ?>
        </div>
    </article>
</div>
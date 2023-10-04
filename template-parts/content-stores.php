<div>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


        <img src="<?php the_field('imgnews') ?>" alt="">

        </a>
        <h2 class="entry-title">
            <?php the_title(); ?>
            </a>
        </h2>
        <div class="theContent">
            <?php the_excerpt(); ?>
        </div>
    </article>
</div>
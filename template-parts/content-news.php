<div class="news-container">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <a href="<?php the_permalink() ?>">

            <div class="theImg">
                <!-- <img src="<?php /* the_field('imgnews') */ ?>" alt=""> -->
            </div>

            <h2 class="entry-title">
                <?php the_title(); ?>
        </a>
        </h2>
        <div class="theContent">
            <?php the_excerpt(); ?>
        </div>
    </article>

</div>
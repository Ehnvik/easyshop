<div class="news-container">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <a href="<?php the_permalink() ?>">

            <div class="theImg">

                <?php $image =  get_field('imgnews') ?>
                <?php $picture = $image['sizes']['medium'] ?>

                <img src="<?php echo $picture ?>" alt="<?php $image['alt']; ?>">
            </div>

            <h2 class="entry-title">
                <?php the_title(); ?>
            </h2>
            <div class="theContent">
                <?php the_excerpt(); ?>
            </div>
        </a>
    </article>

</div>
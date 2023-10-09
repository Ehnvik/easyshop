<?php
query_posts(array(
    'post_type' => 'stores'
)); ?>

<div class="theAllNews">
    <?php
    while (have_posts()) : the_post(); ?>

        <div class="news-container">

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink() ?>">

                    <div class="theImg">

                        <?php $image =  get_field('store_image') ?>
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
    <?php
    endwhile; ?>
</div>
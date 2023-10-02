<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
</head>

<body>
    <?php
    get_header();
    ?>

    <div class="theSingleInlägg">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <h3>
                    <?php
                    the_title();
                    ?>
                </h3>
                <div class="theImgForSingle">
                    <img src="<?php the_field('imgnews') ?>" alt="">
                </div>
                <div class="theSingleText">
                    <?php
                    the_content();
                    ?>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>



    <?php
    get_footer();
    ?>
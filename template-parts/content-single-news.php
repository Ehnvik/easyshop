<h1 class="single-news-title">
    <?php
    the_title();
    ?>
</h1>
<div class="single-news-wrapper">
    <div class="single-news-container">
        <div class="single-news-image-container">

            <?php $image =  get_field('imgnews') ?>
            <?php $picture = $image['sizes']['large'] ?>

            <img src="<?php echo $picture ?>" alt="<?php $image['alt']; ?>">
        </div>
        <div class="single-news-content-container">
            <?php
            the_content();
            ?>
        </div>
    </div>
</div>
<?php

<?php wp_footer() ?>
<footer class="bg-light mt-5">
    <div class="container py-4">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <?php if (is_active_sidebar('footer_area_one')) : ?>
                    <?php dynamic_sidebar('footer_area_one'); ?>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php if (is_active_sidebar('footer_area_two')) : ?>
                    <?php dynamic_sidebar('footer_area_two'); ?>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php if (is_active_sidebar('footer_area_three')) : ?>
                    <?php dynamic_sidebar('footer_area_three'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>


    <div class="text-center py-3 bg-secondary text-light">
        <p class="mb-0">&copy; <?php echo date("Y"); ?> <?php bloginfo('name') ?>. All Rights Reserved.</p>
    </div>
</footer>

</body>

</html>
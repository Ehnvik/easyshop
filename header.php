<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name') ?></title>

    <?php wp_head() ?>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <!-- Brand/logo -->
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>
                </a>

                <!-- Burger icon for mobile view -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false, // Do not wrap the menu in any container
                        'items_wrap' => '<ul id="%1$s" class="%2$s navbar-nav ms-auto mb-2 mb-lg-0">%3$s</ul>',
                    ));

                    ?>
                    <div class="search-container">
                        <i class="fa fa-search search-icon header-search-icon" onclick="toggleSearch()"></i>
                        <i class="fa fa-times close-icon header-search-icon" style="display: none;" onclick="toggleSearch()"></i>
                        <div class="search-box">
                            <?php get_search_form() ?>
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </nav>
    </header>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>


    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146431392-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146431392-1');
</script>


</head>

<body>
    <?php $menu_class = is_front_page() ? 'light' : ' dark'; ?>
    <header class="dark header">
        <div class="button-mobile">
            <i class="fa fa-bars"></i>
        </div>
        <div class="dec-logo">
            <img src="<?php echo get_template_directory_uri() . '/img/logo-dec-amc2.png' ?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/img/caintra.png' ?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/img/mc-kinsey.png' ?>" alt="">

        </div>
        <div class="content-header min-header">

        <div class="logos">
            <a href="/" class="brand">
                <img src="<?php echo get_template_directory_uri() . '/img/logo-amc-blue.png' ?>" alt="Logo AMC 2 White" class="logo-header">
                <img src="<?php echo get_template_directory_uri() . '/img/logo-amc-blue.png' ?>" alt="Logo AMC 2 White" class="logo-header-white">
            </a>
            <div class="dec"></div>
            <a href="https://www.caintra.org.mx/" target="_blank" class="brand">
                <img src="<?php echo get_template_directory_uri() . '/img/caintra.png' ?>" alt="" class="logo-header">
                <img src="<?php echo get_template_directory_uri() . '/img/caintra.png' ?>" alt="" class="logo-header-white">
            </a>
            <a href="https://www.mckinsey.com/" target="_blank" class="brand">
                <img src="<?php echo get_template_directory_uri() . '/img/mc-kinsey.png' ?>" alt="" class="logo-header">
                <img src="<?php echo get_template_directory_uri() . '/img/mc-kinsey.png' ?>" alt="" class="logo-header-white">
            </a>
        </div>


            <?php

            if (is_front_page()) {
                wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'nav-menu'));
            } else {
                wp_nav_menu(array('theme_location' => 'header-menu-singlePage', 'container_class' => 'nav-menu'));
            }

            ?>


            <div class="search-container">
                <?php echo do_shortcode('[display_search_form]') ?>
                <i class="fa fa-search"></i>
            </div>
        </div>

    </header>
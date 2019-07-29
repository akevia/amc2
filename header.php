<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>

    <header class="light header">
        <div class="button-mobile">
            <i class="fa fa-bars"></i>
        </div>
        <div class="content-header">


            <a href="#" class="brand">
                <img src="<?php echo get_template_directory_uri() . '/img/logo-amc-blue.png' ?>" alt="Logo AMC 2 White" class="logo-header">
                <img src="<?php echo get_template_directory_uri() . '/img/logo-amc-white.png' ?>" alt="Logo AMC 2 White" class="logo-header-white">

            </a>

            <nav class="nav-menu">
                <ul>
                    <li>Nosotros </li>
                    <li>¿Qué podemos hacer por ti?</li>
                    <li>Competencias</li>
                    <li>Programas</li>
                    <li>Blog</li>
                    <li>Testimoniales</li>
                    <li>Contacto</li>
                </ul>
            </nav>

            <div class="search-container">
                <?php echo do_shortcode('[display_search_form]') ?>
                <i class="fa fa-search"></i>
            </div>
        </div>

    </header>
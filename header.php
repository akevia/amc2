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
    <?php $menu_class = is_front_page() ? 'light' : ' dark'; ?>
    <header class="<?php echo $menu_class ?> header">
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
                    <li><a href="#nosotros">Nosotros</a> </li>
                    <li><a href="#quepodemos">¿Qué podemos hacer por ti?</a> </li>
                    <li><a href="#competencias">Competencias</a></li>
                    <li>
                        <a href="#programas">Programas</a>
                        <ul>
                            <li>
                                <a href="#casos">Casos de exito</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#testimonios">Testimoniales</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>

            <div class="search-container">
                <?php echo do_shortcode('[display_search_form]') ?>
                <i class="fa fa-search"></i>
            </div>
        </div>

    </header>
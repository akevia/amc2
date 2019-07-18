<?php

/**
 * Template Name: Single Page 
 */

get_header();
?>

<!-- Hero Banner -->
<div class="row-container-fluid flexbox vertical-middle">
    <div class="swiper-container home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="media">
                    <img src="<?php echo get_template_directory_uri() . '/media/slide-bg.png' ?>">
                </div>

                <div class="row-container flexbox vertical-middle">
                    <div class="title-no-border">
                        Capacitando a la industria <br>
                        en el desarrollo de competencias
                    </div>
                </div>
            </div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>

        </div>
    </div>
</div><!-- Hero Banner -->

<!-- Nosotros -->
<div class="row-container flexbox vertical-middle" style="background-image: url(<?php echo get_template_directory_uri() . '/img/row-2.jpg'; ?>); background-position: bottom right;">
    <div class="content">
        <div class="swiper-container podemos-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="flexbox vertical-middle">
                        <div class="content">
                            <div>
                                <span class="small-title-slider">
                                    Nosotros
                                </span>
                            </div>
                            <div class="title-slider">
                                Advanced Manufacturing <br> Capability Center (AMC²)
                            </div>

                            <div class="desc">
                                <p style="color: white;">
                                    Es el primer centro de entrenamiento experiencial con una fábrica modelo <br> de última tecnología focalizada en el desarrollo de competencias.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="flexbox vertical-middle">
                        <div class="content">
                            <div>
                                <span class="small-title-slider">
                                    Nosotros
                                </span>
                            </div>
                            <div class="title-slider">
                                Advanced Manufacturing <br> Capability Center (AMC²)
                            </div>

                            <div class="desc">
                                <p style="color: white;">
                                    Es el primer centro de entrenamiento experiencial con una fábrica modelo <br> de última tecnología focalizada en el desarrollo de competencias.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="flexbox vertical-middle">
                        <div class="content">
                            <div>
                                <span class="small-title-slider">
                                    Nosotros
                                </span>
                            </div>
                            <div class="title-slider">
                                Advanced Manufacturing <br> Capability Center (AMC²)
                            </div>

                            <div class="desc">
                                <p style="color: white;">
                                    Es el primer centro de entrenamiento experiencial con una fábrica modelo <br> de última tecnología focalizada en el desarrollo de competencias.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- If we need pagination -->
            <!-- <div class="swiper-pagination"></div> -->

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev podemos amc-slider-button">
                <img src="<?php echo get_template_directory_uri() . '/img/arrow-left.png' ?>" alt="" />

            </div>
            <div class="swiper-button-next podemos amc-slider-button">
                <img src="<?php echo get_template_directory_uri() . '/img/arrow-right.png' ?>" alt="" />
            </div>

        </div>
    </div>
</div><!-- Nosotros -->

<!-- Que podemos hacer por ti  -->
<div class="row-container flexbox vertical-middle" style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-podemos.png'; ?>); background-position: bottom right;">
    <div class="content">
        <div>
            <span class="small-title">
                ¿Qué podemos hacer por ti?
            </span>
        </div>

        <div class="grid">
            <div class="colmn">
                <img src="<?php echo get_template_directory_uri() . '/img/file-grey.png' ?>" class="column-img">
                <img src="<?php echo get_template_directory_uri() . '/img/file-white.png' ?>" class="column-img-hover">
                <div>
                    <div class="column-title">
                        Plan de estudios completo
                    </div>


                    <div class="column-desc">
                        <p>
                            Plan de estudios completo, que incluye manufactura lean y herramientas digitales avanzadas, como mantenimiento predictivo y análisis de rendimientos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="colmn">
                <img src="<?php echo get_template_directory_uri() . '/img/people-grey.png' ?>" class="column-img">
                <img src="<?php echo get_template_directory_uri() . '/img/people-white.png' ?>" class="column-img-hover">
                <div>
                    <div class="column-title">
                        Plan de estudios completo
                    </div>
                </div>
            </div>
            <div class="colmn">
                <img src="<?php echo get_template_directory_uri() . '/img/mind-grey.png' ?>" class="column-img">
                <img src="<?php echo get_template_directory_uri() . '/img/mind-white.png' ?>" class="column-img-hover">
                <div>
                    <div class="column-title">
                        Plan de estudios completo
                    </div>
                </div>
            </div>
            <div class="colmn">
                <img src="<?php echo get_template_directory_uri() . '/img/man-grey.png' ?>" class="column-img">
                <img src="<?php echo get_template_directory_uri() . '/img/man-white.png' ?>" class="column-img-hover">
                <div>
                    <div class="column-title">
                        Plan de estudios completo
                    </div>
                </div>
            </div>
            <div class="colmn">
                <img src="<?php echo get_template_directory_uri() . '/img/book-grey.png' ?>" class="column-img">
                <img src="<?php echo get_template_directory_uri() . '/img/book-white.png' ?>" class="column-img-hover">
                <div>
                    <div class="column-title">
                        Plan de estudios completo
                    </div>

                    <p>
                        Plan de estudios completo, que incluye manufactura lean y herramientas digitales avanzadas, como mantenimiento predictivo y análisis de rendimientos.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div><!-- Que podemos hacer por ti  -->

<!-- Programas -->
<div class="row-container-fluid flexbox vertical-middle" style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-programas.png'; ?>);">

    <div class="swiper-container programas-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">

                <div class="content flexbox vertical-top">
                    <div class="colmn">
                        <div class="content">
                            <img src="<?php echo get_template_directory_uri() . '/img/video.png' ?>" alt="" class="video">
                        </div>
                    </div>


                    <div class="colmn">
                        <div class="content">
                            <div>
                                <span class="small-title-slider">
                                    Productos
                                </span>
                            </div>

                            <div class="tabs-container">
                                <div>
                                    <ul class="tabs">
                                        <li class="tab">Módulos Análogos</li>
                                        <li class="tab">Módulos Digitales</li>
                                        <li class="tab">Programa Empresarial</li>
                                    </ul>
                                </div>

                                <div class="tabs-contenido">
                                    <div class="tabs-item active">
                                        <div class="title-slider">Conciencia Lean</div>
                                        <div class="desc">
                                            <p>Desarrollar una compresión de los conceptos Lean básicos, incluyendo identificación de 8 desperdicios, estandarización de procesos, desarrollo de un tablero de planeación de producción y gestión de desempeño en el piso de producción.</p>
                                            <p>¿Quieres conocer más sobre este entrenamiento?, <br>
                                                <strong> contáctanos para agendar tu Demo-Day.</strong>
                                            </p>

                                            <p>
                                                <a href="#" class="button-link">Contáctanos</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tabs-item"></div>
                                    <div class="tabs-item"></div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- If we need pagination -->
        <!-- <div class="swiper-pagination"></div> -->

        <!-- If we need navigation buttons -->
        <div class="row">
            <div class="colmn">
                <div class="swiper-button-next prgramas amc-slider-button">
                    <img src="<?php echo get_template_directory_uri() . '/img/arrow-right.png' ?>" alt="" />
                </div>
                <div class="swiper-button-prev prgramas amc-slider-button">
                    <img src="<?php echo get_template_directory_uri() . '/img/arrow-left.png' ?>" alt="" />

                </div>
            </div>
        </div>

    </div>

</div><!-- Programas -->

<!-- Contacto -->
<div class="row-container flexbox" style="background-image: url(<?php echo get_template_directory_uri() . '/img/contact-bg.jpg'; ?>); background-position: bottom right;">
    <div class="colmn flexbox vertical-middle">
        <div class="content">
            <div>
                <span class="title">Contáctanos</span>
            </div><br>
            <p class="desc color-pink">¿Quieres que diseñemos un plan <br /> de formación para tu empresa?</p>
        </div>
    </div>
    <div class="colmn flexbox vertical-middle horizontal-center">
        <div class="content">
            <form action="" class="form-contact">
                <div class="form-row">
                    <input type="text" name="" id="">
                </div>
                <div class="form-row">
                    <input type="email" name="" id="" class="i-50">
                    <input type="text" name="" id="" class="i-50">
                </div>
                <div class="form-row">
                    <input type="text" name="" id="" class="i-50" placeholder="Area(Compras, Etc)">
                    <input type="text" name="" id="" class="i-50">
                </div>
                <div class="form-row">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                </div>
                <div class="form-row">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>
</div><!-- Contacto -->

<!-- SCRIPTS -->

<script>
    var home = new Swiper('.home-slider', {
        autoplay: {
            delay: 9500,
            disableOnInteraction: false,
        },
    });

    var podemos = new Swiper('.podemos-slider', {
        loop: true,
        spaceBetween: 100,
        autoplay: {
            delay: 9500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next.podemos',
            prevEl: '.swiper-button-prev.podemos',
        },
    });

    var prgramas = new Swiper('.programas-slider', {
        loop: true,
        spaceBetween: 100,

        navigation: {
            nextEl: '.swiper-button-next.prgramas',
            prevEl: '.swiper-button-prev.prgramas',
        },
    });
</script>
<?php
get_footer();

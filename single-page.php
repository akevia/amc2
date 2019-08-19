<?php

/**
 * Template Name: Single Page 
 */

get_header();
?>

<!-- Hero Banner -->
<div class="light-menu">
    <div class="row-container-fluid flexbox vertical-middle" id="#inicio">
        <div class="swiper-container home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="media">
                        <!-- <img src="<?php echo get_template_directory_uri() . '/media/slide-bg.png' ?>"> -->
                        <video src="<?php echo get_template_directory_uri() . '/img/video.mp4' ?>" muted autoplay loop></video>
                    </div>

                    <div class="row-container flexbox vertical-middle">
                        <div class="title-no-border">
                            Capacitando a la industria <br>
                            en el desarrollo de competencias
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Hero Banner -->

<!-- Nosotros -->
<div class="light-menu">
    <div id="nosotros" class="row-container flexbox vertical-middle contenedor-general-nosotros" style="background-image: url(<?php echo get_template_directory_uri() . '/img/row-2.jpg'; ?>); background-position: bottom right;">
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
                                    Misión
                                </div>

                                <div class="desc">
                                    <p style="color: white;">
                                        Impulsar la productividad de Nuevo León por medio del <br>desarrollo de competencias de una forma vanguardista.
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
                                    Visión
                                </div>

                                <div class="desc">
                                    <p style="color: white;">
                                        Ser el centro referente en formación de competencias y aprendizaje <br>en Industria 4.0 para las empresas de Nuevo León.
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
    </div>
</div><!-- Nosotros -->

<!-- Que podemos hacer por ti  -->
<div class="dark-menu">
    <div id="quepodemos" class="row-container flexbox vertical-middle" style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-podemos.png'; ?>); background-position: bottom right;">
        <div class="content">
            <div>
                <span class="small-title">
                    ¿Qué podemos hacer por ti?
                </span>
            </div>

            <div class="grid">
                <div class="colmn">
                    <div class="div-img">
                        <img src="<?php echo get_template_directory_uri() . '/img/file-grey.png' ?>" class="column-img">
                        <img src="<?php echo get_template_directory_uri() . '/img/file-white.png' ?>" class="column-img-hover">
                    </div>
                    <div>
                        <div class="column-title">
                            Plan de estudios <br> completo
                        </div>
                        <div class="column-desc">
                            <p>
                                Plan de estudios completo, que incluye manufactura lean y herramientas digitales avanzadas, como mantenimiento predictivo y análisis de rendimientos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="colmn">
                    <div class="div-img">
                        <img src="<?php echo get_template_directory_uri() . '/img/people-grey.png' ?>" class="column-img">
                        <img src="<?php echo get_template_directory_uri() . '/img/people-white.png' ?>" class="column-img-hover">
                    </div>
                    <div>
                        <div class="column-title">
                            Cursos <br> interactivos
                        </div>
                        <div class="column-desc">
                            <p>
                                Cursos interactivos adaptados a las necesidades individuales y específicas de los participantes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="colmn">
                    <div class="div-img">
                        <img src="<?php echo get_template_directory_uri() . '/img/mind-grey.png' ?>" class="column-img">
                        <img src="<?php echo get_template_directory_uri() . '/img/mind-white.png' ?>" class="column-img-hover">
                    </div>
                    <div>
                        <div class="column-title">
                            Ritmo de aprendizaje vivencia
                        </div>
                        <div class="column-desc">
                            <p>
                                Ritmo de aprendizaje acelerado de forma experiencial en un entorno libre de riesgo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="colmn">
                    <div class="div-img">
                        <img src="<?php echo get_template_directory_uri() . '/img/man-grey.png' ?>" class="column-img">
                        <img src="<?php echo get_template_directory_uri() . '/img/man-white.png' ?>" class="column-img-hover">
                    </div>
                    <div>
                        <div class="column-title">
                            Acompañamiento en la formación de personal
                        </div>
                        <div class="column-desc">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="colmn">
                    <div class="div-img">
                        <img src="<?php echo get_template_directory_uri() . '/img/book-grey.png' ?>" class="column-img">
                        <img src="<?php echo get_template_directory_uri() . '/img/book-white.png' ?>" class="column-img-hover">
                    </div>
                    <div>
                        <div class="column-title">
                            Diseño de un programa de capacitación
                        </div>
                        <div class="column-desc">
                            <p>
                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Que podemos hacer por ti  -->

<!-- competencias -->
<div class="light-menu">

    <div id="competencias" class="row-container-fluid flexbox vertical-middle contenedor-general-competencias" style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-competencias.png'; ?>);">

        <div class="swiper-container competencias-slider">

            <span class="small-title-slider">
                Competencias
            </span>
            <div class="tabs-container active" role="competencias">
                <div>
                    <ul class="tabs">
                        <?php
                        $terms = get_terms(array(
                            'taxonomy' => 'modulos_competencias',
                            'hide_empty' => false,
                        ));

                        foreach ($terms as $term) {
                            if ($term->count > 0) {
                                ?>
                        <li class="tab"><?php echo $term->name; ?></li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>

            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->

                <?php

                $custom_terms = get_terms('modulos_competencias');
                foreach ($custom_terms as $custom_term) {
                    wp_reset_query();
                    $args = array(
                        'post_type' => 'competencia', 'orderby' => 'title', 'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'modulos_competencias',
                                'field' => 'slug_modulos_competencias',
                                'terms' => $custom_term->slug,
                            ),
                        ),
                    );
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()) {
                        ?>
                <?php
                        while ($loop->have_posts()) : $loop->the_post();
                            //$term_list = wp_get_post_terms($post->ID, 'modulos_competencias', array("fields" => "names"));
                            $term_list = wp_get_post_terms($post->ID, 'modulos_competencias', array("fields" => "all"));
                            $ind = 0;
                            foreach ($term_list as $term_single) {
                                if ($term_single->name == $custom_term->name) {
                                    ?>

                <div class="swiper-slide" modulo="<?php echo $term_single->name; ?>">

                    <div class="content flexbox vertical-top">
                    <div class="colmn">
                            <div class="content">
                                <video class="video active" preload playsinline autobuffer muted controls>
                                    <source src="<?php the_field("video") ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                        <div class="colmn">
                            <div class="content">
                                <div class="tabs-container active">
                                    <div class="panels">
                                        <div class="panel active">
                                            <div class="title-slider"><?php the_title(); ?></div>
                                            <div class="desc">
                                                <p>
                                                    Desarrollar una <strong>compresión de los conceptos Lean básicos,</strong> incluyendo identificación de 8 desperdicios, estandarización de procesos, desarrollo de un tablero de planeación de producción y gestión de desempeño en el piso de producción. </p>

                                                <p>
                                                    <a href="#" class="button-link">Contáctanos</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <?php
                                }
                                $ind++;
                            }
                        endwhile;
                        ?>
                <?php
                    }
                }
                ?>

            </div>


            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev competencias amc-slider-button">
                <img src="<?php echo get_template_directory_uri() . '/img/arrow-left.png' ?>" alt="" />

            </div>
            <div class="swiper-button-next competencias amc-slider-button">
                <img src="<?php echo get_template_directory_uri() . '/img/arrow-right.png' ?>" alt="" />
            </div>

        </div>

    </div>
</div><!-- competencias -->

<!-- programas -->
<div class="dark-menu" id="cont-chido">

    <div id="programas" class="row-container flexbox vertical-middle " style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-programas.png'; ?>);">
        <div class="content">
            <div class="title">
                Programas de formación de talentos
            </div>
            <p class="desc"> <span>EL AMC2</span> se enfoca en el desarrollo de competencias por medio de programas adaptadosa las necesidades particulares de cada cliente</p>
            <p class="mark">
                Modelo de entrega de servicios del AMC2:
            </p>
            <div class="dec"></div>

            <div class="columns-container">
                <div class="colmn" id="antes">
                    <div class="content">
                        <div class="top-text">
                            Antes
                        </div>

                        <div class="columns-container">
                            <div class="column">
                                <div class="item">
                                    <div class="info">
                                        <img src="<?php echo get_template_directory_uri() . '/img/figure-azul.png' ?>" alt="">
                                        <div class="cont-items">
                                            <img src="<?php echo get_template_directory_uri() . '/img/figure-icon1.png' ?>" alt="">
                                            <p>Diagnóstico
                                                de Competencias
                                                (Opcional)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="item">
                                    <div class="info">
                                        <img src="<?php echo get_template_directory_uri() . '/img/figure-azul.png' ?>" alt="">
                                        <div class="cont-items">
                                            <img src="<?php echo get_template_directory_uri() . '/img/figure-icon2.png' ?>" alt="">
                                            <p>Alineación
                                                con aspiraciones
                                                de la empresa
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="item">
                                    <div class="info">
                                        <img src="<?php echo get_template_directory_uri() . '/img/figure-azul.png' ?>" alt="">
                                        <div class="cont-items">
                                            <img src="<?php echo get_template_directory_uri() . '/img/figure-icon3.png' ?>" alt="">
                                            <p>Diseño del programa de formación
                                                de talento
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="colmn" id="durante">
                    <div class="content">
                        <div class="top-text">
                            Durante
                        </div>
                        <div class="item">
                            <div class="info">
                                <img src="<?php echo get_template_directory_uri() . '/img/figure-celeste.png' ?>" alt="">
                                <div class="cont-items">
                                    <img src="<?php echo get_template_directory_uri() . '/img/figure-icon4.png' ?>" alt="">
                                    <p>Ejecución
                                        de talleres
                                        de formación
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="colmn" id="despues">
                    <div class="content">
                        <div class="top-text">
                            Después
                        </div>
                        <div class="item">
                            <div class="info">
                                <img src="<?php echo get_template_directory_uri() . '/img/figure.png' ?>" alt="">
                                <div class="cont-items">
                                    <img src="<?php echo get_template_directory_uri() . '/img/figure-icon5.png' ?>" alt="">
                                    <p>Retroalimentación
                                        de aprendizajes
                                        a la empresa
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button id="mas">Ver más</button>
        </div>
    </div>

    <!-- Casos de éxito  -->


    <div id="casos-de-exito" class="row-container-fluid flexbox vertical-middle" style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-test.jpg'; ?>);">

        <div class="swiper-container casos-de-exito-slider">
            <div class="swiper-wrapper">
                <!-- XIGNUX -->
                <div class="swiper-slide">

                    <div class="content flexbox vertical-top">
                        <div class="colmn">
                            <div class="content">
                                <div class="cont-info">
                                    <span class="small-title-slider">
                                        Programas de formación de talento
                                    </span>

                                    <img class="img-principal" src="<?php echo get_template_directory_uri() . '/img/caso1.png' ?>" alt="">

                                    <p class="mas-casos">
                                        Más casos de exito
                                    </p>



                                </div>
                                <div class="cont-slide-item">
                                    <div class="cont-arrows">
                                        <div class="swiper-button-prev casos-de-exito amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/arrow-left.png' ?>" alt="" />
                                        </div>
                                        <div class="swiper-button-next casos-de-exito amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/arrow-right.png' ?>" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="colmn">
                            <div class="content">

                                <table style="width:100%">
                                    <tr>
                                        <td>Giro</td>
                                        <td>Grupo en insdustrias Energía y Alimentos</td>
                                    </tr>
                                    <tr>
                                        <td>Tamaño</td>
                                        <td>Grande ( > 12,000 Empleados)</td>
                                    </tr>
                                    <tr>
                                        <td>Situación</td>
                                        <td>·
                                            Cuentan con una <span> cultura Lean robusta </span> y poseen un programa de capacitación propio de la empresa <br><br>

                                            · Están en <span> proceso continuo de formación de los empleados </span> de la organización <br><br>

                                            · Buscan <span> innovar en su modelo de enseñanza </span> para generar mayor impacto</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Situación</th>
                                    </tr>

                                </table>

                                <div class="cont-m">
                                    <div>
                                        <p class="tit">Programa de formación</p>
                                        <img src="<?php echo get_template_directory_uri() . '/img/circulos-cde.png' ?>" alt="">
                                        <p class="desc">
                                            · Desarrollo de 6 módulos ajustados a las prácticas propias
                                            <br><br>
                                            · Ejecución de cursos con instructores compartidos
                                        </p>
                                    </div>
                                    <div>
                                        <p class="tit">Participantes:</p>
                                        <p class="desc">
                                            Ola inicial de 50 participantes
                                            <br><br>
                                            · Gerentes de operación
                                            <br>
                                            · Líderes mejora continua
                                            <br>
                                            · Staff de soporte
                                            <br>
                                            · Coordinadores de producción
                                            <br>
                                            · Supervisores de producción
                                            <br><br>
                                            Despliegue de cursos 11 meses
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

                <!-- PLOMAQ -->
                <div class="swiper-slide">

                    <div class="content flexbox vertical-top">
                        <div class="colmn">
                            <div class="content">
                                <div class="cont-info">
                                    <span class="small-title-slider">
                                        Programas de formación de talento
                                    </span>

                                    <img class="img-principal" src="<?php echo get_template_directory_uri() . '/img/caso2.png' ?>" alt="">

                                    <p class="mas-casos">
                                        Más casos de exito
                                    </p>



                                </div>
                                <div class="cont-slide-item">
                                    <div class="cont-arrows">
                                        <div class="swiper-button-prev casos-de-exito amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/arrow-left.png' ?>" alt="" />
                                        </div>
                                        <div class="swiper-button-next casos-de-exito amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/arrow-right.png' ?>" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="colmn">
                            <div class="content">

                                <table style="width:100%">
                                    <tr>
                                        <td>Giro</td>
                                        <td>Transfromación metal-mécanico</td>
                                    </tr>
                                    <tr>
                                        <td>Tamaño</td>
                                        <td>Mediana ( 100 Empleados)</td>
                                    </tr>
                                    <tr>
                                        <td>Situación</td>
                                        <td>
                                            · Best-practices por solicitud de cliente <br><br>

                                            · Visión de expansión mercado nacional e internacional <br><br>

                                            · <span>La alta dirección y equipo egerencial desean entender las best practices en la industria</span> <br><br>

                                            · <span>Están diseñandno la estrategia de transformación</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Solución</th>
                                    </tr>

                                </table>

                                <div class="cont-m">
                                    <div>
                                        <p class="tit">Programa de formación</p>
                                        <img src="<?php echo get_template_directory_uri() . '/img/plomaq-figure.png' ?>" alt="">
                                        <p class="desc">
                                            · Desarrollo de 6 módulos ajustados a las prácticas propias
                                            <br><br>
                                            · Ejecución de cursos con instructores compartidos
                                        </p>
                                    </div>
                                    <div>
                                        <p class="tit">Participantes:</p>
                                        <p class="desc">
                                            7 personas del equipo
                                            <br><br>
                                            · Director general
                                            <br>
                                            · Staff directo
                                            <br><br>
                                            Despliegue de cursos 11 meses
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

                <!-- CRISER -->
                <div class="swiper-slide">

                    <div class="content flexbox vertical-top">
                        <div class="colmn">
                            <div class="content">
                                <div class="cont-info">
                                    <span class="small-title-slider">
                                        Programas de formación de talento
                                    </span>

                                    <img class="img-principal" src="<?php echo get_template_directory_uri() . '/img/caso3.png' ?>" alt="">

                                    <p class="mas-casos">
                                        Más casos de exito
                                    </p>



                                </div>
                                <div class="cont-slide-item">
                                    <div class="cont-arrows">
                                        <div class="swiper-button-prev casos-de-exito amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/arrow-left.png' ?>" alt="" />
                                        </div>
                                        <div class="swiper-button-next casos-de-exito amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/arrow-right.png' ?>" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="colmn">
                            <div class="content">

                                <table style="width:100%">
                                    <tr>
                                        <td>Giro</td>
                                        <td>Injección de plásticos</td>
                                    </tr>
                                    <tr>
                                        <td>Tamaño</td>
                                        <td>Mediana ( 120 Empleados)</td>
                                    </tr>
                                    <tr>
                                        <td>Situación</td>
                                        <td>
                                            · Problemas de nivel de servicio / desperdicios <br><br>

                                            · <span>Están iniciando proceso de transformación Lean y están contemplando digitalizar operaciones.</span> <br><br>

                                            · <span>Desean incrementar cultura Lean en el piso de producción</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Solución</th>
                                    </tr>

                                </table>

                                <div class="cont-m">
                                    <div>
                                        <p class="tit">Programa de formación</p>
                                        <img src="<?php echo get_template_directory_uri() . '/img/criser-figure.png' ?>" alt="">
                                        <p class="desc">

                                        </p>
                                    </div>
                                    <div>
                                        <p class="tit">Participantes:</p>
                                        <p class="desc">
                                            20 personas de operaciones
                                            <br><br>
                                            · Coordinadores de producción
                                            <br>
                                            · Supervidsores de producción
                                            <br>
                                            · Líderes de producción (personal operativo)
                                            <br>
                                            · Staff de soporte: Ingeniería, Logistica
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

                <!-- RAGASA -->
                <div class="swiper-slide">

                    <div class="content flexbox vertical-top">
                        <div class="colmn">
                            <div class="content">
                                <div class="cont-info">
                                    <span class="small-title-slider">
                                        Programas de formación de talento
                                    </span>

                                    <img class="img-principal" src="<?php echo get_template_directory_uri() . '/img/caso4.png' ?>" alt="">

                                    <p class="mas-casos">
                                        Más casos de exito
                                    </p>



                                </div>
                                <div class="cont-slide-item">
                                    <div class="cont-arrows">
                                        <div class="swiper-button-prev casos-de-exito amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/arrow-left.png' ?>" alt="" />
                                        </div>
                                        <div class="swiper-button-next casos-de-exito amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/arrow-right.png' ?>" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="colmn">
                            <div class="content">

                                <table style="width:100%">
                                    <tr>
                                        <td>Giro</td>
                                        <td>Alimentos y derivados</td>
                                    </tr>
                                    <tr>
                                        <td>Tamaño</td>
                                        <td>Grande ( 1000 Empleados)</td>
                                    </tr>
                                    <tr>
                                        <td>Situación</td>
                                        <td>
                                            · Visión de <span>crecimiento a doble dígito</span><br><br>

                                            · Están iniciando el proceso de <span>transformación I.40</span><br><br>

                                            · Se desea <span>homologar una cultura de Mejora Continua</span> en la organización, así como al crear una conciencia digital en la organización
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Solución</th>
                                    </tr>

                                </table>

                                <div class="cont-m">
                                    <div>
                                        <p class="tit">Programa de formación</p>
                                        <img src="<?php echo get_template_directory_uri() . '/img/plomaq-figure.png' ?>" alt="">
                                        <p class="desc">

                                        </p>
                                    </div>
                                    <div>
                                        <p class="tit">Participantes:</p>
                                        <p class="desc">
                                            100 personas de operaciones
                                            <br><br>
                                            · Gerencias de planta producción
                                            <br>
                                            · Estrategia
                                            <br>
                                            · Staff de soporte (logística, mantenimiento)
                                            <br>
                                            · Supervisores de producción
                                            <br>
                                            · Fuerza de ventas
                                            <br>
                                            · Equipo de TI
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <button id="menos">Ver menos</button>

        </div>
    </div>




</div><!-- competencias -->

<!-- Blog -->
<div class="dark-menu">

    <div id="blog" class="row-container flexbox vertical-middle contenedor-general-blog">
        <div class="content">
            <div class="flexbox vertical-middle horizontal-space">
                <div class="small-title">Blog</div>

                <div class="suscribete">
                    <form action="" class="vertical-middle flexbox">
                        <label for="">suscribete</label>
                        <input type="email" name="" id="" placeholder="E-mail">
                        <button type="submit">
                            <img src="<?php echo get_template_directory_uri() . '/img/arrow.png' ?>" alt="">
                        </button>
                    </form>
                </div>
            </div>

            <div class="row flexbox horizontal-center contenedor-blog">

                <?php
                $ind = 1;
                $args = array('post_status' => 'publish', 'posts_per_page' => 6, 'order' => 'DESC');
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();

                    //$thumbID = get_post_thumbnail_id($post->ID);
                    //$imgDestacada = wp_get_attachment_url($thumbID);
                    $imgDestacada = get_the_post_thumbnail_url($post->ID, 'post-featured-img');
                    $authors = get_field('autores');
                    if (!$authors) {
                        $author_id = $post->post_author;
                    }
                    $link_externo = get_field('link_externo');
                    $link_nota = ($link_externo) ? $link_externo : get_the_permalink();
                    ?>

                <?php
                    if ($ind == 1) {
                        ?>
                <div class="column">
                    <a href="<?php echo $link_nota; ?>" <?php if ($link_externo) echo "target='_blank'" ?> class="card" style="background-image: url('<?php echo $imgDestacada; ?>') ">
                        <div class="overlay">
                            <p class="fecha-autor">
                                <?php
                                        $post_month  = get_the_time('F');
                                        $post_year = get_the_time('Y');
                                        echo '<time>' . $post_month . ' ' . $post_year . ',' . '</time>';
                                        ?>
                                By:
                                <?php
                                        if ($authors) {
                                            echo $authors;
                                        } else {
                                            the_author_meta('display_name', $author_id);
                                        }
                                        ?>
                            </p>
                            <p class="tit">
                                <?php the_title(); ?>
                            </p>
                            <p class="desc">
                                <?php echo (get_the_excerpt()); ?>
                            </p>
                        </div>
                        <div class="leer-mas">
                            <span>LEER MÁS</span>
                            <div>
                                <img src="<?php echo get_template_directory_uri() . '/img/flecha-blog.png' ?>" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                    }
                    ?>
                <?php
                    if ($ind == 2) {
                        ?>
                <div class="column">
                    <div class="row">

                        <a href="<?php echo $link_nota; ?>" <?php if ($link_externo) echo "target='_blank'" ?> class="card" style="background-image: url('<?php echo $imgDestacada; ?>') ">
                            <div class="overlay">
                                <p class="fecha-autor">
                                    <?php
                                            $post_month  = get_the_time('F');
                                            $post_year = get_the_time('Y');
                                            echo '<time>' . $post_month . ' ' . $post_year . ',' . '</time>';
                                            ?>
                                    By:
                                    <?php
                                            if ($authors) {
                                                echo $authors;
                                            } else {
                                                the_author_meta('display_name', $author_id);
                                            }
                                            ?>
                                </p>
                                <p class="tit">
                                    <?php the_title(); ?>
                                </p>
                                <p class="desc">
                                    <?php echo (get_the_excerpt()); ?>
                                </p>
                            </div>
                            <div class="leer-mas">
                                <span>LEER MÁS</span>
                                <div>
                                    <img src="<?php echo get_template_directory_uri() . '/img/flecha-blog.png' ?>" alt="">
                                </div>
                            </div>
                        </a>

                        <?php
                            }
                            ?>
                        <?php
                            if ($ind == 3) {
                                ?>
                        <a href="<?php echo $link_nota; ?>" <?php if ($link_externo) echo "target='_blank'" ?> class="card card-especial" style="background-image: url('<?php echo $imgDestacada; ?>') ">
                            <div class="overlay">
                                <p class="fecha-autor">
                                    <?php
                                            $post_month  = get_the_time('F');
                                            $post_year = get_the_time('Y');
                                            echo '<time>' . $post_month . ' ' . $post_year . ',' . '</time>';
                                            ?>
                                    By:
                                    <?php
                                            if ($authors) {
                                                echo $authors;
                                            } else {
                                                the_author_meta('display_name', $author_id);
                                            }
                                            ?>
                                </p>
                                <p class="tit">
                                    <?php the_title(); ?>
                                </p>
                            </div>
                            <div class="leer-mas">
                                <span>LEER MÁS</span>
                                <div>
                                    <img src="<?php echo get_template_directory_uri() . '/img/flecha-blog.png' ?>" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                        }
                        ?>
                    <?php
                        if ($ind == 4 || $ind == 5 || $ind == 6) {
                            ?>
                    <?php
                            if ($ind == 4) {
                                ?>
                    <div class="row">
                        <?php
                                }
                                ?>
                        <a href="<?php echo $link_nota; ?>" <?php if ($link_externo) echo "target='_blank'" ?> class="card card-especial" style="background-image: url('<?php echo $imgDestacada; ?>') ">
                            <div class="overlay">
                                <p class="fecha-autor">
                                    <?php
                                            $post_month  = get_the_time('F');
                                            $post_year = get_the_time('Y');
                                            echo '<time>' . $post_month . ' ' . $post_year . ',' . '</time>';
                                            ?>
                                    By:
                                    <?php
                                            if ($authors) {
                                                echo $authors;
                                            } else {
                                                the_author_meta('display_name', $author_id);
                                            }
                                            ?>
                                </p>
                                <p class="tit">
                                    <?php the_title(); ?>
                                </p>
                            </div>
                            <div class="leer-mas">
                                <span>LEER MÁS</span>
                                <div>
                                    <img src="<?php echo get_template_directory_uri() . '/img/flecha-blog.png' ?>" alt="">
                                </div>
                            </div>
                        </a>
                        <?php
                                if ($ind == 6) {
                                    ?>
                    </div>
                    <?php
                            }
                            ?>
                    <?php
                        }
                        ?>
                    <?php
                        if ($ind == 6) {
                            ?>
                </div>
                <?php
                    }
                    ?>
                <?php
                    $ind++;
                endwhile;
                ?>
            </div>


            <div class="contenedor-decoracion flexbox vertical-middle horizontal-center">
                <div class="decoracion-roja"></div>
                <a href="<?php echo get_home_url() . '/blog' ?>" class="blog-ver-mas">Ver más</a>
            </div>



        </div>
    </div>
</div><!-- Blog -->

<!-- testimonios -->
<div class="light-menu">
    <div id="testimonios" class="row-container-fluid flexbox vertical-middle contenedor-general-testimonios" style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-test.jpg'; ?>);">

        <div class="swiper-container testimonio-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">

                    <div class="content flexbox vertical-top">
                        <div class="colmn">
                            <div class="content">
                                <div class="cont-info">
                                    <span class="small-title-slider">
                                        Testimonios
                                    </span>
                                    <div class="title-slider">José Alfredo Vázquez</div>
                                    <br>
                                    <div class="sub-title">
                                        Ing. Mejora Continua
                                    </div>
                                    <div class="desc">
                                        <blockquote>“La parte práctica, el implementar físicamente lo aprendido y realizar la simulación en la línea es de gran ayuda para transmitir el conocimiento”.
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="cont-slide-item">
                                    <div class="cont-arrows">
                                        <div class="swiper-button-prev testimonios amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/blue-arrow-left.png' ?>" alt="" />
                                        </div>
                                        <div class="swiper-button-next testimonios amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/blue-arrow-right.png' ?>" alt="" />
                                        </div>
                                    </div>
                                    <div class="cont-medalla">
                                        <img src="<?php echo get_template_directory_uri() . '/img/medalla.png' ?>" alt="">
                                        <p>Net promoter Score</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="colmn">
                            <div class="content">
                                <img src="<?php echo get_template_directory_uri() . '/img/xignux.png' ?>" alt="" class="video">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">

                    <div class="content flexbox vertical-top">
                        <div class="colmn">
                            <div class="content">
                                <div class="cont-info">
                                    <span class="small-title-slider">
                                        Testimonios
                                    </span>
                                    <div class="title-slider">Arturo Montoya Villarello</div>
                                    <br>
                                    <div class="sub-title">
                                        Gerente Nacional Ventas Mayoreo
                                    </div>
                                    <div class="desc">
                                        <blockquote>
                                            “El poner en práctica todos lo conceptos teóricos facilita muchas más el aprendizaje. Las instalaciones son totalmente adecuadas y los instructores ampliamente capacitados.”
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="cont-slide-item">
                                    <div class="cont-arrows">
                                        <div class="swiper-button-prev testimonios amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/blue-arrow-left.png' ?>" alt="" />
                                        </div>
                                        <div class="swiper-button-next testimonios amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/blue-arrow-right.png' ?>" alt="" />
                                        </div>
                                    </div>
                                    <div class="cont-medalla">
                                        <img src="<?php echo get_template_directory_uri() . '/img/medalla.png' ?>" alt="">
                                        <p>Net promoter Score</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="colmn">
                            <div class="content">
                                <img src="<?php echo get_template_directory_uri() . '/img/ragasa.png' ?>" alt="" class="video">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">

                    <div class="content flexbox vertical-top">
                        <div class="colmn">
                            <div class="content">
                                <div class="cont-info">
                                    <span class="small-title-slider">
                                        Testimonios
                                    </span>
                                    <div class="title-slider">Erick Cajero Rodríguez</div>
                                    <br>
                                    <div class="sub-title">
                                        Jefe turno
                                    </div>
                                    <div class="desc">
                                        <blockquote>
                                            “Porque este curso te abre nuevas formas de implementar métodos de trabajo en pro de la mejora continua y te ayuda a la medicón de los estándares o tiempos efectivos.”
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="cont-slide-item">
                                    <div class="cont-arrows">
                                        <div class="swiper-button-prev testimonios amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/blue-arrow-left.png' ?>" alt="" />
                                        </div>
                                        <div class="swiper-button-next testimonios amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/blue-arrow-right.png' ?>" alt="" />
                                        </div>
                                    </div>
                                    <div class="cont-medalla">
                                        <img src="<?php echo get_template_directory_uri() . '/img/medalla.png' ?>" alt="">
                                        <p>Net promoter Score</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="colmn">
                            <div class="content">
                                <img src="<?php echo get_template_directory_uri() . '/img/reynera.png' ?>" alt="" class="video">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">

                    <div class="content flexbox vertical-top">
                        <div class="colmn">
                            <div class="content">
                                <div class="cont-info">
                                    <span class="small-title-slider">
                                        Testimonios
                                    </span>
                                    <div class="title-slider">Mario Verdinez</div>
                                    <br>
                                    <div class="sub-title">
                                        Operational Excellence Manager
                                    </div>
                                    <div class="desc">
                                        <blockquote>
                                            “Todo el taller es muy bueno, pero quisiera destacar estos dos puntos:
                                            1) Simulación de los Desperdicios, es muy clara, que no solo sirve para que el personal nuevo los identifique, sino que también para reforzar la teoría a los veteranos.
                                            2) Visión del VSM completo, nuestros procesos demandan una gran área de trabajo, por lo que no todos los operadores pueden ver el desempeño del VSM completo tan claro como en el taller; esto ayudó a fortalecer la sensibilidad para estar receptivos a los problemas de los demás.”
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="cont-slide-item">
                                    <div class="cont-arrows">
                                        <div class="swiper-button-prev testimonios amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/blue-arrow-left.png' ?>" alt="" />
                                        </div>
                                        <div class="swiper-button-next testimonios amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/blue-arrow-right.png' ?>" alt="" />
                                        </div>
                                    </div>
                                    <div class="cont-medalla">
                                        <img src="<?php echo get_template_directory_uri() . '/img/medalla.png' ?>" alt="">
                                        <p>Net promoter Score</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="colmn">
                            <div class="content">
                                <img src="<?php echo get_template_directory_uri() . '/img/frisa.png' ?>" alt="" class="video">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">

                    <div class="content flexbox vertical-top">
                        <div class="colmn">
                            <div class="content">
                                <div class="cont-info">
                                    <span class="small-title-slider">
                                        Testimonios
                                    </span>
                                    <div class="title-slider">Alfredo Nuño Toledo</div>
                                    <br>
                                    <div class="sub-title">
                                        Gerente Mejora continua
                                    </div>
                                    <div class="desc">
                                        <blockquote>
                                            "Definitivamente muy enriquecedora, se viven de manera práctica y muy didáctica los principios Lean. Además confirma que es vital dominar primero lo más importante que son los principios Lean y controlar tus procesos, para después potencializarlos con Tecnología.
                                            En general contamos con Colaboradores con un mejor entendimiento de cuáles son los principios Lean, cuestionan más para llegar a la causa raíz de los problemas, en áreas operativas, se tomó importancia en los cambios de modelos."
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="cont-slide-item">
                                    <div class="cont-arrows">
                                        <div class="swiper-button-prev testimonios amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/blue-arrow-left.png' ?>" alt="" />
                                        </div>
                                        <div class="swiper-button-next testimonios amc-slider-button">
                                            <img src="<?php echo get_template_directory_uri() . '/img/blue-arrow-right.png' ?>" alt="" />
                                        </div>
                                    </div>
                                    <div class="cont-medalla">
                                        <img src="<?php echo get_template_directory_uri() . '/img/medalla.png' ?>" alt="">
                                        <p>Net promoter Score</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="colmn">
                            <div class="content">
                                <img src="<?php echo get_template_directory_uri() . '/img/ragasa.png' ?>" alt="" class="video">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div><!-- testimonios -->

<!-- Contacto -->
<div class="dark-menu">
    <div id="contacto" class="row-container flexbox contenedor-general-contacto" style="background-image: url(<?php echo get_template_directory_uri() . '/img/contact-bg.jpg'; ?>); background-position: bottom right;">
        <div class="colmn flexbox vertical-middle">
            <div class="content">
                <div>
                    <div class="title">Contáctanos</div>
                </div><br>
                <p class="desc color-pink">¿Quieres que diseñemos un plan <br /> de formación para tu empresa?</p>
            </div>
        </div>
        <div class="colmn flexbox vertical-middle horizontal-center">
            <div class="content">

                <?php echo do_shortcode('[contact-form-7 id="196" title="Contacto"]'); ?>
            </div>
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
/*
    var competencias = new Swiper('.competencias-slider', {
        spaceBetween: 100,
        simulateTouch: false,
        navigation: {
            nextEl: '.swiper-button-next.competencias',
            prevEl: '.swiper-button-prev.competencias',
        },
    });
    */
    var programas = new Swiper('.programas-slider', {
        spaceBetween: 100,
        simulateTouch: false,
        navigation: {
            nextEl: '.swiper-button-next.programas',
            prevEl: '.swiper-button-prev.programas',
        },
    });

    var testimonio = new Swiper('.testimonio-slider', {
        spaceBetween: 100,
        simulateTouch: false,
        navigation: {
            nextEl: '.swiper-button-next.testimonios',
            prevEl: '.swiper-button-prev.testimonios',
        },
    });

    var testimonio = new Swiper('.casos-de-exito-slider', {
        spaceBetween: 100,
        simulateTouch: false,
        navigation: {
            nextEl: '.swiper-button-next.casos-de-exito',
            prevEl: '.swiper-button-prev.casos-de-exito',
        },
    });
</script>
<?php
get_footer();
?>
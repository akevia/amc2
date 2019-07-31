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
                                            <li class="tab active">Módulos Análogos</li>
                                            <li class="tab">Módulos Digitales</li>
                                            <li class="tab">Programa Empresarial</li>
                                        </ul>
                                    </div>

                                    <div class="panels">
                                        <div class="panel active">
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
                                        <div class="panel">
                                            <div class="title-slider">Conciencia Lean 2</div>
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
                                        <div class="panel">
                                            <div class="title-slider">Conciencia Lean 3</div>
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
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

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
                                            <li class="tab active">Módulos Análogos 2</li>
                                            <li class="tab">Módulos Digitales 2</li>
                                            <li class="tab">Programa Empresarial 2</li>
                                        </ul>
                                    </div>

                                    <div class="panels">
                                        <div class="panel active">
                                            <div class="title-slider">Conciencia Lean 4</div>
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
                                        <div class="panel">
                                            <div class="title-slider">Conciencia Lean 5</div>
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
                                        <div class="panel">
                                            <div class="title-slider">Conciencia Lean 6</div>
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
                    <div class="swiper-button-next competencias amc-slider-button">
                        <img src="<?php echo get_template_directory_uri() . '/img/arrow-right.png' ?>" alt="" />
                    </div>
                    <div class="swiper-button-prev competencias amc-slider-button">
                        <img src="<?php echo get_template_directory_uri() . '/img/arrow-left.png' ?>" alt="" />

                    </div>
                </div>
            </div>

        </div>

    </div>
</div><!-- competencias -->

<!-- programas -->
<div class="dark-menu" id="cont-chido">

    <div id="programas" class="row-container flexbox vertical-middle " style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-programas.png'; ?>);">
        <div class="content">
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

    <!-- jdhjdfhjdfhjdfhdfhjdhfjdhjhjdfhjdfhjdfjhdfhjdfdhjf  -->


    <div id="casos-de-exito" class="row-container-fluid flexbox vertical-middle" style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-test.jpg'; ?>);">

        <div class="swiper-container casos-de-exito-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide">

                <div class="content flexbox vertical-top">
                        <div class="colmn">
                            <div class="content">
                                <div class="cont-info">
                                    <span class="small-title-slider">
                                        Casos de éxito
                                    </span>

                                    <img class="img-principal" src="<?php echo get_template_directory_uri() . '/img/xignux.png' ?>" alt="">

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
                                    <td>Grande  ( > 12,000 Empleados)</td>
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

            </div>
            <button id="menos">Ver menos</button>

        </div>
    </div>




</div><!-- competencias -->



<!-- Casos de exito 

<div class="light-menu">

    <div id="casos-de-exito" class="row-container-fluid flexbox vertical-middle" style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-test.jpg'; ?>);">

        <div class="swiper-container casos-de-exito-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide">

                    <div class="content flexbox vertical-top">
                        <div class="colmn">
                            <div class="content">
                                <div class="cont-info">
                                    <span class="small-title-slider">
                                        Casos de éxito
                                    </span>

                                    <img class="img-principal" src="<?php echo get_template_directory_uri() . '/img/xignux.png' ?>" alt="">

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

            </div>

        </div>

    </div>

</div>
-->


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
                <div class="column">
                    <a href="#" class="card" style="background-image: url('<?php echo get_template_directory_uri() . '/img/post1.jpg' ?>') ">
                        <div class="overlay">
                            <p class="fecha-autor">
                                22 abr. 2019 By Héctor García
                            </p>
                            <p class="tit">
                                Las competencias Lean que debe tener nuestra organización rumbo a la transformación digital.
                            </p>
                            <p class="desc">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                dolore magna aliquam erat volutpat. Ut wisi enim ad minim ...
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
                <div class="column">
                    <div class="row">
                        <a href="#" class="card" style="background-image: url('<?php echo get_template_directory_uri() . '/img/post2.jpg' ?>') ">
                            <div class="overlay">
                                <p class="fecha-autor">
                                    05 mar. 2019 By Héctor García
                                </p>
                                <p class="tit">
                                    Empieza con una cultura Lean para capturar todos los beneficios de la
                                </p>
                                <p class="desc">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                    dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam ...
                                </p>
                            </div>
                            <div class="leer-mas">
                                <span>LEER MÁS</span>
                                <div>
                                    <img src="<?php echo get_template_directory_uri() . '/img/flecha-blog.png' ?>" alt="">
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card card-especial" style="background-image: url('<?php echo get_template_directory_uri() . '/img/post3.jpg' ?>') ">
                            <div class="overlay">
                                <p class="fecha-autor">
                                    05 mar. 2019 By Héctor García
                                </p>
                                <p class="tit">
                                    ¿A qué se enfrentan las empresas en una transformación Lean y Digital?
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
                    <div class="row">
                        <a href="#" class="card card-especial" style="background-image: url('<?php echo get_template_directory_uri() . '/img/post4.jpg' ?>') ">
                            <div class="overlay">
                                <p class="fecha-autor">
                                    17 abr. 2019 By Amy Radermacher, Markus Hammer t
                                </p>
                                <p class="tit">
                                    The Human Factor: The power of the digital capability center
                                </p>
                            </div>
                            <div class="leer-mas">
                                <span>LEER MÁS</span>
                                <div>
                                    <img src="<?php echo get_template_directory_uri() . '/img/flecha-blog.png' ?>" alt="">
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card card-especial" style="background-image: url('<?php echo get_template_directory_uri() . '/img/post5.jpg' ?>') ">
                            <div class="overlay">
                                <p class="fecha-autor">
                                    10 abr. 2019 By Tanguy Catlin, Laura LaBerge, and Shannon Varney
                                </p>
                                <p class="tit">
                                    Digital strategy: The four fights you have to win
                                </p>
                            </div>
                            <div class="leer-mas">
                                <span>LEER MÁS</span>
                                <div>
                                    <img src="<?php echo get_template_directory_uri() . '/img/flecha-blog.png' ?>" alt="">
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card card-especial" style="background-image: url('<?php echo get_template_directory_uri() . '/img/post6.jpg' ?>') ">
                            <div class="overlay">
                                <p class="fecha-autor">
                                    03 abr. 2019 By Alejandro Díaz, Kayvaun Rowshankish, and Tamim Saleh
                                </p>
                                <p class="tit">
                                    Why data culture matters
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
                </div>

            </div>


            <div class="contenedor-decoracion">
                <div class="decoracion-roja"></div>
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
                                        Ing. Mejora Continua <br> Xignux
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
                                <img src="<?php echo get_template_directory_uri() . '/img/video.png' ?>" alt="" class="video">
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
                                        Gerente Nacional Ventas Mayoreo <br> Ragasa
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
                                <img src="<?php echo get_template_directory_uri() . '/img/video.png' ?>" alt="" class="video">
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
                                        Jefe turno <br> Reynera
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
                                <img src="<?php echo get_template_directory_uri() . '/img/video.png' ?>" alt="" class="video">
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
                                        Operational Excellence Manager <br>FRISA
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
                                <img src="<?php echo get_template_directory_uri() . '/img/video.png' ?>" alt="" class="video">
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
                    <span class="title">Contáctanos</span>
                </div><br>
                <p class="desc color-pink">¿Quieres que diseñemos un plan <br /> de formación para tu empresa?</p>
            </div>
        </div>
        <div class="colmn flexbox vertical-middle horizontal-center">
            <div class="content">
                <form action="" class="form-contact">
                    <div class="form-row">
                        <input type="text" name="" id="" placeholder="Nombre">
                    </div>
                    <div class="form-row">
                        <input type="email" name="" id="" class="i-50" placeholder="E-mail">
                        <input type="text" name="" id="" class="i-50" placeholder="Empresa">
                    </div>
                    <div class="form-row">
                        <input type="text" name="" id="" class="i-50" placeholder="Area(Compras, Etc)">
                        <input type="text" name="" id="" class="i-50" placeholder="Teléfono">
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

    var competencias = new Swiper('.competencias-slider', {
        spaceBetween: 100,
        simulateTouch: false,
        navigation: {
            nextEl: '.swiper-button-next.competencias',
            prevEl: '.swiper-button-prev.competencias',
        },
    });
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

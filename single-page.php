<?php

/**
 * Template Name: Single Page 
 */

get_header();
$ID = get_the_ID();
?>


<style>

.contenedor-general-modal{
	display: none;
}
	
.cont-modal{
    position: fixed;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    z-index: 99999;
    -webkit-transition: all 400ms ease-in;
    -moz-transition: all 400ms ease-in;
    transition: all 400ms ease-in;
}
	
.cont-modal > div {
    width: 50%;
    max-width: 530px;
    box-shadow: 0px 0px 15px 1px white;
    position: relative;
    padding: 20px;
    border-radius: 10px;
    -webkit-transition: all 400ms ease-in;
    -moz-transition: all 400ms ease-in;
    transition: all 400ms ease-in;
    background: white;
}

.cont-modal > div > .contenedor-iframe {
    position: relative;
    width: 100%;
    height: 0;
    padding-bottom: 56.25%;
}

.cont-modal > div > .contenedor-iframe iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
	
.cont-modal > div > div.close {
    position: absolute;
    top: -15px;
    right: -15px;
    width: 50px;
    height: 50px;
    background: #f16418;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 35px;
    z-index: 999;
    transition: all .3s;
}
	
.cont-modal > div > div.close button {
    font-size: 30px;
    top: 3px;
    position: relative;
    color: white;
    border: 0;
    background: transparent;
    outline: none;
    cursor: pointer;
}
	
.cont-modal > div > img {
    width: 100%;
}
	
@media screen and (max-width: 767px){
	.cont-modal > div {
		padding: 15px;
		width: calc(85% - 30px) !important;
	}
}

</style>

<div class="contenedor-general-modal">
			<div class="cont-modal">
                <div>
                    <div class="close">
                        <button id="cerrar-modal" title="Cerrar"> X </button>
                    </div>
                    <div class="contenedor-iframe">
                        <div id="muteYouTubeVideoPlayer"></div>

                            <script async src="https://www.youtube.com/iframe_api"></script>
                            <script>
                            function onYouTubeIframeAPIReady() {
                            var player;
                            player = new YT.Player('muteYouTubeVideoPlayer', {
                                videoId: 'bNLFIuhCQqs', // YouTube Video ID
                                width: 560,               // Player width (in px)
                                height: 316,              // Player height (in px)
                                playerVars: {
                                autoplay: 1,        // Auto-play the video on load
                                controls: 1,        // Show pause/play buttons in player
                                showinfo: 0,        // Hide the video title
                                modestbranding: 1,  // Hide the Youtube Logo
                                loop: 1,            // Run the video in a loop
                                fs: 0,              // Hide the full screen button
                                cc_load_policy: 0, // Hide closed captions
                                iv_load_policy: 3,  // Hide the Video Annotations
                                autohide: 0         // Hide video controls when playing
                                },
                                events: {
                                onReady: function(e) {
                                    //player.play();
                                }
                                }
                            });
                            }

                            </script>
                    </div>
                </div>
			</div>
</div>


<!-- Hero Banner -->
<div class="dark-menu">
    <div class="row-container-fluid flexbox vertical-middle" id="#inicio">
        <div class="swiper-container home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="media">
                        <!-- <img src="<?php echo get_template_directory_uri() . '/media/slide-bg.png' ?>"> -->
                            <video src="<?php the_field('video', $ID);  ?>" muted autoplay loop></video>
                    </div>

                    <div class="row-container flexbox vertical-middle">
                        <div class="title-no-border">
                            <span>
                            <?php the_field('titulo', $ID);  ?>
                            </span>

                            <p class="subtitulo">
                                <?php the_field('subtitulo', $ID);  ?>
                            </p>

                            <a href="#" class="btn-video">
                                <img src="<?php echo get_template_directory_uri() . '/img/icon-play.png' ?>" alt="">    Ver vídeo completo
                            </a>
<br>
                            <a href="#contacto" class="btn-link">
                                Solicita más información
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Hero Banner -->


<!-- Que podemos hacer por ti  -->
<div class="dark-menu">
    <div id="quepodemos" class="row-container flexbox vertical-middle" style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-podemos.png'; ?>); background-position: bottom right;">
        <div class="content">
            <div>
                <span class="small-title">
                    <?php the_field('encabezado_que_podemos_hacer_por_ti', $ID);  ?>
                </span>
            </div>
            <div class="grid">
                <?php
                while (have_rows('item', $ID)) : the_row();
                    ?>

                    <div class="colmn">
                        <div class="div-img">
                            <div class="column-title">
                                <?php the_sub_field('titulo'); ?>
                            </div>
                            <div class="cont-imgs">
                                <img src="<?php the_sub_field('icono'); ?>" class="column-img">
                                <img src="<?php the_sub_field('icono'); ?>" class="column-img-hover">
                            </div>
                        </div>
                        <div class="div-desc">
                            <div class="column-desc">
                                <p>
                                    <?php the_sub_field('descripcion'); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                <?php
                endwhile;
                ?>
            </div>
            
        </div>
    </div>
</div><!-- Que podemos hacer por ti  -->


<!-- Banner  -->
<div class="contenedor-general-banner">
    <div class="cont-banner">
        <div class="info">
                <p>
                    <?php the_field('informacion_banner'); ?>
                </p>
                <a href="<?php the_field('archivo_banner'); ?>" download target="_blank">DESCARGA OFERTA DE VALOR</a>
        </div>
        <div class="img">
            <img src="<?php the_field('imagen_banner'); ?>" alt="">
        </div>
    </div>
</div>
<!-- Banner  -->


<!-- Testimonios  -->
<div class="dark-menu">
    <div id="testimonios" class="row-container flexbox vertical-middle" style="background-image: url(<?php echo get_template_directory_uri() . '/img/banner-new-testimonios.jpg'; ?>); background-position: bottom right;">
        <div class="content">
            <div class="cont-tit">
                <span class="small-title">
                    <?php the_field('encabezado_testimonios'); ?>
                </span>
            </div>
            
            <div class="contenedor-general-testimonios">
                <div class="contenedor-testimonios">
                <?php
                while (have_rows('testimonio', $ID)) : the_row();
                ?>
        
                    <div class="cont-testimonio">
                        <div class="img">
                            <img src="<?php the_sub_field('logo_empresa'); ?>" alt="">
                        </div>
                        <div class="testimonio">
                            <p>
                                <?php the_sub_field('testim'); ?>
                            </p>
                            <p> <strong><?php the_sub_field('nombre'); ?></strong> </p>
                        </div>
                    </div>

                <?php
                endwhile;
                ?>
                <!--
                    <div class="cont-testimonio">
                        <div class="img">
                            <img src="http://localhost:8888/amc2/wp-content/uploads/2020/04/xignux.png" alt="">
                        </div>
                        <div class="testimonio">
                            <p>
                                "La parte práctica, el implementar físicamente lo aprendido 
                                y realizar la simulación en la línea es de gran ayuda 
                                para transmitir el conocimiento".
                            </p>
                            <p> <strong>José Alfredo Vázquez</strong> </p>
                        </div>
                    </div>
                    <div class="cont-testimonio">
                        <div class="img">
                            <img src="http://localhost:8888/amc2/wp-content/uploads/2020/04/ragaza.png" alt="">
                        </div>
                        <div class="testimonio">
                            <p>
                            "El poner en práctica todos lo conceptos teóricos facilita muchas 
                            más el aprendizaje. Las instalaciones son totalmente adecuadas 
                            y los instructores ampliamente capacitados."
                            </p>
                            <p> <strong>Arturo Montoya Villarello</strong> </p>
                        </div>
                    </div>
                    <div class="cont-testimonio">
                        <div class="img">
                            <img src="http://localhost:8888/amc2/wp-content/uploads/2020/04/reynera.png" alt="">
                        </div>
                        <div class="testimonio">
                            <p>
                            "Porque este curso te abre nuevas formas de implementar métodos de 
                            trabajo en pro de la mejora continua y te ayuda a la medicón de 
                            los estándares o tiempos efectivos."
                            </p>
                            <p> <strong>Erick Cajero Rodríguez</strong> </p>
                        </div>
                    </div>
            -->
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Testimonios  -->



<!-- Beneficios  -->
<div class="dark-menu">
    <div id="beneficios" class="row-container flexbox vertical-middle" style="background-image: url(<?php echo get_template_directory_uri() . '/img/banner-new-testimonios.jpg'; ?>); background-position: bottom right;">
        <div class="content">
            <div class="cont-tit">
                <span class="small-title">
                    <?php the_field('encabezado_beneficios'); ?>
                </span>
            </div>
            
            <div class="contenedor-general-beneficios">
                <div class="contenedor-beneficios">
                    <?php the_field('lista_de_beneficios'); ?>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Beneficios  -->




<!-- Casos de Exito  -->
<div class="light-menu">
    <div id="casosdeexito" class="row-container flexbox vertical-middle" style="background-image: url(<?php echo get_template_directory_uri() . '/img/fondo-casosdeexito.jpg'; ?>); background-position: bottom left;">
        <div class="content">
            <div class="cont-tit">
                <span class="small-title white">
                    <?php the_field('encabezado_casos_de_exito'); ?>
                </span>
            </div>
            
            <div class="contenedor-general-casos">
                <div class="contenedor-casos">
                <!--
                <?php
                while (have_rows('casos_de_exito', $ID)) : the_row();
                ?>
        
                    <div class="cont-caso">
                        <div class="img" style="background-image: url(<?php the_sub_field('imagen'); ?>)">
                            <img src="<?php echo get_template_directory_uri() . '/img/casodeexito.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <?php the_sub_field('descripcion'); ?>
                        </div>
                    </div>

                <?php
                endwhile;
                ?>
                -->
                <div class="swiper-container casosexito-slider">
                <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->

                        <?php
                        while (have_rows('casos_de_exito', $ID)) : the_row();
                        ?>

                        <div class="swiper-slide">

                            <div class="cont-caso">
                                <div class="img" style="background-image: url(<?php the_sub_field('imagen'); ?>); max-height: 200px; overflow: hidden;">
                                    <img style="width: 100%;" src="<?php echo get_template_directory_uri() . '/img/casodeexito.jpg'; ?>" alt="">
                                </div>
                                <div class="info">
                                    <?php the_sub_field('descripcion'); ?>
                                </div>
                            </div>
                        
                        </div>
                        <?php
                        endwhile;
                        ?>

                    </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev podemos cde-button">
                    <img src="<?php echo get_template_directory_uri() . '/img/arrow-left.png' ?>" alt="" />

                </div>
                <div class="swiper-button-next podemos cde-button">
                    <img src="<?php echo get_template_directory_uri() . '/img/arrow-right.png' ?>" alt="" />
                </div>
                </div>


            <!--
                    <div class="cont-caso">
                        <div class="img" style="background-image: url(http://localhost:8888/amc2/wp-content/uploads/2020/04/casodeexito1.jpg)">
                            <img src="http://localhost:8888/amc2/wp-content/uploads/2020/04/casodeexito1.jpg" alt="">
                        </div>
                        <div class="info">
                            <p> <strong>TRANSFORMACIÓN LEAN-I4.0 PARA GERENTES</strong></p>
                            <p> <strong>Giro:</strong> Transformación metal-mécanico</p>
                            <p> <strong>Tamaño:</strong> Mediana ( 100 Empleados)</p>
                            <p> <strong>Situación:</strong> Best-practices por solicitud de cliente, visión de expansión mercado nacional e internacional, alta dirección y equipo gerencial desean entender las best practices en la industria y están diseñando la estrategia de transformación.</p>
                            <p> <strong>Solución:</strong> Desarrollo de 6 módulos ajustados a las prácticas propias y ejecución de cursos con instructores compartidos.</p>
                        </div>
                    </div>
                    <div class="cont-caso">
                        <div class="img" style="background-image: url(http://localhost:8888/amc2/wp-content/uploads/2020/04/casodeexito2.jpg)">
                            <img src="http://localhost:8888/amc2/wp-content/uploads/2020/04/casodeexito2.jpg" alt="">
                        </div>
                        <div class="info">
                            <p> <strong>TPS PERSONALIZADO</strong> </p>
                            <p> <strong>Giro:</strong> Grupo en industrias Energía y Alimentos</p>
                            <p> <strong>Tamaño:</strong> Grande ( > 12,000 Empleados)</p>
                            <p> <strong>Situación:</strong> Cuentan con una cultura Lean robusta y poseen un programa de capacitación propio de la empresa, están en proceso continuo de formación de los empleados de la organización y buscan innovar en su modelo de enseñanza para generar mayor impacto.</p>
                            <p> <strong>Solución:</strong> Desarrollo de 6 módulos ajustados a las prácticas propias y ejecución de cursos con instructores compartidos.</p>
                        </div>
                    </div>
            -->
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Casos de Exito  -->




<!-- competencias -->
<!--
<div class="light-menu">

    <div id="competencias" class="row-container-fluid flexbox vertical-middle contenedor-general-competencias" style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-competenciass.jpg'; ?>);">

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
                            'orderby' => 'slug',
                            'order' => 'ASC',
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

            <div class="swiper-wrapper">

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

                                            <style>
                                                .content.content-new{
                                                    flex-wrap: wrap;
                                                    justify-content: center;
                                                }

                                                a.btn-linkk{
                                                    display: inline-block;
                                                    z-index: 9;     
                                                    background-color: #f16418;
                                                    color: #fff;
                                                    padding: 7px 10px;
                                                    text-decoration: none;
                                                    font-size: 11px;
                                                    font-weight: bold;
                                                    text-transform: uppercase;
                                                    letter-spacing: 1px;
                                                    -webkit-transition: all 0.1s ease-in-out;
                                                    transition: all 0.1s ease-in-out;
                                                }
                                                a.btn-linkk:hover{
                                                    background-color: #fff;
                                                    color: #f16418;
                                                }

                                                .competencias-slider .swiper-slide .content .colmn:nth-child(1) .content .video{
                                                    -webkit-transition: all 0.3s;
                                                    transition: all 0.3s;
                                                }

                                                .competencias-slider .swiper-slide .content .colmn:nth-child(1) .content .video:hover{
                                                    box-shadow: 0 0 10px 0 #444;
                                                }

                                                @media screen and (max-width: 1023px){
                                                    .content.content-new{
                                                    flex-direction: column !important;
                                                    }

                                                    a.btn-linkk{
                                                        margin-top: 20px;
                                                    }
                                                }
                                            </style>

                                                <div class="content content-new">
                                                    <?php 
                                                    if(get_field("link") != ''){
                                                        ?>
                                                        <a href="<?php the_field("link") ?>" target="_blank" style="margin-right: 10px;">
                                                        <?php
                                                    }
                                                    ?>
                                                        <video class="video active" preload playsinline autobuffer muted loop>
                                                            <source src="<?php the_field("video") ?>" type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    <?php 
                                                    if(get_field("link") != ''){
                                                        ?>
                                                        </a>
                                                        <?php
                                                    }
                                                    ?>

                                                    <?php 
                                                    if(get_field("link") != ''){
                                                        ?>
                                                    <a href="<?php the_field("link") ?>" target="_blank" class="btn-linkk">
                                                        Ver video completo
                                                    </a>                                                        
                                                    <?php
                                                    }
                                                    ?>
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
                                                                        <?php the_field("descripcion") ?>
                                                                    </p>

                                                                    <p>
                                                                        ¿Quieres conocer más sobre este entrenamiento?, <br> <strong> contáctanos para agendar tu Demo-Day. </strong>
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

            <div class="swiper-button-prev competencias amc-slider-button">
                <img src="<?php echo get_template_directory_uri() . '/img/arrow-left.png' ?>" alt="" />

            </div>
            <div class="swiper-button-next competencias amc-slider-button">
                <img src="<?php echo get_template_directory_uri() . '/img/arrow-right.png' ?>" alt="" />
            </div>

        </div>

    </div>
</div>
-->
<!-- competencias -->


<!-- Nosotros -->
<div class="light-menu">
    <div id="nosotros" class="row-container flexbox vertical-middle contenedor-general-nosotros" style="background-image: url(<?php echo get_template_directory_uri() . '/img/row-2.jpg'; ?>); background-position: bottom right;">
        <div class="content">
            <div class="swiper-container podemos-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->

                    <?php
                    while (have_rows('item_nosotros', $ID)) : the_row();
                        ?>

                        <div class="swiper-slide">
                            <div class="flexbox vertical-middle">
                                <div class="content">
                                    <div>
                                        <span class="small-title-slider">
                                        	<?php the_field('encabezado_nosotros', $ID);  ?>
                                        </span>
                                    </div>
                                    <div class="title-slider">
                                        <?php the_sub_field('titulo'); ?>
                                    </div>

                                    <div class="desc">
                                        <p style="color: white;">
                                            <?php the_sub_field('descripcion'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    endwhile;
                    ?>


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


<!-- Blog -->
<div class="dark-menu">

    <div id="blog" class="row-container flexbox vertical-middle contenedor-general-blog">
        <div class="content">
            <div class="flexbox vertical-middle horizontal-space">
                <div class="small-title">Blog</div>
<!--
                <div class="suscribete">

                    <style>
                        form p {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }

                        .wpcf7-response-output {
                            font-family: "Raleway";
                            font-size: 12px;
                            margin: 0 !important;
                            border: 0 !important;
                            padding: 0 !important;
                        }

                        div.wpcf7-validation-errors,
                        div.wpcf7-acceptance-missing {
                            display: none !important;
                        }

                        span.wpcf7-not-valid-tip {
                            position: absolute;
                            font-family: "Raleway";
                            font-size: 10px;
                        }


                        @media screen and (max-width: 767px) {
                            form p {
                                flex-wrap: wrap;
                            }

                            form p span input {
                                width: 95% !important;
                            }

                            form p span {
                                width: 77%;
                                margin-right: 22px;
                            }
                        }
                    </style>

                    <?php echo do_shortcode('[contact-form-7 id="263" title="Newsletter"]'); ?>
                </div>
-->
            </div>

            <div class="row flexbox horizontal-center contenedor-blog">

                <?php
                $ind = 1;
                $args = array('post_status' => 'publish', 'posts_per_page' => 3, 'order' => 'DESC');
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
                            </div>

                            <?php
                                }
                                ?>
                        <?php

                            if($ind == 3){
                            ?>

                            <div class="row">
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
                        </div>
                <?php
                            }
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

<!-- Contacto -->
<div class="dark-menu">
    <div id="contacto" class="row-container flexbox contenedor-general-contacto" style="background-image: url(<?php echo get_template_directory_uri() . '/img/contact-bg.jpg'; ?>); background-position: bottom right;">
        <div class="colmn flexbox vertical-middle">
            <div class="content">
                <div>
                    <div class="title"><?php the_field('encabezado_contacto', $ID);  ?></div>
                </div><br>
                <p class="desc color-pink"><?php the_field('descripcion_contacto', $ID);  ?></p>

                <div class="redes">
                <?php
                while (have_rows('redes', $ID)) : the_row();
                ?>
        
                    <a href="<?php the_sub_field('link'); ?>" target="_blank">
                        <img src="<?php the_sub_field('icono'); ?>" alt="">
                    </a>

                <?php
                endwhile;
                ?>

                </div>
            </div>
        </div>
        <div class="colmn flexbox vertical-middle horizontal-center">
            <div class="content">
            <!--
                <?php echo do_shortcode('[contact-form-7 id="196" title="Contacto"]'); ?>
            -->
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                <script>
                hbspt.forms.create({
                        portalId: "5659098",
                        formId: "4a10b877-8128-45d9-aa53-c0a87641f899"
                });
                </script>

            </div>
        </div>
    </div>
</div><!-- Contacto -->

<!-- SCRIPTS -->
<script>
    var home = new Swiper('.home-slider', {
        preventClicks: false,
        autoplay: {
            delay: 9500,
            disableOnInteraction: false,
        },
    });

    var podemos = new Swiper('.podemos-slider', {
        loop: true,
        spaceBetween: 100,
        /*
        autoplay: {
            delay: 9500,
            disableOnInteraction: false,
        },
        */
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
        loop: true,
        simulateTouch: false,
        navigation: {
            nextEl: '.swiper-button-next.testimonios',
            prevEl: '.swiper-button-prev.testimonios',
        },
    });
*/
    var casos = new Swiper('.casosexito-slider', {
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 100,
        simulateTouch: false,
        navigation: {
            nextEl: '.swiper-button-next.cde-button',
            prevEl: '.swiper-button-prev.cde-button',
        },
        
        breakpoints: {
            767: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 0,
            }
        }
        
    });

</script>
<?php
get_footer();
?>
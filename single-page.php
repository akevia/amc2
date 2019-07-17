<?php

/**
 * Template Name: Single Page 
 */

get_header();
?>
<div class="row-container flexbox vertical-middle">
    <h1>
        Capacitando a la industria <br> en el desarrollo de competencias
    </h1>
</div>

<div class="row-container">

</div>

<div class="row-container flexbox" style="background-image: url(<?php echo get_template_directory_uri() . '/img/contact-bg.jpg'; ?>); background-position: bottom right;">
    <div class="colmn flexbox vertical-middle">
        <div class="content">
            <div>
                <span class="title">Contactanos</span>
            </div><br>
            <p>¿Quieres diseñemos un plan de formación para tu empresa?</p>
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
                    <input type="text" name="" id="" class="i-50">
                    <input type="text" name="" id="" class="i-50">
                </div>
                <div class="form-row">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-row">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
get_footer();
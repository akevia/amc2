<?php if (!is_front_page()) {
    $footer_class =  'footer-single';
} else {
    $footer_class =  '';
} ?>
<footer class="flexbox vertical-middle <?php echo $footer_class; ?>">
    <div class="column">
        <div>
            <a href="/" class="footer-logo-link size-0"><img src="<?php echo get_template_directory_uri() . '/img/logo-amc-blue.png' ?>"></a>
            <div class="dec"></div>
            <a href="https://www.caintra.org.mx/" target="_blank" class="footer-logo-link size-1"><img src="<?php echo get_template_directory_uri() . '/img/caintra.png' ?>" alt=""></a>
            <a href="https://www.mckinsey.com/" target="_blank" class="footer-logo-link size-2"><img src="<?php echo get_template_directory_uri() . '/img/mc-kinsey.png' ?>" alt=""></a>
        </div>
<!--
        <?php

        if (is_front_page()) {
            wp_nav_menu(array('theme_location' => 'footer-menu', 'container_class' => 'footer-menu', 'menu_class' => 'footer-menu'));
        } else {
            wp_nav_menu(array('theme_location' => 'footer-menu-singlePage', 'container_class' => 'footer-menu', 'menu_class' => 'footer-menu'));
        }

        ?>
-->
    </div>

    <div class="column">
        <p>
            Dentro del Parque de Investigación e Innovación Tecnológica <br> (PIIT), ubicado en el kilómetro 10 de la autopista al <br> Aeropuerto Internacional Mariano Escobedo
        </p>
    </div>
    <div class="column">
        <a href="https://www.caintra.org.mx/assets/Aviso%20de%20privacidad%20CAINTRA.pdf" target="_blank">Política de privacidad</a>
    </div>

</footer>
<!-- Scripts  -->
<?php wp_footer(); ?>

</body>

</html>
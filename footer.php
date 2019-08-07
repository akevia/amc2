<footer class="flexbox vertical-middle <?php if (is_single()) {
                                            echo 'footer-single';
                                        } ?>">
    <div class="column">
        <div>
            <a href="" class="footer-logo-link size-1"><img src="<?php echo get_template_directory_uri() . '/img/caintra-logo.png' ?>" alt=""></a>
            <a href="" class="footer-logo-link size-2"><img src="<?php echo get_template_directory_uri() . '/img/mckinsey.png' ?>" alt=""></a>
        </div>

        <ul class="footer-menu flexbox">
            <li>Nosotros </li>
            <li>¿Qué podemos hacer por ti?</li>
            <li>Servicios</li>
            <li>Programas</li>
            <li>Blog</li>
            <li>Testimoniales</li>
            <li>Contacto</li>
        </ul>
    </div>
    <div class="column">
        <form action="" class="flexbox horizontal-center">
            <label>Suscríbete</label>
            <input type="text" placeholder="E-mail">
            <button type="submit" class="flexbox vertical-middle horizontal-center">
                <img src="<?php echo get_template_directory_uri() . '/img/arrow.png' ?>" alt="">
            </button>
        </form>
    </div>

</footer>
<!-- Scripts  -->
<?php wp_footer(); ?>

</body>

</html>
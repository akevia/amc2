<?php if (!is_front_page()) {
    $footer_class =  'footer-single';
} else {
    $footer_class =  '';
} ?>
<footer class="flexbox vertical-middle <?php echo $footer_class; ?>">
    <div class="column">
        <div>
            <a href="" class="footer-logo-link size-1"><img src="<?php echo get_template_directory_uri() . '/img/caintra-logo.png' ?>" alt=""></a>
            <a href="" class="footer-logo-link size-2"><img src="<?php echo get_template_directory_uri() . '/img/mckinsey.png' ?>" alt=""></a>
        </div>

        <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'container_class' => 'footer-menu')); ?>

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
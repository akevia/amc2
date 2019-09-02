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

        <?php

        if (is_front_page()) {
            wp_nav_menu(array('theme_location' => 'footer-menu', 'container_class' => 'footer-menu', 'menu_class' => 'footer-menu'));
        } else {
            wp_nav_menu(array('theme_location' => 'footer-menu-singlePage', 'container_class' => 'footer-menu', 'menu_class' => 'footer-menu'));
        }

        ?>

    </div>
    <div class="column">

        <!--
        <form action="" class="flexbox horizontal-center">
            <label>Suscríbete</label>
            <input type="text" placeholder="E-mail">
            <button type="submit" class="flexbox vertical-middle horizontal-center">
                <img src="<?php echo get_template_directory_uri() . '/img/arrow.png' ?>" alt="">
            </button>
        </form>
    -->

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

</footer>
<!-- Scripts  -->
<?php wp_footer(); ?>

</body>

</html>
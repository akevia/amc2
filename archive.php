<?php get_header(); ?>

<?php
$post_type =  get_post_type();
if ($post_type == "descargables") :
    ?>

    <div class="row-container descargable-cont flexbox vertical-middle" style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-descargables.jpg'; ?>)">
        <div class="content">
            <div class="small-title">
                Descargables
            </div>
            <div class="flexbox vertical-middle horizontal-center descargables">
                <?php
                $the_query = new WP_Query(
                    array(
                        'posts_per_page' => -1,
                        'post_type' => $post_type,
                    )
                );
                ?>

                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <?php
                    $file = get_field('archivo');
                    $img = get_field('imagen');
                    ?>
                    <a href="<?php echo $file ?>" class="link-descargable" target="_blank">

                        <img src="<?php echo $img; ?>">

                    </a>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
<?php
endif;
?>
<?php get_footer(); ?>
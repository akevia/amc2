<?php
/*
 * Template Name: Descargables
 */
get_header();
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
                    'post_type' => 'descargables',
                )
            );
            ?>

            <?php while ($the_query->have_posts()) :
                $the_query->the_post();
                $file = get_field('archivo');
                $img_id = get_field('imagen');
                $img = wp_get_attachment_image_src($img_id, 'post-featured-img')[0];
                ?>
            <a href="<?php echo $file ?>" class="link-descargable" target="_blank">
                <div class="descargable-item">
                    <img src="<?php echo $img; ?>">
                    <div class="desc-title">
                        <div class="small-title">
                            <?php the_title(); ?>
                        </div>
                        <div class="icon">
                            <span>
                                <img src="<?php echo get_template_directory_uri() . '/img/download.png' ?>" alt="">
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<?php
get_footer();

<?php


// Data 
$link_externo = get_field('link_externo');

if ($link_externo) {
    header("Location: " . $link_externo);
    exit();
}

$post_type = get_post_type();
get_header(); ?>

<?php if ($post_type == 'post') : ?>
    <?php
    $post_month  = get_the_time('F');
    $post_year = get_the_time('Y');
    $author_id = $post->post_author;
    ?>

    <div class="row-container flexbox vertical-middle post-hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <div class="overlay"></div>
        <div class="content">
            <div class="post-date">
                <?php echo '<time>' . $post_month . ' ' . $post_year . ',' . '</time>'; ?>
                By: <?php the_author_meta('display_name', $author_id); ?>
            </div>
            <div class="post-title">
                <?php the_title(); ?>
            </div>
        </div>

    </div>

    <div class="row-container post-content flexbox vertical-top ">
        <div class="column info">
            <?php


            while (have_posts()) : the_post();;
                the_content(

                    sprintf(
                        wp_kses(

                            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen'),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    )
                );
            endwhile;
            ?>
        </div>

        <div class="column related imagen-destacada">
            <div class="post-related">
                <div class="post-related-title">
                    Articulos relaciondados
                </div>
                <?php
                $tags = wp_get_post_tags($post->ID);
                if ($tags) {
                    $tag_ids = array();
                    foreach ($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                    $args = array(
                        'tag__in' => $tag_ids,
                        'post__not_in' => array($post->ID),
                        'posts_per_page' => 5,
                        'ignore_sticky_posts' => 1
                    );
                    $my_query = new wp_query($args);
                    if ($my_query->have_posts()) {

                        echo '<div class="grid-related">';

                        while ($my_query->have_posts()) :
                            $my_query->the_post();
                            $img = get_the_post_thumbnail_url($post->ID, 'post-featured-img');
                            $authors = get_field('autores');
                            if (!$authors) {
                                $author_id = $post->post_author;
                            }
                            $link_externo = get_field('link_externo');
                            $link_nota = ($link_externo) ? $link_externo : get_the_permalink();
                            ?>

                            <a class="item" href="<?php echo $link_nota; ?>" <?php if ($link_externo) echo "target='_blank'" ?> style='background-image: url("<?php echo $img; ?>");'>
                                <div class="info">
                                    <div class="overlay"></div>
                                    <div class="content">
                                        <div class="date">
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
                                        </div>
                                        <div class="related-title">
                                            <?php the_title(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="leer-mas">
                                    <span>LEER MÁS</span>
                                    <div><img src="<?php echo get_template_directory_uri() . '/img/flecha-blog.png' ?>" alt=""></div>
                                </div>
                            </a>
                        <?php
                        endwhile;
                        echo '</div>';
                    }
                }

                wp_reset_query();
                ?>
            </div>
            <div class="post-img-destacada">
                <?php if (get_field('imagen_destacada')) : ?>
                    <img src="<?php echo get_field('imagen_destacada'); ?>" />
                <?php endif ?>
            </div>
        </div>

    </div>

    <div class="post-footer-author">
        <div class="post-author-content">

            <div class="column">
                <div class="avatar">
                    <img src="<?php echo get_avatar_url($author_id); ?>" alt="">
                </div>
            </div>
            <div class="column">
                <div class="text">
                    <p>Sobre el autor: </p>
                    <p>
                        <?php echo the_author_meta('description', $author_id); ?>
                    </p>
                    <p class="email">
                        <a href="mailto:<?php echo the_author_meta('email', $author_id); ?>"><?php echo the_author_meta('email', $author_id); ?></a>
                    </p>
                </div>
            </div>

        </div>
    </div>
<?php else : ?>
    <div class="row-container descargable-cont  flexbox vertical-middle" style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-descargables.jpg'; ?>)">
        <div class="content">
            <div class="small-title">
                <?php the_title(); ?>
            </div>
            <div class="flexbox horizontal-center descargables">
                <a class="link-descargable" href='<?php echo get_field('archivo'); ?>' target="blank">
                    <img src=" <?php echo get_field('imagen'); ?>" alt="">
                </a>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>
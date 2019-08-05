<?php get_header(); ?>
<div class="row-container flexbox vertical-middle post-hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="overlay"></div>
    <div class="content">
        <div class="post-date">
            <?php
            $post_month  = get_the_time('F');
            $post_year = get_the_time('Y');
            echo '<time>' . $post_month . ' ' . $post_year . ',' . '</time>';
            ?>
            <?php $author_id = $post->post_author; ?>
            By:
            <?php the_author_meta('display_name', $author_id); ?>

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

        // Previous/next post navigation.
        // the_post_navigation(array(
        //     'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('Next', 'twentyfifteen') . '</span> ' .
        //         '<span class="screen-reader-text">' . __('Next post:', 'twentyfifteen') . '</span> ' .
        //         '<span class="post-title">%title</span>',
        //     'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __('Previous', 'twentyfifteen') . '</span> ' .
        //         '<span class="screen-reader-text">' . __('Previous post:', 'twentyfifteen') . '</span> ' .
        //         '<span class="post-title">%title</span>',
        // ));



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
                    'caller_get_posts' => 1
                );
                $my_query = new wp_query($args);
                if ($my_query->have_posts()) {

                    echo '<div class="grid-related">';

                    while ($my_query->have_posts()) :
                        $my_query->the_post();
                        $img = get_the_post_thumbnail_url($post->ID, 'post-featured-img');
                        ?>

                        <div class="item" style='background-image: url("<?php echo $img; ?>");'>
                            <div class="info">
                                <div class="overlay"></div>
                                <div class="content">
                                    <div class="date">
                                        <?php
                                        $post_month  = get_the_time('F');
                                        $post_year = get_the_time('Y');
                                        echo '<time>' . $post_month . ' ' . $post_year . ',' . '</time>';
                                        ?>
                                        <?php $author_id = $post->post_author; ?>
                                        By:
                                        <?php the_author_meta('display_name', $author_id); ?>
                                    </div>
                                    <div class="related-title">
                                        <?php the_title(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="leermas">
                                <a href="<?php the_permalink() ?>"><span>Leer más</span>
                                <span><img src="" alt=""></span>
                            </a>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    echo '</div>';
                }
            }
            $post = $orig_post;
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
<?php get_footer(); ?>
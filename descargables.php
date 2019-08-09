<?php
/*
 * Template Name: Descargables
 */
get_header();
?>
<div class="row-container flexbox vertical-middle">
    <div class="content">
        <div class="titulo">
            Descargables
        </div>
        <div class="grid">
            <?php
            $the_query = new WP_Query(
                array(
                    'posts_per_page' => 30,
                    'post_type' => 'descargables',
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                )
            );
            ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="col-xs-12 file">
                    <a href="<?php the_permalink(); ?>" class="file-title" target="_blank">
                        <i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo get_the_title(); ?>
                    </a>
                    <div class="file-description"><?php the_content(); ?></div>
                </div>
            <?php
            endwhile;

            $big = 999999999; // need an unlikely integer
            echo paginate_links(array(
                'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $the_query->max_num_pages
            ));

            wp_reset_postdata();
            ?>
            <div class="item"></div>
        </div>
    </div>
</div>
<?php
get_footer();

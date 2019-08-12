<?php
get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>

<div class="row-container blog-page flexbox vertical-top blog" style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-descargables.jpg'; ?>)">
    <div class="container">
        <div class="title">
            Blog
        </div>
        <br>
        <br>
        <div class="card-container">
            <?php
            $args = array(
                'posts_per_page' => 9,
                'post_type' => 'post',
                'post_status' => 'publish',
                'paged'          => $paged
            );
            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
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
            endif;
            wp_reset_query();
            ?>
        </div>
        <div class="pagination">
            <?php
            $total_pages = $the_query->max_num_pages;

            if ($total_pages > 1) {

                $current_page = max(1, get_query_var('paged'));

                echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => 'page/%#%',
                    'current' => $current_page,
                    'total' => $total_pages,
                    'prev_text'    => __('« '),
                    'next_text'    => __(' »'),
                ));
            }
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
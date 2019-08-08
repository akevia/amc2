<?php get_header(); ?>

<div class="row-container search-page flexbox vertical-top">
    <div class="container">

        <?php
        $s = get_search_query();
        $args = array(
            's' => $s
        );

        // The Query
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {

            ?>

            <div class="search-title">
                <?php _e("<h1>Resultados de busqueda de  '" . get_query_var('s') . "'</h1>"); ?>
            </div>
            <div class="card-container">
                <?php
                while ($the_query->have_posts()) {
                    $the_query->the_post();

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
                }
                ?>

            </div>
        <?php
        } else {
            ?>
            <div class="content">
                <h2 style='font-weight:bold;color:#000; font-family: "Raleway"'>Sin resultados</h2>
                <div class="alert alert-info" style="font-family: 'Raleway'">
                    <p>Lo sentimos, no se encontró ningún resultado con el criterio de búsqueda. <br> Intenta de nuevo con otras palabras.</p>
                </div>
            </div>
        <?php } ?>

    </div>
</div>

<?php get_footer(); ?>
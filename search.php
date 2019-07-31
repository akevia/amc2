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
                    $img = get_the_post_thumbnail($post->ID, 'post-result-search',  array('class' => 'alignleft'));

                    ?>
                    <div class="card-item">

                        <div class="card-content">
                            <div class="card-img">

                                <?php if ($img) {
                                    echo $img;
                                } else {
                                    echo "   <img src=" . get_template_directory_uri() . '/img/notfound.png' . " alt='Imagen de post'>";
                                } ?>

                            </div>

                            <div class="card-info">
                                <div class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a><br><span class="card-date"><?php the_date() ?></span></div>
                                <hr>

                                <div class="card-author"> <?php the_author() ?></div>
                                <p><?php echo get_post_type($post->ID); ?></p>
                            </div>
                        </div>

                    </div>

                <?php
                }
                ?>

            </div>
        <?php
        } else {
            ?>
            <div class="content">
                <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
                <div class="alert alert-info">
                    <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                </div>
            </div>
        <?php } ?>

    </div>
</div>

<?php get_footer(); ?>
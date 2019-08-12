<?php
add_theme_support('post-thumbnails');
add_image_size('post-result-search', 120, 320);
add_image_size('Header-Entrada', 1920, 1080);
add_image_size('post-featured-img', 300, 400, array('center', 'center'));
function amc_scripts()
{
    wp_enqueue_script('jquery');

    wp_enqueue_script('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js', array(), '1.0.0', false);
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), "0.0.2", false);
}
add_action('wp_enqueue_scripts', 'amc_scripts');

// function amc_styles(){
//     wp_enqueue_style( 'header', get_template_directory_uri().'/css/header.css', 1.0.0);
// }

// add_action('init', 'amc_styles');


function acm_styles()
{
    wp_enqueue_style('global', get_template_directory_uri() . '/css/global.css', array(), filemtime(get_template_directory() . '/css/global.css'), false);
    wp_enqueue_style('blog', get_template_directory_uri() . '/css/blog.css', array(), filemtime(get_template_directory() . '/css/blog.css'), false);
    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css', array(), filemtime(get_template_directory() . '/css/header.css'), false);
    wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css', array(), filemtime(get_template_directory() . '/css/footer.css'), false);
    wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css', array(), filemtime(get_template_directory() . '/css/fonts.css'), false);
    wp_enqueue_style('search-page', get_template_directory_uri() . '/css/search-page.css', array(), filemtime(get_template_directory() . '/css/search-page.css'), false);
    wp_enqueue_style('single', get_template_directory_uri() . '/css/single.css', array(), filemtime(get_template_directory() . '/css/single.css'), false);
    wp_enqueue_style('single-post', get_template_directory_uri() . '/css/single-post.css', array(), filemtime(get_template_directory() . '/css/single-post.css'), false);
    wp_enqueue_style('descargable', get_template_directory_uri() . '/css/descargable.css', array(), filemtime(get_template_directory() . '/css/descargable.css'), false);
    wp_enqueue_style('pagination', get_template_directory_uri() . '/css/pagination.css', array(), filemtime(get_template_directory() . '/css/pagination.css'), false);
    wp_enqueue_style('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css', array(), '4.5.0', false);
    wp_enqueue_style('swiper-custom',  get_template_directory_uri() . '/css/swiper-custom.css', array(), filemtime(get_template_directory() . '/css/swiper-custom.css'), false);
    wp_enqueue_style('fontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.5.0', false);
}

add_action('wp_enqueue_scripts', 'acm_styles');

function shapeSpace_display_search_form()
{
    $search_form = '<form method="get" class="main-form-search" id="search-form-alt" action="' . esc_url(home_url('/')) . '">
        <input type="text" class="main-search-input" name="s" id="s" >
	</form>';
    return $search_form;
}
add_shortcode('display_search_form', 'shapeSpace_display_search_form');

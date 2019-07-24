<?php

function amc_scripts()
{
    wp_enqueue_script('jquery');

    wp_enqueue_script('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js', array(), '1.0.0', false);
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), filemtime(get_template_directory_uri() . '/js/custom.js'), false);
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
    wp_enqueue_style('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css', array(), '4.5.0', false);
    wp_enqueue_style('swiper-custom',  get_template_directory_uri() . '/css/swiper-custom.css', array(), filemtime(get_template_directory() . '/css/swiper-custom.css'), false);
}

add_action('wp_enqueue_scripts', 'acm_styles');

function shapeSpace_display_search_form()
{
    $search_form = '<form method="get" id="search-form-alt" action="' . esc_url(home_url('/')) . '">
		<input type="text" name="s" id="s" placeholder="Search..">
	</form>';
    return $search_form;
}
add_shortcode('display_search_form', 'shapeSpace_display_search_form');

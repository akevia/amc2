<?php

// function amc_scripts(){

// }
// // add_action('init','amc_scripts');

// function amc_styles(){
//     wp_enqueue_style( 'header', get_template_directory_uri().'/css/header.css', 1.0.0);
// }

// add_action('init', 'amc_styles');


function acm_styles()
{
    wp_enqueue_style('global', get_template_directory_uri() . '/css/global.css', array(), filemtime(get_template_directory() . '/css/global.css'), false);
    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css', array(), filemtime(get_template_directory() . '/css/header.css'), false);
    wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css', array(), filemtime(get_template_directory() . '/css/footer.css'), false);
    wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css', array(), filemtime(get_template_directory() . '/css/fonts.css'), false);
}

add_action('wp_enqueue_scripts', 'acm_styles');

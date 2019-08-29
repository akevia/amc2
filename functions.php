<?php
add_theme_support('post-thumbnails');
add_image_size('post-result-search', 240, 640);
add_image_size('Header-Entrada', 1920, 1080);
add_image_size('post-featured-img', 300, 360, array('center', 'center'), true);

function register_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'header-menu-singlePage' => __('Header Menu SinglePage'),
      'footer-menu' => __('Footer Menu'),
      'footer-menu-singlePage' => __('Footer Menu SinglePage')
    )
  );
}
add_action('init', 'register_menus');

function amc_scripts()
{
  wp_enqueue_script('jquery');

  wp_enqueue_script('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js', array(), '1.0.0', false);
  wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), "0.0.2", false);
}
add_action('wp_enqueue_scripts', 'amc_scripts'); {
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





add_action('init', 'amc_post_type_competencias');

function amc_post_type_competencias()
{

  $labels = array(
    'name'               => __('Competencias'),
    'singular_name'      => __('Competencias'),
    'add_new'            => __('Agregar Nuevo Competencia'),
    'add_new_item'       => __('Agregar Nuevo Competencia'),
    'edit_item'          => __('Editar Competencia'),
    'new_item'           => __('Nuevo Competencia'),
    'all_items'          => __('Todos Los Competencias'),
    'view_item'          => __('Ver Competencia'),
    'search_items'       => __('Buscar Competencia'),
    'not_found' => 'No se han encontrado competencias',
    'not_found_in_trash' => 'No se han encontrado competencias en la papelera'
  );

  $args = array(
    'labels'            => $labels,
    'description'       => 'Información especifica de cada competencia',
    'public'            => true,
    'menu_position'     => 5,
    'supports'          => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'page-attributes'),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'query_var'         => 'competencia'
  );

  register_post_type('competencia', $args);
}



function taxonomias_competencias()
{
  register_taxonomy(
    'modulos_competencias',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
    'competencia',        //post type name
    array(
      'hierarchical' => true,
      'label' => 'Módulos',  //Display name
      'query_var' => true,
      'rewrite' => array(
        'slug' => 'slug_modulos_competencias', // This controls the base slug that will display before each term
        'with_front' => false // Don't display the category base before 
      )
    )
  );
}
add_action('init', 'taxonomias_competencias');

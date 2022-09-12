<?php

// THEME ENQUEUE --------------------------------------------------

function add_theme_scripts()
{
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), 1.1, true);
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

// EXCERPT LENGTH SUPPORT ---------------------------------------------

function new_excerpt_length($length)
{
  return 25;
}
add_filter('excerpt_length', 'new_excerpt_length');

// MENU SUPPORT -------------------------------------------------------

add_action('init', 'register_my_menus');

function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'extra-menu' => __('Extra Menu'),
      'footer-menu' => __('Footer Menu')
    )
  );
}

// THUMBNAIL SUPPORT --------------------------------------------------

add_theme_support('post-thumbnails');

// NAV CLASS ----------------------------------------------------------

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

// CUSTOM BLOCKS ------------------------------------------------------

add_action('acf/init', 'my_acf_init_block_types');

function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('hero'),
            'description'       => __('A custom hero block.'),
            'render_template'   => 'template-parts/blocks/hero-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array("hero"),
        ));

        acf_register_block_type(array(
          'name'              => 'news',
          'title'             => __('news'),
          'description'       => __('A custom news block.'),
          'render_template'   => 'template-parts/blocks/news-block.php',
          'category'          => 'formatting',
          'icon'              => 'admin-comments',
          'keywords'          => array("news"),
      ));

        acf_register_block_type(array(
          'name'              => 'content-text',
          'title'             => __('content-text'),
          'description'       => __('A custom content-text block.'),
          'render_template'   => 'template-parts/blocks/content-text-block.php',
          'category'          => 'formatting',
          'icon'              => 'admin-comments',
          'keywords'          => array("content-text"),
      ));

        acf_register_block_type(array(
          'name'              => 'page-title',
          'title'             => __('page-title'),
          'description'       => __('A custom page-title block.'),
          'render_template'   => 'template-parts/blocks/page-title-block.php',
          'category'          => 'formatting',
          'icon'              => 'admin-comments',
          'keywords'          => array("page-title"),
      ));

        acf_register_block_type(array(
          'name'              => 'product',
          'title'             => __('product'),
          'description'       => __('A custom product block.'),
          'render_template'   => 'template-parts/blocks/product-block.php',
          'category'          => 'formatting',
          'icon'              => 'admin-comments',
          'keywords'          => array("product"),
      ));
    }
}

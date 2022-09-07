<?php
function add_theme_scripts()
{
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), 1.1, true);
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');


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

function new_excerpt_length($length)
{
  return 25;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_action('init', 'register_my_menus');

add_theme_support('post-thumbnails');

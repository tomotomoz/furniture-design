<?php

function my_enqueue_styles()
{
  wp_enqueue_style('reset', get_stylesheet_uri(), array(),  false, 'all');
  wp_enqueue_style('style', get_stylesheet_uri(), array(), false, 'all');
  wp_enqueue_script('my-script', get_template_directory_uri() . '/script.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

add_theme_support('post-thumbnails');

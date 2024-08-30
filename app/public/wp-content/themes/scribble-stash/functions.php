<?php

function scribble_files() {
  // first arg: nickname (taco) for stylsheet, second arg: location that points toward file
  wp_enqueue_style('scribble_styles', get_stylesheet_uri());
}

// Instructions from me to WordPress. First argument tells WP what type of instructions we are providing, second is the name of the function we want to run
add_action('wp_enqueue_scripts', 'scribble_files' );

function scribble_features() {
  add_theme_support('title-tag');
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
}

add_action('after_setup_theme', 'scribble_features');

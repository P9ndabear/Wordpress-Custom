<?php
// Thema-instellingen en features
function capybara_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
  register_nav_menus(array(
    'primary' => 'Hoofdmenu',
  ));
}
add_action('after_setup_theme', 'capybara_setup');

// Widgetgebied registreren
function capybara_widgets_init() {
  register_sidebar(array(
    'name' => 'Sidebar',
    'id'   => 'sidebar-1',
  ));
}
add_action('widgets_init', 'capybara_widgets_init');

// CSS en JS laden
function capybara_scripts() {
  wp_enqueue_style('capybara-style', get_stylesheet_uri());

  wp_enqueue_script(
    'capybara-script',
    get_template_directory_uri() . '/js/main.js',
    array(),
    '1.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'capybara_scripts');
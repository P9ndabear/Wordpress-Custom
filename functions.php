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
 
// CSS laden
function capybara_scripts() {
  wp_enqueue_style('capybara-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'capybara_scripts');
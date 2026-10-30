<?php
function capybara_styles() {
  wp_enqueue_style('capybara-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'capybara_styles');
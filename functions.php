<?php
function bluetheme_styles() {
  wp_enqueue_style('bluetheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'bluetheme_styles');
<?php
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('zenweb-child', get_stylesheet_directory_uri() . '/assets/css/compact.css', [], '1.0.0');
});

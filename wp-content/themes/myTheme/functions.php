<?php
// Enqueue les styles
function landing_page_enqueue_styles() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'landing_page_enqueue_styles');

// Support des thumbnails
add_theme_support('post-thumbnails');

// Ajouter le support des menus
function register_my_menu() {
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_my_menu');
?>

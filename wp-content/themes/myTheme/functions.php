<?php
// Enqueue les styles
function landing_page_enqueue_styles() {
    // Enqueue Tailwind
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/style.css');

    // Enqueue Custom Styles
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/custom-style.css');

    // Enqueue Custom Slider Script
    wp_enqueue_script('custom-slider', get_template_directory_uri() . '/scripts/custom-slider.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'landing_page_enqueue_styles');



// Support des thumbnails
add_theme_support('post-thumbnails');

// Ajouter le support des menus
function register_my_menu() {
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_my_menu');

// Désactiver la barre d'outils d'administration pour tous les utilisateurs
add_filter('show_admin_bar', '__return_false');
?>

<?php

// Theme Setup
function appscrip_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary-menu' => 'Primary Menu'
    ]);
}
add_action('after_setup_theme', 'appscrip_setup');


// Enqueue CSS & JS
function appscrip_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'appscrip_assets');

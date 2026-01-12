<?php

function protheme_assets() {
  wp_enqueue_style('protheme-style', get_stylesheet_uri());
  wp_enqueue_script('protheme-js', get_template_directory_uri() . '/assets/js/main.js', [], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'protheme_assets');


function protheme_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'gallery']);
    add_theme_support('custom-logo');


    register_nav_menus([
        'main-menu' => 'Main Menu',
    ]);

    show_admin_bar(false);
}
add_action('after_setup_theme', 'protheme_setup');
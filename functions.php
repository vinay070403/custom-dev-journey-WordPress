<?php
function devjourney_enqueue_styles()
{
    wp_enqueue_style('devjourney-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'devjourney_enqueue_styles');

function devjourney_widgets_init() {
    register_sidebar([
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
}
add_action('widgets_init', 'devjourney_widgets_init');


function devjourney_theme_setup()
{
    // Enable featured images
    add_theme_support('post-thumbnails');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Register navigation menus
    register_nav_menus([
        'primary' => __('Primary Menu', 'devjourney'),
        'main-menu' => __('Main Menu', 'dev-journey'),
    ]);
}
add_action('after_setup_theme', 'devjourney_theme_setup');

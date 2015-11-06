<?php
add_theme_support('post-thumbnails');

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

function enqueue_styles() {
    wp_enqueue_style('meemim-styles', get_stylesheet_uri().'style.css');
    wp_enqueue_style('meemim-font-awesome', dirname(get_stylesheet_uri()).'/font/font-awesome/css/meemim.css');
}

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('meemim-style', get_stylesheet_uri());
    wp_enqueue_style('meemim-font-awesome', dirname(get_stylesheet_uri()).'/font/font-awesome/css/meemim.css');
    wp_enqueue_style('meemim-bootstrap', dirname(get_stylesheet_uri()).'/css/bootstrap/css/bootstrap.css');
    wp_enqueue_style('meemim-bootstrap', dirname(get_stylesheet_uri()).'/css/bootstrap/css/bootstrap-theme.css');
});

function enqueue_scripts () {
    wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
    wp_enqueue_script('html5-shim');
}


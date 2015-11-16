<?php
add_theme_support('post-thumbnails');
add_image_size('meemim', 258, 282, array('x_crop_position' => 'center', 'y_crop_position' => 'center'));

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
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
    wp_enqueue_style('meemim-media', dirname(get_stylesheet_uri()).'/media-queries.css');
});

function enqueue_scripts () {
    wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
    wp_enqueue_script('html5-shim');
    wp_enqueue_script('jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
    wp_enqueue_script('bootstrap-js', dirname(get_stylesheet_uri()).'/css/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script('function-js', dirname(get_stylesheet_uri()).'/js/functions.js');
    wp_enqueue_script('BlackWhite-js', dirname(get_stylesheet_uri()).'/js/jquery.BlackAndWhite.js');

}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

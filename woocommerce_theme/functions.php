<?php


function add_stylesheet(){
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '' , 1 , 'all');
    wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts','add_stylesheet');

function load_javascript(){
    wp_register_script('custom',get_template_directory_uri().'./app.js','jquery',1,);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts','load_javascript');

// add menu
add_theme_support('menus');
// register menus
register_nav_menus(
    array(
        'top-menu' => __('Top Menu','theme')
    )
);

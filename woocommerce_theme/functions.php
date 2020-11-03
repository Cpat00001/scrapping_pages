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
// add featured image to CMS single-page as thumbnail
add_theme_support('post-thumbnails');

// set image size in single-page
add_image_size('post_image_size',900,600,false);

// create a widget in CMS sidebar
register_sidebar(
    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'

    )
);


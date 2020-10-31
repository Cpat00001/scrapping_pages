<?php


function add_stylesheet(){
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '' , 1 , 'all');
    wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts','add_stylesheet');
<?php

function scandinavian_stylesheet(){
    wp_register_style('scandinavian',get_template_directory_uri() . '/style.css', '');
    wp_enqueue_style('scandinavian');
}
add_action('wp_enqueue_scripts','scandinavian_stylesheet');

// add javascript
function add_javascript(){
    wp_register_script('custom_javascript',get_template_directory_uri(). '/app.js', array('jquery'),'1',true);
    wp_enqueue_script('custom_javascript');
}
add_action('wp_enqueue_scripts','add_javascript');

// add menu
add_theme_support('menus');

register_nav_menus(array(
        'top-menu' => 'Top Menu',
    ));
//  add thumbnail for a post
add_theme_support('post-thumbnails');
// add image size/thumbnails
add_image_size('custom-size', 1100, 550, false);

// add widget
function add_menu_widget(){
    register_sidebar(array(
        'name' => 'Custom Page Sidebar',
        'id' => 'custom-page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init','add_menu_widget');
// add blog-sidebar
    register_sidebar(array(
        'name'=>'Blog Sidebar',
        'id' => 'blog-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title'=>'</h4>',
    ));
// add woocommerce
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

?>


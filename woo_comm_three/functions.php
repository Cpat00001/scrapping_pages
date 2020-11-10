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
?>


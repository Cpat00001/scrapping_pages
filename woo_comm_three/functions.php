<?php

function scandinavian_stylesheet(){
    wp_register_style('scandinavian',get_template_directory_uri() . '/style.css', '');
    wp_enqueue_style('scandinavian');
}
add_action('wp_enqueue_scripts','scandinavian_stylesheet');

?>
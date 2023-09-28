<?php 

function montheme_support(){
   add_theme_support('title-tag'); 
}

function montheme_register_assets(){
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');
}

add_action('after_setup_theme', 'montheme_support');
// add_action('wp_enqueue_scripts', 'montheme_register_assets');
?>
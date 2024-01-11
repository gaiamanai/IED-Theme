<?php

/**
 * Functions.
 */


 function tema_ied_enqueue_scripts_and_styles() {
    // Inlcudo foglio di stile principlae
    wp_enqueue_style( 'style', get_stylesheet_uri( 'style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'), 'all') );
    wp_enqueue_script( 'index', get_template_directory_uri() . '/assets/js/index.js', array(), wp_get_theme()->get('Version'), true );
 }

 add_action('wp_enqueue_scripts', 'tema_ied_enqueue_scripts_and_styles');

?>
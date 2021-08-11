<?php

function needed_styles_and_scripts_enqueue() {
    // Custom script
    wp_enqueue_script( 'st_custom_script', get_stylesheet_directory_uri() . '/assets/javascript/script.js' , array( 'jquery' ) );

   // enqueue style  

}

add_action( 'wp_enqueue_scripts', 'needed_styles_and_scripts_enqueue');
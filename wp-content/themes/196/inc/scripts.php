<?php
// Theme css & js

function base_scripts_styles() {

    wp_enqueue_style( 'index.css', get_template_directory_uri() . '/html/public/styles/index.css');

    wp_enqueue_script( 'runtime_js', get_template_directory_uri() . '/html/public/js/runtime.js', '', '', true );
    wp_enqueue_script( 'es2015_polyfills_js', get_template_directory_uri() . '/html/public/js/es2015-polyfills.js', '', '', true );
    wp_enqueue_script( 'index_js', get_template_directory_uri() . '/html/public/js/index.js', '', '', true );

}
add_action( 'wp_enqueue_scripts', 'base_scripts_styles' );
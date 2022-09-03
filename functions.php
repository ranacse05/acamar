<?php
/**
 * Main function file.
 *
 * @package Acamar
 */

function acamar_enqueue_scripts(){

    //Register Style
    wp_register_style( 'style-css', get_stylesheet_uri(),[], filemtime(get_template_directory().'/style.css'),'all');
    wp_register_style( 'bootstrap-css', get_template_directory_uri().'/assets/src/library/css/bootstrap.css',[], filemtime(get_template_directory().'/assets/src/library/css/bootstrap.css'),'all');

    //Register Scripts
    wp_register_script('main-js',get_template_directory_uri().'/assets/main.js',[],filemtime(get_template_directory().'/assets/main.js'),true);
    wp_register_script('bootstrap-js',get_template_directory_uri().'/assets/src/library/js/bootstrap.min.css',['jquery'],filemtime(get_template_directory().'/assets/main.js'),true);

    //Enqueue Style
    wp_enqueue_style( 'style-css' );
    wp_enqueue_style( 'bootstrap-css' );

    //Enqueue Scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script( 'bootstrap-js' );
}

add_action( 'wp_enqueue_scripts', 'acamar_enqueue_scripts' );
?>

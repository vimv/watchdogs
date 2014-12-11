<?php


function watchdogs_scripts() {
	
	wp_enqueue_style( 'normalize.css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/css/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'style.css', get_bloginfo( 'stylesheet_url' ) );
	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'watchdogs', get_template_directory_uri() . '/js/watchdogs.js', array('jquery'), false, true );
	wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/js/bootstrap/js/bootstrap.min.js', array('jquery'), false, true );
	
}
add_action( 'wp_enqueue_scripts', 'watchdogs_scripts' );
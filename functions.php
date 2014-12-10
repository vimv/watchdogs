<?php


function watchdogs_scripts() {
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'watchdogs', get_template_directory_uri() . '/js/watchdogs.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'watchdogs_scripts' );
<?php
global $tabs;

function watchdogs_scripts() {
	
	wp_enqueue_style( 'normalize.css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/css/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'style.css', get_bloginfo( 'stylesheet_url' ) );
	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'watchdogs', get_template_directory_uri() . '/js/watchdogs.js', array('jquery'), false, true );
	wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/js/bootstrap/js/bootstrap.min.js', array('jquery'), false, true );
	
}
add_action( 'wp_enqueue_scripts', 'watchdogs_scripts' );
add_theme_support( 'post-thumbnails' );

function start_tabs($attr, $content){
	global $tabs;
	return '<div class="table"><ul class="nav nav-tabs" role="tablist">'.do_shortcode(str_replace("<br />", '', $content)).'</ul></div>' . 
	'<div class="tab-content row">' .
		$tabs . 
	'</div>';
}
add_shortcode("start_tabs","start_tabs");

function tab($attr, $content = false){
	
	$a = shortcode_atts( array(
	    'tab_title' => 'Title',
		'content_title' => ($attr['content_title']) ? $attr['content_title'] : $attr['tab_title'],
		'active' => ''
	), $attr );
	
	set_tab_content($a, $content);
	
	return '<li role="presentation" class="' . $a['active'] . '">
				<a href="#' . strtolower($a['tab_title']) . '" aria-controls="' . strtolower($a['tab_title']) . '" role="tab" data-toggle="tab">' . 
					$a['tab_title'] . 
				'</a>
			</li>';
}
add_shortcode("tab", "tab");

function set_tab_content($atts, $content = ''){
	global $tabs;
	
	$tabs .= '<div id="' . strtolower($atts['tab_title']) . '" role="tabpanel" class="tab-pane ' . $atts['active'] . ' col-sm-7" >' .
				'<div class="tab-title">' . $atts['content_title'] . '</div>' .
				'<div class="tab-content">' . $content . '</div>' .
			'</div>';
}
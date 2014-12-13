<?php
global $tabs;

function watchdogs_scripts() {
	
	wp_enqueue_style( 'normalize.css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/css/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'style.css', get_bloginfo( 'stylesheet_url' ) );
	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'watchdogs', get_template_directory_uri() . '/js/watchdogs.js', array('jquery'), false, true );
	wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/js/bootstrap/js/bootstrap.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'jquery.scrollTo.min.js', get_template_directory_uri() . '/js/jquery.scrollTo.min.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'watchdogs_scripts' );
add_theme_support( 'post-thumbnails' );

function watchdogs_customize_register( $wp_customize ) {
	
	// === Menu Settings
	$wp_customize->add_section( 'watchdogs_menu' , array(
		'title'       => __( 'Menu Settings', 'watchdogs' ),
		'description' => 'Menu Settings',
	));
		$wp_customize->add_setting( 'home_link' , array(
			'default'  => 'Home'
		));
		
		$wp_customize->add_control( 'home_link', array(
			'label'      => __( 'Home Link', 'watchdogs' ),
			'settings'   => 'home_link',
			'section'    => 'watchdogs_menu',
		) ) ;
		
		query_posts(array(
			'posts_per_page' => -1,
			'meta_key' => 'weight',
			'orderby' => 'meta_value',
			'order' => 'ASC'
		));
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			$menu_id = str_replace('-', '_', sanitize_title(get_the_title())) . '_link';
			$wp_customize->add_setting( $menu_id , array(
				'default'  => get_the_title()
			));
		endwhile; endif;
		
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			$menu_id = str_replace('-', '_', sanitize_title(get_the_title())) . '_link';
			$wp_customize->add_control( $menu_id, array(
				'label'      => __( get_the_title() . ' Link', 'watchdogs' ),
				'settings'   => $menu_id,
				'section'    => 'watchdogs_menu',
			) ) ;
		endwhile; endif;
	// === /Menu Settings
	
	$wp_customize->add_section( 'watchdogs_images' , array(
		'title'       => __( 'Logo Images', 'watchdogs' ),
		'description' => 'Site Images',
	) );
   
	   $wp_customize->add_setting( 'header_logo' , array(
			'default'     => get_bloginfo('template_url').'/images/logo.png'	
		) );
		
		$wp_customize->add_setting( 'footer_logo' , array(
			'default'     => get_bloginfo('template_url').'/images/watchdog-logo-footer.png'	
		) );
			
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo', array(
			'label'        => __( 'Header Logo', 'mytheme' ),
			'settings'   => 'header_logo',
			'section'    => 'watchdogs_images',
		) ) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo', array(
			'label'        => __( 'Footer Logo', 'mytheme' ),
			'settings'   => 'footer_logo',
			'section'    => 'watchdogs_images',
		) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo', array(
		'label'        => __( 'Header Logo', 'watchdogs' ),
		'settings'   => 'header_logo',
		'section'    => 'watchdogs_images',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo', array(
		'label'        => __( 'Header Logo', 'watchdogs' ),
		'settings'   => 'footer_logo',
		'section'    => 'watchdogs_images',
	) ) );
	
	//Social Media Section
	$wp_customize->add_section( 'watchdogs_social_media' , array(
		'title'       => __( 'Social Media', 'watchdogs' ),
		'description' => 'Site social logos and links',
	) );
	//Social Links
	$wp_customize->add_setting( 'face_link' , array(
		'default'     => 'https://www.facebook.com/'	
	) );
	
	$wp_customize->add_setting( 'twitter_link' , array(
		'default'     => 'https://www.twitter.com/'	
	) );
	
	$wp_customize->add_setting( 'linkedin_link' , array(
		'default'     => 'https://www.linkedin.com/'		
	) );
	
	$wp_customize->add_control( 'face_link', array(
		'label'      => __( 'Facebook Link', 'watchdogs' ),
		'settings'   => 'face_link',
		'section'    => 'watchdogs_social_media',
	) ) ;
	
	$wp_customize->add_control(  'twitter_link', array(
		'label'      => __( 'Twitter Link', 'watchdogs' ),
		'settings'   => 'twitter_link',
		'section'    => 'watchdogs_social_media',
	) ) ;
	
	$wp_customize->add_control( 'linkedin_link', array(
		'label'      => __( 'Linkedin Link', 'watchdogs' ),
		'settings'   => 'linkedin_link',
		'section'    => 'watchdogs_social_media',
	) ) ;
	
	
	$wp_customize->add_setting( 'header_social_face' , array(
		'default'     => get_bloginfo('template_url').'/images/facebook.png'	
	) );
	
	$wp_customize->add_setting( 'header_social_twitter' , array(
		'default'     => get_bloginfo('template_url').'/images/twitter.png'	
	) );
	
	$wp_customize->add_setting( 'header_social_linked' , array(
		'default'     => get_bloginfo('template_url').'/images/linkedin.png'	
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_social_face', array(
		'label'      => __( 'Facebook Header Image', 'watchdogs' ),
		'settings'   => 'header_social_face',
		'section'    => 'watchdogs_social_media',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_social_twitter', array(
		'label'      => __( 'Twitter Header Image', 'watchdogs' ),
		'settings'   => 'header_social_twitter',
		'section'    => 'watchdogs_social_media',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_social_linked', array(
		'label'      => __( 'Linkedin header Image', 'watchdogs' ),
		'settings'   => 'header_social_linked',
		'section'    => 'watchdogs_social_media',
	) ) );
	
	
	//Settings Social Footer
	
	$wp_customize->add_setting( 'footer_social_face' , array(
		'default'     => get_bloginfo('template_url').'/images/facebook-circle.png'	
	) );
	
	$wp_customize->add_setting( 'footer_social_twitter' , array(
		'default'     => get_bloginfo('template_url').'/images/twitter-circle.png'	
	) );
	
	$wp_customize->add_setting( 'footer_social_linked' , array(
		'default'     => get_bloginfo('template_url').'/images/linkedin-circle.png'	
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_social_face', array(
		'label'      => __( 'Facebook Header Image', 'watchdogs' ),
		'settings'   => 'footer_social_face',
		'section'    => 'watchdogs_social_media',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_social_twitter', array(
		'label'      => __( 'Twitter Footer Image', 'watchdogs' ),
		'settings'   => 'footer_social_twitter',
		'section'    => 'watchdogs_social_media',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_social_linked', array(
		'label'      => __( 'Linkedin header Image', 'watchdogs' ),
		'settings'   => 'footer_social_linked',
		'section'    => 'watchdogs_social_media',
	) ) );
	
}
add_action( 'customize_register', 'watchdogs_customize_register' );

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
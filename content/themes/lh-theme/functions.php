<?php

if ( ! function_exists( 'lane_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function lane_theme_setup() {
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'lane_theme' ),
	) );

	// hide WP admin bar on front end.
	show_admin_bar( false ); 
}
endif;
add_action( 'after_setup_theme', 'lane_theme_setup' );


/**
 * Enqueue scripts and styles.
 */
function lane_theme_scripts() {
	// add required WP stylesheet ( theme-name -> style.css )
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	
	// add main app stylesheet ( theme-name -> public/css/app.css )
	wp_enqueue_style( 'custom-app-syles', get_template_directory_uri().'/public/css/app.css' );

	wp_enqueue_style( 'custom-app-syles', get_template_directory_uri().'/public/css/portfolio.css' );
	
	// add main js file to footer
	wp_enqueue_script( 'main-js', get_template_directory_uri().'/public/js/app.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'lane_theme_scripts' );



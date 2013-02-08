<?php

// Do some basic theme set up
function basic_theme_setup() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	add_theme_support('automatic-feed-links');
	add_theme_support( 'post-thumbnails' );
}

add_action('init', 'basic_theme_setup');

// Register navigation menus
function register_basic_menus() {
	register_nav_menus(
    	array('header-menu' => 'Header Menu')
  	);
}

add_action('init', 'register_basic_menus');

// Register dynamic sidebars
function register_basic_sidebars() {
	if(function_exists('register_sidebar')) {
		register_sidebar(array(
	  		'name' => 'Primary Sidebar',
	  		'description' => 'This is the primary page sidebar.',
	  		'before_title' => '<h2 class="widgettitle">',
	  		'after_title' => '</h2>',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
	  		'after_widget' => '</div>'
		));
	}
}

add_action('init', 'register_basic_sidebars');

// Load Javascript & CSS files
function load_scripts() {
	
	wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	$url = get_bloginfo('template_url').'/js/';
	if (!is_admin()) {
		wp_enqueue_script('custom', $src = $url . 'custom.js', array('jquery'), false, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}

add_action('wp_enqueue_scripts', 'load_scripts');

// Page titles
function basic_title() {

	global $page, $paged;

	wp_title( '|', true, 'right' );

	bloginfo( 'name' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		echo " | $site_description";
	}

	if ( $paged >= 2 || $page >= 2 ) {
		echo ' | ' . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
	}
}
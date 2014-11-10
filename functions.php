<?php

// Do some basic theme set up
function basic_theme_setup() {
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_generator' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
}

add_action( 'init', 'basic_theme_setup' );

// Register navigation menus
function register_basic_menus() {
	register_nav_menus(
    	array(
			'header-menu' => 'Header Menu'
		)
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

add_action( 'widgets_init', 'register_basic_sidebars' );

// Load Javascript & CSS files
function basic_load_scripts() {
	
	wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), false, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'basic_load_scripts' );

// Format title element
function basic_title( $title, $sep ) {
	global $page, $paged;

	if ( is_feed() ) return $title;

	// Add the blog name
	$title .= get_bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title .= " $sep $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		$title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );

	return $title;
}

add_filter( 'wp_title', 'basic_title', 10, 2 );
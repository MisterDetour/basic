<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<div class="wrapper">

    <a class="skip-link screen-reader-text" href="#primary">Skip to content</a>

	<header class="site-header" role="banner">
        <nav class="navbar container" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="<?php echo home_url(); ?>">
                    <img class="brand-image" src="<?php echo get_stylesheet_directory_uri(); ?>/logo.png">
                </a>

                <button class="button navbar-burger" data-target="primary-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div><!-- .navbar-brand -->
            
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'header-menu',
                'depth'             => 2,
                'container'         => false,
                'menu_class'        => 'navbar-menu',
                'menu_id'           => 'primary-menu',
                'after'             => '</div>',
                'walker'            => new Navwalker()
            ) );
            ?>
        </nav><!-- .navbar -->
	</header><!--  .site-header -->
	
	<div id="primary" class="main">

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

		<nav class="navbar" role="navigation">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>" width="217"  height="100" loading="eager">
				</a>
				
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
					<?php include( get_stylesheet_directory() . '/svg/menu.svg' ); ?>
				</button>
				
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'header-menu',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'navbar-collapse',
					'menu_class'        => 'nav navbar-nav'
				) );
				?>
			</div><!-- .container -->
		</nav><!-- .navbar -->
	</header><!--  .site-header -->
	
	<div id="primary" class="main">
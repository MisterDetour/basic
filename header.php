<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>

	<!--[if lt IE 9]>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/html5shiv.js"></script>
	<![endif]-->
	
</head>

<body <?php body_class(); ?>>
	
<div class="wrapper">

	<header class="site-header" role="banner">
		<?php $tag = ( is_front_page() || is_home() ) ? 'h1' : 'div'; ?>
		<<?php echo $tag; ?> id="logo"><a href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></<?php echo $tag; ?>>
		
        <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Navbar</a>
                <?php
                wp_nav_menu( array(
                'theme_location'    => 'header-menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div><!-- .container-fluid -->
        </nav><!-- .navbar -->
	</header><!--  .site-header -->
	
	<div class="main">

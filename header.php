<!DOCTYPE html>

<!--[if IE 8 ]>    <html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html <?php language_attributes(); ?>><!--<![endif]-->

<head>

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
<div class="wrapper">

	<header class="site-header" role="banner">
		<?php $tag = ( is_front_page() || is_home() ) ? 'h1' : 'div'; ?>
		<<?php echo $tag; ?> id="logo"><a href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></<?php echo $tag; ?>>
		
		<nav class="main-nav" role="navigation">
			<h2 class="assistive-text">Menu</h2>
			<div class="assistive-text skip-link"><a href="#content" title="Skip to content'">Skip to content</a></div>
			
			<?php wp_nav_menu(array( 'theme_location' => 'header-menu', 'container_id' => 'nav-menu', 'container_class' => 'menu-wrap', 'menu_id' => 'main-menu')); ?>
		</nav><!-- .main-nav -->
	</header><!--  .site-header -->
	
	<div class="main">
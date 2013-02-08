<!doctype html>

<!--[if lte IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 7]><!--><html <?php language_attributes(); ?>><!--<![endif]-->

<head>

	<title><?php basic_title(); ?></title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
<div id="wrapper">
	
	<header id="header" role="banner">
		<?php $tag = ( is_front_page() || is_home() ) ? 'h1' : 'div'; ?>
		<<?php echo $tag; ?> id="logo"><a href="<?php bloginfo('home') ?>/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></<?php echo $tag; ?>>
	</header><!--  #header -->
	
	<nav id="nav" role="navigation">
		<h1 class="assistive-text">Menu</h1>
		<div class="assistive-text skip-link"><a href="#content" title="Skip to content'">Skip to content</a></div>
			
		<?php wp_nav_menu(array( 'theme_location' => 'header-menu', 'container_id' => 'nav-menu', 'container_class' => 'menu-wrap', 'menu_id' => 'main-menu')); ?>
	</nav><!-- #nav -->
	
	<div id="main" class="site-main">
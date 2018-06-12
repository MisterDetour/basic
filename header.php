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
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="wrapper">

	<header class="site-header" role="banner">
		<?php $tag = ( is_front_page() || is_home() ) ? 'h1' : 'div'; ?>
		<<?php echo $tag; ?> id="logo"><a href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></<?php echo $tag; ?>>
		
		<nav class="main-nav" role="navigation">
			<h2 class="assistive-text">Menu</h2>
			<div class="assistive-text skip-link"><a href="#content" title="Skip to content'">Skip to content</a></div>
			
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_id' => 'nav-menu', 'container_class' => 'menu-wrap', 'menu_id' => 'main-menu' ) ); ?>
		</nav><!-- .main-nav -->
	</header><!--  .site-header -->
	
	<div class="main">

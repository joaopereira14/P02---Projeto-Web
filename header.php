<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/hover-min.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/magnific-popup.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/style_me.css"/>

<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,300i,500,500i,600,700,900,900i" rel="stylesheet">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="container">
	  <div class="row">

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp_theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/imgs/logo_odesigner.png"></a>



		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'wp_theme' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
</div>
</div>
</div>

<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ex16
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

<div id="hamburger"><span></span><span></span><span></span></div>

<div id="fixed-nav">
	<div class="overlay">
		<div class="container">
			<div class="six columns">
				<h2>EX16</h2>
				<p>lorem ipsum lol</p>
			</div>
		<nav id="site-navigation" class="main-navigation six columns" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation .six-columns -->
		</div> <!-- .container -->
	</div> <!-- .overlay -->
</div> <!-- #fixed-nav -->

	<header id="masthead" class="site-header <?php if ( is_front_page() && is_home() ) : ?>home<?php endif; ?>" role="banner">
		<?php if ( is_front_page() && is_home() ) : ?>
			<video autoplay loop id="splash-video">
				<!--<source src="http://controlfilms.tv/wp-content/uploads/2015/12/nathan-price-honda-dream-run-small-hover.webm" type="video/webm"/>
				<source src="http://controlfilms.tv/wp-content/uploads/2015/12/nathan-price-honda-dream-run-small-hover.mp4" type="video/mp4" />
<<<<<<< HEAD
	</video>
		<div class="site-branding">

			<svg id="Loggan_RGB" data-name="Loggan RGB" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 455.99 513.54"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M228,466.68L45.34,361.22V150.31l2.25-1.3L228,44.85,410.65,150.31V361.22l-2.25,1.3ZM54.34,356L228,456.29,401.65,356V155.51L228,55.25,54.34,155.51V356Z"/><path class="cls-1" d="M208.65,227.42V241.3H152.23V141.5h56.42v13.8H168.54v27.15h37.61V196.1H168.54v31.32h40.12Z"/><path class="cls-1" d="M279.16,189.81l33.59,51.49H293.94L269,200.5l-25.18,40.8H226.38l33.06-51.72-31-48.08h18.2l23.05,37.77,23.05-37.77h17.59Z"/><path class="cls-1" d="M192,271.5v99.8H175.93V306.84q0-11.15.61-18.28a58,58,0,0,1-5.16,4.74q-3.57,3-14,11.49l-8-10.24,29.35-23.05H192Z"/><path class="cls-1" d="M279,307.83q13.5,0,21.12,8.3t7.62,23.28q0,15-8.8,24.12t-24.49,9.14q-15.7,0-25.06-11.6T240,328.76q0-58.54,47.7-58.54a59.21,59.21,0,0,1,12.66,1.14v13.42a43.13,43.13,0,0,0-12-1.52q-16.23,0-24.19,8.68t-8.65,27.49h0.83a21.71,21.71,0,0,1,9-8.57A29,29,0,0,1,279,307.83Zm-4.17,51.57q8.19,0,12.66-5.31t4.47-14.64q0-9.33-4.25-14.14t-12.51-4.82a18.45,18.45,0,0,0-13.38,4.82q-5.8,5.12-5.57,11.34a25.74,25.74,0,0,0,5.16,16.23A16.45,16.45,0,0,0,274.8,359.39Z"/></svg>

				<h1 class="logotype"><?php //bloginfo( 'name' ); ?></h1>
=======
-->	</video>
		<div class="site-branding logotype">
				<h1><?php bloginfo( 'name' ); ?></h1>
					<?php // <p class="site-description"><?php bloginfo( 'description' ); </p>
					?>
>>>>>>> origin/master
		</div><!-- .site-branding -->
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			<?php else : ?>
				sidtitel här
			<?php endif; ?>
	</header><!-- #masthead -->

<a id="small-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

	<main id="content" role="main">

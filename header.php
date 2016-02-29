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
				<img src="img/logotypex16.png" alt="<?php bloginfo('name')?>">
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
			<!--	<source src="http://controlfilms.tv/wp-content/uploads/2015/12/nathan-price-honda-dream-run-small-hover.webm" type="video/webm"/>
				<source src="http://controlfilms.tv/wp-content/uploads/2015/12/nathan-price-honda-dream-run-small-hover.mp4" type="video/mp4" />
--></video>
		<div class="site-branding">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 456 513.5"><style>.a{fill:#FFF;}</style><path d="M229 510.6L8.3 383.2V128.4l2.7-1.6L229 1l220.7 127.4v254.8l-2.7 1.6L229 510.6zM19.2 376.9L229 498.1 438.8 377V134.7L229 13.5 19.2 134.7V376.9z" class="a"/><polygon points="205.6 221.6 205.6 238.3 137.5 238.3 137.5 117.7 205.6 117.7 205.6 134.4 157.2 134.4 157.2 167.2 202.6 167.2 202.6 183.7 157.2 183.7 157.2 221.6 " class="a"/><polygon points="290.8 176.1 331.4 238.3 308.7 238.3 278.5 189 248.1 238.3 227.1 238.3 267 175.8 229.5 117.7 251.5 117.7 279.4 163.4 307.2 117.7 328.5 117.7 " class="a"/><path d="M185.5 274.8V395.4h-19.4v-77.9c0-9 0.2-16.3 0.7-22.1 -1.3 1.4-3.4 3.3-6.2 5.7 -2.9 2.4-8.5 7-17 13.9l-9.7-12.4 35.5-27.9h16.1V274.8z" class="a"/><path d="M290.6 318.7c10.9 0 19.4 3.3 25.5 10 6.1 6.7 9.2 16.1 9.2 28.1 0 12.1-3.5 21.8-10.6 29.1 -7.1 7.4-16.9 11-29.6 11 -12.6 0-22.7-4.7-30.3-14 -7.5-9.3-11.3-22.4-11.3-39 0-47.2 19.2-70.7 57.6-70.7 6.1 0 11.2 0.5 15.3 1.4v16.2c-4.2-1.2-9-1.8-14.5-1.8 -13.1 0-22.8 3.5-29.2 10.5 -6.4 7-9.9 18.1-10.4 33.2h1c2.6-4.5 6.2-7.9 10.9-10.4C278.9 319.9 284.4 318.7 290.6 318.7M285.6 381c6.6 0 11.7-2.1 15.3-6.4 3.6-4.3 5.4-10.2 5.4-17.7s-1.7-13.2-5.1-17.1c-3.4-3.9-8.5-5.8-15.1-5.8 -6.1-0.2-11.5 1.7-16.2 5.8 -4.7 4.1-6.9 8.7-6.7 13.7 0 7.7 2.1 14.2 6.2 19.6C273.6 378.4 279 381 285.6 381" class="a"/></svg>
			<h1 class="logotype"><?php //bloginfo( 'name' ); ?></h1>
		</div><!-- .site-branding -->
			<?php else : ?>
				sidtitel här
			<?php endif; ?>
	</header><!-- #masthead -->


<!-- <a id="small-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
-->
	<main id="content" role="main">

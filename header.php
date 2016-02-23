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
				<source src="http://controlfilms.tv/wp-content/uploads/2015/12/nathan-price-honda-dream-run-small-hover.webm" type="video/webm"/>
				<source src="http://controlfilms.tv/wp-content/uploads/2015/12/nathan-price-honda-dream-run-small-hover.mp4" type="video/mp4" />
	</video>
		<div class="site-branding">
				<h1 class="logotype"><?php bloginfo( 'name' ); ?></h1>
					<?php // <p class="site-description"><?php bloginfo( 'description' ); </p>
					?>
		</div><!-- .site-branding -->
			<?php else : ?>
			<?php endif; ?>


	</header><!-- #masthead -->

<a id="small-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

	<main id="content" role="main">

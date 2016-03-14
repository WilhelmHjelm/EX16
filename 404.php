<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ex16
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found container">
				<header class="page-header">
					<h1 class="page-title">EXcuse us</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>Sidan du försökte nå finns inte eller har flyttats.</p>

					<a href="<?php echo get_home_url(); ?>"> <p>Tillbaka till start</p></a>
					<a href="javascript:javascript:history.go(-1)"><p>Gå tillbaka till förra sidan</p></a>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

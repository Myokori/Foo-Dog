<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ruby
 */

/*get_header();*/ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php $site_layout = get_theme_mod('ruby_default_site_layout', 'wide-layout'); ?>
	<div id="page" class="hfeed site <?php if ('boxed-layout' === $site_layout) {
																			echo 'container';
																		} ?>">
		<?php if ('boxed-layout' === $site_layout) { ?>
			<div class="row">
			<?php } ?>
				<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'ruby'); ?></a>

				<header id="masthead" class="site-header" role="banner">
					<div class="header-nav-wrapper <?php if ($fixed_navigation) {
																					echo 'm-fix';
																				} ?>">
					<div class="container">
						<div class="row">
							<nav id="site-navigation" class="main-navigation" role="navigation">
								<button id="menu-toggle" class="monpéni" type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse"><?php _e('Menu', 'ruby'); ?></button>
									<div class="col-sm-12">
										<?php
										ruby_header_menu(); // Main navigation MENU A TRANSFORMER EN BURGER 
										?>
									</div>
							</nav><!-- #site-navigation -->
						</div><!-- .row -->
					</div><!-- .container -->
				</div><!-- .header-nav-wrapper -->
					<h1 class="titleSingle">FooDog</h1>
				</div>
				<div class="col-lg-4 middle">
					test
				</div>
				<div class="col-lg-4 right">
					test
				</div>

			</header><!-- #masthead -->
			<?php
			switch ($_GET['cat']) {
				case '2':
					echo 	the_archive_title('<h1 class="page-title jumbotron">', '</h1>');
					break;

				case '3':
					echo 	the_archive_title('<h1 class="page-title jumbotron">', '</h1>');
					break;

				case '4':
					echo 	the_archive_title('<h1 class="page-title jumbotron">', '</h1>');
					break;

				case '5':
					echo 	the_archive_title('<h1 class="page-title jumbotron">', '</h1>');
					break;
			}
			?>
			<div id="content" class="site-content">

				<?php get_sidebar('header'); ?>

				<div class="container main-content-area">

					<?php if (function_exists('bcn_display')) { ?>
						<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
							<?php bcn_display(); ?>
						</div>
					<?php } ?>

<div id="primary" class="content-area <?php echo ruby_primary_content_bootstrap_classes(); ?>">
	<main id="main" class="site-main" role="main">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'single' );

		ruby_the_post_pagination();

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

ruby_get_sidebar();

get_footer();

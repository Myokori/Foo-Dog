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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

				<header id="masthead" class="site-header header-single" role="banner">
					<div class="header-nav <?php if ($fixed_navigation) {
																					echo 'm-fix';
																				} ?>">
				<div class="row">
					<div class="col-lg-4 left">
						<nav class="navbar navbar-default" role="navigation">
							
								<div class="navbar-header burgerSingle">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<i class="fas fa-bars"></i>																	
									</button>
									<a class="navbar-brand singleTitle" href="index.php">FooDog</a>										

									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav">
											<li class="active"><a href="index.php">Home</a></li>
											<li><a href="http://localhost/foodog/?cat=2">Nutrition</a></li>
											<li><a href="http://localhost/foodog/?cat=4">Lifestyle</a></li>
											<li><a href="http://localhost/foodog/?cat=3">Wellness</a></li>
											<li><a href="http://localhost/foodog/?cat=5">Community</a></li>
										</ul>
									</div>															
								</div>
						</div>
							<div class="col-lg-4 middle mid-form">
								<?php echo do_shortcode("[mc4wp_form id='165']"); ?>
							</div>
					<div class="col-lg-4 right">
						<div>
							<img src="https://www.zupimages.net/up/19/21/1i49.png" class="img-nav">																
						</div>
					</div>
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

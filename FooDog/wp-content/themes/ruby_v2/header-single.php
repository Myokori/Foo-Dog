<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div class="main-content-area">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ruby
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
                <section class="single-header row">
                    <div class="col-lg-4 left-single">
                    <nav class="navbar navbar-default" role="navigation">
                            <div class="navbar-header burgerSingle">
                                <button style="border:0;"type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fas fa-bars bar-color"></i>																	
                                </button>
                                <a class="navbar-brand singleTitle" href="index.php">FooDog</a>										

                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="single-menu"><a href="index.php">Home</a></li>
                                        <li class="single-menu"><a href="http://www.foodog.aftercoaching.be/?cat=2">Nutrition</a></li>
                                        <li class="single-menu"><a href="http://www.foodog.aftercoaching.be/?cat=4">Lifestyle</a></li>
                                        <li class="single-menu"><a href="http://www.foodog.aftercoaching.be/?cat=3">Wellness</a></li>
                                        <li class="single-menu"><a href="http://www.foodog.aftercoaching.be/?cat=5">Community</a></li>
                                    </ul>
                                </div>															
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-4 middle-single">
                    <?php echo do_shortcode("[mc4wp_form id='167']"); ?>
                    </div>
                    <div class="col-lg-4 right-single">
                        <img src="https://zupimages.net/up/19/21/d6ob.png" class="single-img" />
                        <span><i class="fas fa-search fa-fw search-single"></i></span>
                    </div>
                </section>

				<?php ruby_header_slider(); ?>
				<?php ruby_call_for_action('header'); ?>

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

					<div class="row">
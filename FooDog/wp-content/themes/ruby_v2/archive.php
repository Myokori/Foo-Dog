<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ruby
 */

get_header(); ?>

<div id="primary" class="content-area col-lg-12">
	<main id="main" class="site-main" role="main">

		<header class="page-header">

		</header><!-- .page-header -->
		<div class="row">
			<section class="archive-posts col-lg-8">
				<?php
				switch ($_GET['cat']) {
					case '2':
						echo do_shortcode("[pt_view id=d76d79cxml]");
						break;

					case '3':
						echo do_shortcode("[pt_view id=b8f0dd4gqm]");
						break;

					case '4':
						echo do_shortcode("[pt_view id=3b43959wo4]");
						break;

					case '5':
						echo do_shortcode("[pt_view id=eca071dn1t]");
						break;
				}
				?>
			</section>
			<section class="col-lg-4">
				<?php echo do_shortcode('[aps-counter theme="theme-4"]'); ?>
				<a href="index.php"><img src="http://localhost/FooDog/wp-content/uploads/2019/05/right-img.jpg" class="right-img" /></a>
			</section>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php

// ruby_get_sidebar();

get_footer();
?>
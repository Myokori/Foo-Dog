<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ruby
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	$post = get_post();
	if ($post) {
		$categories = get_the_category($post->ID);
		foreach ($categories as $category) {
			echo "<p class='cat-name'>" . $category->name . "</p>";
		}
	} ?>
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

		<!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="post-thumbnail">
		<?php
		$thumbnail_size = 'ruby-featured';

		if ('col-sm-12 col-md-12' == ruby_primary_content_bootstrap_classes()) {
			$thumbnail_size = 'ruby-single-featured';
		}
		the_post_thumbnail($thumbnail_size, array('class' => 'single-featured'));
		?>
	</div><!-- .post-thumbnail -->

	<div class="entry-content">
		<div class="row soc-border">
			<div class="col-lg-6">
				<img src="https://zupimages.net/up/19/21/d6ob.png" class="single-img-soc" /><span class="soc-txt-single"> by : THE FARMER'S DOG </span>
			</div>
			<div class="col-lg-6">
				<?php echo do_shortcode("[TheChamp-Sharing style='float:right;']"); ?>
			</div>
		</div>
		<?php ruby_single_content(); ?>
		<div class="social-footer-post">
			<p>
				<h2 class="label-newsletter">Subscribe to the Digest Newsletter</h2>
				<p class="sous-titre">Get health and wellness tips about your dog delivered in your inbox.</p>
				<input type="email" name="EMAIL" placeholder="Your email" class="postMail" required />
				<input type="submit" value="Sign up" class="postBtn" />
			</p>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php /* ruby_entry_footer(); */ ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

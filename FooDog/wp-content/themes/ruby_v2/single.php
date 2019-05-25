<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ruby
 */

get_header('single'); ?>
<div id="primary" class="content-area col-lg-12">
	<main id="main" class="site-main col-lg-8" role="main">

	<?php while (have_posts()):
   the_post();

   get_template_part('template-parts/content', 'single');

   ruby_the_post_pagination();
?> 
<hr/>
	<div class="random-text">
		<div class="img-float">
		<img src="https://zupimages.net/up/19/21/d6ob.png" />
	</div>
	<div class="img-txt">
		"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
	</div>
	</div>
	<div class="featured">
           You might also like
            <hr class="feat-hr">
        </div>
<?php
//Ajout d'articles randoms
echo do_shortcode("[pt_view id=f7d7e5e7ct]");
   // If comments are open or we have at least one comment, load up the comment template.
   if (comments_open() || get_comments_number()):
     comments_template();
   endif;
 endwhile;
// End of the loop.
?>

	</main><!-- #main -->
	<div class="col-lg-4 right-side-single">
		<p class="follow-us">Follow Us</p>
		<i class="fab fa-twitter fa-lg twitter-single"></i>
		<i class="fab fa-lg fb-single"></i>
		<i class="fab fa-instagram fa-lg insta-single"></i>
		<i class="fab fa-pinterest-p fa-lg pint-single"></i>
		<img src="http://www.foodog.aftercoaching.be/wp-content/uploads/2019/05/right-img.png" alt="dog"/>
	</div>
</div><!-- #primary -->

<?php
ruby_get_sidebar();

get_footer();


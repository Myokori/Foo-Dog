<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ruby
 */

?>
			</div><!-- .row -->
		</div><!-- .container -->
		<?php if ( is_front_page() || is_home() ) {
			get_sidebar( 'home' );
		} ?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php ruby_call_for_action( 'footer' ); ?>

		<?php get_sidebar( 'footer' ); ?>

		<div class="site-info">
			<div class="container">
				<div class="row">
					<?php
					$has_footer_nav_menu = has_nav_menu( 'footer' );
					$show_footer_social_icons = get_theme_mod( 'ruby_show_footer_social_icons', 1 );
					?>
					<?php if ( $has_footer_nav_menu || $show_footer_social_icons ) { ?>
						<nav class="footer-menu-wrapper col-sm-6 left-footer">
						
					<?php
						if ( $has_footer_nav_menu ) {
							ruby_footer_menu(); // Footer navigation
						}
					?>
					</nav><!-- .footer-menu-wrapper -->

					<div class="footer-social-icons col-sm-6">
					<?php
						if ( $show_footer_social_icons ) {
							ruby_social_icons();
						}
					?>
					 </div><!-- .footer-social-icons -->
					<?php } ?>

					<div class="footer-text-wrapper">
						<span class="footer-copyright-text">
							<?php
								echo wp_kses_post( do_shortcode( get_theme_mod( 'ruby_custom_footer_text', get_bloginfo( 'name', 'display' ) . ' - &copy; ' . date_i18n( __( 'Y', 'ruby' ) ) . __( '. All Rights Reserved.&lrm;', 'ruby' ) ) ) );
							?>
						</span><!-- .footer-copyright-text -->
						<br />
						<?php ruby_footer_info(); ?>
					</div><!-- .footer-text-wrapper -->
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .site-info -->

		<?php ruby_scroll_to_top(); ?>

	</footer><!-- #colophon -->
	<?php $site_layout = get_theme_mod( 'ruby_default_site_layout', 'wide-layout' ); ?>
	<?php if ( 'boxed-layout' === $site_layout ) { ?>
		</div><!-- .row -->
	<?php } ?>
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
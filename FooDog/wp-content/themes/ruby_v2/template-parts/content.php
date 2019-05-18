<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ruby
 */

?>
<section class="col-lg-6 main-post">
    <?php echo do_shortcode("[pt_view id=5f2006etas]"); ?>
</section>
<section class="col-lg-6 side-posts">
    <?php echo do_shortcode("[pt_view id=647edc0803]"); ?>
</section>
<section class="row">
    <div class="col-lg-8">
        <div class="featured">
            Featured Posts
            <hr class="feat-hr">
        </div>
        <?php echo do_shortcode("[pt_view id=e47256d8b0]"); ?>
        <hr class="feat-post">
        <?php echo do_shortcode("[pt_view id=67fcbc0var]"); ?>
        <hr class="feat-post">
        <?php echo do_shortcode("[pt_view id=ba86971duw]"); ?>
    </div>
    <div class="col-lg-4">
        <?php echo do_shortcode('[aps-counter theme="theme-4"]'); ?>
        <a href="index.php"><img src="http://localhost/FooDog/wp-content/uploads/2019/05/right-img.jpg" class="right-img" /></a>
    </div>
    <?php ruby_scroll_to_top(); ?>
</section>
<section class="row">
    <div class="col-lg-8">
        <div class="featured">
            Lastest Posts
            <hr class="feat-hr">
        </div>
        <?php echo do_shortcode("[pt_view id=a9dc11e3ut]"); ?>
    </div>
</section>
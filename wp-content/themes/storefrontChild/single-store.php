<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <h4>Detta är single.php</h4>
		<?php
		while ( have_posts() ) :
			the_post();
            
			// do_action( 'storefront_single_post_before' );
            
			get_template_part( 'content', 'single' );
            $location =  get_field('image')['sizes']['map']; ?>
           <img src="<?php echo $location; ?>" alt="">
           <?php
           do_action( 'storefront_single_post_bottom', 'storefront_post_nav', 10 );
           // do_action( 'storefront_single_post_after' );
            

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();

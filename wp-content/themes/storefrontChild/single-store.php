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
		while (have_posts()) :
			the_post();

			// do_action( 'storefront_single_post_before' );

			get_template_part('content', 'single');
			/* $image =  get_field('image')['sizes']['map']; ?>
			<img src="<?php echo $image; ?>" alt=""> */

			$location = get_field('map_location');
			if ($location) : ?>
				<div class="acf-map" data-zoom="16">
					<div class="marker" data-lat="<?php echo ($location['lat']); ?>" data-lng="<?php echo ($location['lng']); ?>"></div>
				</div>
				<style type="text/css">
					.acf-map {
						width: 100%;
						height: 400px;
						border: #ccc solid 1px;
						margin: 20px 0;
					}

					/*  Fixes potential theme css conflict. */
					.acf-map img {
						max-width: inherit !important;
					}
				</style>

		<?php

				do_action('storefront_single_post_bottom', 'storefront_post_nav', 10);
			// do_action( 'storefront_single_post_after' );

			endif;
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
do_action('storefront_sidebar');
get_footer();

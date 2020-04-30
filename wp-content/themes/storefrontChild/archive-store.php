<?php

/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        while (have_posts()) :
            the_post(); ?>
            <ul class="link-list min-list">
                <li class="link-list min-list"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php the_excerpt(); ?></li>
                <?php
                echo paginate_links();
                ?>
                <hr>
            </ul> <?php
                // do_action( 'storefront_single_post_before' );

                // get_template_part( 'content', 'single' );

                // do_action( 'storefront_single_post_after' );

                endwhile; // End of the loop.
                    ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
do_action('storefront_sidebar');
get_footer();

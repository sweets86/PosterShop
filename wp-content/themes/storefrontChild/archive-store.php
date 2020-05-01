<?php

/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <ul class="link-list min-list">

            <?php
            while (have_posts()) :
                the_post();
                
            ?>
                <li class="link-list min-list">
                <a href="<?php the_permalink(); ?>"><?php the_title();
                ?></a><p><?php if (has_excerpt()) {
                    echo get_the_excerpt();
                } else {
                    echo wp_trim_words(get_the_content(), 18);
                } ?> <a href="<?php the_permalink(); ?>" >Mer info</a></p>
                </li>
                <?php
                echo paginate_links();
                ?>
                <hr>
        </ul><?php
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

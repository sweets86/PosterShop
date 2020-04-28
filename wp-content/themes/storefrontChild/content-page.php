<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package storefront
 */

?>
<h4>Detta är content-page, används inte för blogg och shop.</h4>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * Functions hooked in to storefront_page add_action
	 *
	 * @hooked storefront_page_header          - 10
	 * @hooked storefront_page_content         - 20
	 */
	do_action( 'storefront_page' );
	?>
</article><!-- #post-## -->

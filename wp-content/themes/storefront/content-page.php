<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package storefront
 */
?>

<article id="post-<?php the_ID(); ?>">
	<?php
	/**
	 * @hooked storefront_page_header - 10
	 * @hooked storefront_page_content - 20
	 */
	// do_action( 'storefront_page' );

	the_content();
	?>
</article><!-- #post-## -->

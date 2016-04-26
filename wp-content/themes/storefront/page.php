<?php get_header(); ?>

	<div id="page">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php
			/**
			 * @hooked storefront_display_comments - 10
			 */
			do_action( 'storefront_page_after' );
			?>

		<?php endwhile; // end of the loop. ?>
	</div>

<?php get_footer(); ?>
<?php get_header(); ?>

	<div id="home">
		<div id="delivery">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/images/delivery.png" alt="Entregas para todo o Brasil">
			</figure>
		</div>

		<div class="grid_12">
			<div id="banners">
				<div id="cycle">
					<div class="cycle-content">
						<a href="" title="Camiseta Ikki de Fenix">
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/images/temp/banner-1.png" alt="">
							</figure>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="grid_12">
			<div id="destaques">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/images/destaques.png" alt="">
				</figure>
			</div>

			<div id="produtos">
				<?php echo do_shortcode('[featured_products per_page="9" columns="3"]'); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
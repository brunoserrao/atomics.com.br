			</div>
		</div>
	</main>

	<footer>
		<div class="footer-background">
			<div class="container_12">
				<section>
					<div id="newsletter">
						<form action="">
							<div class="grid_12">
								Receba nossas promoções e novidades 
							</div>
							
							<div class="clear"></div>

							<div class="grid_3">
								<input type="text" class="wysija-input" placeholder="NOME">
							</div>

							<div class="grid_3">
								<input type="text" class="wysija-input" placeholder="E-MAIL">
							</div>
							
							<div class="grid_2">
								<button class="wysija-submit">CADASTRAR</button>
							</div>
							
							<div class="social">
								<div class="grid_1">
									<a href="https://www.facebook.com/pages/Atomics/1489485027931039">
										<figure>
											<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="">
										</figure>
									</a>
								</div>

								<div class="grid_1">
									<a href="http://instagram.com/useatomics">
										<figure>
											<img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="">
										</figure>
									</a>
								</div>
							</div>
						</form>
					</div>
					
					<div class="grid_12">
						<div id="payment-methods">
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/images/payment-methods.png" alt="">
							</figure>
						</div>
					</div>
				</section>
			</div>
		</div>
		
		<div class="footer-background-2">
			<div class="container_12">
				<div id="footer-menu">
					<div class="grid_2">
						<h2>Produtos</h2>
						
						<nav>
							<?php wp_nav_menu( array( 'menu' => 'Produtos' ) );  ?>
						</nav>
					</div>
					
					<div class="grid_6">
						<h2>Ajuda e Suporte</h2>
						
						<nav>
							<?php wp_nav_menu( array( 'menu' => 'Ajuda' ) );  ?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>

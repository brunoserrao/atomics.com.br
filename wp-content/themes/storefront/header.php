<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php storefront_html_tag_schema(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/960_12_col.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
</head>

<body <?php body_class(); ?>>

	<header>
		<div class="header-background">
			<div class="container_12 relative">
				<div class="grid_3">
					<figure>
						<a href="<?php echo site_url(); ?>" title="<?php echo wp_title(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/atomics.png" alt="Atomics">
						</a>
					</figure>	
				</div>

				<div class="grid_6">
					<form id="search" action="<?php echo site_url(); ?>">
						<input type="search" name="s" placeholder="PROCURAR">
						<input type="hidden" name="post_type" value="product" />
						<button type="submit">OK</button>
					</form>
				</div>

				<div class="grid_2">
					<?php if (is_user_logged_in()) { ?>
						<nav>
							<?php wp_nav_menu( array( 'menu' => 'Usuario' ) );  ?>
						</nav>
					<?php } else { ?>
						<nav>
							<?php wp_nav_menu( array( 'menu' => 'Login' ) );  ?>
						</nav>
					<?php } ?>
				</div>

				<div id="header-cart" class="grid_1">
					
					<a href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" title="<?php _e( 'View your shopping cart', 'storefront' ); ?>" class="cart-icon-count">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/images/icon-cart.png" alt="">
						</figure>
						
						<span>
							<?php echo WC()->cart->get_cart_contents_count(); ?>
						</span>
					</a>
				
					<div id="header-cart-container">
						<ul class="site-header-cart-x">
							<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
						</ul>
					</div>
				</div>
				
				<div class="clear"></div>
				
				<div class="grid_12">
					<nav>
						<?php wp_nav_menu( array( 'menu' => 'Principal' ) );  ?>
					</nav>
				</div>
			</div>
		</div>	
	</header>

	<main id="main" role="main">
		<div class="container_12">
			<div id="content">


	
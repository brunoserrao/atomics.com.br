<?php
/**
 * Login Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php wc_print_notices(); ?>

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<section>
	<div class="grid_<?php echo get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ? 6 : 12; ?> box-cinza">
		<div class="box-cinza-padding">

			<h2 class="h2-subtitulo">Já sou cadastrado</h2>
			
			<form method="post" class="form-login-register login">

				<?php do_action( 'woocommerce_login_form_start' ); ?>

				<p class="form-row form-row-wide">
					<label for="username">Digite o seu e-mail <span class="required">*</span></label>
					<input type="text" class="input-text" name="username" id="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
				</p>
				<p class="form-row form-row-wide">
					<label for="password">Digite sua senha <span class="required">*</span></label>
					<input class="input-text" type="password" name="password" id="password" />
				</p>

				<?php do_action( 'woocommerce_login_form' ); ?>

				<p class="form-row">
					<label for="rememberme" class="inline">
						<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Lembrar minha senha
					</label>
				</p>

				<p class="form-row lost-password">
					<a href="<?php echo esc_url( wc_lostpassword_url() ); ?>">Esqueci a minha senha</a>
				</p>

				<p class="form-row">
					<?php wp_nonce_field( 'woocommerce-login' ); ?>
					<input type="submit" class="button" name="login" value="Entrar" />
				</p>

				<?php do_action( 'woocommerce_login_form_end' ); ?>
			</form>
		</div>
	</div>
</section>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
	
	<section>
		<div class="grid_6 box-cinza">

			<div class="box-cinza-padding">

				<h2 class="h2-subtitulo">Sou novo cliente</h2>

				<form method="post" class="form-login-register register">

					<?php do_action( 'woocommerce_register_form_start' ); ?>

					<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

						<p class="form-row form-row-wide">
							<label for="reg_username"><?php _e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
							<input type="text" class="input-text" name="username" id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
						</p>

					<?php endif; ?>

					<p class="form-row form-row-wide">
						<label for="reg_email">Digite o seu e-mail <span class="required">*</span></label>
						<input type="email" class="input-text" name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />
					</p>

					<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

						<p class="form-row form-row-wide">
							<label for="reg_password">Digite uma senha <span class="required">*</span></label>
							<input type="password" class="input-text" name="password" id="reg_password" />
						</p>

					<?php endif; ?>

					<!-- Spam Trap -->
					<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

					<?php do_action( 'woocommerce_register_form' ); ?>
					<?php do_action( 'register_form' ); ?>

					<p class="form-row">
						<?php wp_nonce_field( 'woocommerce-register' ); ?>
						<input type="submit" class="button" name="register" value="Cadastrar" />
					</p>

					<?php do_action( 'woocommerce_register_form_end' ); ?>

				</form>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>

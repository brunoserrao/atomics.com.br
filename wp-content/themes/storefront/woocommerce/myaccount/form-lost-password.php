<?php
/**
 * Lost password form
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php wc_print_notices(); ?>

<section>
	<div class="grid_6 box-cinza">
		<div class="box-cinza-padding">
			
			<h2 class="h2-subtitulo">Perdeu a sua senha ?</h2>

			<form method="post" class="form-login-register lost_reset_password">

				<?php if( 'lost_password' == $args['form'] ) : ?>

					<p>
						Perdeu a sua senha ? Por favor entre com  seu endereço de e-mail. Você receberá um link para criar uma nova senha no seu e-mail.
					</p>

					<p class="form-row">
						<label for="user_login">Digite o seu e-mail</label>
						<input class="input-text" type="text" name="user_login" id="user_login" />
					</p>

				<?php else : ?>

					<p>
						Entre com uma nova senha a seguir
					</p>

					<p class="form-row">
						<label for="password_1">Nova senha <span class="required">*</span></label>
						<input type="password" class="input-text" name="password_1" id="password_1" />
					</p>
					<p class="form-row">
						<label for="password_2">Digite novamente <span class="required">*</span></label>
						<input type="password" class="input-text" name="password_2" id="password_2" />
					</p>

					<input type="hidden" name="reset_key" value="<?php echo isset( $args['key'] ) ? $args['key'] : ''; ?>" />
					<input type="hidden" name="reset_login" value="<?php echo isset( $args['login'] ) ? $args['login'] : ''; ?>" />

				<?php endif; ?>

				<div class="clear"></div>

				<p class="form-row">
					<input type="hidden" name="wc_reset_password" value="true" />
					<input type="submit" class="button" value="<?php echo 'lost_password' == $args['form'] ? 'Resetar senha' : 'Salvar'; ?>" />
				</p>

				<?php wp_nonce_field( $args['form'] ); ?>
			</form>
		</div>
	</div>
</section>
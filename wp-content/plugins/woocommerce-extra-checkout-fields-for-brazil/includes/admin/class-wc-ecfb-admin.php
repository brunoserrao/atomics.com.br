<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Plugin admin class.
 */
class Extra_Checkout_Fields_For_Brazil_Admin {

	/**
	 * Initialize the plugin admin.
	 */
	public function __construct() {
		// Load admin style sheet and JavaScript.
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );

		$this->maybe_install();
	}

	/**
	 * Admin scripts
	 *
	 * @return void
	 */
	public function admin_scripts() {
		global $woocommerce;

		$screen = get_current_screen();

		if ( 'shop_order' == $screen->id ) {

			// Get plugin settings.
			$settings = get_option( 'wcbcf_settings' );

			// Styles.
			wp_enqueue_style( 'woocommerce-extra-checkout-fields-for-brazil-admin', Extra_Checkout_Fields_For_Brazil::get_assets_url() . 'css/admin/admin.css', array(), Extra_Checkout_Fields_For_Brazil::VERSION );

			// Shop order.
			if ( version_compare( $woocommerce->version, '2.1', '>=' ) ) {
				$shop_order_js = Extra_Checkout_Fields_For_Brazil::get_assets_url() . 'js/admin/shop-order.min.js';
			} else {
				$shop_order_js = Extra_Checkout_Fields_For_Brazil::get_assets_url() . 'js/admin/shop-order.old.min.js';
			}

			wp_enqueue_script( 'woocommerce-extra-checkout-fields-for-brazil-shop-order', $shop_order_js, array( 'jquery' ), Extra_Checkout_Fields_For_Brazil::VERSION, true );

			// Localize strings.
			wp_localize_script(
				'woocommerce-extra-checkout-fields-for-brazil-shop-order',
				'wcbcf_writepanel_params',
				array(
					'load_message' => __( 'Load the customer extras data?', 'woocommerce-extra-checkout-fields-for-brazil' ),
					'copy_message' => __( 'Also copy the data of number and neighborhood?', 'woocommerce-extra-checkout-fields-for-brazil' ),
					'person_type'  => $settings['person_type']
				)
			);
		}

		if ( 'woocommerce_page_woocommerce-extra-checkout-fields-for-brazil' == $screen->id ) {
			wp_enqueue_script( 'woocommerce-extra-checkout-fields-for-brazil-admin', Extra_Checkout_Fields_For_Brazil::get_assets_url() . 'js/admin/admin.min.js', array( 'jquery' ), Extra_Checkout_Fields_For_Brazil::VERSION );
		}
	}

	/**
	 * Maybe install.
	 *
	 * @return void
	 */
	public function maybe_install() {
		if ( $version = get_option( 'wcbcf_version' ) ) {
			if ( version_compare( $version, Extra_Checkout_Fields_For_Brazil::VERSION, '<' ) ) {
				$options = get_option( 'wcbcf_settings' );

				// Update to version 3.0.0.
				if ( version_compare( $version, '3.0.0', '<' ) ) {
					if ( isset( $options['person_type'] ) ) {
						$options['person_type'] = 1;
					} else {
						$options['person_type'] = 0;
					}
				}

				update_option( 'wcbcf_settings', $options );
				update_option( 'wcbcf_version', Extra_Checkout_Fields_For_Brazil::VERSION );
			}
		} else {
			$default = array(
				'person_type'     => 1,
				// 'only_brazil'     => 0,
				// 'ie'              => 0,
				// 'rg'              => 0,
				// 'birthdate_sex'   => 0,
				'cell_phone'      => 1,
				'mailcheck'       => 1,
				'maskedinput'     => 1,
				'addresscomplete' => 1,
				'validate_cpf'    => 1,
				'validate_cnpj'   => 1
			);

			add_option( 'wcbcf_settings', $default );
			add_option( 'wcbcf_version', Extra_Checkout_Fields_For_Brazil::VERSION );
		}
	}
}

new Extra_Checkout_Fields_For_Brazil_Admin();

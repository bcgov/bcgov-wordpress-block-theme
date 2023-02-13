<?php

namespace Bcgov\Theme\Block\Actions;

/**
 * Handles theme dependencies.
 *
 * @since 1.1.1
 */
class Dependencies {

	/**
	 * Constructs and sets up theme dependencies.
	 */
	public function __construct() {
		$this->bcgov_block_theme_dependencies();
	}

	/**
	 * Sets an admin notice for missing plugin dependencies.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_dependencies() {
		// Checks for AIOSEO breadcrumb specific function.
		$message_intro = __( 'Missing: The BCGov Block Theme needs the', 'bcgov_block_theme' );

		if ( ! function_exists( 'aioseo_breadcrumbs' ) ) {
			$plugin        = 'All in One SEO';
			$className     = 'notice-warning notice';
			$message_extro = __( 'plugin activated to enable to page specific breadcrumb navigation.', 'bcgov_block_theme' );

			printf( '<div class="%1$s"><p>%2$s <strong>%3$s</strong> %4$s</p></div>', esc_attr( $className ), esc_html( $message_intro ), esc_html( $plugin ), esc_html( $message_extro ) );
		}

		if ( ! function_exists( 'acf_register_block_type' ) ) {
			$plugin        = 'Advanced Custom Fields PRO';
			$className     = 'error';
			$message_extro = __( 'plugin activated to enable theme specific blocks.', 'bcgov_block_theme' );

			printf( '<div class="%1$s"><p>%2$s <strong>%3$s</strong> %4$s</p></div>', esc_attr( $className ), esc_html( $message_intro ), esc_html( $plugin ), esc_html( $message_extro ) );
		}

		if ( ! function_exists( 'cptui_loaded' ) ) {
			$plugin        = 'Custom Post Type UI';
			$className     = 'error';
			$message_extro = __( 'plugin activated to enable to custom post types in order to function properly.', 'bcgov_block_theme' );

			printf( '<div class="%1$s"><p>%2$s <strong>%3$s</strong> %4$s</p></div>', esc_attr( $className ), esc_html( $message_intro ), esc_html( $plugin ), esc_html( $message_extro ) );
		}
	}
}

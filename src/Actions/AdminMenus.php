<?php

namespace Bcgov\Theme\Block\Actions;

use Bcgov\Theme\Block\Templates\{
	InfoAdminPage,
	OptionsAdminPage,
	NotificationBannerAdminPage,
};

/**
 * Add theme management pages to the admin menu and registers their pages.
 *
 * @since 1.1.1
 *
 * @package Bcgov/Theme/Block
 */
class AdminMenus {

	/**
	 * BCGov Blocks Theme: Add theme page to the admin menu.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_menu() {

		add_theme_page(
			__( 'Using BCGov Block Theme', 'bcgov-block-theme' ),
			__( 'Using the BCGov Block Theme', 'bcgov-block-theme' ),
			'edit_theme_options',
			'bcgov-block-theme-docs',
			[ $this, 'bcgov_block_theme_documentation_display' ]
		);

		add_theme_page(
			__( 'BCGov Block Theme Options', 'bcgov-block-theme' ),
			__( 'Theme Options', 'bcgov-block-theme' ),
			'edit_theme_options',
			'bcgov-block-theme-options',
			[ $this, 'bcgov_block_theme_options_display' ]
		);

		// Add Custom Notifications theme page if enabled within "BCGov Block Theme Admin Settings" page.
		$admin_notification        = get_option( 'bcgov_admin_notification_settings' ) ?? [];
        $enable_admin_notification = isset( $admin_notification['show_admin_notification'] ) ? $admin_notification['show_admin_notification'] : 0;
		if ( $enable_admin_notification ) {
			add_theme_page(
				__( 'BCGov Block Notification Banner', 'bcgov-block-theme' ),
				__( 'Custom Notice Banner', 'bcgov-block-theme' ),
				'edit_theme_options',
				'bcgov-block-theme-notification-banner',
				[ $this, 'bcgov_block_theme_notification_banner_display' ]
			);
		}
	}

	/**
	 * Display BCGov Block Theme documentation website
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_documentation_display() {
		wp_safe_redirect( 'https://bcgov.github.io/bcgov-wordpress-block-theme/' );
		exit;
	}

	/**
	 * Display BCGov Block Theme options page.
	 *
	 * @since 1.0.3
	 *
	 * @return void
	 */
	public function bcgov_block_theme_options_display() {

		new OptionsAdminPage();
	}

	/**
	 * Display BCGov Block Theme Notification Banner settings page.
	 *
	 * @since 1.1.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_notification_banner_display() {

		new NotificationBannerAdminPage();
	}
}

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
        add_menu_page(
            __( 'Using BCGov Block Theme', 'bcgov-block-theme' ),
            __( 'Using the BCGov Block Theme', 'bcgov-block-theme' ),
            'edit_posts',
            'bcgov-block-theme-docs',
            [ $this, 'bcgov_block_theme_documentation_display' ],
            'dashicons-welcome-learn-more'
        );

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
		echo '<h2>' . esc_attr__( 'BCGov Block Theme Documentation' ) . '</h2>';
		echo '<a href="' . esc_url( 'https://bcgov.github.io/bcgov-wordpress-block-theme/' ) . '" class="button button-primary button-hero" style="text-decoration: none;" target="_blank">' . esc_attr__( 'View Documentation' ) . '</a>';

		// Get the current Site Documentation URL setting.
		$documentation_url = get_option( 'bcgov_documentation_url_settings', '' );

		// Only show a button linking to the documentation URL if it has been set.
		if ( ! empty( $documentation_url ) ) {
			// Get the site's name.
			$site_name = get_bloginfo( 'name' ) . __( ' Documentation' );

			echo '<h2>' . esc_attr( $site_name ) . '</h2>';
			echo '<a href="' . esc_url( $documentation_url ) . '" class="button button-primary button-hero" style="text-decoration: none;" target="_blank">' . esc_attr__( 'View Documentation' ) . '</a>';
		}
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

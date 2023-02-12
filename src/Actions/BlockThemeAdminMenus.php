<?php

namespace Bcgov\Theme\Block\Actions;

use Bcgov\Theme\Block\Templates;

/**
 * Add theme management pages to the admin menu and registers their pages.
 *
 * @since 1.1.1
 *
 * @package Bcgov/Theme/Block
 */
class BlockThemeAdminMenus {

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

		add_theme_page(
			__( 'BCGov Block Notifications Banner', 'bcgov-block-theme' ),
			__( 'Notifications Banner', 'bcgov-block-theme' ),
			'edit_theme_options',
			'bcgov-block-theme-notification-banner',
			[ $this, 'bcgov_block_theme_notification_banner_display' ]
		);

	}

	/**
	 * Display BCGov Block Theme features and instructions page.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_documentation_display() {

		new Templates\InfoAdminPage();

	}

	/**
	 * Display BCGov Block Theme options page.
	 *
	 * @since 1.0.3
	 *
	 * @return void
	 */
	public function bcgov_block_theme_options_display() {

		new Templates\OptionsAdminPage();

	}

	/**
	 * Display BCGov Block Theme Notification Banner settings page.
	 *
	 * @since 1.1.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_notification_banner_display() {

		new Templates\NotificationsBannerAdminPage();

	}
}

<?php

namespace Bcgov\Theme\Block\Actions;

/**
 * Sets up Javascript variable handoff from WordPress to theme.
 *
 * @since 1.1.1
 *
 * @package Bcgov/Theme/Block
 */
class EnqueueAndInject {

	/**
	 * Enqueue scripts and styles for public website.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_enqueue_scripts(): void {
		$public_assets  = require_once get_template_directory() . '/dist/public.asset.php';
		$font_assets    = require_once get_template_directory() . '/dist/font.asset.php';
		$public_version = $public_assets['version'] ?? wp_get_theme()->get( 'Version' );
		$font_version   = $font_assets['version'] ?? wp_get_theme()->get( 'Version' );

		wp_enqueue_script(
			'bcgov-block-theme-public',
			get_template_directory_uri() . '/dist/public.js',
			$public_assets['dependencies'] ?? [],
			$public_version,
			true
		);

		$javascript_variables = $this->set_javascript_variables();
		wp_localize_script( 'bcgov-block-theme-public', 'site', $javascript_variables );

		wp_enqueue_style(
			'bcgov-block-theme-public',
			get_template_directory_uri() . '/dist/public.css',
			[],
			$public_version
		);
		wp_enqueue_style(
			'bcgov-block-theme-font',
			get_template_directory_uri() . '/dist/font.css',
			[],
			$font_version
		);
	}

	/**
	 * Enqueue scripts and styles for admin.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_enqueue_admin_scripts(): void {
		$admin_assets_path = get_template_directory() . '/dist/admin.asset.php';
		$admin_assets      = require_once $admin_assets_path;
		$admin_version     = $admin_assets['version'] ?? wp_get_theme()->get( 'Version' );

		wp_enqueue_script(
			'bcgov-block-theme-admin',
			get_template_directory_uri() . '/dist/admin.js',
			$admin_assets['dependencies'] ?? [],
			$admin_version,
			true
		);

		$javascript_variables = $this->set_javascript_variables();

		wp_localize_script( 'bcgov-block-theme-admin', 'site', $javascript_variables );

		wp_localize_script(
			'bcgov-blocks-manager',
			'postData',
			[
				'postType' => get_post_type( get_the_id() ),
				'postId'   => get_the_id(),
			]
		);

		wp_enqueue_style(
			'bcgov-block-theme-admin',
			get_template_directory_uri() . '/dist/admin.css',
			[],
			$admin_version
		);
	}

	/**
     * Enqueue JS variables.
     *
     * @example Sets array values for use in globally scoped JS.
     * @return array
     */
    public function set_javascript_variables() {

		$javascript_variables = [
			'domain'                  => home_url(),
			'siteName'                => esc_attr( get_option( 'active_site_pattern_styles' ) ),
			'templateDir'             => get_template_directory_uri(),
			'headerEffect'            => esc_attr( get_option( 'header_effect' ) ),
			'allSiteStyles'           => esc_attr( get_option( 'enable_all_styles' ) ),
			'customBodyClass'         => esc_attr( get_option( 'custom_body_class' ) ),
			'noticeEnabled'           => esc_attr( get_option( 'notification_enabled' ) ),
			'noticeHomepageOnly'      => esc_attr( get_option( 'notification_homepage_only' ) ),
			'noticeLabelBold'         => esc_attr( get_option( 'notification_label_bold' ) ),
			'noticeLabelBig'          => esc_attr( get_option( 'notification_label_big' ) ),
			'noticeStatus'            => esc_attr( get_option( 'notification_status' ) ),
			'noticeContent'           => esc_attr( get_option( 'notification_content' ) ),
			'noticeButtonLabel'       => esc_attr( get_option( 'notification_button_label' ) ),
			'noticeButtonEnabled'     => esc_attr( get_option( 'notification_button_enabled' ) ),
			'noticeButtonAriaLabel'   => esc_attr( get_option( 'notification_button_aria_label' ) ),
			'noticeButtonLink'        => esc_attr( get_option( 'notification_button_link' ) ),
			'noticeButtonUtmCampaign' => esc_attr( get_option( 'notification_button_utm_campaign' ) ),
			'networkBannerEnabledNet' => esc_attr( get_site_option( 'bcgov_notification_banner_enable_network' ) ),
			'networkBannerType'       => esc_attr( get_site_option( 'bcgov_notification_banner_banner_type' ) ),
			'networkBannerContent'    => esc_html( get_site_option( 'bcgov_notification_banner_banner_content' ) ),
			'networkBannerUtm'        => esc_attr( get_site_option( 'bcgov_notification_banner_utm_campaign' ) ),
			'externalLinkIcons'       => esc_attr( get_option( 'bcgov_external_link_icons_settings' )['show_external_link_icons'] ?? 0 ),
		];

		return $javascript_variables;
	}
}

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
			'siteName'                => ( '' !== get_option( 'active_site_pattern_styles' ) ? esc_attr( get_option( 'active_site_pattern_styles' ) ) : 'bcgov' ),
			'templateDir'             => get_template_directory_uri(),
			'headerEffect'            => esc_attr( get_option( 'header_effect' ) ),
			'allSiteStyles'           => esc_attr( get_option( 'enable_all_styles' ) ),
			'customBodyClass'         => esc_attr( get_option( 'custom_body_class' ) ),
			'mobile_nav_breakpoint'   => esc_attr( get_option( 'bcgov_mobile_nav_breakpoint_settings', '' ) ),
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

	/**
     * Generates and outputs the JSON-LD script for the Google Site Name.
     *
     * Retrieves the Google Site Name setting and generates the JSON-LD script in the format
     * required by Google for better representation in organic search results.
     *
     * @since 1.2.9
     * @return void
     */
	public function bcgov_block_theme_generate_google_ld_json() {
		// Get the current Google Site Name setting.
		$google_site_name = get_option( 'bcgov_google_site_name_settings', '' );

		// Get the default Site Name from WordPress settings.
		$default_site_name = get_bloginfo( 'name' );

		// If the Google Site Name is not set, use the default Site Name as the default value.
		if ( empty( $google_site_name ) ) {
			$google_site_name = $default_site_name;
		}

		$domain = wp_parse_url( get_site_url() );

		// Prepare the JSON data.
		$json_data = array(
			'@context'      => 'https://schema.org',
			'@type'         => 'WebSite',
			'name'          => $google_site_name,
			'alternateName' => [ $domain['host'] ],
			'url'           => home_url(),
		);

		// Output the inline script.
		echo '<script type="application/ld+json">' . wp_json_encode( $json_data ) . '</script>';
	}

	/**
     * Generates and outputs the CSS defined by the options.
     *
     * Retrieves the mobile breakpoint setting and generates the CSS variable required to enable a custom breakpoint.
     *
     * @since 1.3.1
     * @return void
     */
	public function bcgov_block_theme_css_settings() {
		// Get the current mobile nav breakpoint setting.
		$mobile_nav_breakpoint = get_option( 'bcgov_mobile_nav_breakpoint_settings', '' );

		// If the breakpoint is not set, use the default value.
		if ( empty( $mobile_nav_breakpoint ) ) {
			$mobile_nav_breakpoint = '600';
		}

		// Output the inline style.
		echo '<style> /* WordPress hamburger menu override */
			@media (min-width: ' . esc_attr( $mobile_nav_breakpoint ) . 'px) {
				body.has-ribbon-menu .wp-block-navigation:not(.has-modal-open) .has-child .wp-block-navigation__submenu-container.wp-block-navigation__submenu-container { box-shadow: var(--bcds-surface-shadow-small) !important; }
				.wp-block-navigation__responsive-container:not(.hidden-by-default):not(.is-menu-open) { display: block; width: 100%; position: relative; z-index: auto; background-color: inherit; }
				.wp-block-navigation__responsive-container:not(.hidden-by-default):not(.is-menu-open) .wp-block-navigation__responsive-container-close { display: none; }
				.wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__submenu-container { left:  0; }
				.wp-block-navigation__responsive-container-open:not(.always-shown) { display: none; }
			}
			@media (max-width: calc(' . esc_attr( $mobile_nav_breakpoint ) . 'px - 1px)) {
				body.alpha-v3 .is-style-ribbon-menu { padding: 2rem 0; }
				body.has-ribbon-menu .wp-block-navigation.has-modal-open .has-child .wp-block-navigation__submenu-container.wp-block-navigation__submenu-container { box-shadow: none !important; }
				body.has-ribbon-menu  .has-modal-open .wp-block-navigation__container > .wp-block-navigation-item { margin: 0; }
				.wp-block-navigation__responsive-container:not(.hidden-by-default):not(.is-menu-open) { display: none; }
				.wp-block-navigation__responsive-container-open:not(.always-shown) { display: flex; }
				.is-style-ribbon-menu nav.wp-block-navigation { justify-content: flex-end; padding: 0.75rem 2rem; }
			} </style>';
	}
}

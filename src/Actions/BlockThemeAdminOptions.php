<?php

namespace Bcgov\Theme\Block\Actions;

/**
 * Registers theme options/settinhgs set in admin.
 *
 * @since 1.1.1
 *
 * @package Bcgov/Theme/Block
 */
class BlockThemeAdminOptions {
	/**
	 * Register Custom Settings and populate with default values.
	 *
	 * @since 1.0.3
	 *
	 * @return void
	 */
	public function bcgov_block_theme_custom_settings() {

		// Editable CSP Settings.
		$this->bcgov_block_theme_setting_to_register(
            'bcgov-block-theme-settings-group',
            [
				'active_site_pattern_styles',
				'header_effect',
				'enable_all_styles',
				'custom_body_class',
				'custom_csp_defaultsrc',
				'custom_csp_scriptsrc',
				'custom_csp_stylesrc',
				'custom_csp_connectsrc',
				'custom_csp_fontsrc',
				'custom_csp_imgsrc',
				'custom_csp_mediasrc',
				'custom_csp_framesrc',
			]
        );

		// Notifications Banner Settings.
		$this->bcgov_block_theme_setting_to_register(
            'bcgov-block-theme-notification-banner-group',
            [
				'notice_enabled',
				'notice_homepage_only',
				'notice_label_bold',
				'notice_label_big',
				'notice_status',
				'notice_content',
				'notice_button_label',
				'notice_button_enabled',
				'notice_button_aria_label',
				'notice_button_link',
				'notice_button_utm_campaign',
			]
        );

		/*
		* Initial settings to maintain configuration of CleanBC in production
		* these will change to default BCGov configuration after v1.0.3.
		*/
		if ( ! get_option( 'active_site_pattern_styles' ) ) {
			update_option( 'enable_all_styles', 'bcgov' );
		}

		if ( ! get_option( 'header_effect' ) ) {
			update_option( 'header_effect', 'hides' ); // will be: fixed.
		}

		if ( ! get_option( 'enable_all_styles' ) ) {
			update_option( 'enable_all_styles', 'false' ); // will be: false.
		}

		if ( ! get_option( 'custom_body_class' ) ) {
			update_option( 'custom_body_class', 'default' );
		}

	}

	/**
	 * Registers settings for Theme and Site Settings
	 *
	 * @since 1.1.0
	 *
	 * @param string $group    The group name for the settings.
	 * @param array  $settings The settings to be registered.
	 *
	 * @return void
	 */
	public function bcgov_block_theme_setting_to_register( $group, $settings ): void {

		if ( function_exists( 'register_setting' ) ) {

			foreach ( $settings as $setting ) {
				register_setting( $group, $setting );
			}
		}
	}


	/**
	 * Register ACF Pro Blocks.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_acf_init_block_types() {

		// Check function exists.
		if ( function_exists( 'acf_register_block_type' ) ) {

			// Load blocks only meant for CleanBC.
			if ( \Bcgov\Theme\Block\CLEANBC ) {
				require_once get_template_directory() . '/inc/core/acf_blocks/sites/cleanbc/cleanbc-block-loader.php';
			}
		}
	}

	/**
     * WordPress filter hook for headers.
     *
     * @param array $headers  An array of headers.
     * @return array
     */
    public function bcgov_block_theme_wp_headers( $headers ) {
        $csp         = '';
        $csp_initial = [
            'upgrade-insecure-requests',
            'default-src'     => "'self' gov.bc.ca *.gov.bc.ca data: *.twitter.com *.twimg.com " . ( esc_attr( get_option( 'custom_csp_defaultsrc' ) ) ?? '' ),
            'script-src'      => "'self' 'unsafe-inline' 'unsafe-eval' gov.bc.ca *.gov.bc.ca *.twimg.com *.twitter.com *.flickr.com " . ( esc_attr( get_option( 'custom_csp_scriptsrc' ) ) ?? '' ),
            'style-src'       => "'self' 'unsafe-inline' *.twitter.com *.twimg.com" . ( esc_attr( get_option( 'custom_csp_stylesrc' ) ) ?? '' ),
            'connect-src'     => "'self' gov.bc.ca  *.gov.bc.ca *.flickr.com " . ( esc_attr( get_option( 'custom_csp_connectsrc' ) ) ?? '' ),
            'font-src'        => "'self' 'unsafe-inline' data: " . ( esc_attr( get_option( 'custom_csp_fontsrc' ) ) ?? '' ),
            'img-src'         => "'self' data: gov.bc.ca *.gov.bc.ca *.twimg.com *.twitter.com *.staticflickr.com " . ( esc_attr( get_option( 'custom_csp_imgsrc' ) ) ?? '' ),
            'media-src'       => "'self' 'unsafe-inline' " . ( esc_attr( get_option( 'custom_csp_mediasrc' ) ) ?? '' ),
            'frame-src'       => "'self' gov.bc.ca *.gov.bc.ca *.twitter.com youtube.com *.youtube.com youtu.be " . ( esc_attr( get_option( 'custom_csp_framesrc' ) ) ?? '' ),
            'frame-ancestors' => "'self'",
        ];

        $csp_initial = apply_filters( 'bcgov_block_theme_wp_headers_csp', $csp_initial );
        foreach ( $csp_initial as $directive => $rule ) {
            $csp .= sprintf(
                ' %s %s; ',
                is_string( $directive ) ? $directive : '',
                $rule
            );
        }
        $headers['Content-Security-Policy']   = trim( $csp );
        $headers['Strict-Transport-Security'] = 'max-age=10886400; preload';
        return $headers;
    }
}

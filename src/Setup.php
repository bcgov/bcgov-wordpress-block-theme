<?php
/**
 * Initialization of theme.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

namespace Bcgov\Theme\Block;

/**
 * Setup class setups up theme.
 */
class Setup {
    /**
     * Constructor.
     */
    public function __construct() {
        $this->hook();
    }

    /**
     * Sets up hooks for theme.
     *
     * @return void
     */
    private function hook() {
		add_action( 'admin_init', [ $this, 'bcgov_block_theme_custom_settings' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'bcgov_block_theme_enqueue_admin_scripts' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'bcgov_block_theme_enqueue_scripts' ] );
		add_action( 'after_setup_theme', [ $this, 'bcgov_block_theme' ] );
		add_action( 'admin_notices', [ $this, 'bcgov_block_theme_dependencies' ] );
		add_action( 'admin_menu', [ $this, 'bcgov_block_theme_menu' ] );
		add_action( 'acf/init', [ $this, 'bcgov_block_theme_acf_init_block_types' ] );
		add_filter( 'get_custom_logo', [ $this, 'bcgov_block_theme_custom_logo' ] );
		remove_theme_support( 'core-block-patterns' );

    }

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme(): void {

		load_theme_textdomain( 'bcgov-block-theme', get_template_directory() . '/languages' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add alignment option to toolbar options.
		add_theme_support( 'align-wide' );

		// Add support for custom logos.
		add_theme_support( 'custom-logo' );

		// Enqueue editor styles.
		add_editor_style(
			[
				'./assets/css/blocks.css',
			]
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		/**
		 * Constants to enable/disable specific site features.
		 *
		 * @since 1.0.3
		 */
		if ( 'cleanbc' === get_option( 'active_site_pattern_styles' ) ) {
			define( 'Bcgov\Theme\Block\CLEANBC', true );
		} else {
			define( 'Bcgov\Theme\Block\CLEANBC', false );
		}
	}

 	/**
     * Enqueue JS variables.
     *
     * @example Sets array values for use in globally scoped JS.
     * @return array
     */
    public function set_javascript_variables() {

		$javascript_variables = [
			'domain'        => home_url(),
			'siteName'      => esc_attr( get_option( 'active_site_pattern_styles' ) ),
			'templateDir'   => get_template_directory_uri(),
			'headerEffect'  => esc_attr( get_option( 'header_effect' ) ),
			'allSiteStyles' => esc_attr( get_option( 'enable_all_styles' ) ),
		];

		return $javascript_variables;
	}

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
		$admin_assets  = get_template_directory_uri() . '/dist/admin.asset.php';
		$admin_version = $admin_assets['version'] ?? wp_get_theme()->get( 'Version' );

		wp_enqueue_script(
			'bcgov-block-theme-admin',
			get_template_directory_uri() . '/dist/admin.js',
			$admin_assets['dependencies'] ?? [],
			$admin_version,
			true
		);

		$javascript_variables = $this->set_javascript_variables();

		wp_localize_script( 'bcgov-block-theme-admin', 'site', $javascript_variables );

		wp_enqueue_script(
			'bcgov-blocks-manager',
			get_template_directory_uri() . '/inc/core/theme-blocks-allow-list.js',
			[ 'wp-blocks', 'wp-dom' ],
			filemtime( get_template_directory() . '/inc/core/theme-blocks-allow-list.js' ),
			true
		);

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
	 * Filter the results of get_custom_logo() if no custom logo has been chosen by injecting a default image.
	 * <-- wp:site-logo --> uses this result internally, and so can be easily used with or without choosing a custom logo.
	 *
	 * @param string $html Markup from original get_custom_logo call.
	 * @since 1.0.0
	 *
	 * @return string
	 */
	public function bcgov_block_theme_custom_logo( $html ) {
		// If the site owner has selected a site logo using the theme customizer, use it.
		if ( has_custom_logo() ) {
			return $html;
		}
		// Otherwise, inject a default logo markup for use in wp-site-logo blocks.
		$image = '<img class="bcgov-logo" src="' . get_stylesheet_directory_uri() . '/assets/images/bc_gov_logo_transparent.svg">';
		$html  = sprintf(
			'<a href="%1$s" class="custom-logo-link" rel="home"%2$s>%3$s</a>',
			esc_url( home_url( '/' ) ),
			is_front_page() && ! is_paged() ? ' aria-current="page"' : '',
			$image
		);
		return $html;
	}

	/**
	 * Sets admin notice for missing plugin dependencies.
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

	/**
	 * BCGov Blocks Theme: Add theme page to the admin mmenu.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_menu() {

		add_theme_page(
			esc_html__( 'Using BCGov Block Theme', 'bcgov-block-theme' ),
			esc_html__( 'Using the BCGov Block Theme', 'bcgov-block-theme' ),
			'edit_theme_options',
			'bcgov-block-theme-docs',
			[ &$this, 'bcgov_block_theme_documentation_display' ]
		);

		add_theme_page(
			esc_html__( 'BCGov Block Theme Options', 'bcgov-block-theme' ),
			esc_html__( 'Theme Options', 'bcgov-block-theme' ),
			'edit_theme_options',
			'bcgov-block-theme-options',
			[ &$this, 'bcgov_block_theme_options_display' ]
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

		$theme = wp_get_theme();

		if ( is_child_theme() ) {
			$theme = wp_get_theme()->parent();
		}

		require_once get_template_directory() . '/inc/core/templates/theme-info-page.php';
	}

	/**
	 * Display BCGov Block Theme options page.
	 *
	 * @since 1.0.3
	 *
	 * @return void
	 */
	public function bcgov_block_theme_options_display() {

		$theme = wp_get_theme();

		if ( is_child_theme() ) {
			$theme = wp_get_theme()->parent();
		}

		require_once get_template_directory() . '/inc/core/templates/theme-options-page.php';

	}


	/**
	 * Register Custom Settings and populate with default values.
	 *
	 * @since 1.0.3
	 *
	 * @return void
	 */
	public function bcgov_block_theme_custom_settings() {

		register_setting( 'bcgov-block-theme-settings-group', 'active_site_pattern_styles' );
		register_setting( 'bcgov-block-theme-settings-group', 'header_effect' );
		register_setting( 'bcgov-block-theme-settings-group', 'enable_all_styles' );

		$active_site_pattern_styles = esc_attr( get_option( 'active_site_pattern_styles' ) );
		$header_effect              = esc_attr( get_option( 'header_effect' ) );
		$enable_all_styles          = esc_attr( get_option( 'enable_all_styles' ) );

		/*
		* Initial settings to maintain configuration of CleanBC in production
		* these will change to default BCGov configuration after v1.0.3.
		*/
		if ( '' === $active_site_pattern_styles || null === $active_site_pattern_styles ) {
			add_option( 'enable_all_styles', 'cleanbc' ); // will be: bcgov (or default).
		}

		if ( '' === $header_effect || null === $header_effect ) {
			add_option( 'header_effect', 'hides' ); // will be: fixed.
		}

		if ( '' === $enable_all_styles || null === $enable_all_styles ) {
			add_option( 'enable_all_styles', 'true' ); // will be: false.
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
			if ( CLEANBC ) {
				require_once get_template_directory() . '/inc/core/acf_blocks/sites/cleanbc/cleanbc-block-loader.php';
			}
		}
	}
}


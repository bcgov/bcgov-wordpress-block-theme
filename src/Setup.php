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
		add_action( 'after_setup_theme', [ $this, 'bcgov_block_theme' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'bcgov_block_theme_enqueue_scripts' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'bcgov_block_theme_enqueue_admin_scripts' ] );
		add_action( 'admin_notices', [ $this, 'bcgov_block_theme_dependencies' ] );
		add_action( 'admin_menu', [ $this, 'bcgov_block_theme_menu' ] );
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

		// Load options admin page. Requires ACF Pro plugin.
		if ( function_exists( 'acf_add_options_page' ) ) {

			acf_add_options_page(
                [
					'page_title'  => 'BCGov Block Theme Options',
					'menu_title'  => 'Theme Options',
					'menu_slug'   => 'theme-options',
					'capabaility' => 'edit_posts',
					'parent_slug' => false,
					'icon_url'    => false,
					'redirect'    => false,
				]
            );

		}

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

		// Pre-populate body class options with sites developed with this theme.
		if ( function_exists( 'acf_add_options_page' ) ) {
			add_filter(
                'acf/load_field/name=active_site',
                function( $field ) {
					$choices                = [
						'bcgov'   => __( 'Default (BCGov)', 'bcgov-block-theme' ),
						'buybc'   => __( 'BuyBC', 'bcgov-block-theme' ),
						'cleanbc' => __( 'CleanBC', 'bcgov-block-theme' ),
					];
					$field['choices']       = $choices;
					$field['default_value'] = 'bcgov';
					return $field;
				}
            );
		}
	}

 	/**
     * Enqueue JS variables.
     *
     * @example Sets array values for use in globally scoped JS.
     * @return array
     */
    public function set_javascript_variables() {

		$javascript_variables = array(
			'domain'      => home_url(),
			'siteName'    => 'bcgov',
			'templateDir' =>  get_template_directory_uri()
		);

		// Overwrite default with options value set in the Theme Option admin.
		if ( function_exists( 'acf_add_options_page' ) ) {
			$javascript_variables['siteName'] = get_field( 'active_site', 'option' );
		}

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
			array( 'wp-blocks', 'wp-dom' ),
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
		$message_intro = __( 'Warning: The BCGov Block Theme needs the', 'bcgov_block_theme' );

		if ( ! function_exists( 'aioseo_breadcrumbs' ) ) {
			$plugin        = 'All in One SEO';
			$className     = 'error';
			$message_extro = __( 'plugin activated to enable to page specific breadcrumb navigation.', 'bcgov_block_theme' );

			printf( '<div class="%1$s"><p>%2$s <strong>%3$s</strong> %4$s</p></div>', esc_attr( $className ), esc_html( $message_intro ), esc_html( $plugin ), esc_html( $message_extro ) );
		}

		if ( ! function_exists( 'acf_add_options_page' ) ) {
			$plugin        = 'Advanced Custom Fields PRO';
			$className     = 'error';
			$message_extro = __( 'plugin activated to enable admin options page.', 'bcgov_block_theme' );

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
			esc_html__( 'BCGov Blocks Theme', 'bcgov-block-theme' ),
			esc_html__( 'BCGov Blocks Theme', 'bcgov-block-theme' ),
			'edit_theme_options',
			'bcgov-block-theme-info',
			[ &$this, 'bcgov_block_theme_page_display' ]
		);
	}

	/**
	 * Display BCGov Block Theme features and instructions page.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_page_display() {

		$theme = wp_get_theme();

		if ( is_child_theme() ) {
			$theme = wp_get_theme()->parent();
		}

		require_once get_template_directory() . '/inc/core/templates/theme-info-page.php';

	}


}

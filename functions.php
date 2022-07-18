<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bcgov/Theme/Block
 * @since 1.0.0
 *
 * @return void
 */

if ( ! function_exists( 'bcgov_blocks_theme' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function bcgov_blocks_theme(): void {

		load_theme_textdomain( 'bcgov-blocks-theme', get_template_directory() . '/languages' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
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
	}
}
add_action( 'after_setup_theme', 'bcgov_blocks_theme' );

/**
 * Enqueue scripts and styles for public website.
 *
 * @since 1.0.0
 *
 * @return void
 */
function bcgov_blocks_theme_enqueue_scripts(): void {
    $public_assets  = include plugin_dir_path( __FILE__ ) . 'dist/public.asset.php';
    $font_assets    = include plugin_dir_path( __FILE__ ) . 'dist/font.asset.php';
    $public_version = $public_assets['version'] ?? wp_get_theme()->get( 'Version' );
    $font_version   = $font_assets['version'] ?? wp_get_theme()->get( 'Version' );
    wp_enqueue_script(
        'bcgov-blocks-theme-public',
        get_template_directory_uri() . '/dist/public.js',
        $public_assets['dependencies'] ?? [],
        $public_version,
        true
    );
	wp_enqueue_style(
        'bcgov-blocks-theme-public',
        get_template_directory_uri() . '/dist/public.css',
        [],
        $public_version
    );
    wp_enqueue_style(
        'bcgov-blocks-theme-font',
        get_template_directory_uri() . '/dist/font.css',
        [],
        $font_version
    );
}
add_action( 'wp_enqueue_scripts', 'bcgov_blocks_theme_enqueue_scripts' );


/**
 * Enqueue scripts and styles for admin.
 *
 * @since 1.0.0
 *
 * @return void
 */
function bcgov_blocks_theme_enqueue_admin_scripts(): void {
    $admin_assets  = include plugin_dir_path( __FILE__ ) . 'dist/admin.asset.php';
    $admin_version = $admin_assets['version'] ?? wp_get_theme()->get( 'Version' );

    wp_enqueue_script(
        'bcgov-blocks-theme-admin',
        get_template_directory_uri() . '/dist/admin.js',
        $admin_assets['dependencies'] ?? [],
        $admin_version,
        true
    );
	wp_enqueue_style(
        'bcgov-blocks-theme-admin',
        get_template_directory_uri() . '/dist/admin.css',
        [],
        $admin_version
    );
}

add_action( 'admin_enqueue_scripts', 'bcgov_blocks_theme_enqueue_admin_scripts' );

/**
 * Filter the results of get_custom_logo() if no custom logo has been chosen by injecting a default image.
 * <-- wp:site-logo --> uses this result internally, and so can be easily used with or without choosing a custom logo.
 *
 * @param string $html Markup from original get_custom_logo call.
 * @since 1.0.0
 *
 * @return string
 */
function bcgov_blocks_theme_custom_logo( $html ) {
    // If the site owner has selected a site logo using the theme customizer, use it.
    if ( has_custom_logo() ) {
        return $html;
    }
    // Otherwise, inject a default logo markup for use in wp-site-logo blocks.
    $image = '<img src="' . get_stylesheet_directory_uri() . '/dist/images/bc_gov_logo_transparent.ced9da43.png">';
    $html  = sprintf(
        '<a href="%1$s" class="custom-logo-link" rel="home"%2$s>%3$s</a>',
        esc_url( home_url( '/' ) ),
        is_front_page() && ! is_paged() ? ' aria-current="page"' : '',
        $image
    );
    return $html;
}

add_filter( 'get_custom_logo', 'bcgov_blocks_theme_custom_logo' );

/**
 * Sets admin notice for missing plugin dependencies.
 *
 * @since 1.0.0
 *
 * @return void
 */
function bcgov_blocks_theme_dependencies() {
    // Checks for AIOSEO breadcrumb specific function.
    if ( ! function_exists( 'aioseo_breadcrumbs' ) ) {
        $className = 'error';
        $message   = __( 'Warning: The BCGov Block Theme needs the All in One SEO plugin activated to page specific enable breadcrumb navigation.', 'bcgov_blocks_theme' );

        printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $className ), esc_html( $message ) );
    }
}

add_action( 'admin_notices', 'bcgov_blocks_theme_dependencies' );

/**
 * Load core file.
 *
 * @since 1.0.0
 */
require_once get_template_directory() . '/inc/core/theme-bootstrap.php';

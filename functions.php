<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bcgov/Theme/Block
 * @since 1.0.0
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
 * @since 0.1
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
 * @since 0.1
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

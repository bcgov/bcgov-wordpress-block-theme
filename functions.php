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
 * Enqueue scripts and styles.
 *
 * @since 0.1
 *
 * @return void
 */
function bcgov_blocks_theme_enqueue_styles(): void {
	wp_enqueue_style( 'bcgov-blocks-theme-style', get_template_directory_uri() . '/style.css', [], wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'bcgov-blocks-theme-blocks', get_template_directory_uri() . '/assets/css/blocks.css', [], wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'bcgov_blocks_theme_enqueue_styles' );

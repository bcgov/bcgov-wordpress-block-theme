<?php

namespace Bcgov\Theme\Block;

use Bcgov\Theme\Block\Loader;

/**
 * Initialization and setup of theme utilising an auto-loader.
 *
 * @since 1.1.1
 *
 * @package Bcgov/Theme/Block
 */
class Setup {
    /**
     * Constructor.
     */
    public function __construct() {

		$base_dirs = [
			get_template_directory() . '/src',
			get_template_directory() . '/inc/core',
		];
		$loader    = new Loader( $base_dirs );
		$loader->register();

		// Actions.
		$theme_supports                 = new Actions\ThemeSupports();
		$theme_admin_menus              = new Actions\AdminMenus();
		$theme_admin_options            = new Actions\AdminOptions();
		$theme_dependencies             = new Actions\Dependencies();
		$theme_register_custom_patterns = new Actions\RegisterCustomPatternsPostType();
		$theme_enqueue_and_inject       = new Actions\EnqueueAndInject();
		$theme_exports                  = new Actions\ExportOptions();
		$theme_register_block_patterns  = new Actions\PatternsSetup();
		$theme_page_custom_class        = new Actions\PageCustomClass();

		// Filters.
		$filter_button_enhanced    = new Filters\ButtonEnhanced();
		$filter_image_enhanced     = new Filters\ImageEnhanced();
		$filter_mediatext_enhanced = new Filters\MediaTextEnhanced();
		$filter_sitelogo_enhanced  = new Filters\SiteLogoEnhanced();

		add_action( 'acf/init', [ $theme_admin_options, 'bcgov_block_theme_acf_init_block_types' ] );
		add_action( 'admin_enqueue_scripts', [ $theme_enqueue_and_inject, 'bcgov_block_theme_enqueue_admin_scripts' ] );
        add_action( 'admin_init', [ $theme_admin_options, 'bcgov_block_theme_custom_settings' ] );
		add_action( 'admin_menu', [ $theme_admin_menus, 'bcgov_block_theme_menu' ] );
		add_action( 'admin_notices', [ $theme_dependencies, 'bcgov_block_theme_dependencies' ] );
		add_action( 'export_filters', [ $theme_exports, 'bcgov_block_theme_exports' ] );
		add_action( 'after_setup_theme', [ $theme_supports, 'bcgov_block_theme' ] );
		add_action( 'init', [ $theme_register_custom_patterns, 'bcgov_block_theme_register_custom_pattern' ] );
		add_action( 'wp_enqueue_scripts', [ $theme_enqueue_and_inject, 'bcgov_block_theme_enqueue_scripts' ] );

		add_action( 'init', [ $theme_register_block_patterns, 'bcgov_blocks_theme_register_block_patterns' ], 9 );

		// Custom Page Class combined Action & Filter hooks into Actions Class.
		add_action( 'add_meta_boxes', [ $theme_page_custom_class, 'custom_page_meta_boxes' ], 10, 2 );
		add_action( 'save_post', [ $theme_page_custom_class, 'custom_save_page_meta' ] );
		add_filter( 'body_class', [ $theme_page_custom_class, 'add_custom_class_to_body' ] );

		add_filter( 'get_custom_logo', [ $theme_supports, 'bcgov_block_theme_custom_logo' ] );
		add_filter( 'wp_headers', [ $theme_admin_options, 'bcgov_block_theme_wp_headers' ] );

		add_filter( 'render_block', [ $filter_button_enhanced, 'add_button_attributes' ], 10, 2 );
		add_filter( 'render_block', [ $filter_image_enhanced, 'add_image_attributes' ], 10, 2 );
		add_filter( 'render_block', [ $filter_mediatext_enhanced, 'add_media_text_attributes' ], 10, 2 );
		add_filter( 'render_block', [ $filter_sitelogo_enhanced, 'add_site_logo_attributes' ], 10, 2 );

		remove_theme_support( 'core-block-patterns' );
	}
}

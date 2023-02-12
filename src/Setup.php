<?php

namespace Bcgov\Theme\Block;

require_once 'Loader.php';

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
		$theme_supports                 = new Actions\BlockThemeSupports();
		$theme_admin_menus              = new Actions\BlockThemeAdminMenus();
		$theme_admin_options            = new Actions\BlockThemeAdminOptions();
		$theme_dependencies             = new Actions\BlockThemeDependencies();
		$theme_register_custom_patterns = new Actions\BlockThemeRegisterCustomPatternsPostType();
		$theme_enqueue_and_inject       = new Actions\BlockThemeEnqueueAndInject();
		$theme_register_block_patterns  = new Actions\BlockThemePatternsSetup();

		// Filters.
		$filter_button_enhanced    = new Filters\FilterButtonEnhanced();
		$filter_image_enhanced     = new Filters\FilterImageEnhanced();
		$filter_mediatext_enhanced = new Filters\FilterMediaTextEnhanced();
		$filter_sitelogo_enhanced  = new Filters\FilterSiteLogoEnhanced();

		add_action( 'acf/init', [ $theme_admin_options, 'bcgov_block_theme_acf_init_block_types' ] );
		add_action( 'admin_enqueue_scripts', [ $theme_enqueue_and_inject, 'bcgov_block_theme_enqueue_admin_scripts' ] );
        add_action( 'admin_init', [ $theme_admin_options, 'bcgov_block_theme_custom_settings' ] );
		add_action( 'admin_menu', [ $theme_admin_menus, 'bcgov_block_theme_menu' ] );
		add_action( 'admin_notices', [ $theme_dependencies, 'bcgov_block_theme_dependencies' ] );
		add_action( 'after_setup_theme', [ $theme_supports, 'bcgov_block_theme' ] );
		add_action( 'init', [ $theme_register_custom_patterns, 'bcgov_block_theme_register_custom_pattern' ] );
		add_action( 'wp_enqueue_scripts', [ $theme_enqueue_and_inject, 'bcgov_block_theme_enqueue_scripts' ] );

		add_action( 'init', [ $theme_register_block_patterns, 'bcgov_blocks_theme_register_block_patterns' ], 9 );

		add_filter( 'get_custom_logo', [ $theme_supports, 'bcgov_block_theme_custom_logo' ] );
		add_filter( 'wp_headers', [ $theme_admin_options, 'bcgov_block_theme_wp_headers' ] );

		add_filter( 'render_block', [ $filter_button_enhanced, 'add_button_attributes' ], 10, 2 );
		add_filter( 'render_block', [ $filter_image_enhanced, 'add_image_attributes' ], 10, 2 );
		add_filter( 'render_block', [ $filter_mediatext_enhanced, 'add_media_text_attributes' ], 10, 2 );
		add_filter( 'render_block', [ $filter_sitelogo_enhanced, 'add_site_logo_attributes' ], 10, 2 );

		remove_theme_support( 'core-block-patterns' );
    }
}

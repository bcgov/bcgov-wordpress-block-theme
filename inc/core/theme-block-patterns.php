<?php

namespace BCGov\BlocksTheme;

/**
 * BCGov Blocks Theme: Block Patterns.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

/**
 * BCGov Blocks Theme: Registers block patterns and categories.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
function bcgov_blocks_theme_register_block_patterns() {

	/**
	 *  BCGov Blocks Theme general use patterns.
	 *
	 * Initialises pattern categories specific to the theme.
	 *
	 * @since 1.0.0
	 *
	 * @package Bcgov/Theme/Block
	 */

	$block_pattern_categories = array(
		'bcgov-blocks-theme-general' => array( 'label' => __( 'BCGov General', 'bcgov_blocks_theme' ) ),
		'bcgov-blocks-theme-headers' => array( 'label' => __( 'BCGov Headers', 'bcgov_blocks_theme' ) ),
		'bcgov-blocks-theme-footers' => array( 'label' => __( 'BCGov Footers', 'bcgov_blocks_theme' ) ),
		'bcgov-blocks-theme-pages'   => array( 'label' => __( 'BCGov Pages', 'bcgov_blocks_theme' ) ),
	);
	/**
	 * Site specific patterns.
	 *
	 * Assign site specific theme elements such as full page layouts to their own category.
	 *
	 * @since 1.0.0
	 *
	 * @package Bcgov/Theme/Block
	 */
	// CleanBC categories.
	$block_pattern_categories['bcgov-blocks-theme-patterns-cleanbc'] = array( 'label' => __( 'BCGov Site: CleanBC', 'bcgov_blocks_theme' ) );

	/**
	 * BCGov Blocks Theme: Filters the theme block pattern categories.
	 *
	 * @since 1.0.0
	 *
	 * @package Bcgov/Theme/Block
	 *
	 * @param array[] $block_pattern_categories {
	 * An associative array of block pattern categories, keyed by category name.
	 *
	 *    @type array[] $properties {
	 *        Array of block category properties.
	 *
	 *        @type string $label A human-readable label for the pattern category.
	 *    }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'bcgov_blocks_theme_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}

	$block_patterns = array(
		// Header patterns.
		'header-default',

		// Footer patterns.
		'footer-default',

		// General patterns: not site specific.
		'general-breadcrumb-nav',
		'general-hero',

		// Full page patterns.
		'page-front',

		/**
	 	* Site specific patterns: use the project identifier as part of the naming.
		* This is reflected in the /inc/core/patterns/[project]/[pattern-name] directory.
		* Eg: for CleanBC patterns – 'cleanbc/header'.
		*
		* @since 1.0.0
		*
		* @package Bcgov/Theme/Block
		*/
		'cleanbc/goelectric-banner',
		'cleanbc/goelectric-cards',
	);

	/**
	 * BCGov Blocks Theme: Filters the theme block patterns.
	 *
	 * @since 1.0.0
	 *
	 * @package Bcgov/Theme/Block
	 *
	 * @param $block_patterns array List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'bcgov_blocks_theme_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'bcgov-wordpress-block-theme/' . $block_pattern,
			require plugin_dir_path( __FILE__ ) . '/patterns/' . $block_pattern . '.php'
		);
	}
}

add_action( 'init', __NAMESPACE__ . '\bcgov_blocks_theme_register_block_patterns', 9 );

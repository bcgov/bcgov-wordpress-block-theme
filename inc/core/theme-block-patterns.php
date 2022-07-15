<?php
/**
 * BCGov Blocks Theme: Block Patterns.
 *
 * @since 1.0.0
 */

/**
 * BCGov Blocks Theme: Registers block patterns and categories.
 *
 * @since 1.0.0
 */
function bcgov_blocks_theme_register_block_patterns() {

	/** 
	 *  BCGov Blocks Theme general use patterns.
	 * 
	 * Initialises pattern categories specific to the theme.
	 * 
	 * @since 1.0.0
	 */
	
	$block_pattern_categories = array(
		'bcgov-blocks-theme-general'		=> array( 'label' => __( 'BCGov General', 'bcgov_blocks_theme' ) ),
		'bcgov-blocks-theme-headers'		=> array( 'label' => __( 'BCGov Headers', 'bcgov_blocks_theme' ) ),
		'bcgov-blocks-theme-footers'		=> array( 'label' => __( 'BCGov Footers', 'bcgov_blocks_theme' ) ),
		'bcgov-blocks-theme-pages'		   	=> array( 'label' => __( 'BCGov Pages', 'bcgov_blocks_theme' ) ),
	);
	
	/** 
	 * Site specific patterns.
	 * 
	 * Assign site specific theme elements such as full page layouts to their own category.
	 * 
	 * @since 1.0.0
	 */
	
	// CleanBC categories
	$block_pattern_categories['bcgov-blocks-theme-pages-cleanbc'] = array( 'label' => __( 'BCGov Pages: CleanBC', 'bcgov_blocks_theme' ) );

	/**
	 * BCGov Blocks Theme: Filters the theme block pattern categories.
	 *
	 * @since 1.0.0
	 *
	 * @param array[] $block_pattern_categories {
	 *	 An associative array of block pattern categories, keyed by category name.
	 *
	 *	 @type array[] $properties {
	 *		 Array of block category properties.
	 *
	 *		 @type string $label A human-readable label for the pattern category.
	 *	 }
	 * }
	 */

	$block_pattern_categories = apply_filters( 'bcgov_blocks_theme_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}

	$block_patterns = array(
		// Header patterns
		'header-default',
		//Footer patterns
		'footer-default',
		//General patterns: not site specific
		'general-hero',
		// Full page patterns
		'page-front',
		// Site specific: CleanBC patterns 
		'page-front-cleanbc',
	);

	/**
	 * BCGov Blocks Theme: Filters the theme block patterns.
	 *
	 * @since 1.0.0
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

add_action( 'init', 'bcgov_blocks_theme_register_block_patterns', 9 );
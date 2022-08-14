<?php

namespace Bcgov\Theme\Block;

/**
 * Default footer block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Default footer', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-header-footer' ],
	'blockTypes' => [ 'core/template-part/footer' ],
	'content'    => 'WP template content goes here',
];

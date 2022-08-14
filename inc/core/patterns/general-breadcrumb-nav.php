<?php

namespace Bcgov\Theme\Block;

/**
 * General breadcrumb navigation block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Breadcrumb Navigation', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-general' ],
	'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}}},"layout":{"inherit":false,"contentSize":"1440px"},"fontSize":"extra-small"} -->
	<section class="wp-block-group has-extra-small-font-size"><!-- wp:aioseo/breadcrumbs /--></section>
	<!-- /wp:group -->',
];

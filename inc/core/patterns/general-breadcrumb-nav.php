<?php
/**
 * General breadcrumb navigation block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

 namespace Bcgov\Theme\Block;

return [
	'title'      => __( 'Breadcrumb Navigation', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-general' ],
	'content'    => '<!-- wp:group {"layout":{"inherit":false,"contentSize":"1440px"},"fontSize":"extra-small"} -->
	<div class="wp-block-group has-extra-small-font-size"><!-- wp:aioseo/breadcrumbs /--></div>
	<!-- /wp:group -->',
];

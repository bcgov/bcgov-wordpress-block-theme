<?php
/**
 * General breadcrumb navigation block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return array(
	'title'      => __( 'Breadcrumb Navigation', 'bcgov_blocks_theme' ),
	'categories' => array( 'bcgov-blocks-theme-general' ),
	'content'    => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0px","right":"10px","bottom":"10px","left":"10px"}}},"layout":{"inherit":false,"contentSize":"1440px"},"fontSize":"extra-small"} -->
	<section class="wp-block-group has-extra-small-font-size"><!-- wp:aioseo/breadcrumbs /--></section>
	<!-- /wp:group -->',
);

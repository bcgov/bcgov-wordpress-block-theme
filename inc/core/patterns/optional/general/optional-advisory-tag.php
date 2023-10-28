<?php
/**
 * CleanBC Advisory Tag block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

namespace Bcgov\Theme\Block;

return [
	'title'      => __( 'CleanBC Advisory Tag', 'bcgov_blocks_theme' ),
	'categories' => [ 'optional-patterns-general' ],
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem"}}},"className":"advisory-tag","layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group advisory-tag" style="padding-top:1rem"><!-- wp:paragraph {"backgroundColor":"quinary","textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-quinary-background-color has-text-color has-background">Advisory</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->',
];

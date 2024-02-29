<?php
/**
 * Alpha V3 Heading 2.
 *
 * @since 1.7.0
 *
 * @package Bcgov/Theme/Block
 */

 namespace Bcgov\Theme\Block;

return [
	'title'      => __( 'Heading 2', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-general', 'bcgov-blocks-theme-alpha-v3' ],
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"},"metadata":{"name":"BC Gov H2"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"border":{"bottom":{"color":"#f8ba47","width":"6px"}},"typography":{"lineHeight":"0"},"layout":{"selfStretch":"fit","flexSize":null}},"className":"is-heading-two-border","layout":{"type":"constrained","justifyContent":"left","contentSize":"40px"}} -->
	<div class="wp-block-group is-heading-two-border" style="border-bottom-color:#f8ba47;border-bottom-width:6px;line-height:0"></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	
	<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"spacing":{"margin":{"top":"0.2rem","bottom":"0.2rem"}}},"textColor":"black","fontSize":"large"} -->
	<h2 class="wp-block-heading has-black-color has-text-color has-link-color has-large-font-size" style="margin-top:0.2rem;margin-bottom:0.2rem">Heading 2</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group -->',
];

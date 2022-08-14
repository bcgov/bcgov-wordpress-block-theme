<?php

namespace Bcgov\Theme\Block;

/**
 * Default header block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Default header', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-header-footer' ],
	'blockTypes' => [ 'core/template-part/header' ],
	'content'    => '<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"0px","right":"65px","bottom":"0px","left":"65px"}}},"borderColor":"primary-brand-alt","backgroundColor":"primary-brand","textColor":"white","className":"bcgov-header-group","layout":{"inherit":true}} -->
	<div class="wp-block-group bcgov-header-group has-border-color has-primary-brand-alt-border-color has-white-color has-primary-brand-background-color has-text-color has-background has-link-color" style="padding-top:0px;padding-right:65px;padding-bottom:0px;padding-left:65px">
		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"className":"is-vertically-aligned-center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:site-logo {"width":155,"shouldSyncIcon":false} /-->
			</div>
			<!-- /wp:column -->
		
			<!-- wp:column {"className":"is-vertically-aligned-center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:site-title /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->',
];

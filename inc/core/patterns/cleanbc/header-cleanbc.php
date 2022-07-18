<?php
/**
 * CleanBC Header block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return array(
	'title'      => __( 'CleanBC Header', 'bcgov_blocks_theme' ),
	'categories' => array( 'bcgov-blocks-theme-patterns-cleanbc' ),
	'content'    => '<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"0px","right":"65px","bottom":"0px","left":"65px"}}},"borderColor":"primary-brand-yellow","backgroundColor":"primary-brand-blue","textColor":"white","className":"bcgov-header-group","layout":{"inherit":true}} -->
	<div class="wp-block-group bcgov-header-group has-border-color has-primary-brand-yellow-border-color has-white-color has-primary-brand-blue-background-color has-text-color has-background has-link-color" style="padding-top:0px;padding-right:65px;padding-bottom:0px;padding-left:65px"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"15%","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"className":"is-vertically-aligned-center"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;flex-basis:15%"><!-- wp:site-logo {"width":155,"shouldSyncIcon":false} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"15%","className":"is-vertically-aligned-center"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:site-title {"fontSize":"normal"} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"50%","layout":{"inherit":true}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:navigation {"ref":52,"textColor":"white","overlayMenu":"always","overlayBackgroundColor":"primary-brand-blue","overlayTextColor":"white","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"1rem"}},"fontSize":"large"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);

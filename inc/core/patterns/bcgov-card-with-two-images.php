<?php

namespace Bcgov\Theme\Block;

/**
 * General Card with two images pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Card with two images', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-general' ],
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}}} -->
	<div class="wp-block-group alignwide" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:media-text {"mediaPosition":"right","mediaId":6510,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_05.jpg","mediaType":"image","verticalAlignment":"bottom","imageFill":false} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-bottom"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_05.jpg" alt="" class="wp-image-6510 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"className":"is-style-default","fontSize":"extra-large"} -->
	<p class="is-style-default has-extra-large-font-size"><strong>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:media-text {"mediaPosition":"right","mediaId":6510,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_05.jpg","mediaType":"image","verticalAlignment":"top","imageFill":false} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_05.jpg" alt="" class="wp-image-6510 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"Content…","fontSize":"small"} -->
	<p class="has-small-font-size"><em>Nulla vitae elit libero, a pharetra augue</em>.</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->',
];

<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC In-page Warning Section block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'In-page Warning Section', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}},"backgroundColor":"nonary","className":"in-page-full-width-constrained-section"} -->
	<div class="wp-block-group alignfull in-page-full-width-constrained-section has-nonary-background-color has-background" style="padding-top:6rem;padding-bottom:6rem"><!-- wp:media-text {"mediaId":2165,"mediaLink":"none","mediaType":"image","mediaWidth":15,"verticalAlignment":"center","textColor":"background","className":"is-style-square"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-style-square has-background-color has-text-color" style="grid-template-columns:15% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/warning-icon.png" alt="" class="wp-image-2165 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"36px"}},"textColor":"primary-brand"} -->
	<h2 class="has-primary-brand-color has-text-color" style="font-size:36px">Donec ullamcorper nulla non metus</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"primary-brand","fontSize":"extra-small"} -->
	<p class="has-primary-brand-color has-text-color has-extra-small-font-size">Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","style":{"spacing":{"margin":{"top":"2rem","bottom":"2rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:2rem;margin-bottom:2rem"><!-- wp:button {"textColor":"background","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background-color has-text-color">Lorem 1</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"textColor":"background","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background-color has-text-color">Lorem 2</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->',
];

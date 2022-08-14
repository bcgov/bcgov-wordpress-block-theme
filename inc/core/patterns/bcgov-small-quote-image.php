<?php

namespace Bcgov\Theme\Block;

/**
 * General Small Quote with Image block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Small Quote with Image', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-general' ],
	'content'    => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}}} -->
	<div class="wp-block-group" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:media-text {"align":"","mediaId":185,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_03.png","mediaType":"image","mediaWidth":41,"verticalAlignment":"center","backgroundColor":"white"} -->
	<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center has-white-background-color has-background" style="grid-template-columns:41% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_03.png" alt="" class="wp-image-185 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"6rem","right":"2em","bottom":"6rem","left":"2em"}}}} -->
	<div class="wp-block-group" style="padding-top:6rem;padding-right:2em;padding-bottom:6rem;padding-left:2em"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"large"} -->
	<p class="has-large-font-size" style="line-height:1.2"><strong>Lorem sociis natoque penatibus et magnis</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:quote {"fontSize":"normal"} -->
	<blockquote class="wp-block-quote has-normal-font-size"><p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p><cite>Speaker or citation</cite></blockquote>
	<!-- /wp:quote --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->',
];

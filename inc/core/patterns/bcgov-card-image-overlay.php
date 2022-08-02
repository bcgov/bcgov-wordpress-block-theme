<?php

namespace Bcgov\Theme\Block;

/**
 * General Card with Image Overlay pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return array(
	'title'      => __( 'Card with Image Overlay', 'bcgov_blocks_theme' ),
	'categories' => array( 'bcgov-blocks-theme-general' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}}} -->
	<div class="wp-block-group alignwide" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:media-text {"mediaPosition":"right","mediaId":305,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_10.jpg","mediaType":"image","verticalAlignment":"center","imageFill":false,"style":{"color":{"gradient":"linear-gradient(270deg,rgba(192,186,217,0) 38%,rgba(195,189,219,0.66) 38%,rgba(192,186,217,0.66) 91%)"}}} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center has-background" style="background:linear-gradient(270deg,rgba(192,186,217,0) 38%,rgba(195,189,219,0.66) 38%,rgba(192,186,217,0.66) 91%)"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_10.jpg" alt="" class="wp-image-305 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","right":"3rem","bottom":"8rem","left":"3em"}}}} -->
	<div class="wp-block-group" style="padding-top:8rem;padding-right:3rem;padding-bottom:8rem;padding-left:3em"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2","fontSize":"36px"},"color":{"text":"#052c53"}}} -->
	<p class="has-text-color" style="color:#052c53;font-size:36px;line-height:1.2"><strong>Lorem sociis natoque penatibus et magnis</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"fontSize":"large"} -->
	<p class="has-large-font-size">Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov"} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"backgroundColor":"primary-brand-blue","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-brand-blue-background-color has-background">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}}} -->
	<div class="wp-block-group alignwide" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:media-text {"mediaId":305,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_10.jpg","mediaType":"image","verticalAlignment":"center","style":{"color":{"gradient":"linear-gradient(90deg,rgba(192,186,217,0) 38%,rgba(195,189,219,0.66) 38%,rgba(192,186,217,0.66) 91%)"}}} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center has-background" style="background:linear-gradient(90deg,rgba(192,186,217,0) 38%,rgba(195,189,219,0.66) 38%,rgba(192,186,217,0.66) 91%)"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_10.jpg" alt="" class="wp-image-305 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","right":"3rem","bottom":"8rem","left":"3em"}}}} -->
	<div class="wp-block-group" style="padding-top:8rem;padding-right:3rem;padding-bottom:8rem;padding-left:3em"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2","fontSize":"36px"},"color":{"text":"#052c53"}}} -->
	<p class="has-text-color" style="color:#052c53;font-size:36px;line-height:1.2"><strong>Lorem sociis natoque penatibus et magnis</strong></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"fontSize":"large"} -->
	<p class="has-large-font-size">Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"className":"is-bcgov"} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"backgroundColor":"primary-brand-blue","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-brand-blue-background-color has-background">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->',
);

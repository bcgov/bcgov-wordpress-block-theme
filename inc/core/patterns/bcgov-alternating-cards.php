<?php
/**
 * General Alternating Cards block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return array(
	'title'      => __( 'Alternating Cards', 'bcgov_blocks_theme' ),
	'categories' => array( 'bcgov-blocks-theme-general' ),
	'content'    => '<!-- wp:media-text {"mediaPosition":"right","mediaId":305,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_10.jpg","mediaType":"image","verticalAlignment":"center","style":{"color":{"background":"#0033661a"}}} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center has-background" style="background-color:#0033661a"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_10.jpg" alt="" class="wp-image-305 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}}} -->
	<div class="wp-block-group" style="padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2","fontSize":"36px"}}} -->
	<p style="font-size:36px;line-height:1.2"><strong>Lorem sociis natoque penatibus et magnis</strong></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"fontSize":"extra-small"} -->
	<p class="has-extra-small-font-size">Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"className":"is-bcgov"} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text -->

	<!-- wp:media-text {"mediaId":185,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_03.png","mediaType":"image","verticalAlignment":"center","style":{"color":{"background":"#fbbb181a"}}} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center has-background" style="background-color:#fbbb181a"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_03.png" alt="" class="wp-image-185 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}}} -->
	<div class="wp-block-group" style="padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2","fontSize":"36px"}}} -->
	<p style="font-size:36px;line-height:1.2"><strong>Lorem sociis natoque penatibus et magnis</strong></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"fontSize":"extra-small"} -->
	<p class="has-extra-small-font-size">Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"className":"is-bcgov"} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"backgroundColor":"primary-brand-yellow","className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-brand-yellow-background-color has-background">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text -->',
);

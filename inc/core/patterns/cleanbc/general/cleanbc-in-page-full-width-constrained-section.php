<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC In-page Full Width Constrained with Image block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'In-page Full Width Constrained with Image', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"full","style":{"color":{"background":"#005e991f"}},"className":"in-page-full-width-constrained-section"} -->
	<div class="wp-block-group alignfull in-page-full-width-constrained-section has-background" style="background-color:#005e991f"><!-- wp:media-text {"mediaPosition":"right","mediaId":1446,"mediaLink":"none","mediaType":"image","mediaWidth":35,"verticalAlignment":"center","textColor":"background"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center has-background-color has-text-color" style="grid-template-columns:auto 35%"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-weather.jpg" alt="" class="wp-image-1446 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"36px"}},"textColor":"primary-brand"} -->
	<h2 class="has-primary-brand-color has-text-color" style="font-size:36px"><strong>Lorem sociis natoque penatibus</strong></h2>
	<!-- /wp:heading -->
	
	<!-- wp:group {"borderColor":"secondary-brand","className":"content-group"} -->
	<div class="wp-block-group content-group has-border-color has-secondary-brand-border-color"><!-- wp:paragraph {"textColor":"primary-brand","fontSize":"extra-small"} -->
	<p class="has-primary-brand-color has-text-color has-extra-small-font-size">Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov"} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"textColor":"secondary-brand","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-secondary-brand-color has-text-color">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->',
];

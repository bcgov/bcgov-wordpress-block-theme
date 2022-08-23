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
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"secondary-brand","className":"in-page-full-width-constrained-section"} -->
	<div class="wp-block-group alignfull in-page-full-width-constrained-section has-secondary-brand-background-color has-background"><!-- wp:media-text {"mediaPosition":"right","mediaId":1446,"mediaLink":"none","mediaType":"image","mediaWidth":35,"verticalAlignment":"center","textColor":"background"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center has-background-color has-text-color" style="grid-template-columns:auto 35%"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-weather.jpg" alt="" class="wp-image-1446 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"36px"}},"textColor":"background"} -->
	<h2 class="has-background-color has-text-color" style="font-size:36px"><strong>Lorem sociis natoque penatibus et magnis</strong></h2>
	<!-- /wp:heading -->
	
	<!-- wp:group {"className":"content-group"} -->
	<div class="wp-block-group content-group"><!-- wp:paragraph {"fontSize":"extra-small"} -->
	<p class="has-extra-small-font-size">Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov"} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"textColor":"background","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-background-color has-text-color">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->',
];

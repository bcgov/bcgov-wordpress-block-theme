<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC In-page Impact Banner block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'In-page Impact Banner', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}},"className":"in-page-impact-banner"} -->
	<div class="wp-block-group alignwide in-page-impact-banner" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:media-text {"mediaId":1333,"mediaLink":"none","mediaType":"image","mediaWidth":34,"verticalAlignment":"center","backgroundColor":"secondary-brand"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center has-secondary-brand-background-color has-background" style="grid-template-columns:34% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-weather.jpg" alt="" class="wp-image-1333 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"3rem","left":"2rem"}}}} -->
	<div class="wp-block-group" style="padding-top:2rem;padding-right:2rem;padding-bottom:3rem;padding-left:2rem"><!-- wp:heading {"textColor":"background"} -->
	<h2 class="has-background-color has-text-color"><strong>Impacts of climate change in B.C.</strong></h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"background","fontSize":"extra-small"} -->
	<p class="has-background-color has-text-color has-extra-small-font-size">The impacts of climate change are all around us. We\'ve seen devastating wildfires and intense heat waves, droughts and dying crops. Our oceans, forests and farms are at risk, along with the livelihoods of the people that work with them.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","style":{"spacing":{"margin":{"top":"2rem","bottom":"2rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:2rem;margin-bottom:2rem"><!-- wp:button {"backgroundColor":"primary-brand-alt","textColor":"background","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-background-color has-primary-brand-alt-background-color has-text-color has-background">Learn more about how climate change is impacting our lives.</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->',
];

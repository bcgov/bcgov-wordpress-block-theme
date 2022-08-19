<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC In-page Strategies Banner block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'In-page Strategies Banner', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"wide","style":{"border":{"radius":"1rem"}},"className":"in-page-strategies-banner"} -->
	<div class="wp-block-group alignwide in-page-strategies-banner" style="border-radius:1rem"><!-- wp:columns {"style":{"color":{"background":"#f2f9fb"},"border":{"radius":"1rem"}}} -->
	<div class="wp-block-columns has-background" style="background-color:#f2f9fb;border-radius:1rem"><!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"3rem","left":"3rem"}}},"className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column" style="padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem;flex-basis:66.66%"><!-- wp:heading -->
	<h2>Key Strategies</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>B.C. has been taking action on climate change since we introduced Canada\'s first carbon tax in 2008. We\'ve gotten input on our approach from British Columbians, including Indigenous leaders and climate experts.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>We used that feedback to set two strategies: the CleanBC Roadmap to 2030 and the Climate Preparedness and Adaptation Strategy.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:2rem"><!-- wp:button {"className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link">Learn more about Climate Change</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","backgroundColor":"transparent","className":"image-column"} -->
	<div class="wp-block-column is-vertically-aligned-center image-column has-transparent-background-color has-background" style="flex-basis:33.33%"><!-- wp:image {"align":"center","id":1247,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-electric-vehicle-icon.png" alt="" class="wp-image-1247"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
];

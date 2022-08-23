<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC In-page Level 4 Top Banner block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'In-page Level 4 Top Banner', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"full","className":"in-page-level-4-top-banner"} -->
	<div class="wp-block-group alignfull in-page-level-4-top-banner"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-level-4-sub-banner-placeholder.jpg","id":1718,"focalPoint":{"x":"0.50","y":"1.00"},"gradient":"secondary-brand-opacity","style":{"spacing":{"padding":{"top":"0rem","right":"3rem","bottom":"2rem","left":"3rem"}}}} -->
	<div class="wp-block-cover" style="padding-top:0rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-secondary-brand-opacity-gradient-background"></span><img class="wp-block-cover__image-background wp-image-1718" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-level-4-sub-banner-placeholder.jpg" style="object-position:50% 100%" data-object-fit="cover" data-object-position="50% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:media-text {"mediaPosition":"right","mediaId":1447,"mediaLink":"none","mediaType":"image","mediaWidth":35,"verticalAlignment":"center","textColor":"background"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center has-background-color has-text-color" style="grid-template-columns:auto 35%"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/actions-natural-resources.jpg" alt="" class="wp-image-1447 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"36px"}},"textColor":"background"} -->
	<h2 class="has-background-color has-text-color" style="font-size:36px"><strong>Healthy industry slow climate change</strong></h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>Carbon dioxide is a greenhouse gas (GHG) that traps heat inside our atmosphere. The more carbon dioxide we produce, the more our climate changes.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>Plants and trees use the carbon dioxide in the air to make food. The carbon stays inside the plant or tree instead of staying in the atmosphere and changing the climate.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group -->',
];

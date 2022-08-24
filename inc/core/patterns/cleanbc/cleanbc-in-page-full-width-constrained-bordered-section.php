<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC In-page Constrained Bordered Section with Image block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'In-page Constrained Bordered Section with Image', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"}}},"className":"in-page-full-width-constrained-section bordered"} -->
	<div class="wp-block-group alignfull in-page-full-width-constrained-section bordered" style="padding-top:3rem;padding-bottom:3rem"><!-- wp:media-text {"mediaId":1752,"mediaLink":"none","mediaType":"image","mediaWidth":35,"verticalAlignment":"center","backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-style-default has-background-background-color has-background" style="grid-template-columns:35% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-fish-placeholder.jpg" alt="" class="wp-image-1752 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color"><!-- wp:heading {"level":3,"textColor":"tertiary"} -->
	<h3 class="has-tertiary-color has-text-color"><strong>We are decreasing our impact and preparing for changes.</strong></h3>
	<!-- /wp:heading -->
	
	<!-- wp:group {"borderColor":"tertiary","className":"content-group"} -->
	<div class="wp-block-group content-group has-border-color has-tertiary-border-color"><!-- wp:heading {"level":4,"textColor":"tertiary"} -->
	<h4 class="has-tertiary-color has-text-color">We’re working toward a cleaner B.C.</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-text-color">Our goal is to decrease our climate-changing emissions by 40% by 2030 and we are already making progress. B.C. is taking action and providing guidance. Together, we can lessen our impact and prepare our communities for the future.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov"} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"textColor":"tertiary","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-tertiary-color has-text-color">Learn more about how B.C. is taking action.</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->',
];

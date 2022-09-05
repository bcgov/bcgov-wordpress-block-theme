<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC Dual Warning Section block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Dual Warning Section', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"full","className":"warning-section"} -->
	<div class="wp-block-group alignfull warning-section"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group"><!-- wp:media-text {"mediaId":777,"mediaLink":"none","mediaType":"image","mediaWidth":15,"verticalAlignment":"center","backgroundColor":"denary","textColor":"background","className":"is-style-no-clip"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-style-no-clip has-background-color has-denary-background-color has-text-color has-background" style="grid-template-columns:15% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/warning-icon.png" alt="" class="wp-image-777 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"36px"}},"textColor":"primary-brand"} -->
	<h3 class="has-primary-brand-color has-text-color" style="font-size:36px">There\'s an emergency near me</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"primary-brand","fontSize":"extra-small"} -->
	<p class="has-primary-brand-color has-text-color has-extra-small-font-size">In an emergency, your safety is the number one priority. EmergencyInfoBC shares official information about emergencies, including what to do and where to go for help.&nbsp;&nbsp;&nbsp;&nbsp;</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","style":{"spacing":{"margin":{"top":"2rem","bottom":"2rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:2rem;margin-bottom:2rem"><!-- wp:button {"backgroundColor":"nonary","textColor":"primary-brand","className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-brand-color has-nonary-background-color has-text-color has-background" href="https://www.emergencyinfobc.gov.bc.ca/">Visit EmergencyInfoBC</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text -->
	
	<!-- wp:media-text {"mediaId":777,"mediaLink":"none","mediaType":"image","mediaWidth":15,"verticalAlignment":"center","backgroundColor":"nonary","textColor":"background","className":"is-style-no-clip"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-style-no-clip has-background-color has-nonary-background-color has-text-color has-background" style="grid-template-columns:15% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/warning-icon.png" alt="" class="wp-image-777 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"36px"}},"textColor":"primary-brand"} -->
	<h3 class="has-primary-brand-color has-text-color" style="font-size:36px">Be ready for an emergency</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"primary-brand","fontSize":"extra-small"} -->
	<p class="has-primary-brand-color has-text-color has-extra-small-font-size">B.C. is having floods, wildfires and extreme heat more often. Learn about the hazards in your region and make a plan for staying safe.&nbsp;&nbsp;</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","style":{"spacing":{"margin":{"top":"2rem","bottom":"2rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:2rem;margin-bottom:2rem"><!-- wp:button {"backgroundColor":"denary","textColor":"primary-brand","className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-brand-color has-denary-background-color has-text-color has-background" href="https://www2.gov.bc.ca/gov/content?id=0C01537370884EA886AA49A117651C94">Visit Prepared BC</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
];

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
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"quinary","className":"emergency-ready"} -->
	<div class="wp-block-group alignfull emergency-ready has-quinary-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:columns {"className":"is-style-constrained"} -->
	<div class="wp-block-columns is-style-constrained"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:media-text {"mediaPosition":"right","mediaId":5944,"mediaLink":"none","mediaType":"image","verticalAlignment":"bottom","className":"is-style-no-clip"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-bottom is-style-no-clip"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/image-PreparedBC.png" alt="" class="wp-image-5944 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:paragraph {"textColor":"primary-brand","fontSize":"extra-small"} -->
	<p class="has-primary-brand-color has-text-color has-extra-small-font-size" id="emergency"><strong>Be ready for an emergency</strong>. Learn about the hazards in your region and make a plan for staying safe.  </p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","style":{"spacing":{"margin":{"top":"2rem","bottom":"2rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:2rem;margin-bottom:2rem"><!-- wp:button {"backgroundColor":"secondary-brand","textColor":"background","className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-secondary-brand-background-color has-text-color has-background" href="https://www2.gov.bc.ca/gov/content?id=0C01537370884EA886AA49A117651C94">Learn to prepare for an emergency at PreparedBC</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","backgroundColor":"denary","className":"emergency-near-me"} -->
	<div class="wp-block-group alignfull emergency-near-me has-denary-background-color has-background"><!-- wp:columns {"verticalAlignment":"center","className":"is-style-constrained"} -->
	<div class="wp-block-columns are-vertically-aligned-center is-style-constrained"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">Your safety is the number one priority. EmergencyInfoBC shares trusted <br>content about emergencies, including what to do and where to go for help.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"denary","width":100} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-denary-color has-background-background-color has-text-color has-background" href="https://www.emergencyinfobc.gov.bc.ca/">There’s an emergency near me</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
];

<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC Programs block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'CleanBC Programs', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"full","className":"cleanbc-programs"} -->
	<div class="wp-block-group alignfull cleanbc-programs"><!-- wp:columns {"className":"is-style-constrained"} -->
	<div class="wp-block-columns is-style-constrained"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","textColor":"secondary-brand"} -->
	<h2 class="has-text-align-center has-secondary-brand-color has-text-color">CleanBC programs can help you take action</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"tertiary","className":"is-style-custom","fontSize":"large"} -->
	<p class="has-text-align-center is-style-custom has-tertiary-color has-text-color has-large-font-size">Explore how you can reduce your impact on the environment</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:spacer {"height":"35px"} -->
	<div style="height:35px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"verticalAlignment":null,"className":"is-style-constrained"} -->
	<div class="wp-block-columns is-style-constrained"><!-- wp:column {"verticalAlignment":"top"} -->
	<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"align":"center","id":8992,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/programs-heat-pump.png" alt="" class="wp-image-8992"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link" href="https://betterhomesbc.ca/">Home upgrades to save on energy costs</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"top"} -->
	<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"align":"center","id":8997,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/programs-vehicles.png" alt="" class="wp-image-8997"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link" href="https://goelectricbc.gov.bc.ca/personal-rebate-offers/passenger-vehicle-rebates/">Rebates on electric cars and trucks</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"top","className":"is-style-default"} -->
	<div class="wp-block-column is-vertically-aligned-top is-style-default"><!-- wp:image {"align":"center","id":9002,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/programs-chargers.png" alt="" class="wp-image-9002"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link" href="https://goelectricbc.gov.bc.ca/personal-rebate-offers/ev-charging/">Rebates on EV chargers for home and work </a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"top"} -->
	<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"align":"center","id":9012,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/programs-motorcycles.png" alt="" class="wp-image-9012"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link" href="https://goelectricbc.gov.bc.ca/programs-for-businesses-and-communities/rebates-for-commercial-vehicles/">Rebates on electric motorcycles</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"top"} -->
	<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"align":"center","id":9017,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/programs-scooters.png" alt="" class="wp-image-9017"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link" href="https://goelectricbc.gov.bc.ca/programs-for-businesses-and-communities/rebates-for-commercial-vehicles/">Rebates on e-scooters and lawn mowers</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"bottom"} -->
	<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:image {"align":"center","id":9007,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/programs-bicycles.png" alt="" class="wp-image-9007"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:spacer {"height":"1px"} -->
	<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:paragraph {"align":"center","textColor":"primary-brand","className":"is-style-custom","fontSize":"small"} -->
	<p class="has-text-align-center is-style-custom has-primary-brand-color has-text-color has-small-font-size">Save the PST when you buy an e-bike</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:spacer {"height":"3rem"} -->
	<div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"2rem"}},"className":"three-up-card-feature"} -->
	<div class="wp-block-group alignfull three-up-card-feature"><!-- wp:columns {"className":"programs"} -->
	<div class="wp-block-columns programs"><!-- wp:column {"verticalAlignment":"center","backgroundColor":"background","className":"is-style-default","layout":{"inherit":false}} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-default has-background-background-color has-background"><!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"borderColor":"gray-40"} -->
	<div class="wp-block-group has-border-color has-gray-40-border-color" style="border-width:1px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"align":"center","id":1917,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-large is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/feature-Better-Homes.jpg" alt="" class="wp-image-1917"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"border":{"width":"8px"},"spacing":{"padding":{"bottom":"2rem"}}},"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:8px;padding-bottom:2rem"><!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"textColor":"tertiary","className":"is-style-underline","fontSize":"extra-large"} -->
	<div class="wp-block-button has-custom-font-size is-style-underline has-extra-large-font-size"><a class="wp-block-button__link has-tertiary-color has-text-color" href="https://betterhomesbc.ca/">Better Homes</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Making stricter emissions standards and penalties and expanding legislation to include marine and aviation fuels and new compliance options.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link" href="https://betterhomesbc.ca/">Learn more</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-default has-background-background-color has-background"><!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"borderColor":"gray-40"} -->
	<div class="wp-block-group has-border-color has-gray-40-border-color" style="border-width:1px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"align":"center","id":1242,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-large is-style-default"><a href="https://goelectricbc.ca/"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/feature-Go-Electric.jpg" alt="" class="wp-image-1242"/></a></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"border":{"width":"8px"},"spacing":{"padding":{"bottom":"2rem"}}},"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:8px;padding-bottom:2rem"><!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"textColor":"tertiary","className":"is-style-underline","fontSize":"extra-large"} -->
	<div class="wp-block-button has-custom-font-size is-style-underline has-extra-large-font-size"><a class="wp-block-button__link has-tertiary-color has-text-color" href="https://goelectricbc.ca/">Go Electric</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Funding programs, incentives, studies and energy-management initiatives to encourage people and businesses to switch to electricity.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link" href="https://goelectricbc.ca/">Learn more</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-default has-background-background-color has-background"><!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"borderColor":"gray-40"} -->
	<div class="wp-block-group has-border-color has-gray-40-border-color" style="border-width:1px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"align":"center","id":7022,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-large is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/feature-Better-Buildings.jpg" alt="" class="wp-image-7022"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"border":{"width":"8px"},"spacing":{"padding":{"bottom":"2rem"}}},"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:8px;padding-bottom:2rem"><!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"textColor":"tertiary","className":"is-style-underline","fontSize":"extra-large"} -->
	<div class="wp-block-button has-custom-font-size is-style-underline has-extra-large-font-size"><a class="wp-block-button__link has-tertiary-color has-text-color" href="https://betterbuildingsbc.ca/">Better Buildings</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Increasing use of hydrogen fuel-cell technology by rolling out hydrogen vehicles and fuelling stations and starting a local chapter of the Canadian Hydrogen Fuel Cell Association.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link" href="https://betterbuildingsbc.ca/">Learn more</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
];

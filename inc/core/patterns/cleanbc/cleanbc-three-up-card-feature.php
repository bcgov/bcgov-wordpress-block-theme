<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC Three-up Card Feature block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Three-up Card Feature', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","right":"2rem","bottom":"6rem","left":"2rem"},"blockGap":"2rem","margin":{"top":"3rem"}}},"backgroundColor":"secondary-brand","className":"three-up-card-feature"} -->
	<div class="wp-block-group alignfull three-up-card-feature has-secondary-brand-background-color has-background" style="margin-top:3rem;padding-top:6rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"3rem","fontStyle":"normal","fontWeight":"300"}},"textColor":"background"} -->
	<h2 class="has-text-align-center has-background-color has-text-color" style="font-size:3rem;font-style:normal;font-weight:300">BC is taking Action</h2>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"background","className":"is-style-default"} -->
	<h3 class="has-text-align-center is-style-default has-background-color has-text-color" style="font-style:normal;font-weight:300">We’re promoting electricity and developing new clean and renewable fuels.</h3>
	<!-- /wp:heading -->
	
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"3rem"}}}} -->
	<div class="wp-block-columns" style="padding-top:3rem"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"backgroundColor":"background","className":"is-style-default","layout":{"inherit":false}} -->
	<div class="wp-block-column is-vertically-aligned-top is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:image {"align":"center","id":594,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-large is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_05.jpg" alt="" class="wp-image-594"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"septenary"} -->
	<div class="wp-block-group has-border-color has-septenary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secondary-brand","className":"is-style-default","fontSize":"large"} -->
	<h4 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Updating the Low Carbon Fuel Standard (LCFS)</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Making stricter emissions standards and penalties and expanding legislation to include marine and aviation fuels and new compliance options.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"textColor":"secondary-brand","className":"is-style-custom","fontSize":"extra-small"} -->
	<p class="is-style-custom has-secondary-brand-color has-text-color has-extra-small-font-size">Learn more about the</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"textColor":"secondary-brand","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-secondary-brand-color has-text-color">Low Carbon Fuel Standard</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","left":"0px","bottom":"2rem"}}},"backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-column is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:image {"align":"center","id":599,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-large is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_04.jpg" alt="" class="wp-image-599"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"quarternary"} -->
	<div class="wp-block-group has-border-color has-quarternary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secondary-brand","className":"is-style-default","fontSize":"large"} -->
	<h4 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">BC Hydro Electrification Plan</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Funding programs, incentives, studies and energy-management initiatives to encourage people and businesses to switch to electricity.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"textColor":"secondary-brand","className":"is-style-custom","fontSize":"extra-small"} -->
	<p class="is-style-custom has-secondary-brand-color has-text-color has-extra-small-font-size">Learn more about the </p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"textColor":"secondary-brand","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-secondary-brand-color has-text-color">BC Hydro Electrification Plan</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-column is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:image {"align":"center","id":593,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-large is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_01.jpg" alt="" class="wp-image-593"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"gray-80"} -->
	<div class="wp-block-group has-border-color has-gray-80-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secondary-brand","className":"is-style-default","fontSize":"large"} -->
	<h4 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Hydrogen Strategy</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Increasing use of hydrogen fuel-cell technology by rolling out hydrogen vehicles and fuelling stations and starting a local chapter of the Canadian Hydrogen Fuel Cell Association.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"textColor":"secondary-brand","className":"is-style-custom","fontSize":"extra-small"} -->
	<p class="is-style-custom has-secondary-brand-color has-text-color has-extra-small-font-size">Learn more about the </p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"textColor":"secondary-brand","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-secondary-brand-color has-text-color">CHFA</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"3rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:3rem"><!-- wp:button {"textColor":"secondary-brand","className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-brand-color has-text-color">See more initiatives</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group -->',
];

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
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","right":"2rem","bottom":"6rem","left":"2rem"},"blockGap":"2rem","margin":{"top":"3rem"}}},"className":"three-up-card-feature"} -->
	<div class="wp-block-group alignfull three-up-card-feature" style="margin-top:3rem;padding-top:6rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"3rem","fontStyle":"normal","fontWeight":"300"}},"textColor":"secondary-brand"} -->
	<h2 class="has-text-align-center has-secondary-brand-color has-text-color" style="font-size:3rem;font-style:normal;font-weight:300">CleanBC programs help you take action</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"tertiary","className":"is-style-custom","fontSize":"large"} -->
	<p class="has-text-align-center is-style-custom has-tertiary-color has-text-color has-large-font-size">Explore the steps you can take to reduce your carbon footprint.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"3rem"}}}} -->
	<div class="wp-block-columns" style="padding-top:3rem"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"backgroundColor":"background","className":"is-style-default","layout":{"inherit":false}} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"gray-40"} -->
	<div class="wp-block-group has-border-color has-gray-40-border-color" style="border-width:1px"><!-- wp:image {"align":"center","id":1902,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/home-programs-01.jpg" alt="" class="wp-image-1902"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secondary-brand","className":"is-style-default","fontSize":"large"} -->
	<h3 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Better Homes</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Making stricter emissions standards and penalties and expanding legislation to include marine and aviation fuels and new compliance options.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","left":"0px","bottom":"2rem"}}},"backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"gray-40"} -->
	<div class="wp-block-group has-border-color has-gray-40-border-color" style="border-width:1px"><!-- wp:image {"align":"center","id":1903,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/home-programs-02.jpg" alt="" class="wp-image-1903"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secondary-brand","className":"is-style-default","fontSize":"large"} -->
	<h3 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Go Electric</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Funding programs, incentives, studies and energy-management initiatives to encourage people and businesses to switch to electricity.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"gray-40"} -->
	<div class="wp-block-group has-border-color has-gray-40-border-color" style="border-width:1px"><!-- wp:image {"align":"center","id":1904,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/home-programs-03.jpg" alt="" class="wp-image-1904"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secondary-brand","className":"is-style-default","fontSize":"large"} -->
	<h3 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Better Buildings</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Increasing use of hydrogen fuel-cell technology by rolling out hydrogen vehicles and fuelling stations and starting a local chapter of the Canadian Hydrogen Fuel Cell Association.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"3rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:3rem"><!-- wp:button {"backgroundColor":"tertiary","textColor":"background","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background-color has-tertiary-background-color has-text-color has-background">Find out more ways you can take action</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group -->',
];

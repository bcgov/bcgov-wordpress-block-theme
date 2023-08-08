<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC Two-up Card Feature block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Two-up Card Feature', 'bcgov_blocks_theme' ),
	'categories' => [ 'optional-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"2rem"}},"className":"two-up-card-feature"} -->
	<div class="wp-block-group alignfull two-up-card-feature"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"backgroundColor":"background","className":"is-style-default","layout":{"inherit":false}} -->
	<div class="wp-block-column is-vertically-aligned-top is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":1768,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/two-up-placeholder-01.jpg" alt="" class="wp-image-1768"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"octonary"} -->
	<div class="wp-block-group has-border-color has-octonary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secondary-brand","className":"is-style-default","fontSize":"large"} -->
	<h3 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Sollicitudin Aenean Dolor</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:1rem"><!-- wp:button {"textColor":"secondary-brand","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-secondary-brand-color has-text-color">More about Sollicitudin</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","left":"0px","bottom":"2rem"}}},"backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-column is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":1769,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/two-up-placeholder-02.jpg" alt="" class="wp-image-1769"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"accent"} -->
	<div class="wp-block-group has-border-color has-accent-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secondary-brand","className":"is-style-default","fontSize":"large"} -->
	<h4 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Vehicula Justo Adipiscing</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:1rem"><!-- wp:button {"textColor":"secondary-brand","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-secondary-brand-color has-text-color">More about Vehicula</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
];

<?php

namespace Bcgov\Theme\Block;

/**
 * General Cards Portrait 3-up pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return array(
	'title'      => __( 'Cards Portrait 3-up', 'bcgov_blocks_theme' ),
	'categories' => array( 'bcgov-blocks-theme-general' ),
	'content'    => '<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"}}},"className":"is-card-portrait-image-over"} -->
	<div class="wp-block-columns is-card-portrait-image-over" style="padding-top:3rem;padding-bottom:3rem"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"className":"is-style-dropshadow","layout":{"inherit":false}} -->
	<div class="wp-block-column is-style-dropshadow" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:image {"align":"center","id":594,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-large is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_05.jpg" alt="" class="wp-image-594"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"primary-brand-blue","fontSize":"large"} -->
	<h3 class="has-text-align-center has-primary-brand-blue-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Headling specific talking point</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"text-colour","fontSize":"normal"} -->
	<p class="has-text-align-center has-text-colour-color has-text-color has-normal-font-size">Description lorem ipsum lorem ipsum</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"backgroundColor":"primary-brand-blue","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-brand-blue-background-color has-background">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","left":"0px","bottom":"2rem"}}},"className":"is-style-dropshadow"} -->
	<div class="wp-block-column is-style-dropshadow" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:image {"align":"center","id":599,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-large is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_04.jpg" alt="" class="wp-image-599"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"primary-brand-blue","fontSize":"large"} -->
	<h3 class="has-text-align-center has-primary-brand-blue-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Headling specific talking point</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"text-colour","fontSize":"normal"} -->
	<p class="has-text-align-center has-text-colour-color has-text-color has-normal-font-size">Description lorem ipsum lorem ipsum</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"backgroundColor":"primary-brand-blue","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-brand-blue-background-color has-background">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"className":"is-style-dropshadow"} -->
	<div class="wp-block-column is-style-dropshadow" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:image {"align":"center","id":593,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-large is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_01.jpg" alt="" class="wp-image-593"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"primary-brand-blue","fontSize":"large"} -->
	<h3 class="has-text-align-center has-primary-brand-blue-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Headling specific talking point</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"text-colour","fontSize":"normal"} -->
	<p class="has-text-align-center has-text-colour-color has-text-color has-normal-font-size">Description lorem ipsum lorem ipsum</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"backgroundColor":"primary-brand-blue","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-brand-blue-background-color has-background">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);

<?php

namespace Bcgov\Theme\Block;

/**
 * General Card with Under Image Portrait 2-Up pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return array(
	'title'      => __( 'Card with Under Image Portrait 2-Up', 'bcgov_blocks_theme' ),
	'categories' => array( 'bcgov-blocks-theme-general' ),
	'content'    => '<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"6rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"2px","radius":"0.66rem"},"color":{"background":"#0033661a"}},"borderColor":"primary-brand-blue"} -->
	<div class="wp-block-group has-border-color has-primary-brand-blue-border-color has-background" style="background-color:#0033661a;border-radius:0.66rem;border-width:2px;padding-top:6rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","fontSize":"small"} -->
	<h2 class="has-text-align-center has-small-font-size">small title for card</h2>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"2.5rem"},"spacing":{"margin":{"bottom":"2rem"}}}} -->
	<h3 class="has-text-align-center" style="font-size:2.5rem;margin-bottom:2rem">Main heading for card</h3>
	<!-- /wp:heading -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	
	<!-- wp:image {"align":"center","id":285,"width":351,"height":438,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_02.png" alt="" class="wp-image-285" width="351" height="438"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"6rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"2px","radius":"0.66rem"},"color":{"background":"#0033661a"}},"borderColor":"primary-brand-blue"} -->
	<div class="wp-block-group has-border-color has-primary-brand-blue-border-color has-background" style="background-color:#0033661a;border-radius:0.66rem;border-width:2px;padding-top:6rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","fontSize":"small"} -->
	<h2 class="has-text-align-center has-small-font-size">small title for card</h2>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"2.5rem"},"spacing":{"margin":{"bottom":"2rem"}}}} -->
	<h3 class="has-text-align-center" style="font-size:2.5rem;margin-bottom:2rem">Main heading for card</h3>
	<!-- /wp:heading -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	
	<!-- wp:image {"align":"center","id":284,"width":351,"height":438,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_07.png" alt="" class="wp-image-284" width="351" height="438"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);

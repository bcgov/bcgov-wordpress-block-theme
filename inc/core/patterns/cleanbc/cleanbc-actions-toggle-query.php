<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC Actions Toggle List - Homepage block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Actions Toggle List', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-query' ],
	'content'    => '<!-- wp:group {"align":"wide","className":"actions-toggle-header"} -->
	<div class="wp-block-group alignwide actions-toggle-header"><!-- wp:heading {"align":"wide"} -->
	<h2 class="alignwide">BC Government’s Actions</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>We’re working to slow climate change and address its impacts in may parts of life.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"actions-toggle-buttons"} -->
	<div class="wp-block-buttons actions-toggle-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"secondary-brand","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-brand-color has-background-background-color has-text-color has-background" href="#show-transportation" style="border-radius:0px">Transportation</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"backgroundColor":"background","textColor":"secondary-brand","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-brand-color has-background-background-color has-text-color has-background" href="#show-energy" style="border-radius:0px">Energy</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"backgroundColor":"background","textColor":"secondary-brand","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-brand-color has-background-background-color has-text-color has-background" href="#show-oil-gas" style="border-radius:0px">Oil and Gas</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"backgroundColor":"background","textColor":"secondary-brand","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-brand-color has-background-background-color has-text-color has-background" style="border-radius:0px">Industry</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"backgroundColor":"background","textColor":"secondary-brand","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-brand-color has-background-background-color has-text-color has-background" href="#show-economy" style="border-radius:0px">Economy</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"backgroundColor":"background","textColor":"secondary-brand","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-brand-color has-background-background-color has-text-color has-background" href="#show-communities" style="border-radius:0px">Buildings and Communities</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"backgroundColor":"background","textColor":"secondary-brand","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-brand-color has-background-background-color has-text-color has-background" href="#show-risk" style="border-radius:0px">Reducing Risk</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"backgroundColor":"background","textColor":"secondary-brand","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-brand-color has-background-background-color has-text-color has-background" href="#show-resources" style="border-radius:0px">Natural Resources</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"backgroundColor":"background","textColor":"secondary-brand","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-brand-color has-background-background-color has-text-color has-background" href="#show-collaboration" style="border-radius:0px">Indigenous and government collaboration</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"color":{"background":"#f1f1f180"},"spacing":{"margin":{"top":"3rem","bottom":"0rem"}}},"className":"actions-toggle-query-loop"} -->
	<div class="wp-block-group alignfull actions-toggle-query-loop has-background" style="background-color:#f1f1f180;margin-top:3rem;margin-bottom:0rem"><!-- wp:query {"queryId":2,"query":{"offset":0,"postType":"post","order":"asc","orderBy":"date","author":"","search":"","sticky":"","perPage":12,"inherit":false,"taxQuery":{"category":[21]}},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-columns" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"65%","className":"is-content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center is-content-column" style="flex-basis:65%"><!-- wp:post-title {"textColor":"tertiary"} /-->
	
	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group"><!-- wp:post-content /-->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link">Learn more about</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"35%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:35%"><!-- wp:post-featured-image {"width":"100%","height":"","scale":"fill"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group -->',
];

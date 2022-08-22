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
	<div class="wp-block-buttons actions-toggle-buttons"><!-- wp:button {"textColor":"secondary-brand","style":{"color":{"background":"#ecf6ff"}},"className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-secondary-brand-color has-text-color has-background" href="#show-transportation" style="background-color:#ecf6ff">Transportation</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"textColor":"secondary-brand","style":{"color":{"background":"#ecf6ff"}},"className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-secondary-brand-color has-text-color has-background" href="#show-energy" style="background-color:#ecf6ff">Energy</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"textColor":"secondary-brand","style":{"color":{"background":"#ecf6ff"}},"className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-secondary-brand-color has-text-color has-background" href="#show-oil-gas" style="background-color:#ecf6ff">Oil and Gas</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"textColor":"secondary-brand","style":{"color":{"background":"#ecf6ff"}},"className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-secondary-brand-color has-text-color has-background" style="background-color:#ecf6ff">Industry</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"textColor":"secondary-brand","style":{"color":{"background":"#ecf6ff"}},"className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-secondary-brand-color has-text-color has-background" href="#show-economy" style="background-color:#ecf6ff">Economy</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"textColor":"secondary-brand","style":{"color":{"background":"#ecf6ff"}},"className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-secondary-brand-color has-text-color has-background" href="#show-communities" style="background-color:#ecf6ff">Buildings and Communities</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"textColor":"secondary-brand","style":{"color":{"background":"#ecf6ff"}},"className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-secondary-brand-color has-text-color has-background" href="#show-risk" style="background-color:#ecf6ff">Reducing Risk</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"textColor":"secondary-brand","style":{"color":{"background":"#ecf6ff"}},"className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-secondary-brand-color has-text-color has-background" href="#show-resources" style="background-color:#ecf6ff">Natural Resources</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"textColor":"secondary-brand","style":{"color":{"background":"#ecf6ff"}},"className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-secondary-brand-color has-text-color has-background" href="#show-collaboration" style="background-color:#ecf6ff">Indigenous and government collaboration</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"color":{"background":"#f1f1f180"},"spacing":{"margin":{"top":"3rem","bottom":"0rem"}}},"className":"actions-toggle-query-loop"} -->
	<div class="wp-block-group alignfull actions-toggle-query-loop has-background" style="background-color:#f1f1f180;margin-top:3rem;margin-bottom:0rem"><!-- wp:query {"queryId":2,"query":{"offset":0,"postType":"cleanbc-actions","order":"asc","orderBy":"date","author":"","search":"","sticky":"","perPage":12,"inherit":false},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-columns" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"75%","className":"is-content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center is-content-column" style="flex-basis:75%"><!-- wp:post-title {"textColor":"tertiary"} /-->
	
	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group"><!-- wp:post-content /-->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link">Learn more about</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:25%"><!-- wp:post-featured-image {"width":"100%","height":"","scale":"fill"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group -->',
];

<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC Two-up Dark Wide Card Feature block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Two-up Dark Wide Card Feature', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}},"backgroundColor":"primary-brand","className":"cleanbc-info-cards two-up-wide"} -->
	<div class="wp-block-group alignfull cleanbc-info-cards two-up-wide has-primary-brand-background-color has-background" style="padding-top:6rem;padding-bottom:6rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"50%","backgroundColor":"secondary-brand","className":"is-style-default"} -->
	<div class="wp-block-column is-style-default has-secondary-brand-background-color has-background" style="flex-basis:50%"><!-- wp:group {"align":"wide","style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"borderColor":"foreground","className":"cleanbc-large-info-card"} -->
	<div class="wp-block-group alignwide cleanbc-large-info-card has-border-color has-foreground-border-color" style="border-width:1px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:media-text {"mediaId":1611,"mediaLink":"none","mediaType":"image","mediaWidth":25} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:25% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-level-3-banner-placeholder-02.png" alt="" class="wp-image-1611 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"background"} -->
	<h2 class="has-background-color has-text-color">Climate Change Impacts</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">This is a paragraph about a smaller subject line that is around three to four sentences.</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">This is a paragraph about a smaller subject line that is around three to four sentences. The paragraph is related to British Columbia’s Plans and Actions to 2025.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">This is a paragraph about a smaller subject line that is around three to four sentences. The paragraph is related to British Columbia’s Plans and Actions to 2025.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"50%","backgroundColor":"secondary-brand","className":"is-style-default"} -->
	<div class="wp-block-column is-style-default has-secondary-brand-background-color has-background" style="flex-basis:50%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"className":"cleanbc-large-info-card"} -->
	<div class="wp-block-group alignwide cleanbc-large-info-card" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:media-text {"mediaId":1951,"mediaLink":"none","mediaType":"image","mediaWidth":33} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:33% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/source-of-climate-change-banner.png" alt="" class="wp-image-1951 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"background"} -->
	<h2 class="has-background-color has-text-color">Climate Change Impacts</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">This is a paragraph about a smaller subject line that is around three to four sentences.</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">This is a paragraph about a smaller subject line that is around three to four sentences. The paragraph is related to British Columbia’s Plans and Actions to 2025.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">This is a paragraph about a smaller subject line that is around three to four sentences. The paragraph is related to British Columbia’s Plans and Actions to 2025.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
];

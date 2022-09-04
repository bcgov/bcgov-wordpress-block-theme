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
	<div class="wp-block-column is-style-default has-secondary-brand-background-color has-background" style="flex-basis:50%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"className":"cleanbc-large-info-card"} -->
	<div class="wp-block-group alignwide cleanbc-large-info-card" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:media-text {"mediaId":1611,"mediaLink":"none","mediaType":"image","mediaWidth":25,"className":"is-style-no-clip"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-style-no-clip" style="grid-template-columns:25% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-level-3-banner-placeholder-02.png" alt="" class="wp-image-1611 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"background"} -->
	<h2 class="has-background-color has-text-color">Nullam Sem Pharetra</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">Nulla vitae elit libero, a pharetra augue. Curabitur blandit tempus porttitor.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Curabitur blandit tempus porttitor.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"50%","backgroundColor":"secondary-brand","className":"is-style-default"} -->
	<div class="wp-block-column is-style-default has-secondary-brand-background-color has-background" style="flex-basis:50%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"className":"cleanbc-large-info-card"} -->
	<div class="wp-block-group alignwide cleanbc-large-info-card" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:media-text {"mediaId":1951,"mediaLink":"none","mediaType":"image","mediaWidth":33,"className":"is-style-no-clip"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-style-no-clip" style="grid-template-columns:33% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/source-of-climate-change-banner.png" alt="" class="wp-image-1951 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"background"} -->
	<h2 class="has-background-color has-text-color">Bibendum Amet Cras</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">Nullam quis risus eget urna mollis ornare vel eu leo. Lorem ipsum dolor sit amet, consectetur.</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">Aenean lacinia bibendum nulla sed consectetur. Cum sociis natoque penatibus et magnis dis parturient.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
];

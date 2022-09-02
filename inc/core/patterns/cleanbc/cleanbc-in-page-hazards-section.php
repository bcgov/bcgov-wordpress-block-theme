<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC In-page Learn About Hazards block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'In-page Learn About Hazards Section', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}},"color":{"background":"#00294d1a"}},"className":"learn-about-hazards"} -->
	<div class="wp-block-group alignfull learn-about-hazards has-background" style="background-color:#00294d1a;padding-top:6rem;padding-bottom:6rem"><!-- wp:columns {"className":"is-style-constrained"} -->
	<div class="wp-block-columns is-style-constrained"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"primary-brand"} -->
	<h3 class="has-text-align-center has-primary-brand-color has-text-color">Donec ullamcorper nulla non metus</h3>
	<!-- /wp:heading --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"className":"is-style-constrained"} -->
	<div class="wp-block-columns is-style-constrained"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":2149,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/impact-icon-atmospheric-rivers.png" alt="" class="wp-image-2149"/><figcaption>Aenean Porta</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":2152,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/impact-icon-extreme-temperatures.png" alt="" class="wp-image-2152"/><figcaption>Malesuada Euismod</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":2146,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/impact-icon-flooding.png" alt="" class="wp-image-2146"/><figcaption>Dapibus Ornare</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":2151,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/impact-icon-health.png" alt="" class="wp-image-2151"/><figcaption>Sem Tortor</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":2148,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/impact-icon-landslides.png" alt="" class="wp-image-2148"/><figcaption>Lorem Vestibulum</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":2147,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/impact-icon-wildfires.png" alt="" class="wp-image-2147"/><figcaption>Vehicula Sollicitudin</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
];

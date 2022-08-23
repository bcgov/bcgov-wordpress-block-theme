<?php
/**
 * CleanBC Level 3 Dark Banner pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Level 3 Dark Banner', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-header-footer' ],
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"secondary-brand","className":"level-3-banner"} -->
	<div class="wp-block-group alignfull level-3-banner has-secondary-brand-background-color has-background"><!-- wp:columns {"verticalAlignment":null,"className":"info-cover-banner"} -->
	<div class="wp-block-columns info-cover-banner"><!-- wp:column {"verticalAlignment":"center","width":"66.66%","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column" style="flex-basis:66.66%"><!-- wp:heading {"level":1,"textColor":"background"} -->
	<h1 class="has-background-color has-text-color">Sources of Climate Change</h1>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">From where we live, to how we get around, to our jobs and hobbies -- humans are affecting the climate.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","backgroundColor":"primary-brand","className":"image-column"} -->
	<div class="wp-block-column is-vertically-aligned-center image-column has-primary-brand-background-color has-background" style="flex-basis:33.33%"><!-- wp:image {"align":"center","id":1602,"width":356,"height":323,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-level-3-banner-placeholder.png" alt="" class="wp-image-1602" width="356" height="323"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
];

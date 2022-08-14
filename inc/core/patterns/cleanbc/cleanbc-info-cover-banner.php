<?php
/**
 * CleanBC Info Cover Banner pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Info Cover Banner', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-header-footer' ],
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/bc-cover-banner-default.jpg","id":1041,"dimRatio":70,"overlayColor":"white","focalPoint":{"x":"0.50","y":"1.00"},"minHeight":50,"minHeightUnit":"vh","isDark":false,"align":"full","className":"info-cover-banner"} -->
	<div class="wp-block-cover alignfull is-light info-cover-banner" style="min-height:50vh"><span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1041" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/bc-cover-banner-default.jpg" style="object-position:50% 100%" data-object-fit="cover" data-object-position="50% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":null} -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1} -->
	<h1>What B.C. is doing about Climate Change</h1>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>From where we live, to how we get around, to our jobs and hobbies -- humans are affecting the climate.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":493,"width":400,"height":400,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/bc-map-icon.svg" alt="" class="wp-image-493" width="400" height="400"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->',
];

<?php
/**
 * CleanBC Level 4 Light Banner pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Level 4 Light Banner', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-header-footer' ],
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/bc-cover-banner-default.jpg","id":1041,"dimRatio":70,"overlayColor":"white","focalPoint":{"x":"0.50","y":"1.00"},"minHeight":50,"minHeightUnit":"vh","isDark":false,"align":"full","className":"info-cover-banner"} -->
	<div class="wp-block-cover alignfull is-light info-cover-banner" style="min-height:50vh"><span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1041" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/bc-cover-banner-default.jpg" style="object-position:50% 100%" data-object-fit="cover" data-object-position="50% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column"><!-- wp:heading {"level":1,"textColor":"secondary-brand"} -->
	<h1 class="has-secondary-brand-color has-text-color">Atmospheric Rivers</h1>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>This is a paragraph about atmospheric rivers  and natural hazards in our built environment. </p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>This paragraph is the introduction to below.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem"}}},"className":"advisory-tag","layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group advisory-tag" style="padding-top:1rem"><!-- wp:paragraph {"backgroundColor":"accent","textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-accent-background-color has-text-color has-background">Advisory</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"36%","className":"image-column"} -->
	<div class="wp-block-column is-vertically-aligned-center image-column" style="flex-basis:36%"><!-- wp:image {"align":"center","id":1611,"width":350,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-level-3-banner-placeholder-02.png" alt="" class="wp-image-1611" width="350"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->',
];

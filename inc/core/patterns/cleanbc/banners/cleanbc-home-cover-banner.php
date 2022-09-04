<?php
/**
 * CleanBC Home Cover Banner pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Home Cover Banner', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-banners' ],
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/home-cover-banner-default.jpg","id":258,"dimRatio":50,"overlayColor":"background","minHeight":80,"minHeightUnit":"vh","isDark":false,"align":"full","className":"home-cover-banner"} -->
	<div class="wp-block-cover alignfull is-light home-cover-banner" style="min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-258" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/home-cover-banner-default.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"textColor":"primary-brand"} -->
	<h1 class="has-primary-brand-color has-text-color">Consectetur Cursus Vulputate Risus</h1>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"textColor":"primary-brand"} -->
	<h2 class="has-primary-brand-color has-text-color">Adipiscing Aenean Etiam Consectetur Mollis</h2>
	<!-- /wp:heading -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link">CTA 1</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link">CTA 2</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div></div>
	<!-- /wp:cover -->',
];

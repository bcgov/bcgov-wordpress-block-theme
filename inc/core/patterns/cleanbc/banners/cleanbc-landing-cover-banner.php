<?php
/**
 * CleanBC Landing Cover Banner pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Landing Cover Banner', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-banners' ],
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/landing-cover-banner-default.jpg","id":867,"overlayColor":"secondary-brand","minHeight":60,"minHeightUnit":"vh","align":"full","className":"landing-cover-banner"} -->
	<div class="wp-block-cover alignfull landing-cover-banner" style="min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-secondary-brand-background-color has-background-dim-100 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-867" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/landing-cover-banner-default.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1} -->
	<h1>Save page to enable diagonal overlay.</h1>
	<!-- /wp:heading -->
	
	<!-- wp:heading -->
	<h2>Curabitur blandit tempus porttitor. Nulla vitae elit libero, a pharetra augue.</h2>
	<!-- /wp:heading --></div></div>
	<!-- /wp:cover -->',
];

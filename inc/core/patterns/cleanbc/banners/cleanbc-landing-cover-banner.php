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
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/landing-cover-banner-default.jpg","id":262,"dimRatio":30,"overlayColor":"secondary-brand","minHeight":60,"minHeightUnit":"vh","isDark":false,"align":"full","className":"landing-cover-banner"} -->
	<div class="wp-block-cover alignfull is-light landing-cover-banner" style="min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-secondary-brand-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-262" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/landing-cover-banner-default.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"textColor":"secondary-brand"} -->
	<div class="wp-block-group has-secondary-brand-color has-text-color"><!-- wp:heading {"textAlign":"center","level":1,"backgroundColor":"secondary-brand"} -->
	<h1 class="has-text-align-center has-secondary-brand-background-color has-background">Aenean lacinia bibendum nulla sed consectetur.</h1>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"textAlign":"center","backgroundColor":"secondary-brand"} -->
	<h2 class="has-text-align-center has-secondary-brand-background-color has-background">Vestibulum id ligula porta felis euismod semper.</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover -->',
];

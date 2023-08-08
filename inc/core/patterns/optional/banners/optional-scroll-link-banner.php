<?php
/**
 * CleanBC Scrolling Link Banner pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Scrolling Link Banner', 'bcgov_blocks_theme' ),
	'categories' => [ 'optional-patterns-banners' ],
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"primary-brand","className":"scroll-link-banner","layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull scroll-link-banner has-primary-brand-background-color has-background"><!-- wp:group {"align":"wide","className":"is-content-group","layout":{"inherit":false}} -->
	<div class="wp-block-group alignwide is-content-group"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"","className":"is-style-default","layout":{"inherit":false,"contentSize":"1440px","wideSize":"100%"}} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-default"><!-- wp:heading {"level":1,"textColor":"white"} -->
	<h1 class="has-white-color has-text-color">Commodo Justo Inceptos</h1>
	<!-- /wp:heading -->
	
	<!-- wp:buttons {"layout":{"type":"flex","orientation":"horizontal","justifyContent":"left","flexWrap":"nowrap"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"textColor":"accent","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-accent-color has-text-color" href="#individuals">Link 1</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"textColor":"denary"} -->
	<div class="wp-block-button"><a class="wp-block-button__link has-denary-color has-text-color" href="#businesses">Link 2</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"textColor":"tertiary","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-tertiary-color has-text-color" href="#businesses">Link 3</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"textColor":"octonary","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-octonary-color has-text-color">Link 4</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"textColor":"accent","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-accent-color has-text-color">Link 5</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
];

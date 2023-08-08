<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC Constrained Bordered Section with Image block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Constrained Bordered Section with Image', 'bcgov_blocks_theme' ),
	'categories' => [ 'optional-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"}}},"className":"in-page-full-width-constrained-section bordered"} -->
	<div class="wp-block-group alignfull in-page-full-width-constrained-section bordered" style="padding-top:3rem;padding-bottom:3rem"><!-- wp:media-text {"mediaId":1752,"mediaLink":"none","mediaType":"image","mediaWidth":35,"verticalAlignment":"center","backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-style-default has-background-background-color has-background" style="grid-template-columns:35% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-fish-placeholder.jpg" alt="" class="wp-image-1752 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color"><!-- wp:heading {"level":3,"textColor":"tertiary"} -->
	<h3 class="has-tertiary-color has-text-color"><strong>Vivamus sagittis lacus vel augue laoreet rutrum.</strong></h3>
	<!-- /wp:heading -->
	
	<!-- wp:group {"borderColor":"tertiary","className":"content-group"} -->
	<div class="wp-block-group content-group has-border-color has-tertiary-border-color"><!-- wp:heading {"level":4,"textColor":"tertiary"} -->
	<h4 class="has-tertiary-color has-text-color">Ipsum Inceptos Condimentum.</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-text-color">Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Sed posuere consectetur est at lobortis.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov"} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"textColor":"tertiary","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-tertiary-color has-text-color">Learn more about vivamus sagittis</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->',
];

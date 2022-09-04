<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC In-page Level 4 Top Banner block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'In-page Level 4 Top Banner', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"full","className":"in-page-level-4-top-banner"} -->
	<div class="wp-block-group alignfull in-page-level-4-top-banner"><!-- wp:cover {"gradient":"secondary-brand-opacity","isDark":false,"style":{"spacing":{"padding":{"top":"0rem","right":"3rem","bottom":"2rem","left":"3rem"}}}} -->
	<div class="wp-block-cover is-light" style="padding-top:0rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-secondary-brand-opacity-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:media-text {"mediaPosition":"right","mediaId":1447,"mediaLink":"none","mediaType":"image","mediaWidth":35,"verticalAlignment":"center","textColor":"background"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center has-background-color has-text-color" style="grid-template-columns:auto 35%"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/actions-natural-resources.jpg" alt="" class="wp-image-1447 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"36px"}},"textColor":"primary-brand"} -->
	<h2 class="has-primary-brand-color has-text-color" style="font-size:36px"><strong><strong>Morbi leo risus, porta ac consectetur ac, vestibulum at eros</strong></strong></h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-text-color">Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group -->',
];

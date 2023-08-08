<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC In-page Sector Cards Section block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'In-page Sector Cards Section', 'bcgov_blocks_theme' ),
	'categories' => [ 'optional-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"full","style":{"border":{"radius":"1rem"}},"className":"in-page-sectors-section"} -->
	<div class="wp-block-group alignfull in-page-sectors-section" style="border-radius:1rem"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/bc-cover-banner-default.jpg","id":1041,"dimRatio":60,"overlayColor":"background","focalPoint":{"x":"0.50","y":"1.00"},"isDark":false,"align":"center","style":{"spacing":{"padding":{"top":"6rem","right":"3rem","bottom":"6rem","left":"3rem"}}}} -->
	<div class="wp-block-cover aligncenter is-light" style="padding-top:6rem;padding-right:3rem;padding-bottom:6rem;padding-left:3rem"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1041" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/bc-cover-banner-default.jpg" style="object-position:50% 100%" data-object-fit="cover" data-object-position="50% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"3rem"}}}} -->
	<h2 class="has-text-align-center" style="margin-bottom:3rem">Donec ullamcorper</h2>
	<!-- /wp:heading -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"denary","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-denary-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary-brand"} -->
	<div class="wp-block-group has-primary-brand-background-color has-background"><!-- wp:image {"align":"center","id":1971,"width":240,"height":240,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><a href="#agriculture"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/sector-icon-agriculture.png" alt="" class="wp-image-1971" width="240" height="240"/></a><figcaption>Aenean</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"secondary-brand","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-secondary-brand-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary-brand"} -->
	<div class="wp-block-group has-primary-brand-background-color has-background"><!-- wp:image {"align":"center","id":1972,"width":240,"height":240,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><a href="#buildings"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/sector-icon-buildings.png" alt="" class="wp-image-1972" width="240" height="240"/></a><figcaption>Porta</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"nonary","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-nonary-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary-brand"} -->
	<div class="wp-block-group has-primary-brand-background-color has-background"><!-- wp:image {"align":"center","id":1973,"width":240,"height":240,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><a href="#energy"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/sector-icon-energy.png" alt="" class="wp-image-1973" width="240" height="240"/></a><figcaption>Malesuada</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"2rem"}}}} -->
	<div class="wp-block-columns" style="padding-top:2rem"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"secondary-accent","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-secondary-accent-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary-brand"} -->
	<div class="wp-block-group has-primary-brand-background-color has-background"><!-- wp:image {"align":"center","id":1974,"width":240,"height":240,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><a href="#forestry"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/sector-icon-forestry.png" alt="" class="wp-image-1974" width="240" height="240"/></a><figcaption>Euismod</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"tertiary","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-tertiary-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary-brand"} -->
	<div class="wp-block-group has-primary-brand-background-color has-background"><!-- wp:image {"align":"center","id":1975,"width":240,"height":240,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><a href="#industry"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/sector-icon-industry.png" alt="" class="wp-image-1975" width="240" height="240"/></a><figcaption>Dapibus</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"duodenary","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-duodenary-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary-brand"} -->
	<div class="wp-block-group has-primary-brand-background-color has-background"><!-- wp:image {"align":"center","id":1976,"width":240,"height":240,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><a href="#oil-and-gas"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/sector-icon-oil-and-gas.png" alt="" class="wp-image-1976" width="240" height="240"/></a><figcaption>Ornare</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"2rem"}}}} -->
	<div class="wp-block-columns" style="padding-top:2rem"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"tridenary","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-tridenary-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary-brand"} -->
	<div class="wp-block-group has-primary-brand-background-color has-background"><!-- wp:image {"align":"center","id":1977,"width":240,"height":240,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><a href="#transportation"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/sector-icons-transportation.png" alt="" class="wp-image-1977" width="240" height="240"/></a><figcaption>Sem</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"quarternary","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-quarternary-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary-brand"} -->
	<div class="wp-block-group has-primary-brand-background-color has-background"><!-- wp:image {"align":"center","id":1978,"width":240,"height":240,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><a href="#waste"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/sector-icons-waste.png" alt="" class="wp-image-1978" width="240" height="240"/></a><figcaption>Lorem</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"3rem","left":"3rem"}}},"className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column" style="padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem;flex-basis:33.33%"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group -->',
];

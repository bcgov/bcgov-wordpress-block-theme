<?php
/**
 * CleanBC Level 3 Page Layout block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'CleanBC Level 3 Page Layout', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-page-layouts' ],
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"primary-brand","className":"level-3-banner"} -->
	<div class="wp-block-group alignfull level-3-banner has-primary-brand-background-color has-background"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column"><!-- wp:heading {"level":1,"textColor":"background"} -->
	<h1 class="has-background-color has-text-color">Sources of Climate Change</h1>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">From where we live, to how we get around, to our jobs and hobbies -- humans are affecting the climate.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","backgroundColor":"secondary-brand","className":"image-column"} -->
	<div class="wp-block-column is-vertically-aligned-center image-column has-secondary-brand-background-color has-background" style="flex-basis:33.33%"><!-- wp:image {"align":"center","id":1951,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/source-of-climate-change-banner.png" alt="" class="wp-image-1951"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","className":"in-page-full-width-constrained-section"} -->
	<div class="wp-block-group alignfull in-page-full-width-constrained-section"><!-- wp:media-text {"mediaPosition":"right","mediaId":2091,"mediaLink":"none","mediaType":"image","mediaWidth":35,"verticalAlignment":"center","textColor":"background"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center has-background-color has-text-color" style="grid-template-columns:auto 35%"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/emissions.jpg" alt="" class="wp-image-2091 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"36px"}},"textColor":"primary-brand"} -->
	<h2 class="has-primary-brand-color has-text-color" style="font-size:36px"><strong>Emissions</strong></h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-text-color">Human activity is the main cause of climate change.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-text-color">We burn fossil fuels like diesel, gasoline and natural gas for energy. Burning fossil fuels releases a gas called carbon dioxide into the atmosphere. Once it\'s in the atmosphere, carbon dioxide works like a greenhouse: it traps heat and warms the planet.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","style":{"spacing":{"margin":{"top":"2rem","bottom":"2rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:2rem;margin-bottom:2rem"><!-- wp:button {"textColor":"background","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background-color has-text-color">Learn more about Climate Change</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"border":{"radius":"1rem"}},"className":"in-page-sectors-section"} -->
	<div class="wp-block-group alignfull in-page-sectors-section" style="border-radius:1rem"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/bc-cover-banner-default.jpg","id":1041,"dimRatio":60,"overlayColor":"background","focalPoint":{"x":"0.50","y":"1.00"},"isDark":false,"align":"center","style":{"spacing":{"padding":{"top":"6rem","right":"3rem","bottom":"6rem","left":"3rem"}}}} -->
	<div class="wp-block-cover aligncenter is-light" style="padding-top:6rem;padding-right:3rem;padding-bottom:6rem;padding-left:3rem"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1041" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/bc-cover-banner-default.jpg" style="object-position:50% 100%" data-object-fit="cover" data-object-position="50% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"3rem"}}}} -->
	<h2 class="has-text-align-center" style="margin-bottom:3rem">Sectors</h2>
	<!-- /wp:heading -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"denary","className":"content-column is-style-default"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column is-style-default has-denary-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary-brand"} -->
	<div class="wp-block-group has-primary-brand-background-color has-background"><!-- wp:image {"align":"center","id":1971,"width":240,"height":240,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><a href="#agriculture"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/sector-icon-agriculture.png" alt="" class="wp-image-1971" width="240" height="240"/></a><figcaption>Agriculture</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"secondary-brand","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-secondary-brand-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary-brand"} -->
	<div class="wp-block-group has-primary-brand-background-color has-background"><!-- wp:image {"align":"center","id":1972,"width":240,"height":240,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><a href="#buildings"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/sector-icon-buildings.png" alt="" class="wp-image-1972" width="240" height="240"/></a><figcaption>Buildings</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"nonary","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-nonary-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary-brand"} -->
	<div class="wp-block-group has-primary-brand-background-color has-background"><!-- wp:image {"align":"center","id":1973,"width":240,"height":240,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><a href="#energy"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/sector-icon-energy.png" alt="" class="wp-image-1973" width="240" height="240"/></a><figcaption>Energy</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"2rem"}}}} -->
	<div class="wp-block-columns" style="padding-top:2rem"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"secondary-accent","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-secondary-accent-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary-brand"} -->
	<div class="wp-block-group has-primary-brand-background-color has-background"><!-- wp:image {"align":"center","id":1974,"width":240,"height":240,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><a href="#forestry"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/sector-icon-forestry.png" alt="" class="wp-image-1974" width="240" height="240"/></a><figcaption>Forestry</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"tertiary","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-tertiary-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary-brand"} -->
	<div class="wp-block-group has-primary-brand-background-color has-background"><!-- wp:image {"align":"center","id":1975,"width":240,"height":240,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><a href="#industry"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/sector-icon-industry.png" alt="" class="wp-image-1975" width="240" height="240"/></a><figcaption>Industry</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"duodenary","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-duodenary-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary-brand"} -->
	<div class="wp-block-group has-primary-brand-background-color has-background"><!-- wp:image {"align":"center","id":1976,"width":240,"height":240,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><a href="#oil-and-gas"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/sector-icon-oil-and-gas.png" alt="" class="wp-image-1976" width="240" height="240"/></a><figcaption>Oil and Gas</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"2rem"}}}} -->
	<div class="wp-block-columns" style="padding-top:2rem"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"tridenary","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-tridenary-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary-brand"} -->
	<div class="wp-block-group has-primary-brand-background-color has-background"><!-- wp:image {"align":"center","id":1977,"width":240,"height":240,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><a href="#transportation"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/sector-icons-transportation.png" alt="" class="wp-image-1977" width="240" height="240"/></a><figcaption>Transportation</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"quarternary","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-quarternary-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary-brand"} -->
	<div class="wp-block-group has-primary-brand-background-color has-background"><!-- wp:image {"align":"center","id":1978,"width":240,"height":240,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><a href="#waste"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/sector-icons-waste.png" alt="" class="wp-image-1978" width="240" height="240"/></a><figcaption>Waste</figcaption></figure>
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

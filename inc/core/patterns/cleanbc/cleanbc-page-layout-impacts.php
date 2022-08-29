<?php
/**
 * CleanBC Impacts Page Layout block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'CleanBC Impacts Page Layout', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-page-layouts' ],
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"primary-brand","className":"level-3-banner"} -->
	<div class="wp-block-group alignfull level-3-banner has-primary-brand-background-color has-background"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column"><!-- wp:heading {"level":1,"textColor":"background"} -->
	<h1 class="has-background-color has-text-color">Impacts of <br>Climate Change</h1>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">From where we live, to how we get around, to our jobs and hobbies -- humans are affecting the climate.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","backgroundColor":"primary-brand","className":"image-column"} -->
	<div class="wp-block-column is-vertically-aligned-center image-column has-primary-brand-background-color has-background" style="flex-basis:33.33%"><!-- wp:image {"align":"center","id":2128,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/impacts-of-climate-change.png" alt="" class="wp-image-2128"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"border":{"width":"8px","style":"solid","radius":{"topLeft":"rem","bottomLeft":"1rem","bottomRight":"1rem"}}},"borderColor":"nonary","backgroundColor":"gray-05","className":"on-this-page"} -->
	<div class="wp-block-group alignwide on-this-page has-border-color has-nonary-border-color has-gray-05-background-color has-background" style="border-top-left-radius:rem;border-bottom-left-radius:1rem;border-bottom-right-radius:1rem;border-style:solid;border-width:8px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:media-text {"mediaPosition":"right","mediaId":2129,"mediaLink":"none","mediaType":"image","mediaWidth":65,"className":"is-style-default"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-style-default" style="grid-template-columns:auto 65%"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-on-this-page-placeholder-02.jpg" alt="" class="wp-image-2129 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3} -->
	<h3>On this page</h3>
	<!-- /wp:heading -->
	
	<!-- wp:list -->
	<ul><li><a href="#section-1">How B.C’s Climate Changes</a></li><li><a href="#section-2">BC is Taking Action</a></li><li><a href="#section-3">Tracking Pollution</a></li><li><a href="#section-4">Reducing Pollution</a></li><li><a href="#section-5">Preparing for Emergencies</a></li><li><a href="#section-6">Further Reading</a></li></ul>
	<!-- /wp:list --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}},"backgroundColor":"transparent","className":"in-page-full-width-constrained-section floating"} -->
	<div class="wp-block-group alignfull in-page-full-width-constrained-section floating has-transparent-background-color has-background" style="padding-top:6rem;padding-bottom:6rem"><!-- wp:media-text {"mediaPosition":"right","mediaId":2139,"mediaLink":"none","mediaType":"image","mediaWidth":35,"mediaSizeSlug":"full","verticalAlignment":"top","textColor":"background","className":"is-style-square"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top is-style-square has-background-color has-text-color" style="grid-template-columns:auto 35%"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/climate-impact-placeholder-01.jpg" alt="" class="wp-image-2139 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"textColor":"primary-brand"} -->
	<h2 class="has-primary-brand-color has-text-color">Climate change can impact us suddenly, like it did in the summer of 2021.</h2>
	<!-- /wp:heading -->
	
	<!-- wp:separator {"backgroundColor":"nonary"} -->
	<hr class="wp-block-separator has-text-color has-nonary-color has-alpha-channel-opacity has-nonary-background-color has-background"/>
	<!-- /wp:separator -->
	
	<!-- wp:paragraph {"textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-text-color">An extreme heat event caused temperatures upward of 45*C in parts of the province. More than 600 people died.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-text-color">The heat event lead into a wildfire season so severe that we were in a state of emergency for two months.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-text-color">Then, in the fall of 20201, an extreme rainfall event lead to floods and landslides that cut Southwestern B.C. off from the rest of Canada.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-text-color">These events took lives and destroyed homes, roads and communities.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-text-color">Climate change can impact us in other, less noticeable ways too. Our summers are getting drier and hotter. Our winters are getting warmer and wetter. These changes can be gradual enough that we don’t notice right away.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-text-color">But they can have big and long-lasting effects.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}},"backgroundColor":"transparent","className":"in-page-full-width-constrained-section floating"} -->
	<div class="wp-block-group alignfull in-page-full-width-constrained-section floating has-transparent-background-color has-background" style="padding-top:6rem;padding-bottom:6rem"><!-- wp:media-text {"mediaPosition":"right","mediaId":2143,"mediaLink":"none","mediaType":"image","mediaWidth":35,"mediaSizeSlug":"full","verticalAlignment":"top","textColor":"background","className":"is-style-square"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top is-style-square has-background-color has-text-color" style="grid-template-columns:auto 35%"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/climate-impact-placeholder-02.jpg" alt="" class="wp-image-2143 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"textColor":"primary-brand"} -->
	<h2 class="has-primary-brand-color has-text-color">Adapting to Climate Change</h2>
	<!-- /wp:heading -->
	
	<!-- wp:separator {"backgroundColor":"nonary"} -->
	<hr class="wp-block-separator has-text-color has-nonary-color has-alpha-channel-opacity has-nonary-background-color has-background"/>
	<!-- /wp:separator -->
	
	<!-- wp:paragraph {"textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-text-color">B.C. is working together with people, organizations and communities to prepare for the impacts of climate change. Knowing how climate changes iWe’re gathering and sharing data that will help us prepare for the future. mpacts us will help us prepare for the future. We’ree can makinge our buildings and roads more resilient. We’re can strengthening our food systems so they are more reliable. B.C. is working together with people, organizations and communities to prepare for the impacts of climate change.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2rem","bottom":"2rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:2rem;margin-bottom:2rem"><!-- wp:button {"backgroundColor":"secondary-brand"} -->
	<div class="wp-block-button"><a class="wp-block-button__link has-secondary-brand-background-color has-background">Explore everything B.C. is doing to address climate change</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"border":{"radius":"1rem"}},"className":"in-page-sectors-section"} -->
	<div class="wp-block-group alignfull in-page-sectors-section" style="border-radius:1rem"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/bc-cover-banner-default.jpg","id":1041,"dimRatio":60,"overlayColor":"background","focalPoint":{"x":"0.50","y":"1.00"},"isDark":false,"align":"center","style":{"spacing":{"padding":{"top":"6rem","right":"3rem","bottom":"6rem","left":"3rem"}}}} -->
	<div class="wp-block-cover aligncenter is-light" style="padding-top:6rem;padding-right:3rem;padding-bottom:6rem;padding-left:3rem"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1041" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/bc-cover-banner-default.jpg" style="object-position:50% 100%" data-object-fit="cover" data-object-position="50% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"3rem"}}}} -->
	<h2 class="has-text-align-center" style="margin-bottom:3rem">Impact in BC</h2>
	<!-- /wp:heading -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"primary-brand","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-primary-brand-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"align":"center","id":2146,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/impact-icon-flooding.png" alt="" class="wp-image-2146"/><figcaption>Flooding</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"primary-brand","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-primary-brand-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"align":"center","id":2147,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/impact-icon-wildfires.png" alt="" class="wp-image-2147"/><figcaption>Wildfires</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"primary-brand","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-primary-brand-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"align":"center","id":2148,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/impact-icon-landslides.png" alt="" class="wp-image-2148"/><figcaption>Landslides</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"2rem"}}}} -->
	<div class="wp-block-columns" style="padding-top:2rem"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"primary-brand","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-primary-brand-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"align":"center","id":2149,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/impact-icon-atmospheric-rivers.png" alt="" class="wp-image-2149"/><figcaption>Atmospheric Rivers</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"primary-brand","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-primary-brand-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"align":"center","id":2151,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/impact-icon-health.png" alt="" class="wp-image-2151"/><figcaption>Health</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"2rem","left":"3rem"}}},"backgroundColor":"primary-brand","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column has-primary-brand-background-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:2rem;padding-left:3rem;flex-basis:33.33%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"align":"center","id":2152,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/impact-icon-extreme-temperatures.png" alt="" class="wp-image-2152"/><figcaption>Extreme Temperatures</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","right":"2rem","bottom":"6rem","left":"2rem"},"blockGap":"2rem"}},"backgroundColor":"primary-brand","className":"three-up-card-feature"} -->
	<div class="wp-block-group alignfull three-up-card-feature has-primary-brand-background-color has-background" style="padding-top:6rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
	<div class="wp-block-column" style="flex-basis:100%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","textColor":"background"} -->
	<h2 class="has-text-align-left has-background-color has-text-color">Hub Stories</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"3rem"}}}} -->
	<div class="wp-block-columns" style="padding-top:3rem"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"backgroundColor":"background","className":"is-style-default","layout":{"inherit":false}} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"gray-40"} -->
	<div class="wp-block-group has-border-color has-gray-40-border-color" style="border-width:1px"><!-- wp:image {"align":"center","id":2160,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/hub-stories-01.jpg" alt="" class="wp-image-2160"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"2rem"}}},"textColor":"secondary-brand","className":"is-style-default"} -->
	<h3 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color" style="margin-top:2rem">BC Hydro Electrification Plan</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Funding programs, incentives, studies and energy-management initiatives to encourage people and businesses to switch to electricity.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","left":"0px","bottom":"2rem"}}},"backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"gray-40"} -->
	<div class="wp-block-group has-border-color has-gray-40-border-color" style="border-width:1px"><!-- wp:image {"align":"center","id":2160,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/hub-stories-01.jpg" alt="" class="wp-image-2160"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"2rem"}}},"textColor":"secondary-brand","className":"is-style-default"} -->
	<h3 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color" style="margin-top:2rem">BC Hydro Electrification Plan</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Funding programs, incentives, studies and energy-management initiatives to encourage people and businesses to switch to electricity.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"gray-40"} -->
	<div class="wp-block-group has-border-color has-gray-40-border-color" style="border-width:1px"><!-- wp:image {"align":"center","id":2160,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/hub-stories-01.jpg" alt="" class="wp-image-2160"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"2rem"}}},"textColor":"secondary-brand","className":"is-style-default"} -->
	<h3 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color" style="margin-top:2rem">BC Hydro Electrification Plan</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Funding programs, incentives, studies and energy-management initiatives to encourage people and businesses to switch to electricity.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}},"backgroundColor":"nonary","className":"in-page-full-width-constrained-section"} -->
	<div class="wp-block-group alignfull in-page-full-width-constrained-section has-nonary-background-color has-background" style="padding-top:6rem;padding-bottom:6rem"><!-- wp:media-text {"mediaId":2165,"mediaLink":"none","mediaType":"image","mediaWidth":15,"verticalAlignment":"center","textColor":"background","className":"is-style-square"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-style-square has-background-color has-text-color" style="grid-template-columns:15% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/icons/warning-icon.png" alt="" class="wp-image-2165 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"36px"}},"textColor":"primary-brand"} -->
	<h2 class="has-primary-brand-color has-text-color" style="font-size:36px">Preparing for hazards before they happen</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"primary-brand","fontSize":"extra-small"} -->
	<p class="has-primary-brand-color has-text-color has-extra-small-font-size">This is a paragraph on preparing for emergencies. This is a paragraph on preparing for emergencies. This is a longer sentence in detail about what this section is and what it is talking about which is all there is for now.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","style":{"spacing":{"margin":{"top":"2rem","bottom":"2rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:2rem;margin-bottom:2rem"><!-- wp:button {"textColor":"background","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background-color has-text-color">Visit EmergencyInfoBC</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"textColor":"background","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background-color has-text-color">Public Emergency Preparation</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}},"backgroundColor":"primary-brand","className":"cleanbc-info-cards two-up-wide"} -->
	<div class="wp-block-group alignfull cleanbc-info-cards two-up-wide has-primary-brand-background-color has-background" style="padding-top:6rem;padding-bottom:6rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"50%","backgroundColor":"secondary-brand","className":"is-style-default"} -->
	<div class="wp-block-column is-style-default has-secondary-brand-background-color has-background" style="flex-basis:50%"><!-- wp:group {"align":"wide","style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"borderColor":"foreground","className":"cleanbc-large-info-card"} -->
	<div class="wp-block-group alignwide cleanbc-large-info-card has-border-color has-foreground-border-color" style="border-width:1px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:media-text {"mediaId":1611,"mediaLink":"none","mediaType":"image","mediaWidth":25} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:25% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-level-3-banner-placeholder-02.png" alt="" class="wp-image-1611 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"background"} -->
	<h2 class="has-background-color has-text-color">Climate Change Impacts</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">This is a paragraph about a smaller subject line that is around three to four sentences.</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">This is a paragraph about a smaller subject line that is around three to four sentences. The paragraph is related to British Columbia’s Plans and Actions to 2025.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">This is a paragraph about a smaller subject line that is around three to four sentences. The paragraph is related to British Columbia’s Plans and Actions to 2025.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"50%","backgroundColor":"secondary-brand","className":"is-style-default"} -->
	<div class="wp-block-column is-style-default has-secondary-brand-background-color has-background" style="flex-basis:50%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"className":"cleanbc-large-info-card"} -->
	<div class="wp-block-group alignwide cleanbc-large-info-card" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:media-text {"mediaId":1951,"mediaLink":"none","mediaType":"image","mediaWidth":33} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:33% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/source-of-climate-change-banner.png" alt="" class="wp-image-1951 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"background"} -->
	<h2 class="has-background-color has-text-color">Climate Change Impacts</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">This is a paragraph about a smaller subject line that is around three to four sentences.</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">This is a paragraph about a smaller subject line that is around three to four sentences. The paragraph is related to British Columbia’s Plans and Actions to 2025.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"textColor":"background"} -->
	<p class="has-background-color has-text-color">This is a paragraph about a smaller subject line that is around three to four sentences. The paragraph is related to British Columbia’s Plans and Actions to 2025.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
];

<?php
/**
 * CleanBC Homepage Layout block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'CleanBC Homepage Layout', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-page-layouts' ],
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/home-cover-banner-default.jpg","id":258,"dimRatio":50,"overlayColor":"background","minHeight":80,"minHeightUnit":"vh","align":"full","className":"home-cover-banner"} -->
	<div class="wp-block-cover alignfull home-cover-banner" style="min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-258" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/home-cover-banner-default.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"textColor":"primary-brand"} -->
	<h1 class="has-primary-brand-color has-text-color">BC is rising to meet the challenge of climate change</h1>
	<!-- /wp:heading -->
	
	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"3rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:3rem"><!-- wp:button {"backgroundColor":"secondary-brand"} -->
	<div class="wp-block-button"><a class="wp-block-button__link has-secondary-brand-background-color has-background">Learn more about how climate changes in B.C.</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div></div>
	<!-- /wp:cover -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"6rem","bottom":"6rem"}}},"backgroundColor":"transparent","className":"in-page-full-width-constrained-section floating"} -->
	<div class="wp-block-group alignfull in-page-full-width-constrained-section floating has-transparent-background-color has-background" style="margin-top:6rem;margin-bottom:6rem"><!-- wp:media-text {"mediaId":1752,"mediaLink":"none","mediaType":"image","mediaWidth":35,"verticalAlignment":"center","textColor":"background"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center has-background-color has-text-color" style="grid-template-columns:35% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-fish-placeholder.jpg" alt="" class="wp-image-1752 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"textColor":"secondary-brand"} -->
	<h2 class="has-secondary-brand-color has-text-color"><strong>We are decreasing our impact and preparing for changes.</strong></h2>
	<!-- /wp:heading -->
	
	<!-- wp:group {"className":"content-group"} -->
	<div class="wp-block-group content-group"><!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color">We’re working toward a cleaner B.C.</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-text-color">Our goal is to decrease our climate-changing emissions by 40% by 2030 and we are already making progress. B.C. is taking action and providing guidance. Together, we can lessen our impact and prepare our communities for the future.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov"} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link">Learn more about how B.C. is taking action.</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"><!-- wp:heading {"level":3} -->
	<h3>B.C.\'s climate action will:</h3>
	<!-- /wp:heading -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"20%"} -->
	<div class="wp-block-column" style="flex-basis:20%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"septenary","width":100,"className":"is-style-icon is-style-blank","svgIcon":"group","clickFlag":true} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-icon is-style-blank"><a class="wp-block-button__link has-septenary-background-color has-background">help protect nature</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"30%"} -->
	<div class="wp-block-column" style="flex-basis:30%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"senary","width":100,"className":"is-style-icon is-style-blank","svgIcon":"default","clickFlag":true} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-icon is-style-blank"><a class="wp-block-button__link has-senary-background-color has-background">sustainably build our economy and</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","width":100,"className":"is-style-icon is-style-blank","svgIcon":"auto","clickFlag":true} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-icon is-style-blank"><a class="wp-block-button__link has-accent-background-color has-background">help us prepare for the changes that are impacting our lives.</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"6rem","bottom":"6rem"}}},"className":"four-up-cover-card-feature"} -->
	<div class="wp-block-group alignfull four-up-cover-card-feature" style="margin-top:6rem;margin-bottom:6rem"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/bc-cover-banner-default.jpg","id":1041,"dimRatio":80,"overlayColor":"background","isDark":false,"style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}}} -->
	<div class="wp-block-cover is-light" style="padding-top:6rem;padding-bottom:6rem"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1041" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/bc-cover-banner-default.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"2rem"}},"className":"two-up-card-feature"} -->
	<div class="wp-block-group alignfull two-up-card-feature"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"3rem"}}}} -->
	<div class="wp-block-group" style="margin-bottom:3rem"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"primary-brand"} -->
	<h2 class="has-text-align-center has-primary-brand-color has-text-color" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">There are many priorities and they are often connected, like our natural systems.</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"primary-brand","className":"is-style-custom","fontSize":"large"} -->
	<p class="has-text-align-center is-style-custom has-primary-brand-color has-text-color has-large-font-size">Explore some of the ways B.C. is having a positive impact. </p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"backgroundColor":"background","className":"is-style-default","layout":{"inherit":false}} -->
	<div class="wp-block-column is-vertically-aligned-top is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":1768,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/two-up-placeholder-01.jpg" alt="" class="wp-image-1768"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"octonary"} -->
	<div class="wp-block-group has-border-color has-octonary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"secondary-brand","className":"is-style-default","fontSize":"large"} -->
	<h2 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:700;margin-top:2rem">Restoring Coastal Ecosystems</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">We’re supporting local communities to protect and strengthen natural habitats, like the Kus-kus-sum’s fish bearing stream in the Comox Valley.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:1rem"><!-- wp:button {"textColor":"secondary-brand","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-secondary-brand-color has-text-color">More about natural resources</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","left":"0px","bottom":"2rem"}}},"backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-column is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":1769,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/two-up-placeholder-02.jpg" alt="" class="wp-image-1769"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"quinary"} -->
	<div class="wp-block-group has-border-color has-quinary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"secondary-brand","className":"is-style-default","fontSize":"large"} -->
	<h2 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:700;margin-top:2rem">Delivering Cleaner Energy</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">We’re helping people use cleaner energy for more things by making it easier to get, like with more fast-charging electric vehicle stations.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:1rem"><!-- wp:button {"textColor":"secondary-brand","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-secondary-brand-color has-text-color">More about energy</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"2rem","padding":{"top":"4rem"}}},"className":"two-up-card-feature"} -->
	<div class="wp-block-group alignfull two-up-card-feature" style="padding-top:4rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"backgroundColor":"background","className":"is-style-default","layout":{"inherit":false}} -->
	<div class="wp-block-column is-vertically-aligned-top is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":1895,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/two-up-placeholder-03.jpg" alt="" class="wp-image-1895"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"accent"} -->
	<div class="wp-block-group has-border-color has-accent-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"secondary-brand","className":"is-style-default","fontSize":"large"} -->
	<h2 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:700;margin-top:2rem">Investing in Sustainable Jobs</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">We can have a strong economy by making sure we increase clean jobs in B.C., like mass timber building and making solar panels.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:1rem"><!-- wp:button {"textColor":"secondary-brand","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-secondary-brand-color has-text-color">More about the economy</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","left":"0px","bottom":"2rem"}}},"backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-column is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":1896,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/two-up-placeholder-04.jpg" alt="" class="wp-image-1896"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"senary"} -->
	<div class="wp-block-group has-border-color has-senary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"secondary-brand","className":"is-style-default","fontSize":"large"} -->
	<h2 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:700;margin-top:2rem">Strengthening Food Security</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">We’re supporting farming and agriculture practices that are more sustainable so we can rely on our local food systems for years to come.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:1rem"><!-- wp:button {"textColor":"secondary-brand","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-secondary-brand-color has-text-color">More about agriculture</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","gradient":"nonary-opacity","className":"in-page-full-width-constrained-section"} -->
	<div class="wp-block-group alignfull in-page-full-width-constrained-section has-nonary-opacity-gradient-background has-background"><!-- wp:media-text {"mediaPosition":"right","mediaId":1447,"mediaLink":"https://bcgov-block-theme.local/?attachment_id=1447","mediaType":"image","mediaWidth":35,"verticalAlignment":"center","textColor":"background"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center has-background-color has-text-color" style="grid-template-columns:auto 35%"><figure class="wp-block-media-text__media"><img src="https://bcgov-block-theme.local/wp-content/uploads/2022/08/actions-natural-resources.jpg" alt="" class="wp-image-1447 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"textColor":"primary-brand"} -->
	<h2 class="has-primary-brand-color has-text-color">Working in partnership <br>with Indigenous Peoples</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-text-color">Stronger partnerships with Indigenous peoples make sure Indigenous perspectives and interests are a central part of how we respond to climate change.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:button {"textColor":"background","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background-color has-text-color">Learn more about how we’re collaborating</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"6rem","bottom":"6rem"}}},"backgroundColor":"transparent","className":"in-page-full-width-constrained-section floating"} -->
	<div class="wp-block-group alignfull in-page-full-width-constrained-section floating has-transparent-background-color has-background" style="margin-top:6rem;margin-bottom:6rem"><!-- wp:media-text {"mediaPosition":"right","mediaId":2049,"mediaLink":"https://bcgov-block-theme.local/home/cleanbc-home-cause-effect-01/","mediaType":"image","mediaWidth":35,"verticalAlignment":"center","textColor":"background"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center has-background-color has-text-color" style="grid-template-columns:auto 35%"><figure class="wp-block-media-text__media"><img src="https://bcgov-block-theme.local/wp-content/uploads/2022/08/cleanbc-home-cause-effect-01.jpg" alt="" class="wp-image-2049 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:heading {"textColor":"secondary-brand"} -->
	<h2 class="has-secondary-brand-color has-text-color"><strong>Causes &amp; Effects in B.C.</strong></h2>
	<!-- /wp:heading -->
	
	<!-- wp:group {"className":"content-group"} -->
	<div class="wp-block-group content-group"><!-- wp:paragraph {"textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-text-color">We are already seeing the climate change in B.C. In 2021 we saw flooding in the Fraser Valley from an atmospheric river. Wildfires in the summer are destroying forests, communities and polluting our air. Our summer months are hotter and drier, often reaching record-breaking temperatures.<br></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"primary-brand"} -->
	<p class="has-primary-brand-color has-text-color"><strong>Human activity is the main driver causing climate change. Our health, along with the well-being of B.C.’s land, forests and oceans, is at risk.</strong></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"2rem","padding":{"top":"6rem","bottom":"6rem"}},"color":{"background":"#f2f2f233"}},"className":"two-up-card-feature"} -->
	<div class="wp-block-group alignfull two-up-card-feature has-background" style="background-color:#f2f2f233;padding-top:6rem;padding-bottom:6rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"backgroundColor":"background","className":"is-style-default","layout":{"inherit":false}} -->
	<div class="wp-block-column is-vertically-aligned-top is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":2061,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image size-large is-style-default"><img src="https://bcgov-block-theme.local/wp-content/uploads/2022/08/two-up-placeholder-alt-01-1024x377.jpg" alt="" class="wp-image-2061"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"octonary"} -->
	<div class="wp-block-group has-border-color has-octonary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"2rem"}}},"textColor":"secondary-brand","className":"is-style-default"} -->
	<h3 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color" style="margin-top:2rem">Things we do contribute to climate change.</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Funding programs, incentives, studies and energy-management initiatives to encourage people and businesses to switch to electricity.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:1rem"><!-- wp:button {"textColor":"secondary-brand","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-secondary-brand-color has-text-color">Learn more about the <strong>BC Hydro Electrification Plan</strong></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","left":"0px","bottom":"2rem"}}},"backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-column is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":2062,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image size-large is-style-rounded"><img src="https://bcgov-block-theme.local/wp-content/uploads/2022/08/two-up-placeholder-alt-02-1024x377.jpg" alt="" class="wp-image-2062"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"accent"} -->
	<div class="wp-block-group has-border-color has-accent-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"2rem"}}},"textColor":"secondary-brand","className":"is-style-default"} -->
	<h4 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color" style="margin-top:2rem">Climate change affects the way we live.</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Funding programs, incentives, studies and energy-management initiatives to encourage people and businesses to switch to electricity.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:1rem"><!-- wp:button {"textColor":"secondary-brand","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-secondary-brand-color has-text-color">Learn more about the <strong>BC Hydro Electrification Plan</strong></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","right":"0rem","bottom":"6rem","left":"0rem"},"blockGap":"2rem","margin":{"top":"3rem"}}},"backgroundColor":"transparent","className":"three-up-card-feature"} -->
	<div class="wp-block-group alignfull three-up-card-feature has-transparent-background-color has-background" style="margin-top:3rem;padding-top:6rem;padding-right:0rem;padding-bottom:6rem;padding-left:0rem"><!-- wp:heading {"textAlign":"center","textColor":"secondary-brand"} -->
	<h2 class="has-text-align-center has-secondary-brand-color has-text-color">CleanBC programs help you take action</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"tertiary","className":"is-style-custom","fontSize":"large"} -->
	<p class="has-text-align-center is-style-custom has-tertiary-color has-text-color has-large-font-size">Explore the steps you can take to reduce your carbon footprint.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"3rem"}}}} -->
	<div class="wp-block-columns" style="padding-top:3rem"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"backgroundColor":"background","className":"is-style-default","layout":{"inherit":false}} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"gray-40"} -->
	<div class="wp-block-group has-border-color has-gray-40-border-color" style="border-width:1px"><!-- wp:image {"align":"center","id":1902,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/home-programs-01.jpg" alt="" class="wp-image-1902"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"2rem"}}},"textColor":"secondary-brand","className":"is-style-default"} -->
	<h3 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color" style="margin-top:2rem">Better Homes</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Making stricter emissions standards and penalties and expanding legislation to include marine and aviation fuels and new compliance options.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","left":"0px","bottom":"2rem"}}},"backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"gray-40"} -->
	<div class="wp-block-group has-border-color has-gray-40-border-color" style="border-width:1px"><!-- wp:image {"align":"center","id":1903,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/home-programs-02.jpg" alt="" class="wp-image-1903"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"2rem"}}},"textColor":"secondary-brand","className":"is-style-default"} -->
	<h3 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color" style="margin-top:2rem">Go Electric</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Funding programs, incentives, studies and energy-management initiatives to encourage people and businesses to switch to electricity.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"gray-40"} -->
	<div class="wp-block-group has-border-color has-gray-40-border-color" style="border-width:1px"><!-- wp:image {"align":"center","id":1904,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/home-programs-03.jpg" alt="" class="wp-image-1904"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"2rem"}}},"textColor":"secondary-brand","className":"is-style-default"} -->
	<h3 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color" style="margin-top:2rem">Better Buildings</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Increasing use of hydrogen fuel-cell technology by rolling out hydrogen vehicles and fuelling stations and starting a local chapter of the Canadian Hydrogen Fuel Cell Association.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"3rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:3rem"><!-- wp:button {"backgroundColor":"tertiary","textColor":"background","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background-color has-tertiary-background-color has-text-color has-background">Find out more ways you can take action</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	
	<!-- wp:spacer {"height":"50vh"} -->
	<div style="height:50vh" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:group -->',
];

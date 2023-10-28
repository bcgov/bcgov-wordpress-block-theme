<?php
/**
 * CleanBC Four-up Cover Card Feature block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

namespace Bcgov\Theme\Block;

return [
	'title'      => __( 'Four-up Cover Card Feature', 'bcgov_blocks_theme' ),
	'categories' => [ 'optional-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"6rem","bottom":"6rem"}}},"className":"four-up-cover-card-feature"} -->
	<div class="wp-block-group alignfull four-up-cover-card-feature" style="margin-top:6rem;margin-bottom:6rem"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/bc-cover-banner-default.jpg","id":1041,"dimRatio":80,"overlayColor":"background","isDark":false,"style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}}} -->
	<div class="wp-block-cover is-light" style="padding-top:6rem;padding-bottom:6rem"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1041" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/bc-cover-banner-default.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"2rem"}},"className":"two-up-card-feature"} -->
	<div class="wp-block-group alignfull two-up-card-feature"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"backgroundColor":"background","className":"is-style-default","layout":{"inherit":false}} -->
	<div class="wp-block-column is-vertically-aligned-top is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":1768,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/two-up-placeholder-01.jpg" alt="" class="wp-image-1768"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"octonary"} -->
	<div class="wp-block-group has-border-color has-octonary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secondary-brand","className":"is-style-default","fontSize":"large"} -->
	<h3 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Sollicitudin Aenean Dolor</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:1rem"><!-- wp:button {"textColor":"secondary-brand","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-secondary-brand-color has-text-color">More about Sollicitudin</a></div>
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
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"accent"} -->
	<div class="wp-block-group has-border-color has-accent-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secondary-brand","className":"is-style-default","fontSize":"large"} -->
	<h4 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Vehicula Justo Adipiscing</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:1rem"><!-- wp:button {"textColor":"secondary-brand","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-secondary-brand-color has-text-color">More about Vehicula</a></div>
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
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"8px"}},"borderColor":"quarternary"} -->
	<div class="wp-block-group has-border-color has-quarternary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secondary-brand","className":"is-style-default","fontSize":"large"} -->
	<h3 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Dolor Venenatis Nibh</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:1rem"><!-- wp:button {"textColor":"secondary-brand","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-secondary-brand-color has-text-color">More about Venenatis</a></div>
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
	<div class="wp-block-group has-border-color has-senary-border-color" style="border-width:8px;padding-top:0rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secondary-brand","className":"is-style-default","fontSize":"large"} -->
	<h4 class="has-text-align-left is-style-default has-secondary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Cursus Parturient Fringilla</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"secondary-brand"} -->
	<p class="has-secondary-brand-color has-text-color">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Sed posuere consectetur est at lobortis.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
	<div class="wp-block-buttons is-bcgov" style="margin-top:1rem"><!-- wp:button {"textColor":"secondary-brand","className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link has-secondary-brand-color has-text-color">More about Parturient</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group -->',
];

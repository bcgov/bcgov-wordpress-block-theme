<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC Three-up Card Feature block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Three-up Card Feature', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","right":"0rem","bottom":"6rem","left":"0rem"},"blockGap":"2rem","margin":{"top":"3rem"}}},"backgroundColor":"transparent","className":"three-up-card-feature home-bottom"} -->
	<div class="wp-block-group alignfull three-up-card-feature home-bottom has-transparent-background-color has-background" style="margin-top:3rem;padding-top:6rem;padding-right:0rem;padding-bottom:6rem;padding-left:0rem"><!-- wp:group {"style":{"border":{"radius":"1rem"}}} -->
	<div class="wp-block-group" style="border-radius:1rem"><!-- wp:columns {"className":"is-style-default"} -->
	<div class="wp-block-columns is-style-default"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","textColor":"secondary-brand"} -->
	<h2 class="has-text-align-center has-secondary-brand-color has-text-color">Lorem ipsum dolor sit amet</h2>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"tertiary","className":"is-style-custom"} -->
	<h3 class="has-text-align-center is-style-custom has-tertiary-color has-text-color" style="font-style:normal;font-weight:400">Lorem ipsum dolor sit amet.</h3>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"3rem"}}}} -->
	<div class="wp-block-columns" style="padding-top:3rem"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"bottom":"2rem"}}},"backgroundColor":"background","className":"is-style-default","layout":{"inherit":false}} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-default has-background-background-color has-background" style="padding-bottom:2rem"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"align":"center","id":1917,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-large is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/home-programs-01.jpg" alt="" class="wp-image-1917"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"border":{"width":"8px"}},"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:8px"><!-- wp:heading {"level":3} -->
	<h3>Egestas Etiam Risus</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link" href="https://betterhomesbc.ca/">Fringilla Nullam</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","left":"0px","bottom":"2rem"}}},"backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"align":"center","id":1242,"sizeSlug":"large","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-large is-style-default"><a href="https://goelectricbc.ca/"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/home-programs-02.jpg" alt="" class="wp-image-1242"/></a></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"border":{"width":"8px"}},"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:8px"><!-- wp:heading {"level":3} -->
	<h3>Justo Magna Tellus</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link" href="https://goelectricbc.ca/">Fringilla Nullam</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"backgroundColor":"background","className":"is-style-default"} -->
	<div class="wp-block-column is-vertically-aligned-center is-style-default has-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"align":"center","id":1912,"sizeSlug":"large","linkDestination":"custom","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-large is-style-default"><a href="https://betterbuildingsbc.ca/"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/home-programs-03.jpg" alt="" class="wp-image-1912"/></a></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"border":{"width":"8px"}},"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:8px"><!-- wp:heading -->
	<h2>Tellus Elit</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link" href="https://betterbuildingsbc.ca/">Fringilla Nullam</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:spacer {"height":"20rem"} -->
	<div style="height:20rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:group -->',
];

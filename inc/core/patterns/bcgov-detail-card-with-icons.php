<?php

namespace Bcgov\Theme\Block;

/**
 * General Detail Card with Icons pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return array(
	'title'      => __( 'Detail Card with Icons', 'bcgov_blocks_theme' ),
	'categories' => array( 'bcgov-blocks-theme-general' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"6rem","right":"2rem","bottom":"2rem","left":"2rem"},"blockGap":"2rem"},"border":{"style":"solid","width":"2px","radius":"0.66rem"}},"borderColor":"primary-brand"} -->
	<div class="wp-block-group alignwide has-border-color has-primary-brand-border-color" style="border-radius:0.66rem;border-style:solid;border-width:2px;padding-top:6rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"3rem","fontStyle":"normal","fontWeight":"300"}},"textColor":"primary-brand"} -->
	<h2 class="has-text-align-center has-primary-brand-color has-text-color" style="font-size:3rem;font-style:normal;font-weight:300">Headline Lorem Ipsum?</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"text-colour","fontSize":"extra-large"} -->
	<p class="has-text-align-center has-text-colour-color has-text-color has-extra-large-font-size">Sub-head highlighting message lorem ipsum lorem ipsum</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"}}}} -->
	<div class="wp-block-columns" style="padding-top:3rem;padding-bottom:3rem"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"align":"center","id":493,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/svg/cleanbc/icon-01.svg" alt="" class="wp-image-493"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"primary-brand","fontSize":"large"} -->
	<h3 class="has-text-align-center has-primary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Headling specific talking point</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"text-colour","fontSize":"normal"} -->
	<p class="has-text-align-center has-text-colour-color has-text-color has-normal-font-size">Description lorem ipsum lorem ipsum</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"align":"center","id":495,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/svg/cleanbc/icon-02.svg" alt="" class="wp-image-495"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"primary-brand","fontSize":"large"} -->
	<h3 class="has-text-align-center has-primary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Headling specific talking point</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"text-colour","fontSize":"normal"} -->
	<p class="has-text-align-center has-text-colour-color has-text-color has-normal-font-size">Description lorem ipsum lorem ipsum</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"align":"center","id":496,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/svg/cleanbc/icon-03.svg" alt="" class="wp-image-496"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"primary-brand","fontSize":"large"} -->
	<h3 class="has-text-align-center has-primary-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Headling specific talking point</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"text-colour","fontSize":"normal"} -->
	<p class="has-text-align-center has-text-colour-color has-text-color has-normal-font-size">Description lorem ipsum lorem ipsum</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);

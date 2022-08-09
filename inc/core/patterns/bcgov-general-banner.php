<?php

namespace Bcgov\Theme\Block;

/**
 * General Hero Banner (alternate) pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return array(
	'title'      => __( 'Hero Banner (alternate)', 'bcgov_blocks_theme' ),
	'categories' => array( 'bcgov-blocks-theme-general' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"backgroundColor":"primary-brand","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull has-primary-brand-background-color has-background" style="padding-top:80px;padding-bottom:80px"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":2891,"sizeSlug":"large","linkDestination":"none","className":" animated animated-fadeInUp"} -->
	<figure class="wp-block-image size-large  animated animated-fadeInUp"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_07.png" alt="" class="wp-image-2891"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"3px"}},"textColor":"white","className":" animated animated-fadeInUp"} -->
	<p class="animated animated-fadeInUp has-white-color has-text-color" style="letter-spacing:3px">Malesuada Fringilla Vestibulum Pharetra</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"style":{"typography":{"lineHeight":"1.4"}},"textColor":"white","className":" animated animated-fadeInUp","fontSize":"huge"} -->
	<h2 class="animated animated-fadeInUp has-white-color has-text-color has-huge-font-size" style="line-height:1.4">Vestibulum Sollicitudin Magna</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"left","textColor":"white","className":" animated animated-fadeInUp"} -->
	<p class="has-text-align-left animated animated-fadeInUp has-white-color has-text-color">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":" animated animated-fadeInUp","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}}} -->
	<div class="wp-block-buttons  animated animated-fadeInUp" style="margin-top:20px;margin-bottom:20px"><!-- wp:button {"textColor":"background","style":{"border":{"radius":"0px"},"spacing":{"padding":{"right":"35px","left":"35px"}}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color" style="border-radius:0px;padding-right:35px;padding-left:35px">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);

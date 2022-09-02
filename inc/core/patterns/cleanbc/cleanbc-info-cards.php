<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC Info Cards block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'CleanBC Info Cards', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}},"className":"cleanbc-info-cards"} -->
	<div class="wp-block-group alignwide cleanbc-info-cards" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"50%","className":"is-style-default"} -->
	<div class="wp-block-column is-style-default" style="flex-basis:50%"><!-- wp:group {"align":"wide","style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"borderColor":"foreground","className":"cleanbc-large-info-card"} -->
	<div class="wp-block-group alignwide cleanbc-large-info-card has-border-color has-foreground-border-color" style="border-width:1px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:media-text {"mediaId":1247,"mediaLink":"none","mediaType":"image","mediaWidth":30} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:30% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/building-icon.png" alt="" class="wp-image-1247 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading -->
	<h2>Lorem Sit</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>This is a paragraph about a smaller subject line that is around three to four sentences.</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
	<p>Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
	<p>Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:2rem"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link">Learn more</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"25%"} -->
	<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":1232,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-home-placeholder-01.jpg" alt="" class="wp-image-1232"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group"><!-- wp:heading {"className":"is-style-default"} -->
	<h2 class="is-style-default">Tellus Elit Inceptos Purus</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>Etiam porta sem malesuada magna mollis euismod.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"25%"} -->
	<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":1235,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-home-placeholder-03.jpg" alt="" class="wp-image-1235"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group"><!-- wp:heading -->
	<h2>Tellus Elit Inceptos Purus</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>Etiam porta sem malesuada magna mollis euismod.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}},"className":"cleanbc-info-cards"} -->
	<div class="wp-block-group alignwide cleanbc-info-cards" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
	<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":1231,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-home-placeholder-02.jpg" alt="" class="wp-image-1231"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group"><!-- wp:heading -->
	<h2>Tellus Elit Inceptos Purus</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>Etiam porta sem malesuada magna mollis euismod.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"25%"} -->
	<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":1236,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-home-placeholder-04.jpg" alt="" class="wp-image-1236"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group"><!-- wp:heading -->
	<h2>Tellus Elit Inceptos Purus</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>Etiam porta sem malesuada magna mollis euismod.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"align":"wide","style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"borderColor":"foreground","className":"cleanbc-large-info-card"} -->
	<div class="wp-block-group alignwide cleanbc-large-info-card has-border-color has-foreground-border-color" style="border-width:1px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:media-text {"mediaId":1247,"mediaLink":"none","mediaType":"image","mediaWidth":30} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:30% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/building-icon.png" alt="" class="wp-image-1247 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading -->
	<h2>Lorem Sit</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>This is a paragraph about a smaller subject line that is around three to four sentences.</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
	<p>Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
	<p>Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:2rem"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link">Learn more</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
];

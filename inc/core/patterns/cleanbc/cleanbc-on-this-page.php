<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC Advisory Tag block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'CleanBC On This Page', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"border":{"width":"8px","style":"solid","radius":{"topLeft":"rem","bottomLeft":"1rem","bottomRight":"1rem"}}},"borderColor":"quarternary","backgroundColor":"gray-05","className":"on-this-page"} -->
	<div class="wp-block-group alignwide on-this-page has-border-color has-quarternary-border-color has-gray-05-background-color has-background" style="border-top-left-radius:rem;border-bottom-left-radius:1rem;border-bottom-right-radius:1rem;border-style:solid;border-width:8px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:media-text {"mediaId":1621,"mediaLink":"none","mediaType":"image","mediaWidth":65,"className":"is-style-default"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-style-default" style="grid-template-columns:60% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-on-this-page-placeholder.jpg" alt="" class="wp-image-1621 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3} -->
	<h3>On this page</h3>
	<!-- /wp:heading -->
	
	<!-- wp:list -->
	<ul><li><a href="#section-1">How B.C’s Climate Changes</a></li><li><a href="#section-2">BC is Taking Action</a></li><li><a href="#section-3">Tracking Pollution</a></li><li><a href="#section-4">Reducing Pollution</a></li><li><a href="#section-5">Preparing for Emergencies</a></li><li><a href="#section-6">Further Reading</a></li></ul>
	<!-- /wp:list --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->',
];

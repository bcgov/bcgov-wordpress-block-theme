<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC On This Page block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'CleanBC On This Page', 'bcgov_blocks_theme' ),
	'categories' => [ 'optional-patterns-banners' ],
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"border":{"width":"8px","style":"solid","radius":{"topLeft":"rem","bottomLeft":"1rem","bottomRight":"1rem"}}},"borderColor":"quinary","backgroundColor":"gray-05","className":"on-this-page"} -->
	<div class="wp-block-group alignwide on-this-page has-border-color has-quinary-border-color has-gray-05-background-color has-background" style="border-top-left-radius:rem;border-bottom-left-radius:1rem;border-bottom-right-radius:1rem;border-style:solid;border-width:8px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:media-text {"mediaPosition":"right","mediaId":2129,"mediaLink":"none","mediaType":"image","mediaWidth":65,"className":"is-style-default"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-style-default" style="grid-template-columns:auto 65%"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-on-this-page-placeholder-02.jpg" alt="" class="wp-image-2129 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3} -->
	<h3>On this page</h3>
	<!-- /wp:heading -->
	
	<!-- wp:list -->
	<ul><li><a href="#section-1">Link option 1</a></li><li><a href="#section-2">Link option 2</a></li><li><a href="#section-3">Link option 3</a></li><li><a href="#section-4">Link option 4</a></li><li><a href="#section-5">Link option 5</a></li><li><a href="#section-6">Link option 6</a></li></ul>
	<!-- /wp:list --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->',
];

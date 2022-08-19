<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC Actions List - Homepage block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Actions List', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-query' ],
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}},"className":"is-actions-query-loop"} -->
	<div class="wp-block-group alignwide is-actions-query-loop" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:query {"queryId":2,"query":{"offset":0,"postType":"cleanbc-actions","order":"asc","orderBy":"date","author":"","search":"","sticky":"","perPage":12,"inherit":false},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
	<!-- wp:columns {"verticalAlignment":null,"style":{"color":{"background":"#f1f1f180"}}} -->
	<div class="wp-block-columns has-background" style="background-color:#f1f1f180"><!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:25%"><!-- wp:post-featured-image {"width":"100%","height":"","scale":"fill"} /--></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","width":"75%","style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"3rem","left":"3rem"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:2rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem;flex-basis:75%"><!-- wp:post-title {"textColor":"tertiary"} /-->

	<!-- wp:post-excerpt {"moreText":""} /-->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-underline"} -->
	<div class="wp-block-button is-style-underline"><a class="wp-block-button__link">See All Actions</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group -->',
];

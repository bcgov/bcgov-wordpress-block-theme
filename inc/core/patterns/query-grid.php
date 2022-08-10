<?php

namespace Bcgov\Theme\Block;

/**
 * General Quote block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return array(
	'title'      => __( 'Grid of posts (Query Loop)', 'bcgov_blocks_theme' ),
	'categories' => array( 'bcgov-blocks-theme-general', 'bcgov-blocks-theme-query' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}}} -->
	<div class="wp-block-group alignwide" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:query {"queryId":2,"query":{"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":12},"displayLayout":{"type":"flex","columns":3},"align":"wide","className":"is-grid-of-posts is-style-dropshadow","layout":{"inherit":true}} -->
	<div class="wp-block-query alignwide is-grid-of-posts is-style-dropshadow"><!-- wp:post-template {"align":"wide"} -->
	<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"","scale":"fill"} /-->
	
	<!-- wp:post-title {"textAlign":"center","style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"400"}}} /-->
	
	<!-- wp:post-excerpt {"textAlign":"center","moreText":"Learn more","style":{"spacing":{"margin":{"bottom":"2rem"}}}} /-->
	<!-- /wp:post-template -->
	
	<!-- wp:query-no-results -->
	<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
	<p></p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
	
	<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous {"fontSize":"small"} /-->
	
	<!-- wp:query-pagination-numbers /-->
	
	<!-- wp:query-pagination-next {"fontSize":"small"} /-->
	<!-- /wp:query-pagination --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group -->',
);

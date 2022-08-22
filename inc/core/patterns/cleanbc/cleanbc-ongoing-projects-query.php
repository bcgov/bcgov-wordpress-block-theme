<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC Ongoing Projects List - Homepage block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Ongoing Projects List', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-query' ],
	'content'    => '<!-- wp:spacer {"height":"3rem"} -->
	<div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:bcgov/collapse {"collapseId":"collapse-container-9f6d7c02-c0e5-4b0b-a252-15d0dee30a44","align":"wide","className":"actions-accordion-header"} -->
	<div id="collapse-container-9f6d7c02-c0e5-4b0b-a252-15d0dee30a44" class="wp-block-bcgov-collapse alignwide actions-accordion-header"><div class="collapse-container-nav"><span><button data-target="#collapse-container-9f6d7c02-c0e5-4b0b-a252-15d0dee30a44" class="collapse-expand-all">Expand all</button></span><span><button data-target="#collapse-container-9f6d7c02-c0e5-4b0b-a252-15d0dee30a44" class="collapse-collapse-all">Collapse all</button></span></div><!-- wp:bcgov/collapse-item {"title":"Ongoing Projects","itemId":"collapse-item-67791ff8-eb7d-4553-af7c-2b5b15f2fbfa","headingId":"heading-67791ff8-eb7d-4553-af7c-2b5b15f2fbfa"} -->
	<div class="wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-67791ff8-eb7d-4553-af7c-2b5b15f2fbfa"><h3><button data-toggle="collapse" data-target="#collapse-item-67791ff8-eb7d-4553-af7c-2b5b15f2fbfa" aria-expanded="false" aria-controls="collapse-item-67791ff8-eb7d-4553-af7c-2b5b15f2fbfa" class="collapsed"><span class="collapse-title">Ongoing Projects</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-67791ff8-eb7d-4553-af7c-2b5b15f2fbfa"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[1]}}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"85%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:85%"><!-- wp:post-title {"level":4,"textColor":"secondary-brand"} /-->
	
	<!-- wp:post-excerpt {"moreText":"View Action"} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:post-terms {"term":"post_tag","textAlign":"right","className":"tag","fontSize":"extra-small"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	<!-- /wp:post-template -->
	
	<!-- wp:query-no-results -->
	<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results.","textColor":"gray-60"} -->
	<p class="has-gray-60-color has-text-color">No results found for Ongoing Projects.</p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results --></div>
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-67791ff8-eb7d-4553-af7c-2b5b15f2fbfa" href="#collapse-item-67791ff8-eb7d-4553-af7c-2b5b15f2fbfa" role="button" aria-expanded="true" aria-controls="collapse-item-67791ff8-eb7d-4553-af7c-2b5b15f2fbfa">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov/collapse-item -->
	
	<!-- wp:bcgov/collapse-item {"title":"Started Projects","itemId":"collapse-item-016efdb4-e9de-48f4-813d-514ce39aee25","headingId":"heading-016efdb4-e9de-48f4-813d-514ce39aee25"} -->
	<div class="wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-016efdb4-e9de-48f4-813d-514ce39aee25"><h3><button data-toggle="collapse" data-target="#collapse-item-016efdb4-e9de-48f4-813d-514ce39aee25" aria-expanded="false" aria-controls="collapse-item-016efdb4-e9de-48f4-813d-514ce39aee25" class="collapsed"><span class="collapse-title">Started Projects</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-016efdb4-e9de-48f4-813d-514ce39aee25"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[15]}}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"85%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:85%"><!-- wp:post-title {"level":3,"textColor":"secondary-brand"} /-->
	
	<!-- wp:post-excerpt {"moreText":"View Action"} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:post-terms {"term":"post_tag","textAlign":"center","backgroundColor":"gray-05","className":"tag","fontSize":"extra-small"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	<!-- /wp:post-template -->
	
	<!-- wp:query-no-results -->
	<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results.","textColor":"gray-60"} -->
	<p class="has-gray-60-color has-text-color">No results found for Ongoing Projects.</p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results --></div>
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-016efdb4-e9de-48f4-813d-514ce39aee25" href="#collapse-item-016efdb4-e9de-48f4-813d-514ce39aee25" role="button" aria-expanded="true" aria-controls="collapse-item-016efdb4-e9de-48f4-813d-514ce39aee25">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov/collapse-item -->
	
	<!-- wp:bcgov/collapse-item {"title":"Projects starting by 2030","itemId":"collapse-item-2ab436b9-ab24-43ac-b856-9c2a71d4e9e7","headingId":"heading-2ab436b9-ab24-43ac-b856-9c2a71d4e9e7"} -->
	<div class="wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-2ab436b9-ab24-43ac-b856-9c2a71d4e9e7"><h3><button data-toggle="collapse" data-target="#collapse-item-2ab436b9-ab24-43ac-b856-9c2a71d4e9e7" aria-expanded="false" aria-controls="collapse-item-2ab436b9-ab24-43ac-b856-9c2a71d4e9e7" class="collapsed"><span class="collapse-title">Projects starting by 2030</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-2ab436b9-ab24-43ac-b856-9c2a71d4e9e7"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[16]}}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"85%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:85%"><!-- wp:post-title /-->
	
	<!-- wp:post-excerpt {"moreText":"View Action"} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:post-terms {"term":"post_tag","textAlign":"right"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	<!-- /wp:post-template -->
	
	<!-- wp:query-no-results -->
	<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results.","textColor":"gray-60"} -->
	<p class="has-gray-60-color has-text-color">No results found Projects starting by 2030.</p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results --></div>
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-2ab436b9-ab24-43ac-b856-9c2a71d4e9e7" href="#collapse-item-2ab436b9-ab24-43ac-b856-9c2a71d4e9e7" role="button" aria-expanded="true" aria-controls="collapse-item-2ab436b9-ab24-43ac-b856-9c2a71d4e9e7">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov/collapse-item -->
	
	<!-- wp:bcgov/collapse-item {"title":"Projects starting by 2040","itemId":"collapse-item-26794879-3ad1-4937-8af3-3f3611b5f793","headingId":"heading-26794879-3ad1-4937-8af3-3f3611b5f793"} -->
	<div class="wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-26794879-3ad1-4937-8af3-3f3611b5f793"><h3><button data-toggle="collapse" data-target="#collapse-item-26794879-3ad1-4937-8af3-3f3611b5f793" aria-expanded="false" aria-controls="collapse-item-26794879-3ad1-4937-8af3-3f3611b5f793" class="collapsed"><span class="collapse-title">Projects starting by 2040</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-26794879-3ad1-4937-8af3-3f3611b5f793"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[17]}}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"85%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:85%"><!-- wp:post-title /-->
	
	<!-- wp:post-excerpt {"moreText":"View Action"} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:post-terms {"term":"post_tag","textAlign":"right"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	<!-- /wp:post-template -->
	
	<!-- wp:query-no-results -->
	<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results.","textColor":"gray-60"} -->
	<p class="has-gray-60-color has-text-color">No results found for Projects starting by 2040.</p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results --></div>
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-26794879-3ad1-4937-8af3-3f3611b5f793" href="#collapse-item-26794879-3ad1-4937-8af3-3f3611b5f793" role="button" aria-expanded="true" aria-controls="collapse-item-26794879-3ad1-4937-8af3-3f3611b5f793">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov/collapse-item -->
	
	<!-- wp:bcgov/collapse-item {"title":"Completed Projects","itemId":"collapse-item-792892ff-4908-4046-a7c5-21fe62943687","headingId":"heading-792892ff-4908-4046-a7c5-21fe62943687"} -->
	<div class="wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-792892ff-4908-4046-a7c5-21fe62943687"><h3><button data-toggle="collapse" data-target="#collapse-item-792892ff-4908-4046-a7c5-21fe62943687" aria-expanded="false" aria-controls="collapse-item-792892ff-4908-4046-a7c5-21fe62943687" class="collapsed"><span class="collapse-title">Completed Projects</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-792892ff-4908-4046-a7c5-21fe62943687"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[18]}}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"85%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:85%"><!-- wp:post-title /-->
	
	<!-- wp:post-excerpt {"moreText":"View Action"} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:post-terms {"term":"post_tag","textAlign":"right"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	<!-- /wp:post-template -->
	
	<!-- wp:query-no-results -->
	<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results.","textColor":"gray-60"} -->
	<p class="has-gray-60-color has-text-color">No results found for Completed Projects.</p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results --></div>
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-792892ff-4908-4046-a7c5-21fe62943687" href="#collapse-item-792892ff-4908-4046-a7c5-21fe62943687" role="button" aria-expanded="true" aria-controls="collapse-item-792892ff-4908-4046-a7c5-21fe62943687">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov/collapse-item -->
	
	<!-- wp:bcgov/collapse-item {"title":"Plans and Strategies","itemId":"collapse-item-f99abfb3-3e2e-482d-9ead-8672363c444e","headingId":"heading-f99abfb3-3e2e-482d-9ead-8672363c444e"} -->
	<div class="wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-f99abfb3-3e2e-482d-9ead-8672363c444e"><h3><button data-toggle="collapse" data-target="#collapse-item-f99abfb3-3e2e-482d-9ead-8672363c444e" aria-expanded="false" aria-controls="collapse-item-f99abfb3-3e2e-482d-9ead-8672363c444e" class="collapsed"><span class="collapse-title">Plans and Strategies</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-f99abfb3-3e2e-482d-9ead-8672363c444e"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[19]}}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"85%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:85%"><!-- wp:post-title /-->
	
	<!-- wp:post-excerpt {"moreText":"View Action"} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:post-terms {"term":"post_tag","textAlign":"right"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	<!-- /wp:post-template -->
	
	<!-- wp:query-no-results -->
	<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results.","textColor":"gray-60"} -->
	<p class="has-gray-60-color has-text-color">No results found for Plans and Strategies.</p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results --></div>
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-f99abfb3-3e2e-482d-9ead-8672363c444e" href="#collapse-item-f99abfb3-3e2e-482d-9ead-8672363c444e" role="button" aria-expanded="true" aria-controls="collapse-item-f99abfb3-3e2e-482d-9ead-8672363c444e">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov/collapse-item --></div>
	<!-- /wp:bcgov/collapse -->',
];

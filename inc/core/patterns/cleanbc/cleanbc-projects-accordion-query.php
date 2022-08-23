<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC Projects Accordion List - Homepage block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Projects Accordion List', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-query' ],
	'content'    => '<!-- wp:spacer {"height":"3rem"} -->
	<div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:bcgov/collapse {"collapseId":"collapse-container-dfb067ad-634b-41f3-994e-6fdd07d22af0","align":"wide","className":"actions-accordion-header"} -->
	<div id="collapse-container-dfb067ad-634b-41f3-994e-6fdd07d22af0" class="wp-block-bcgov-collapse alignwide actions-accordion-header"><div class="collapse-container-nav"><span><button data-target="#collapse-container-dfb067ad-634b-41f3-994e-6fdd07d22af0" class="collapse-expand-all">Expand all</button></span><span><button data-target="#collapse-container-dfb067ad-634b-41f3-994e-6fdd07d22af0" class="collapse-collapse-all">Collapse all</button></span></div><!-- wp:bcgov/collapse-item {"title":"Ongoing Projects","itemId":"collapse-item-339c03a4-a697-4376-b092-d420de139761","headingId":"heading-339c03a4-a697-4376-b092-d420de139761"} -->
	<div class="wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-339c03a4-a697-4376-b092-d420de139761"><h3><button data-toggle="collapse" data-target="#collapse-item-339c03a4-a697-4376-b092-d420de139761" aria-expanded="false" aria-controls="collapse-item-339c03a4-a697-4376-b092-d420de139761" class="collapsed"><span class="collapse-title">Ongoing Projects</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-339c03a4-a697-4376-b092-d420de139761"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[1]}}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"85%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:85%"><!-- wp:post-title {"level":4,"textColor":"secondary-brand"} /-->
	
	<!-- wp:post-excerpt {"moreText":"View Action","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-brand"}}}}} /--></div>
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
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-339c03a4-a697-4376-b092-d420de139761" href="#collapse-item-339c03a4-a697-4376-b092-d420de139761" role="button" aria-expanded="true" aria-controls="collapse-item-339c03a4-a697-4376-b092-d420de139761">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov/collapse-item -->
	
	<!-- wp:bcgov/collapse-item {"title":"Started Projects","itemId":"collapse-item-db3ba1e3-0119-4753-891d-3134b9ecffd0","headingId":"heading-db3ba1e3-0119-4753-891d-3134b9ecffd0"} -->
	<div class="wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-db3ba1e3-0119-4753-891d-3134b9ecffd0"><h3><button data-toggle="collapse" data-target="#collapse-item-db3ba1e3-0119-4753-891d-3134b9ecffd0" aria-expanded="false" aria-controls="collapse-item-db3ba1e3-0119-4753-891d-3134b9ecffd0" class="collapsed"><span class="collapse-title">Started Projects</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-db3ba1e3-0119-4753-891d-3134b9ecffd0"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[15]}}} -->
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
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-db3ba1e3-0119-4753-891d-3134b9ecffd0" href="#collapse-item-db3ba1e3-0119-4753-891d-3134b9ecffd0" role="button" aria-expanded="true" aria-controls="collapse-item-db3ba1e3-0119-4753-891d-3134b9ecffd0">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov/collapse-item -->
	
	<!-- wp:bcgov/collapse-item {"title":"Projects starting by 2030","itemId":"collapse-item-d114a14a-37fc-4b6a-9e35-4901240919a9","headingId":"heading-d114a14a-37fc-4b6a-9e35-4901240919a9"} -->
	<div class="wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-d114a14a-37fc-4b6a-9e35-4901240919a9"><h3><button data-toggle="collapse" data-target="#collapse-item-d114a14a-37fc-4b6a-9e35-4901240919a9" aria-expanded="false" aria-controls="collapse-item-d114a14a-37fc-4b6a-9e35-4901240919a9" class="collapsed"><span class="collapse-title">Projects starting by 2030</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-d114a14a-37fc-4b6a-9e35-4901240919a9"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[16]}}} -->
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
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-d114a14a-37fc-4b6a-9e35-4901240919a9" href="#collapse-item-d114a14a-37fc-4b6a-9e35-4901240919a9" role="button" aria-expanded="true" aria-controls="collapse-item-d114a14a-37fc-4b6a-9e35-4901240919a9">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov/collapse-item -->
	
	<!-- wp:bcgov/collapse-item {"title":"Projects starting by 2040","itemId":"collapse-item-0bf406c6-a2ff-4afd-8f4a-19af5e1bbea2","headingId":"heading-0bf406c6-a2ff-4afd-8f4a-19af5e1bbea2"} -->
	<div class="wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-0bf406c6-a2ff-4afd-8f4a-19af5e1bbea2"><h3><button data-toggle="collapse" data-target="#collapse-item-0bf406c6-a2ff-4afd-8f4a-19af5e1bbea2" aria-expanded="false" aria-controls="collapse-item-0bf406c6-a2ff-4afd-8f4a-19af5e1bbea2" class="collapsed"><span class="collapse-title">Projects starting by 2040</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-0bf406c6-a2ff-4afd-8f4a-19af5e1bbea2"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[17]}}} -->
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
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-0bf406c6-a2ff-4afd-8f4a-19af5e1bbea2" href="#collapse-item-0bf406c6-a2ff-4afd-8f4a-19af5e1bbea2" role="button" aria-expanded="true" aria-controls="collapse-item-0bf406c6-a2ff-4afd-8f4a-19af5e1bbea2">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov/collapse-item -->
	
	<!-- wp:bcgov/collapse-item {"title":"Completed Projects","itemId":"collapse-item-8fd53e91-40e3-4d23-9e7b-b7568b744968","headingId":"heading-8fd53e91-40e3-4d23-9e7b-b7568b744968"} -->
	<div class="wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-8fd53e91-40e3-4d23-9e7b-b7568b744968"><h3><button data-toggle="collapse" data-target="#collapse-item-8fd53e91-40e3-4d23-9e7b-b7568b744968" aria-expanded="false" aria-controls="collapse-item-8fd53e91-40e3-4d23-9e7b-b7568b744968" class="collapsed"><span class="collapse-title">Completed Projects</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-8fd53e91-40e3-4d23-9e7b-b7568b744968"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[18]}}} -->
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
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-8fd53e91-40e3-4d23-9e7b-b7568b744968" href="#collapse-item-8fd53e91-40e3-4d23-9e7b-b7568b744968" role="button" aria-expanded="true" aria-controls="collapse-item-8fd53e91-40e3-4d23-9e7b-b7568b744968">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov/collapse-item -->
	
	<!-- wp:bcgov/collapse-item {"title":"Plans and Strategies","itemId":"collapse-item-cc424079-2f79-4d0c-ab33-7768e02b42dd","headingId":"heading-cc424079-2f79-4d0c-ab33-7768e02b42dd"} -->
	<div class="wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-cc424079-2f79-4d0c-ab33-7768e02b42dd"><h3><button data-toggle="collapse" data-target="#collapse-item-cc424079-2f79-4d0c-ab33-7768e02b42dd" aria-expanded="false" aria-controls="collapse-item-cc424079-2f79-4d0c-ab33-7768e02b42dd" class="collapsed"><span class="collapse-title">Plans and Strategies</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-cc424079-2f79-4d0c-ab33-7768e02b42dd"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[19]}}} -->
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
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-cc424079-2f79-4d0c-ab33-7768e02b42dd" href="#collapse-item-cc424079-2f79-4d0c-ab33-7768e02b42dd" role="button" aria-expanded="true" aria-controls="collapse-item-cc424079-2f79-4d0c-ab33-7768e02b42dd">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov/collapse-item --></div>
	<!-- /wp:bcgov/collapse -->',
];

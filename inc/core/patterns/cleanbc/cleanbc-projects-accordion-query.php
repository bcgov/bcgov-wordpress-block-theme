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
	'content'    => '<!-- wp:bcgov-block-theme/collapse {"collapseId":"collapse-container-47e5ec8e-5177-4c28-a779-a62e1208c244","align":"wide","className":"wp-block-bcgov-collapse actions-accordion-header"} -->
	<div id="collapse-container-47e5ec8e-5177-4c28-a779-a62e1208c244" class="wp-block-bcgov-block-theme-collapse alignwide wp-block-bcgov-collapse actions-accordion-header"><div class="collapse-container-nav"><span><button data-target="#collapse-container-47e5ec8e-5177-4c28-a779-a62e1208c244" class="collapse-expand-all">Expand all</button></span><span><button data-target="#collapse-container-47e5ec8e-5177-4c28-a779-a62e1208c244" class="collapse-collapse-all">Collapse all</button></span></div><!-- wp:bcgov-block-theme/collapse-item {"title":"Ongoing Projects","itemId":"collapse-item-236667b6-2b20-448b-b234-f3c208f30ec0","headingId":"heading-236667b6-2b20-448b-b234-f3c208f30ec0","className":"wp-block-bcgov-collapse-item"} -->
	<div class="wp-block-bcgov-block-theme-collapse-item wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-236667b6-2b20-448b-b234-f3c208f30ec0"><h3><button data-toggle="collapse" data-target="#collapse-item-236667b6-2b20-448b-b234-f3c208f30ec0" aria-expanded="false" aria-controls="collapse-item-236667b6-2b20-448b-b234-f3c208f30ec0" class="collapsed"><span class="collapse-title">Ongoing Projects</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-236667b6-2b20-448b-b234-f3c208f30ec0"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[1]}}} -->
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
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-236667b6-2b20-448b-b234-f3c208f30ec0" href="#collapse-item-236667b6-2b20-448b-b234-f3c208f30ec0" role="button" aria-expanded="true" aria-controls="collapse-item-236667b6-2b20-448b-b234-f3c208f30ec0">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov-block-theme/collapse-item -->
	
	<!-- wp:bcgov-block-theme/collapse-item {"title":"Started Projects","itemId":"collapse-item-f290ee6a-9607-475f-9f5c-1b43539540c0","headingId":"heading-f290ee6a-9607-475f-9f5c-1b43539540c0","className":"wp-block-bcgov-collapse-item"} -->
	<div class="wp-block-bcgov-block-theme-collapse-item wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-f290ee6a-9607-475f-9f5c-1b43539540c0"><h3><button data-toggle="collapse" data-target="#collapse-item-f290ee6a-9607-475f-9f5c-1b43539540c0" aria-expanded="false" aria-controls="collapse-item-f290ee6a-9607-475f-9f5c-1b43539540c0" class="collapsed"><span class="collapse-title">Started Projects</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-f290ee6a-9607-475f-9f5c-1b43539540c0"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[15]}}} -->
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
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-f290ee6a-9607-475f-9f5c-1b43539540c0" href="#collapse-item-f290ee6a-9607-475f-9f5c-1b43539540c0" role="button" aria-expanded="true" aria-controls="collapse-item-f290ee6a-9607-475f-9f5c-1b43539540c0">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov-block-theme/collapse-item -->
	
	<!-- wp:bcgov-block-theme/collapse-item {"title":"Projects starting by 2030","itemId":"collapse-item-8b0a65d7-5035-4318-9b11-595864714492","headingId":"heading-8b0a65d7-5035-4318-9b11-595864714492","className":"wp-block-bcgov-collapse-item"} -->
	<div class="wp-block-bcgov-block-theme-collapse-item wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-8b0a65d7-5035-4318-9b11-595864714492"><h3><button data-toggle="collapse" data-target="#collapse-item-8b0a65d7-5035-4318-9b11-595864714492" aria-expanded="false" aria-controls="collapse-item-8b0a65d7-5035-4318-9b11-595864714492" class="collapsed"><span class="collapse-title">Projects starting by 2030</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-8b0a65d7-5035-4318-9b11-595864714492"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[16]}}} -->
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
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-8b0a65d7-5035-4318-9b11-595864714492" href="#collapse-item-8b0a65d7-5035-4318-9b11-595864714492" role="button" aria-expanded="true" aria-controls="collapse-item-8b0a65d7-5035-4318-9b11-595864714492">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov-block-theme/collapse-item -->
	
	<!-- wp:bcgov-block-theme/collapse-item {"title":"Projects starting by 2040","itemId":"collapse-item-9ad649f1-9ecc-4704-b82d-333ece876806","headingId":"heading-9ad649f1-9ecc-4704-b82d-333ece876806","className":"wp-block-bcgov-collapse-item"} -->
	<div class="wp-block-bcgov-block-theme-collapse-item wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-9ad649f1-9ecc-4704-b82d-333ece876806"><h3><button data-toggle="collapse" data-target="#collapse-item-9ad649f1-9ecc-4704-b82d-333ece876806" aria-expanded="false" aria-controls="collapse-item-9ad649f1-9ecc-4704-b82d-333ece876806" class="collapsed"><span class="collapse-title">Projects starting by 2040</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-9ad649f1-9ecc-4704-b82d-333ece876806"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[17]}}} -->
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
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-9ad649f1-9ecc-4704-b82d-333ece876806" href="#collapse-item-9ad649f1-9ecc-4704-b82d-333ece876806" role="button" aria-expanded="true" aria-controls="collapse-item-9ad649f1-9ecc-4704-b82d-333ece876806">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov-block-theme/collapse-item -->
	
	<!-- wp:bcgov-block-theme/collapse-item {"title":"Completed Projects","itemId":"collapse-item-d7b6e854-67de-4094-830e-edeac8e7c47d","headingId":"heading-d7b6e854-67de-4094-830e-edeac8e7c47d","className":"wp-block-bcgov-collapse-item"} -->
	<div class="wp-block-bcgov-block-theme-collapse-item wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-d7b6e854-67de-4094-830e-edeac8e7c47d"><h3><button data-toggle="collapse" data-target="#collapse-item-d7b6e854-67de-4094-830e-edeac8e7c47d" aria-expanded="false" aria-controls="collapse-item-d7b6e854-67de-4094-830e-edeac8e7c47d" class="collapsed"><span class="collapse-title">Completed Projects</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-d7b6e854-67de-4094-830e-edeac8e7c47d"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[18]}}} -->
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
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-d7b6e854-67de-4094-830e-edeac8e7c47d" href="#collapse-item-d7b6e854-67de-4094-830e-edeac8e7c47d" role="button" aria-expanded="true" aria-controls="collapse-item-d7b6e854-67de-4094-830e-edeac8e7c47d">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov-block-theme/collapse-item -->
	
	<!-- wp:bcgov-block-theme/collapse-item {"title":"Plans and Strategies","itemId":"collapse-item-6bbf9c66-1227-4f13-bfa8-d1076eaba619","headingId":"heading-6bbf9c66-1227-4f13-bfa8-d1076eaba619","className":"wp-block-bcgov-collapse-item"} -->
	<div class="wp-block-bcgov-block-theme-collapse-item wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-6bbf9c66-1227-4f13-bfa8-d1076eaba619"><h3><button data-toggle="collapse" data-target="#collapse-item-6bbf9c66-1227-4f13-bfa8-d1076eaba619" aria-expanded="false" aria-controls="collapse-item-6bbf9c66-1227-4f13-bfa8-d1076eaba619" class="collapsed"><span class="collapse-title">Plans and Strategies</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-6bbf9c66-1227-4f13-bfa8-d1076eaba619"><div class="collapse-body"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"cleanbc-projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[19]}}} -->
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
	<!-- /wp:query --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-6bbf9c66-1227-4f13-bfa8-d1076eaba619" href="#collapse-item-6bbf9c66-1227-4f13-bfa8-d1076eaba619" role="button" aria-expanded="true" aria-controls="collapse-item-6bbf9c66-1227-4f13-bfa8-d1076eaba619">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov-block-theme/collapse-item --></div>
	<!-- /wp:bcgov-block-theme/collapse -->',
];

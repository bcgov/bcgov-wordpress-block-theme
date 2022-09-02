<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC Actions Toggle List - Homepage block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Actions Toggle List', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-query' ],
	'content'    => '<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"><!-- wp:heading {"align":"wide","style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
	<h2 class="alignwide" style="margin-bottom:0px">BC Government’s Actions</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>We’re working to slow climate change and address its impacts in may parts of life.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"color":{"background":"#f1f1f180"},"spacing":{"margin":{"top":"3rem","bottom":"0rem"}}},"className":"actions-toggle-query-loop"} -->
	<div class="wp-block-group alignfull actions-toggle-query-loop has-background" style="background-color:#f1f1f180;margin-top:3rem;margin-bottom:0rem"><!-- wp:query {"queryId":2,"query":{"offset":0,"postType":"post","order":"asc","orderBy":"date","author":"","search":"","sticky":"","perPage":12,"inherit":false,"taxQuery":{"category":[52]}},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-columns" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"55%","className":"is-content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center is-content-column" style="flex-basis:55%"><!-- wp:post-title {"level":3,"textColor":"tertiary"} /-->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-bottom:0px"><!-- wp:post-excerpt {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:45%"><!-- wp:post-featured-image {"width":"100%","height":"","scale":"fill"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","className":"actions-toggle-header"} -->
	<div class="wp-block-group alignfull actions-toggle-header"><!-- wp:columns {"className":"is-style-constrained"} -->
	<div class="wp-block-columns is-style-constrained"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:buttons {"className":"actions-toggle-buttons","style":{"spacing":{"margin":{"top":"2rem","bottom":"2rem"}}}} -->
	<div class="wp-block-buttons actions-toggle-buttons" style="margin-top:2rem;margin-bottom:2rem"><!-- wp:button {"backgroundColor":"background","textColor":"secondary-brand","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-brand-color has-background-background-color has-text-color has-background" href="#show-economy" style="border-radius:0px">Economy</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"backgroundColor":"background","textColor":"secondary-brand","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-brand-color has-background-background-color has-text-color has-background" href="#show-energy-and-industry" style="border-radius:0px">Energy and Industry</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"backgroundColor":"background","textColor":"secondary-brand","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-brand-color has-background-background-color has-text-color has-background" href="#show-buildings-and-communities" style="border-radius:0px">Buildings and Communities</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"backgroundColor":"background","textColor":"secondary-brand","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-brand-color has-background-background-color has-text-color has-background" href="#show-natural-resources" style="border-radius:0px">Natural Resources</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"backgroundColor":"background","textColor":"secondary-brand","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-brand-color has-background-background-color has-text-color has-background" href="#show-reducing-risk" style="border-radius:0px">Reducing Risk</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"backgroundColor":"background","textColor":"secondary-brand","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-brand-color has-background-background-color has-text-color has-background" href="#show-transportation" style="border-radius:0px">Transportation</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"backgroundColor":"background","textColor":"secondary-brand","style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-brand-color has-background-background-color has-text-color has-background" href="#show-indigenous-and-government-collaboration" style="border-radius:0px">Indigenous and government collaboration</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:bcgov-block-theme/collapse {"collapseId":"collapse-container-1011551f-64d3-48db-ae16-61eaad977241","align":"wide","className":"wp-block-bcgov-collapse actions-accordion-header"} -->
	<div id="collapse-container-1011551f-64d3-48db-ae16-61eaad977241" class="wp-block-bcgov-block-theme-collapse alignwide wp-block-bcgov-collapse actions-accordion-header"><div class="collapse-container-nav"><span><button data-target="#collapse-container-1011551f-64d3-48db-ae16-61eaad977241" class="collapse-expand-all">Expand all</button></span><span><button data-target="#collapse-container-1011551f-64d3-48db-ae16-61eaad977241" class="collapse-collapse-all">Collapse all</button></span></div><!-- wp:bcgov-block-theme/collapse-item {"title":"Ongoing Projects","itemId":"collapse-item-604099d2-3aaa-4f3c-b1f2-7245b74352ad","headingId":"heading-604099d2-3aaa-4f3c-b1f2-7245b74352ad","className":"wp-block-bcgov-collapse-item"} -->
	<div class="wp-block-bcgov-block-theme-collapse-item wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-604099d2-3aaa-4f3c-b1f2-7245b74352ad"><h3><button data-toggle="collapse" data-target="#collapse-item-604099d2-3aaa-4f3c-b1f2-7245b74352ad" aria-expanded="false" aria-controls="collapse-item-604099d2-3aaa-4f3c-b1f2-7245b74352ad" class="collapsed"><span class="collapse-title">Ongoing Projects</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-604099d2-3aaa-4f3c-b1f2-7245b74352ad"><div class="collapse-body"><!-- wp:group {"className":"query-group buildings-and-communities"} -->
	<div class="wp-block-group query-group buildings-and-communities"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"0px"}}},"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color" style="margin-bottom:0px">Buildings &amp; Communities</h3>
	<!-- /wp:heading -->
	
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background"/>
	<!-- /wp:separator -->
	
	<!-- wp:acf/project {"id":"block_630e6568f567b","name":"acf/project","data":{"field_630d261ee8de1":["57","27"]},"align":"","mode":"preview"} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"className":"query-group economy"} -->
	<div class="wp-block-group query-group economy"><!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color">Economy</h3>
	<!-- /wp:heading -->
	
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background"/>
	<!-- /wp:separator -->
	
	<!-- wp:acf/project {"id":"block_630e6568f567c","name":"acf/project","data":{"project_category":["62","27"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"className":"query-group energy-and-industry"} -->
	<div class="wp-block-group query-group energy-and-industry"><!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Energy</strong> and Industry</h3>
	<!-- /wp:heading -->
	
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background"/>
	<!-- /wp:separator -->
	
	<!-- wp:acf/project {"id":"block_630e6568f567d","name":"acf/project","data":{"project_category":["67","27"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"className":"query-group indigenous-and-government-collaboration"} -->
	<div class="wp-block-group query-group indigenous-and-government-collaboration"><!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color">Indigenous &amp; Government Collaboration</h3>
	<!-- /wp:heading -->
	
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background"/>
	<!-- /wp:separator -->
	
	<!-- wp:acf/project {"id":"block_630e6568f567e","name":"acf/project","data":{"project_category":["72","27"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"className":"query-group natural-resources"} -->
	<div class="wp-block-group query-group natural-resources"><!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color">Natural Resources</h3>
	<!-- /wp:heading -->
	
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background"/>
	<!-- /wp:separator -->
	
	<!-- wp:acf/project {"id":"block_630e6568f567f","name":"acf/project","data":{"project_category":["77","27"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"className":"query-group reducing-risk"} -->
	<div class="wp-block-group query-group reducing-risk"><!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color">Reducing Risks</h3>
	<!-- /wp:heading -->
	
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background"/>
	<!-- /wp:separator -->
	
	<!-- wp:acf/project {"id":"block_630e6568f5680","name":"acf/project","data":{"project_category":["82","27"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"className":"query-group transportation"} -->
	<div class="wp-block-group query-group transportation"><!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Transportation</strong></h3>
	<!-- /wp:heading -->
	
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background"/>
	<!-- /wp:separator -->
	
	<!-- wp:acf/project {"id":"block_630e6568f5681","name":"acf/project","data":{"project_category":["87","27"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /--></div>
	<!-- /wp:group --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-604099d2-3aaa-4f3c-b1f2-7245b74352ad" href="#collapse-item-604099d2-3aaa-4f3c-b1f2-7245b74352ad" role="button" aria-expanded="true" aria-controls="collapse-item-604099d2-3aaa-4f3c-b1f2-7245b74352ad">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov-block-theme/collapse-item -->
	
	<!-- wp:bcgov-block-theme/collapse-item {"title":"Started Projects","itemId":"collapse-item-ba7adfa0-2c04-41bf-988b-e91554a11d63","headingId":"heading-ba7adfa0-2c04-41bf-988b-e91554a11d63","className":"wp-block-bcgov-collapse-item"} -->
	<div class="wp-block-bcgov-block-theme-collapse-item wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-ba7adfa0-2c04-41bf-988b-e91554a11d63"><h3><button data-toggle="collapse" data-target="#collapse-item-ba7adfa0-2c04-41bf-988b-e91554a11d63" class="collapsed"><span class="collapse-title">Started Projects</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-ba7adfa0-2c04-41bf-988b-e91554a11d63"><div class="collapse-body">
	<!-- wp:group {"className":"query-group buildings-and-communities"} -->
	<div class="wp-block-group query-group buildings-and-communities">
	<!-- wp:heading {"textColor":"secondary-brand"} -->
	<h2 class="has-secondary-brand-color has-text-color"><strong>Buildings &amp; Communities</strong></h2>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630e865bc094d","name":"acf/project","data":{"project_category":["57","47"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group economy"} -->
	<div class="wp-block-group query-group economy">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Economy</strong></h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630e865bc094e","name":"acf/project","data":{"project_category":["62","47"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group energy-and-industry"} -->
	<div class="wp-block-group query-group energy-and-industry">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Energy</strong> and Industry</h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630e865bc094f","name":"acf/project","data":{"project_category":["67","47"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group indigenous-and-government-collaboration"} -->
	<div class="wp-block-group query-group indigenous-and-government-collaboration">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Indigenous &amp; Government Collaboration</strong></h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630e865bc0950","name":"acf/project","data":{"project_category":["72","47"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group natural-resources"} -->
	<div class="wp-block-group query-group natural-resources">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Natural Resources</strong></h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630e865bc0951","name":"acf/project","data":{"project_category":["77","47"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group reducing-risk"} -->
	<div class="wp-block-group query-group reducing-risk">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color">Reducing Risks</h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630e865bc0952","name":"acf/project","data":{"project_category":["82","47"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group transportation"} -->
	<div class="wp-block-group query-group transportation">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand","className":"transportation"} -->
	<h3 class="transportation has-secondary-brand-color has-text-color">Transportation</h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630e865bc0953","name":"acf/project","data":{"project_category":["87","47"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-ba7adfa0-2c04-41bf-988b-e91554a11d63" href="#collapse-item-ba7adfa0-2c04-41bf-988b-e91554a11d63" role="button">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov-block-theme/collapse-item -->
	
	<!-- wp:bcgov-block-theme/collapse-item {"title":"Projects starting by 2030","itemId":"collapse-item-db5b1b72-e1e5-465f-9367-a825335f7ef9","headingId":"heading-db5b1b72-e1e5-465f-9367-a825335f7ef9","className":"wp-block-bcgov-collapse-item"} -->
	<div class="wp-block-bcgov-block-theme-collapse-item wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-db5b1b72-e1e5-465f-9367-a825335f7ef9"><h3><button data-toggle="collapse" data-target="#collapse-item-db5b1b72-e1e5-465f-9367-a825335f7ef9" class="collapsed"><span class="collapse-title">Projects starting by 2030</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-db5b1b72-e1e5-465f-9367-a825335f7ef9"><div class="collapse-body">
	<!-- wp:group {"className":"query-group buildings-and-communities"} -->
	<div class="wp-block-group query-group buildings-and-communities">
	<!-- wp:heading {"textColor":"secondary-brand"} -->
	<h2 class="has-secondary-brand-color has-text-color"><strong>Buildings &amp; Communities</strong></h2>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb369d858","name":"acf/project","data":{"project_category":["57","37"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group economy"} -->
	<div class="wp-block-group query-group economy">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Economy</strong></h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb369d859","name":"acf/project","data":{"project_category":["62","37"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group energy-and-industry"} -->
	<div class="wp-block-group query-group energy-and-industry">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Energy</strong> and Industry</h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb369d85a","name":"acf/project","data":{"project_category":["67","37"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group indigenous-and-government-collaboration"} -->
	<div class="wp-block-group query-group indigenous-and-government-collaboration">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Indigenous &amp; Government Collaboration</strong></h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb369d85b","name":"acf/project","data":{"project_category":["72","37"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group natural-resources"} -->
	<div class="wp-block-group query-group natural-resources">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Natural Resources</strong></h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb369d85c","name":"acf/project","data":{"project_category":["77","37"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group reducing-risk"} -->
	<div class="wp-block-group query-group reducing-risk">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color">Reducing Risks</h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb369d85d","name":"acf/project","data":{"project_category":["82","37"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group transportation"} -->
	<div class="wp-block-group query-group transportation">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand","className":"transportation"} -->
	<h3 class="transportation has-secondary-brand-color has-text-color">Transportation</h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb369d85e","name":"acf/project","data":{"project_category":["87","37"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-db5b1b72-e1e5-465f-9367-a825335f7ef9" href="#collapse-item-db5b1b72-e1e5-465f-9367-a825335f7ef9" role="button">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov-block-theme/collapse-item -->
	
	<!-- wp:bcgov-block-theme/collapse-item {"title":"Projects starting by 2040","itemId":"collapse-item-6ee89d02-9cc0-4cea-a67c-4734970a5fa2","headingId":"heading-6ee89d02-9cc0-4cea-a67c-4734970a5fa2","className":"wp-block-bcgov-collapse-item"} -->
	<div class="wp-block-bcgov-block-theme-collapse-item wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-6ee89d02-9cc0-4cea-a67c-4734970a5fa2"><h3><button data-toggle="collapse" data-target="#collapse-item-6ee89d02-9cc0-4cea-a67c-4734970a5fa2" class="collapsed"><span class="collapse-title">Projects starting by 2040</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-6ee89d02-9cc0-4cea-a67c-4734970a5fa2"><div class="collapse-body">
	<!-- wp:group {"className":"query-group buildings-and-communities"} -->
	<div class="wp-block-group query-group buildings-and-communities">
	<!-- wp:heading {"textColor":"secondary-brand"} -->
	<h2 class="has-secondary-brand-color has-text-color"><strong>Buildings &amp; Communities</strong></h2>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb439d85f","name":"acf/project","data":{"project_category":["57","42"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group economy"} -->
	<div class="wp-block-group query-group economy">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Economy</strong></h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb439d860","name":"acf/project","data":{"project_category":["62","42"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group energy-and-industry"} -->
	<div class="wp-block-group query-group energy-and-industry">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Energy</strong> and Industry</h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb439d861","name":"acf/project","data":{"project_category":["67","42"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group indigenous-and-government-collaboration"} -->
	<div class="wp-block-group query-group indigenous-and-government-collaboration">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Indigenous &amp; Government Collaboration</strong></h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb439d862","name":"acf/project","data":{"project_category":["72","42"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group natural-resources"} -->
	<div class="wp-block-group query-group natural-resources">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Natural Resources</strong></h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb439d863","name":"acf/project","data":{"project_category":["77","42"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group reducing-risk"} -->
	<div class="wp-block-group query-group reducing-risk">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color">Reducing Risks</h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb439d864","name":"acf/project","data":{"project_category":["82","42"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group transportation"} -->
	<div class="wp-block-group query-group transportation">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand","className":"transportation"} -->
	<h3 class="transportation has-secondary-brand-color has-text-color">Transportation</h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb439d865","name":"acf/project","data":{"project_category":["87","42"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-6ee89d02-9cc0-4cea-a67c-4734970a5fa2" href="#collapse-item-6ee89d02-9cc0-4cea-a67c-4734970a5fa2" role="button">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov-block-theme/collapse-item -->
	
	<!-- wp:bcgov-block-theme/collapse-item {"title":"Completed Projects","itemId":"collapse-item-e333d679-495f-44f7-b2f6-45df5322d307","headingId":"heading-e333d679-495f-44f7-b2f6-45df5322d307","className":"wp-block-bcgov-collapse-item"} -->
	<div class="wp-block-bcgov-block-theme-collapse-item wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-e333d679-495f-44f7-b2f6-45df5322d307"><h3><button data-toggle="collapse" data-target="#collapse-item-e333d679-495f-44f7-b2f6-45df5322d307" class="collapsed"><span class="collapse-title">Completed Projects</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-e333d679-495f-44f7-b2f6-45df5322d307"><div class="collapse-body">
	<!-- wp:group {"className":"query-group buildings-and-communities"} -->
	<div class="wp-block-group query-group buildings-and-communities">
	<!-- wp:heading {"textColor":"secondary-brand"} -->
	<h2 class="has-secondary-brand-color has-text-color"><strong>Buildings &amp; Communities</strong></h2>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb509d866","name":"acf/project","data":{"project_category":["57","22"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group economy"} -->
	<div class="wp-block-group query-group economy">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Economy</strong></h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb509d867","name":"acf/project","data":{"project_category":["62","22"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group energy-and-industry"} -->
	<div class="wp-block-group query-group energy-and-industry">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Energy</strong> and Industry</h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb509d868","name":"acf/project","data":{"project_category":["67","22"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group indigenous-and-government-collaboration"} -->
	<div class="wp-block-group query-group indigenous-and-government-collaboration">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Indigenous &amp; Government Collaboration</strong></h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb509d869","name":"acf/project","data":{"project_category":["72","22"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group natural-resources"} -->
	<div class="wp-block-group query-group natural-resources">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Natural Resources</strong></h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb509d86a","name":"acf/project","data":{"project_category":["77","22"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group reducing-risk"} -->
	<div class="wp-block-group query-group reducing-risk">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color">Reducing Risks</h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb509d86b","name":"acf/project","data":{"project_category":["82","22"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group transportation"} -->
	<div class="wp-block-group query-group transportation">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand","className":"transportation"} -->
	<h3 class="transportation has-secondary-brand-color has-text-color">Transportation</h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb509d86c","name":"acf/project","data":{"project_category":["87","22"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-e333d679-495f-44f7-b2f6-45df5322d307" href="#collapse-item-e333d679-495f-44f7-b2f6-45df5322d307" role="button">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov-block-theme/collapse-item -->
	
	<!-- wp:bcgov-block-theme/collapse-item {"title":"Plans and Strategies","itemId":"collapse-item-b73fbd12-165a-4bfd-a414-8f538c56ca6a","headingId":"heading-b73fbd12-165a-4bfd-a414-8f538c56ca6a","className":"wp-block-bcgov-collapse-item"} -->
	<div class="wp-block-bcgov-block-theme-collapse-item wp-block-bcgov-collapse-item"><div class="collapse-header" id="heading-b73fbd12-165a-4bfd-a414-8f538c56ca6a"><h3><button data-toggle="collapse" data-target="#collapse-item-b73fbd12-165a-4bfd-a414-8f538c56ca6a" class="collapsed"><span class="collapse-title">Plans and Strategies</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-b73fbd12-165a-4bfd-a414-8f538c56ca6a"><div class="collapse-body">
	<!-- wp:group {"className":"query-group buildings-and-communities"} -->
	<div class="wp-block-group query-group buildings-and-communities">
	<!-- wp:heading {"textColor":"secondary-brand"} -->
	<h2 class="has-secondary-brand-color has-text-color"><strong>Buildings &amp; Communities</strong></h2>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb5a9d86d","name":"acf/project","data":{"project_category":["57","32"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group economy"} -->
	<div class="wp-block-group query-group economy">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Economy</strong></h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb5a9d86e","name":"acf/project","data":{"project_category":["62","32"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group energy-and-industry"} -->
	<div class="wp-block-group query-group energy-and-industry">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Energy</strong> and Industry</h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb5a9d86f","name":"acf/project","data":{"project_category":["67","32"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group indigenous-and-government-collaboration"} -->
	<div class="wp-block-group query-group indigenous-and-government-collaboration">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Indigenous &amp; Government Collaboration</strong></h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb5a9d870","name":"acf/project","data":{"project_category":["72","32"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group natural-resources"} -->
	<div class="wp-block-group query-group natural-resources">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color"><strong>Natural Resources</strong></h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb5a9d871","name":"acf/project","data":{"project_category":["77","32"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group reducing-risk"} -->
	<div class="wp-block-group query-group reducing-risk">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand"} -->
	<h3 class="has-secondary-brand-color has-text-color">Reducing Risks</h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb5a9d872","name":"acf/project","data":{"project_category":["82","32"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"query-group transportation"} -->
	<div class="wp-block-group query-group transportation">
	<!-- wp:heading {"level":3,"textColor":"secondary-brand","className":"transportation"} -->
	<h3 class="transportation has-secondary-brand-color has-text-color">Transportation</h3>
	<!-- /wp:heading -->
	<!-- wp:separator {"backgroundColor":"quinary"} -->
	<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background" />
	<!-- /wp:separator -->
	<!-- wp:acf/project {"id":"block_630eeb5a9d873","name":"acf/project","data":{"project_category":["87","32"],"_project_category":"field_630d261ee8de1"},"align":"","mode":"preview"} /-->
	</div>
	<!-- /wp:group -->
	<div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-b73fbd12-165a-4bfd-a414-8f538c56ca6a" href="#collapse-item-b73fbd12-165a-4bfd-a414-8f538c56ca6a" role="button">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov-block-theme/collapse-item --></div>
	<!-- /wp:bcgov-block-theme/collapse -->',
];

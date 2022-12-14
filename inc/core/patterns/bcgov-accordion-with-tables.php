<?php

namespace Bcgov\Theme\Block;

/**
 * General Accordion with Tables block pattern.
 *
 * @since 1.0.4
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Accordion with Tables', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-general' ],
	'content'    => '<!-- wp:bcgov-block-theme/collapse {"collapseId":"collapse-container-c16c30e3-ab41-4d9c-80a6-940cd7197d6d","align":"wide"} -->
	<div id="collapse-container-c16c30e3-ab41-4d9c-80a6-940cd7197d6d" class="wp-block-bcgov-block-theme-collapse alignwide"><div class="collapse-container-nav"><span><button data-target="#collapse-container-c16c30e3-ab41-4d9c-80a6-940cd7197d6d" class="collapse-expand-all">Expand all</button></span><span><button data-target="#collapse-container-c16c30e3-ab41-4d9c-80a6-940cd7197d6d" class="collapse-collapse-all">Collapse all</button></span></div><!-- wp:bcgov-block-theme/collapse-item {"title":"Lorem ipsum dolar sit amut","itemId":"collapse-item-fa115fc8-a899-4804-9cc1-0c2e8830fe42","headingId":"heading-fa115fc8-a899-4804-9cc1-0c2e8830fe42"} -->
	<div class="wp-block-bcgov-block-theme-collapse-item"><div class="collapse-header" id="heading-fa115fc8-a899-4804-9cc1-0c2e8830fe42"><h3><button data-toggle="collapse" data-target="#collapse-item-fa115fc8-a899-4804-9cc1-0c2e8830fe42" aria-expanded="false" aria-controls="collapse-item-fa115fc8-a899-4804-9cc1-0c2e8830fe42" class="collapsed"><span class="collapse-title">Lorem ipsum dolar sit amut</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-fa115fc8-a899-4804-9cc1-0c2e8830fe42"><div class="collapse-body"><!-- wp:heading {"level":4} -->
	<h4>Fusce dapibus, tellus ac cursus commodo.</h4>
	<!-- /wp:heading -->
	
	<!-- wp:table {"className":"is-style-stripes"} -->
	<figure class="wp-block-table is-style-stripes"><table><thead><tr><th>Header Lorem Column 1</th><th>Header Dolar Column 2</th><th>Header Sit Column 3</th><th>Header Amut Column 4</th></tr></thead><tbody><tr><td>Purus Condimentum Tristique</td><td>Nullam Quam Aenean</td><td>Etiam Risus Cursus</td><td>Egestas Adipiscing Purus</td></tr><tr><td>Egestas Adipiscing Purus</td><td>Purus Condimentum Tristique</td><td>Nullam Quam Aenean</td><td>Etiam Risus Cursus</td></tr><tr><td>Etiam Risus Cursus</td><td>Egestas Adipiscing Purus</td><td>Purus Condimentum Tristique</td><td>Nullam Quam Aenean</td></tr><tr><td>Nullam Quam Aenean</td><td>Etiam Risus Cursus</td><td>Egestas Adipiscing Purus</td><td>Purus Condimentum Tristique</td></tr></tbody></table><figcaption class="wp-element-caption">Footer caption: Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</figcaption></figure>
	<!-- /wp:table --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-fa115fc8-a899-4804-9cc1-0c2e8830fe42" href="#collapse-item-fa115fc8-a899-4804-9cc1-0c2e8830fe42" role="button" aria-expanded="true" aria-controls="collapse-item-fa115fc8-a899-4804-9cc1-0c2e8830fe42">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov-block-theme/collapse-item -->
	
	<!-- wp:bcgov-block-theme/collapse-item {"title":"Sollicitudin Vestibulum Dolor Inceptos","itemId":"collapse-item-cd22cda6-1936-45cd-8e18-44d97dce86fd","headingId":"heading-cd22cda6-1936-45cd-8e18-44d97dce86fd"} -->
	<div class="wp-block-bcgov-block-theme-collapse-item"><div class="collapse-header" id="heading-cd22cda6-1936-45cd-8e18-44d97dce86fd"><h3><button data-toggle="collapse" data-target="#collapse-item-cd22cda6-1936-45cd-8e18-44d97dce86fd" aria-expanded="false" aria-controls="collapse-item-cd22cda6-1936-45cd-8e18-44d97dce86fd" class="collapsed"><span class="collapse-title">Sollicitudin Vestibulum Dolor Inceptos</span></button></h3></div><div class="collapse collapse-container" id="collapse-item-cd22cda6-1936-45cd-8e18-44d97dce86fd"><div class="collapse-body"><!-- wp:heading {"level":4} -->
	<h4>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</h4>
	<!-- /wp:heading -->
	
	<!-- wp:table {"className":"is-style-stripes"} -->
	<figure class="wp-block-table is-style-stripes"><table><thead><tr><th>Header Lorem Column 1</th><th>Header Dolar Column 2</th><th>Header Sit Column 3</th><th>Header Amut Column 4</th></tr></thead><tbody><tr><td>Purus Condimentum Tristique</td><td>Nullam Quam Aenean</td><td>Etiam Risus Cursus</td><td>Egestas Adipiscing Purus</td></tr><tr><td>Egestas Adipiscing Purus</td><td>Purus Condimentum Tristique</td><td>Nullam Quam Aenean</td><td>Etiam Risus Cursus</td></tr><tr><td>Etiam Risus Cursus</td><td>Egestas Adipiscing Purus</td><td>Purus Condimentum Tristique</td><td>Nullam Quam Aenean</td></tr><tr><td>Nullam Quam Aenean</td><td>Etiam Risus Cursus</td><td>Egestas Adipiscing Purus</td><td>Purus Condimentum Tristique</td></tr></tbody></table><figcaption class="wp-element-caption">Footer caption: Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</figcaption></figure>
	<!-- /wp:table --><div class="collapse-close"><a data-toggle="collapse" data-target="#collapse-item-cd22cda6-1936-45cd-8e18-44d97dce86fd" href="#collapse-item-cd22cda6-1936-45cd-8e18-44d97dce86fd" role="button" aria-expanded="true" aria-controls="collapse-item-cd22cda6-1936-45cd-8e18-44d97dce86fd">Collapse</a></div></div></div></div>
	<!-- /wp:bcgov-block-theme/collapse-item --></div>
	<!-- /wp:bcgov-block-theme/collapse -->',
];

<?php
/**
 * Step through sequence pattern.
 *
 * @since 1.0.4
 *
 * @package Bcgov/Theme/Block
 */

namespace Bcgov\Theme\Block;

return [
	'title'      => __( 'Step through sequence', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-general' ],
	'content'    => '<!-- wp:group {"className":"padded"} -->
	<div class="wp-block-group padded"><!-- wp:columns {"className":"narrow-column-container"} -->
	<div class="wp-block-columns narrow-column-container"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"className":"mt-5"} -->
	<h2 class="mt-5">Step through sequence</h2>
	<!-- /wp:heading -->
	
	<!-- wp:columns {"className":"detail-with-number-container"} -->
	<div class="wp-block-columns detail-with-number-container"><!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3,"textColor":"background","className":"large"} -->
	<h3 class="large has-background-color has-text-color">1 </h3>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"level":4,"textColor":"background"} -->
	<h4 class="has-background-color has-text-color">Month <br>YEAR</h4>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
	<p><strong>This is the first box</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>Add some descriptive text as needed</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"className":"detail-with-number-container"} -->
	<div class="wp-block-columns detail-with-number-container"><!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3,"textColor":"background","className":"large"} -->
	<h3 class="large has-background-color has-text-color">2 </h3>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"level":4,"textColor":"background"} -->
	<h4 class="has-background-color has-text-color">Month <br>YEAR</h4>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
	<p><strong>Or just have a simple headline</strong></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"className":"detail-with-number-container"} -->
	<div class="wp-block-columns detail-with-number-container"><!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3,"textColor":"background","className":"large"} -->
	<h3 class="large has-background-color has-text-color">3 </h3>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"level":4,"textColor":"background"} -->
	<h4 class="has-background-color has-text-color">Month <br>YEAR</h4>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
	<p><strong>And another one</strong></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"className":"detail-with-number-container"} -->
	<div class="wp-block-columns detail-with-number-container"><!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3,"textColor":"background","className":"large"} -->
	<h3 class="large has-background-color has-text-color">4 </h3>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"level":4,"textColor":"background"} -->
	<h4 class="has-background-color has-text-color">Month <br>YEAR</h4>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
	<p><strong>If you need more boxes just duplicate the \'Columns\'</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>Or remove some at their \'Columns\' (note it\'s plural) if there are too many</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"className":"detail-with-number-container"} -->
	<div class="wp-block-columns detail-with-number-container"><!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3,"textColor":"background","className":"large"} -->
	<h3 class="large has-background-color has-text-color">5 </h3>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"level":4,"textColor":"background"} -->
	<h4 class="has-background-color has-text-color">Month <br>YEAR</h4>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
	<p><strong>Sometimes you may want to have longer headline followed by even longer content</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"className":"detail-with-number-container last"} -->
	<div class="wp-block-columns detail-with-number-container last"><!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3,"textColor":"background","className":"large"} -->
	<h3 class="large has-background-color has-text-color">6 </h3>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"level":4,"textColor":"background"} -->
	<h4 class="has-background-color has-text-color">Ongoing</h4>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
	<p><strong>This is the last box</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>Do not duplicate this box, it is the last one and does not have a trailing arrow.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
];

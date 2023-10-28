<?php
/**
 * CleanBC In-page Cloud Banner block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

namespace Bcgov\Theme\Block;

return [
	'title'      => __( 'In-page Cloud Banner', 'bcgov_blocks_theme' ),
	'categories' => [ 'optional-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"wide","style":{"border":{"radius":"1rem"}},"className":"in-page-cloud-banner"} -->
	<div class="wp-block-group alignwide in-page-cloud-banner" style="border-radius:1rem"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/bc-cover-banner-default.jpg","id":1041,"dimRatio":70,"overlayColor":"background","focalPoint":{"x":"0.50","y":"1.00"},"isDark":false} -->
	<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1041" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/bc-cover-banner-default.jpg" style="object-position:50% 100%" data-object-fit="cover" data-object-position="50% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"66.66%","className":"content-column"} -->
	<div class="wp-block-column is-vertically-aligned-center content-column" style="flex-basis:66.66%"><!-- wp:heading -->
	<h2>Ligula Fringilla Sit</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. </p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:2rem"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link">Learn more about Ligula Fringilla</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%","backgroundColor":"accent","className":"image-column"} -->
	<div class="wp-block-column is-vertically-aligned-center image-column has-accent-background-color has-background" style="flex-basis:33.33%"><!-- wp:image {"align":"center","id":1247,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-electric-vehicle-icon.png" alt="" class="wp-image-1247"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group -->',
];

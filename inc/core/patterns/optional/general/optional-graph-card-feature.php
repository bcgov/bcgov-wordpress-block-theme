<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC Graph Card Feature block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'Graph Card Feature', 'bcgov_blocks_theme' ),
	'categories' => [ 'optional-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"6rem","bottom":"6rem"}}},"className":"graph-card-feature"} -->
	<div class="wp-block-group alignwide graph-card-feature" style="margin-top:6rem;margin-bottom:6rem"><!-- wp:media-text {"mediaId":2772,"mediaLink":"none","mediaType":"image","mediaWidth":55,"verticalAlignment":"center","imageFill":false,"className":"is-style-no-clip"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-style-no-clip" style="grid-template-columns:55% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/cleanbc-weather-graph.png" alt="" class="wp-image-2772 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}}} -->
	<div class="wp-block-group" style="padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:heading -->
	<h2>Cursus Sollicitudin Inceptos</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"fontSize":"extra-small"} -->
	<p class="has-extra-small-font-size">Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum. </p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->',
];

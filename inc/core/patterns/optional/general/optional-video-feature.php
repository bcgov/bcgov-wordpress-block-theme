<?php
/**
 * CleanBC Video Feature block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

namespace Bcgov\Theme\Block;

return [
	'title'      => __( 'CleanBC Video Feature', 'bcgov_blocks_theme' ),
	'categories' => [ 'optional-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"3rem","bottom":"6rem"}}},"className":"video-feature"} -->
	<div class="wp-block-group alignwide video-feature" style="margin-top:3rem;margin-bottom:6rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"1rem"}}}} -->
	<h2 id="ecosystems" style="margin-bottom:1rem">Ipsum Etiam Mattis</h2>
	<!-- /wp:heading -->
	
	<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-default"} -->
	<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-default"/>
	<!-- /wp:separator -->
	
	<!-- wp:paragraph -->
	<p>Aenean lacinia bibendum nulla sed consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"color":{"background":"#008fb31f"}},"className":"video-content"} -->
	<div class="wp-block-column video-content has-background" style="background-color:#008fb31f"><!-- wp:embed {"url":"https://youtu.be/m9y5T-VV2Mo","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
	<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
	https://youtu.be/m9y5T-VV2Mo
	</div></figure>
	<!-- /wp:embed -->
	
	<!-- wp:group {"style":{"border":{"width":"6px"}},"borderColor":"tertiary"} -->
	<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:6px"><!-- wp:paragraph -->
	<p>Sed posuere consectetur est at lobortis. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
];

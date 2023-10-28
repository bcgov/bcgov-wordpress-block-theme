<?php
/**
 * General Long Card block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

namespace Bcgov\Theme\Block;

return [
	'title'      => __( 'Long Cards', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-general' ],
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","right":"6rem","left":"6rem"},"blockGap":"3rem"},"border":{"style":"solid","width":"2px"}},"borderColor":"primary-brand"} -->
	<div class="wp-block-group alignwide has-border-color has-primary-brand-border-color" style="border-style:solid;border-width:2px;padding-top:6rem;padding-right:6rem;padding-bottom:6rem;padding-left:6rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontSize":"3rem"}},"textColor":"primary-brand"} -->
	<h2 class="has-primary-brand-color has-text-color" style="font-size:3rem"><strong>Lorem sociis natoque penatibus et magnis</strong></h2>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"bottom"} -->
	<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}}} -->
	<div class="wp-block-group" style="padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:paragraph {"fontSize":"normal"} -->
	<p class="has-normal-font-size">Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov"} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"backgroundColor":"primary-brand","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-brand-background-color has-background">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
];

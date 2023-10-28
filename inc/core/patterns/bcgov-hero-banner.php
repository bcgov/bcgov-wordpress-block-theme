<?php
/**
 * General Hero Banner pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

namespace Bcgov\Theme\Block;

return [
	'title'      => __( 'Hero Banner', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-general' ],
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_05.jpg","id":594,"dimRatio":0,"customOverlayColor":"#000000","focalPoint":{"x":"0.50","y":"0.33"},"minHeight":50,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"align":"full"} -->
	<div class="wp-block-cover alignfull is-light" style="min-height:50vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#000000"></span><img class="wp-block-cover__image-background wp-image-594" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_05.jpg" style="object-position:50% 33%" data-object-fit="cover" data-object-position="50% 33%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}},"color":{"background":"#f2f2f2e6"}},"className":"is-style-dropshadow"} -->
	<div class="wp-block-column is-style-dropshadow has-background" style="background-color:#f2f2f2e6;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem;flex-basis:30%"><!-- wp:heading {"align":"wide","style":{"typography":{"fontSize":"3rem","lineHeight":"1.2"}},"textColor":"primary-brand","className":"alignwide has-white-color has-text-color"} -->
	<h2 class="alignwide has-white-color has-text-color has-primary-brand-color" style="font-size:3rem;line-height:1.2">Ullamcorper Ultricies Ridiculus Consectetur Ligula</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"text-colour","fontSize":"normal"} -->
	<p class="has-text-colour-color has-text-color has-normal-font-size">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"3px"}},"className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link" style="border-radius:3px">Learn More </a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover -->',
];

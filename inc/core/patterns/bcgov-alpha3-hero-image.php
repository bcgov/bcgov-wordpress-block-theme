<?php
/**
 * Alpha V3 Hero Image.
 *
 * @since 1.7.0
 *
 * @package Bcgov/Theme/Block
 */

 namespace Bcgov\Theme\Block;

return [
	'title'      => __( 'Hero Image', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-general', 'bcgov-blocks-theme-alpha-v3' ],
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_04.jpg","id":157,"dimRatio":0,"customOverlayColor":"#000000","minHeight":0,"minHeightUnit":"vh","contentPosition":"center center","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"2rem","right":"2rem"}}}} -->
	<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:2rem;padding-bottom:var(--wp--preset--spacing--50);padding-left:2rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#000000"></span><img class="wp-block-cover__image-background wp-image-157" alt="Melon" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_04.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"color":{"background":"#053661e0"},"border":{"left":{"color":"#f8ba47","width":"8px"},"top":{},"right":{},"bottom":{}}},"textColor":"accent","className":"is-style-dropshadow has-small-border-radius"} -->
	<div class="wp-block-column is-style-dropshadow has-small-border-radius has-accent-color has-text-color has-background has-link-color" style="border-left-color:#f8ba47;border-left-width:8px;background-color:#053661e0;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem;flex-basis:30%"><!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"lineHeight":"1.2"}},"textColor":"white","className":"alignwide has-white-color has-text-color","fontSize":"extra-extra-large"} -->
	<h1 class="wp-block-heading alignwide has-white-color has-text-color has-extra-extra-large-font-size" style="line-height:1.2">Site Title</h1>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"white","fontSize":"small"} -->
	<p class="has-white-color has-text-color has-small-font-size" style="line-height:1.7">Donec id elit non mi porta gravida at eget metus. Cras mattis consectetur purus sit amet fermentum.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover -->',
];

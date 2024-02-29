<?php
/**
 * Alpha V3 Title and Links with Video Background.
 *
 * @since 1.7.0
 *
 * @package Bcgov/Theme/Block
 */

 namespace Bcgov\Theme\Block;

return [
	'title'      => __( 'Title and Links, Video Background', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-general', 'bcgov-blocks-theme-alpha-v3' ],
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/videos/clouds_optimised.mp4","id":2992,"dimRatio":0,"backgroundType":"video","minHeight":66,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<div class="wp-block-cover alignfull is-light" style="margin-top:0;margin-bottom:0;min-height:66vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="' . esc_url( get_template_directory_uri() ) . '/assets/videos/clouds_optimised.mp4" data-object-fit="cover"></video><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"landing-group","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
	<div class="wp-block-group alignwide landing-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|accent","width":"8px"}},"color":{"background":"#053661e0"}},"className":"has-small-border-radius","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-small-border-radius has-background" style="border-left-color:var(--wp--preset--color--accent);border-left-width:8px;background-color:#053661e0"><!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"},"padding":{"top":"0","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}}},"textColor":"white","className":"inline-width","fontSize":"extra-extra-large"} -->
	<h1 class="wp-block-heading inline-width has-white-color has-text-color has-extra-extra-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)">Your page title here.</h1>
	<!-- /wp:heading --></div>
	<!-- /wp:group -->
	
	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2rem","bottom":"2rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:2rem;margin-bottom:2rem"><!-- wp:button {"textColor":"secondary-brand","style":{"border":{"radius":"4px"},"color":{"background":"#ffffffdb"}},"className":"is-style-fill","fontSize":"small"} -->
	<div class="wp-block-button has-custom-font-size is-style-fill has-small-font-size"><a class="wp-block-button__link has-secondary-brand-color has-text-color has-background wp-element-button" href="https://www.yourlinkhere.ca" style="border-radius:4px;background-color:#ffffffdb"><strong>Link 1</strong></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"0","top":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:0"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"landing-group","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top","justifyContent":"right"}} -->
	<div class="wp-block-group alignwide landing-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2rem","bottom":"2rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:2rem;margin-bottom:2rem"><!-- wp:button {"textColor":"secondary-brand","style":{"border":{"radius":"4px"},"color":{"background":"#ffffffdb"}},"className":"is-play-btn is-style-fill","fontSize":"small"} -->
	<div class="wp-block-button has-custom-font-size is-play-btn is-style-fill has-small-font-size" id="openModalBtn"><a class="wp-block-button__link has-secondary-brand-color has-text-color has-background wp-element-button" href="https://www.yourlinkhere.ca" style="border-radius:4px;background-color:#ffffffdb"><strong>Link 2</strong></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover -->',
];

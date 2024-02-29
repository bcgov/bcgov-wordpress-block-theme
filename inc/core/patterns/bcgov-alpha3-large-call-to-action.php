<?php
/**
 * Alpha V3 Large Call-to-Action.
 *
 * @since 1.7.0
 *
 * @package Bcgov/Theme/Block
 */

 namespace Bcgov\Theme\Block;

return [
	'title'      => __( 'Large Call-to-Action', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-general', 'bcgov-blocks-theme-alpha-v3' ],
	'content'    => '<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaId":2557,"mediaLink":"","mediaType":"image","imageFill":false,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","className":"is-style-default"} -->
	<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-style-default has-white-background-color has-background" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" id="fire-teams"><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"margin":{"top":"4rem","bottom":"4rem"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"custom-color-1","layout":{"type":"constrained","justifyContent":"right","contentSize":"642px"}} -->
	<div class="wp-block-group has-custom-color-1-background-color has-background" style="margin-top:4rem;margin-bottom:4rem;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"custom-color-5","fontSize":"extra-large"} -->
	<h2 class="wp-block-heading has-custom-color-5-color has-text-color has-extra-large-font-size" style="font-style:normal;font-weight:400">A very important sentence that grabs the attention of the page visitor.</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"custom-color-5","fontSize":"medium"} -->
	<p class="has-custom-color-5-color has-text-color has-medium-font-size">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"custom-color-1","textColor":"custom-color-5","className":"is-style-fill","fontSize":"small"} -->
	<div class="wp-block-button has-custom-font-size is-style-fill has-small-font-size"><a class="wp-block-button__link has-custom-color-5-color has-custom-color-1-background-color has-text-color has-background wp-element-button" href="https://www.yourlinkhere.ca"><strong>Call-to-Action</strong></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_five_people_smiling.jpg" alt="" class="wp-image-2557 size-full"/></figure></div>
	<!-- /wp:media-text -->',
];

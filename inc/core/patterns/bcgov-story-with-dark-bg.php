<?php
/**
 * Story with Dark Background.
 *
 * @since 1.7.0
 *
 * @package Bcgov/Theme/Block
 */

 namespace Bcgov\Theme\Block;

return [
	'title'      => __( 'Story with Dark Background', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-general', 'bcgov-blocks-theme-page-layouts' ],
	'content'    => '<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":""},"spacing":{"padding":{"top":"6rem","bottom":"6rem"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary-brand","layout":{"type":"constrained"},"metadata":{"name":"Story with Dark Background"}} -->
	<div class="wp-block-group alignfull has-primary-brand-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:6rem;padding-bottom:6rem"><!-- wp:heading {"textAlign":"center","align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0rem","bottom":"3rem"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"white","fontSize":"extra-large"} -->
	<h2 class="wp-block-heading alignwide has-text-align-center has-white-color has-text-color has-link-color has-extra-large-font-size" style="margin-top:0rem;margin-bottom:3rem;font-style:normal;font-weight:700">This is the main story heading:</h2>
	<!-- /wp:heading -->
	
	<!-- wp:media-text {"align":"wide","mediaId":1467,"mediaLink":"none","mediaType":"image","mediaWidth":40,"imageFill":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"6rem","bottom":"6rem"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary-brand","textColor":"white","className":"is-img-rounded is-style-square has-accent-stroke"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-img-rounded is-style-square has-accent-stroke has-white-color has-primary-brand-background-color has-text-color has-background has-link-color" style="margin-top:6rem;margin-bottom:6rem;padding-top:0;padding-bottom:0;grid-template-columns:40% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_01.jpg" alt="" class="wp-image-1467 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:image {"id":3602,"width":"120px","sizeSlug":"full","linkDestination":"none","className":"icon"} -->
	<figure class="wp-block-image size-full is-resized icon"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/icon_enviro.png" alt="" class="wp-image-3602" style="width:120px" title=""/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"white","fontSize":"extra-large"} -->
	<h3 class="wp-block-heading has-white-color has-text-color has-link-color has-extra-large-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700">Story Section 1 Heading</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.15rem"}}} -->
	<p style="font-size:1.15rem">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"white","fontSize":"large"} -->
	<h4 class="wp-block-heading has-white-color has-text-color has-link-color has-large-font-size" style="margin-bottom:0;font-style:normal;font-weight:400">Story Section 1 Additional Info</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.15rem"}}} -->
	<p style="font-size:1.15rem">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text -->
	
	<!-- wp:media-text {"align":"wide","mediaPosition":"right","mediaId":3622,"mediaLink":"none","mediaType":"image","mediaWidth":40,"imageFill":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"6rem","bottom":"6rem"}}},"backgroundColor":"primary-brand","textColor":"white","className":"is-img-rounded is-style-square has-accent-stroke"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-img-rounded is-style-square has-accent-stroke has-white-color has-primary-brand-background-color has-text-color has-background has-link-color" style="margin-top:6rem;margin-bottom:6rem;grid-template-columns:auto 40%"><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"right":"2rem"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-right:2rem"><!-- wp:image {"id":3607,"width":"120px","sizeSlug":"full","linkDestination":"none","className":"icon"} -->
	<figure class="wp-block-image size-full is-resized icon"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/icon_social.png" alt="" class="wp-image-3607" style="width:120px" title=""/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"white","fontSize":"extra-large"} -->
	<h3 class="wp-block-heading has-white-color has-text-color has-link-color has-extra-large-font-size" style="margin-top:0;margin-bottom:0">Story Section 2 Heading</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.15rem"}}} -->
	<p style="font-size:1.15rem">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"white","fontSize":"large"} -->
	<h4 class="wp-block-heading has-white-color has-text-color has-link-color has-large-font-size" style="margin-bottom:0;font-style:normal;font-weight:400">Story Section 2 Additional Info</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.15rem"}}} -->
	<p style="font-size:1.15rem">Positive brand and organizational reputation, risk reduction, attracting capital, and fostering positive relationships with stakeholders all contribute to long-term sustainability for a company. A commitment to social responsibility better positions a business to thrive in a changing environment and to meet increasing demands for ethical and sustainable practices in business.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_04.jpg" alt="" class="wp-image-3622 size-full"/></figure></div>
	<!-- /wp:media-text -->
	
	<!-- wp:media-text {"align":"wide","mediaId":4547,"mediaLink":"none","mediaType":"image","mediaWidth":40,"imageFill":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"6rem","bottom":"6rem"}}},"backgroundColor":"primary-brand","textColor":"white","className":"is-img-rounded is-style-square has-accent-stroke"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-img-rounded is-style-square has-accent-stroke has-white-color has-primary-brand-background-color has-text-color has-background has-link-color" style="margin-top:6rem;margin-bottom:6rem;grid-template-columns:40% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_05.jpg" alt="" class="wp-image-4547 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:image {"id":3612,"width":"120px","sizeSlug":"full","linkDestination":"none","className":"icon"} -->
	<figure class="wp-block-image size-full is-resized icon"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/icon_govern.png" alt="" class="wp-image-3612" style="width:120px" title=""/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"white","fontSize":"extra-large"} -->
	<h3 class="wp-block-heading has-white-color has-text-color has-link-color has-extra-large-font-size" style="margin-top:0;margin-bottom:0"><strong><strong><strong>Story Section 3 Heading</strong></strong></strong></h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"white","fontSize":"large"} -->
	<h4 class="wp-block-heading has-white-color has-text-color has-link-color has-large-font-size" style="margin-bottom:0;font-style:normal;font-weight:400">Story Section 3 Additional Info</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.15rem"}}} -->
	<p style="font-size:1.15rem">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->',
];

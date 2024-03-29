<?php
/**
 * Alpha V3 Front Page.
 *
 * @since 1.7.0
 *
 * @package Bcgov/Theme/Block
 */

 namespace Bcgov\Theme\Block;

return [
	'title'      => __( 'Alpha V3 Front Page', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-general', 'bcgov-blocks-theme-alpha-v3', 'bcgov-blocks-theme-page-layouts' ],
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_bc_ferry.jpg","id":157,"dimRatio":0,"customOverlayColor":"#000000","minHeight":0,"minHeightUnit":"vh","contentPosition":"center center","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"2rem","right":"2rem"}}}} -->
	<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:2rem;padding-bottom:var(--wp--preset--spacing--50);padding-left:2rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#000000"></span><img class="wp-block-cover__image-background wp-image-157" alt="BC Ferry" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_bc_ferry.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"inherit":true,"type":"constrained"}} -->
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
	<!-- /wp:cover -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"2rem","right":"2rem"}}},"layout":{"type":"constrained","contentSize":"1440px"},"metadata":{"name":"Quick Access"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:2rem;padding-bottom:var(--wp--preset--spacing--50);padding-left:2rem"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"},"metadata":{"name":"BC Gov H2"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"border":{"bottom":{"color":"#f8ba47","width":"6px"},"top":{},"right":{},"left":{}}},"className":"is-heading-two-border","layout":{"type":"constrained","justifyContent":"left","contentSize":"40px"}} -->
	<div class="wp-block-group is-heading-two-border" style="border-bottom-color:#f8ba47;border-bottom-width:6px"></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	
	<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontSize":"large"} -->
	<h2 class="wp-block-heading has-black-color has-text-color has-link-color has-large-font-size">Call-to-Action Section</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group -->
	
	<!-- wp:columns {"className":"is-style-constrained is-triple-card-layout"} -->
	<div class="wp-block-columns is-style-constrained is-triple-card-layout"><!-- wp:column {"className":"is-style-default"} -->
	<div class="wp-block-column is-style-default"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0rem","left":"0rem"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-right:0rem;padding-left:0rem"><!-- wp:image {"id":1377,"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
	<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_piggy_back_ride.jpg" alt="Piggy Back Ride" class="wp-image-1377" style="border-radius:5px;aspect-ratio:16/9;object-fit:cover" title=""/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"style":{"color":{"text":"#1a5a96"},"elements":{"link":{"color":{"text":"#1a5a96"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"has-no-underline","fontSize":"small"} -->
	<h2 class="wp-block-heading has-no-underline has-text-color has-link-color has-small-font-size" style="color:#1a5a96;font-style:normal;font-weight:700"><a href="https://www.yourlinkhere.ca" title="">Call-to-Action 1</a></h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.3"}}} -->
	<p style="line-height:1.3">Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0rem","left":"0rem"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-right:0rem;padding-left:0rem"><!-- wp:image {"id":197,"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
	<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_sunset_get_together.jpg" alt="Sunset Get Together" class="wp-image-197" style="border-radius:5px;aspect-ratio:16/9;object-fit:cover" title=""/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"#1a5a96"}}},"color":{"text":"#1a5a96"},"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"has-no-underline","fontSize":"small"} -->
	<h2 class="wp-block-heading has-no-underline has-text-color has-link-color has-small-font-size" style="color:#1a5a96;font-style:normal;font-weight:700"><a href="https://www.yourlinkhere.ca" title="">Call-to-Action 2</a></h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.3"}}} -->
	<p style="line-height:1.3">Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
	<div class="wp-block-column" style="padding-right:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0rem","left":"0rem"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-right:0rem;padding-left:0rem"><!-- wp:image {"id":202,"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
	<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_playing_with_abacus.jpg" alt="Playing with Abacus" class="wp-image-202" style="border-radius:5px;aspect-ratio:16/9;object-fit:cover" title=""/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"style":{"color":{"text":"#1a5a96"},"elements":{"link":{"color":{"text":"#1a5a96"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"has-no-underline","fontSize":"small"} -->
	<h2 class="wp-block-heading has-no-underline has-text-color has-link-color has-small-font-size" style="color:#1a5a96;font-style:normal;font-weight:700"><a href="https://www.yourlinkhere.ca" title="">Call-to-Action 3</a></h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.3"}}} -->
	<p style="line-height:1.3">Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
];

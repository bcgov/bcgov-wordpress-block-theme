<?php
/**
 * Alpha V3 1x3 Call-to-Action.
 *
 * @since 1.7.0
 *
 * @package Bcgov/Theme/Block
 */

 namespace Bcgov\Theme\Block;

return [
	'title'      => __( '1x3 Call-to-Action', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-general', 'bcgov-blocks-theme-alpha-v3' ],
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"2rem","right":"2rem"}}},"layout":{"type":"constrained","contentSize":"1440px"},"metadata":{"name":"Quick Access"}} -->
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
	<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_01.jpg" alt="Pear" class="wp-image-1377" style="border-radius:5px;aspect-ratio:16/9;object-fit:cover" title=""/></figure>
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
	<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_10.jpg" alt="Avocado" class="wp-image-197" style="border-radius:5px;aspect-ratio:16/9;object-fit:cover" title=""/></figure>
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
	<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_05.jpg" alt="banana" class="wp-image-202" style="border-radius:5px;aspect-ratio:16/9;object-fit:cover" title=""/></figure>
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

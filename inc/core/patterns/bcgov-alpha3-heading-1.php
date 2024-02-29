<?php
/**
 * Alpha V3 Heading 1.
 *
 * @since 1.7.0
 *
 * @package Bcgov/Theme/Block
 */

 namespace Bcgov\Theme\Block;

return [
	'title'      => __( 'Heading 1', 'bcgov_blocks_theme' ),
	'categories' => [ 'bcgov-blocks-theme-general', 'bcgov-blocks-theme-alpha-v3' ],
	'content'    => '<!-- wp:group {"align":"full","style":{"background":{"backgroundImage":{"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_vancouver_port.jpg","id":157,"source":"file","title":"Vancouver Port"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull"><!-- wp:group {"lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"2rem","right":"2rem"}},"color":{"gradient":"linear-gradient(135deg,rgba(17,38,61,0.71) 0%,rgb(4,54,98) 100%)"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","layout":{"inherit":true,"type":"constrained","contentSize":"1440px","justifyContent":"center"}} -->
	<div class="wp-block-group has-white-color has-text-color has-background has-link-color" style="background:linear-gradient(135deg,rgba(17,38,61,0.71) 0%,rgb(4,54,98) 100%);margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-right:2rem;padding-bottom:var(--wp--preset--spacing--40);padding-left:2rem"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"extra-large"} -->
	<h1 class="wp-block-heading has-white-color has-text-color has-link-color has-extra-large-font-size">Heading 1</h1>
	<!-- /wp:heading -->
	
	<!-- wp:image {"id":572,"width":"auto","height":"150px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|grayscale"}}} -->
	<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/icon_folder.png" alt="Folder Icon with a Lock" class="wp-image-572" style="width:auto;height:150px" title=""/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
];

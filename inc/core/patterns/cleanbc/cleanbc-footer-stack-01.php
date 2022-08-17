<?php
/**
 * CleanBC Footer Stack block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'CleanBC Footer Stack', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-header-footer' ],
	'content'    => '<!-- wp:group {"align":"full","className":"footer-image-stack"} -->
	<div class="wp-block-group alignfull footer-image-stack"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/footer-forest-bg-image-01.jpg","id":1210,"dimRatio":0,"overlayColor":"transparent","focalPoint":{"x":"0.50","y":"1.00"},"minHeight":800,"isDark":false,"className":"is-light footer-cover"} -->
	<div class="wp-block-cover is-light footer-cover" style="min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1210" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc/footer-forest-bg-image-01.jpg" style="object-position:50% 100%" data-object-fit="cover" data-object-position="50% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size"></p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group -->',
];

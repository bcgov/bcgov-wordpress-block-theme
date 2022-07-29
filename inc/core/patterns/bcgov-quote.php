<?php

namespace Bcgov\Theme\Block;

/**
 * General Quote block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return array(
	'title'      => __( 'Quote', 'bcgov_blocks_theme' ),
	'categories' => array( 'bcgov-blocks-theme-general' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","right":"6rem","left":"6rem"},"blockGap":"3rem"},"border":{"style":"solid","width":"2px"}},"borderColor":"primary-brand-blue","className":"is-quote"} -->
	<div class="wp-block-group is-quote has-border-color has-primary-brand-blue-border-color" style="border-style:solid;border-width:2px;padding-top:6rem;padding-right:6rem;padding-bottom:6rem;padding-left:6rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"1rem","right":"2rem","bottom":"1rem","left":"2rem"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:1rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:quote {"textColor":"primary-brand-blue","fontSize":"extra-large"} -->
	<blockquote class="wp-block-quote has-primary-brand-blue-color has-text-color has-extra-large-font-size"><p>Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p><cite>~ Speaker or citation</cite></blockquote>
	<!-- /wp:quote --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);

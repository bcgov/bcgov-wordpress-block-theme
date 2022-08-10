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
	'content'    => '<!-- wp:group {"style":{"spacing":{"blockGap":"3rem","margin":{"top":"3rem","bottom":"3rem"}},"border":{"style":"solid","width":"2px"}},"borderColor":"primary-brand-blue","className":"is-quote"} -->
	<div class="wp-block-group is-quote has-border-color has-primary-brand-blue-border-color" style="border-style:solid;border-width:2px;margin-top:3rem;margin-bottom:3rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:quote {"textColor":"primary-brand-blue"} -->
	<blockquote class="wp-block-quote has-primary-brand-blue-color has-text-color"><p>Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p><cite>~ Speaker or citation</cite></blockquote>
	<!-- /wp:quote --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);

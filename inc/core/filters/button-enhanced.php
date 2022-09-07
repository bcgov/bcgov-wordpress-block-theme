<?php

namespace Bcgov\Theme\Block;

/**
 * Improve button block by adding additional attribtes: size class and tabindex.
 *
 * Load this file via inc/core/theme-bootstrap.php.
 *
 * @param  string $block_content Block content to be rendered.
 * @param  array  $block         Block attributes.
 * @return string
 */
function add_button_attributes( $block_content = '', $block = [] ) {

	if ( isset( $block['blockName'] ) && 'core/button' === $block['blockName'] ) {
		$defaults = [
			'size'    => 'regular',
			'svgIcon' => 'none',
			'label'   => 'none',
		];

		$args = wp_parse_args( $block['attrs'], $defaults );

		if ( 'none' !== $args['svgIcon'] ) {
			$icon = ' icon icon-' . esc_attr( $args['svgIcon'] );
		} else {
			$icon = '';
		}

		if ( 'none' !== $args['label'] ) {
			$label = 'aria-label="' . esc_attr( $args['label'] ) . '"';
		} else {
			$label = null;
		}

		$html = str_replace(
			[
				'<div class="wp-block-button',
				'<a class="wp-block-button__link',
			],
			[
				'<div class="wp-block-button has-size-' . esc_attr( $args['size'] ),
				'<a tabindex="0" ' . $label . ' class="wp-block-button__link' . $icon,
			],
			$block_content
		);

		return $html;
	}

	return $block_content;
}

add_filter( 'render_block', __NAMESPACE__ . '\add_button_attributes', 10, 2 );

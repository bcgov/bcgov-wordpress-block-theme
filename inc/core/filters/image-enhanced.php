<?php

namespace Bcgov\Theme\Block;

/**
 * Improve image block by adding additional attribtes: title and print mode.
 *
 * Load this file via inc/core/theme-bootstrap.php.
 *
 * @param  string $block_content Block content to be rendered.
 * @param  array  $block         Block attributes.
 * @return string
 */
function add_image_attributes( $block_content = '', $block = [] ) {

	if ( isset( $block['blockName'] ) && 'core/image' === $block['blockName'] ) {
		$defaults = [
			'title'      => 'none',
			'printMode'  => false,
			'printWidth' => 25,
		];

		$args = wp_parse_args( $block['attrs'], $defaults );

		if ( 'none' !== $args['title'] ) {
			$title = 'title="' . esc_attr( $args['title'] ) . '"';
		} else {
			$title = '';
		}
		if ( false !== $args['printMode'] ) {
			$printMode = 'data-print="true"';
		} else {
			$printMode = '';
		}

		if ( false !== $args['printWidth'] ) {
			$printWidth = 'data-print-width="' . $args['printWidth'] . '"';
		} else {
			$printWidth = '';
		}

		$html = str_replace(
			[
				'<img ',
			],
			[
				'<img ' . $title . ' ' . $printMode . ' ' . $printWidth . ' ',
			],
			$block_content
		);

		return $html;
	}

	return $block_content;
}

add_filter( 'render_block', __NAMESPACE__ . '\add_image_attributes', 10, 2 );

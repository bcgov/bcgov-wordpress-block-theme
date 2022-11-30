<?php

namespace Bcgov\Theme\Block;

/**
 * Improve site logo block by adding additional attribtes: print mode.
 *
 * @param  string $block_content Block content to be rendered.
 * @param  array  $block         Block attributes.
 * @return string
 */
function add_site_logo_attributes( $block_content = '', $block = [] ) {

	if ( isset( $block['blockName'] ) && 'core/site-logo' === $block['blockName'] ) {
		$defaults = [
			'inverted' => false,
		];

		$args = wp_parse_args( $block['attrs'], $defaults );

		if ( false !== $args['inverted'] ) {
			$printMode = 'data-print="inverted"';
		} else {
			$printMode = '';
		}

		$html = str_replace(
			[
				'>',
			],
			[
				' ' . $printMode . '>',
			],
			$block_content
		);

		return $html;
	}

	return $block_content;
}

add_filter( 'render_block', __NAMESPACE__ . '\add_site_logo_attributes', 10, 2 );

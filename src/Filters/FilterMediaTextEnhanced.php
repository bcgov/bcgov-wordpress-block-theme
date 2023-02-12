<?php
/**
 * Handles theme filters for images.
 *
 * @since 1.1.1
 *
 * @package Bcgov/Theme/Block
 */

namespace Bcgov\Theme\Block\Filters;

/**
 * This class enhances the Media-text block by adding title and print mode attributes.
 * It provides the add_media_text_attributes method which accepts the block's content and
 * attributes as input parameters, and returns a modified block content with added attributes.
 * If the block is not an Media-text block, the original block content is returned.
 *
 * @since 1.1.1
 */
class FilterMediaTextEnhanced {
	/**
     * Improve button block by adding additional attribtes: size class and tabindex.
     *
     * @param  string $block_content Block content to be rendered.
     * @param  array  $block         Block attributes.
     * @return string
     */
	public function add_media_text_attributes( $block_content = '', $block = [] ) {

		if ( isset( $block['blockName'] ) && 'core/media-text' === $block['blockName'] ) {
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
}

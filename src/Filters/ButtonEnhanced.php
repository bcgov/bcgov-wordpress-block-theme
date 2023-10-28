<?php
/**
 * Handles theme filters for buttons.
 *
 * @since 1.1.1
 *
 * @package Bcgov/Theme/Block
 */

namespace Bcgov\Theme\Block\Filters;

/**
 * This class enhances the Filter Button block by adding size and tabindex attributes.
 * It provides the add_button_attributes method which accepts the block's content and attributes
 * as input parameters and returns a modified block content with added attributes.
 * If the block is not a Filter Button, the original block content is returned.
 *
 * @since 1.1.1
 */
class ButtonEnhanced {

	/**
	 * Improve button block by adding additional attribtes: size class and tabindex.
	 *
	 * @param  string $block_content Block content to be rendered.
	 * @param  array  $block         Block attributes.
	 * @return string
	 */
	public function add_button_attributes( $block_content = '', $block = [] ) {

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
				$label = '';
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
}

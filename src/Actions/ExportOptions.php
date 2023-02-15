<?php

namespace Bcgov\Theme\Block\Actions;

/**
 * Registers theme export options in admin.
 *
 * @since 1.1.2
 *
 * @package Bcgov/Theme/Block
 */
class ExportOptions {
	/**
	 * Register Custom Settings and populate with default values.
	 *
	 * @since 1.0.3
	 *
	 * @return void
	 */
	public function bcgov_block_theme_exports() {
		if ( current_user_can( 'export' ) ) {
			echo '<p><label><input type="radio" name="content" value="wp_template" /> Block Theme: Templates</label></p>';
			echo '<p><label><input type="radio" name="content" value="wp_template_part" /> Block Theme: Template Parts</label></p>';
			echo '<p><label><input type="radio" name="content" value="wp_global_styles" /> Block Theme: Global Styles</label></p>';
		}
	}
}

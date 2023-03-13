<?php

namespace Bcgov\Theme\Block\Actions;

use Bcgov\Theme\Block\Utils\AdminNotices;

/**
 * Handles theme dependencies.
 *
 * @since 1.1.1
 */
class Dependencies {

	/**
	 * Sets admin notices for missing plugin dependencies using the AdminNotices class.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_dependencies() {

		// Checks for AIOSEO breadcrumb specific function.
		$message_intro = __( 'Missing: The BCGov Block Theme requires the activation of the ', 'bcgov_block_theme' );

		if ( ! function_exists( 'aioseo_breadcrumbs' ) ) {

			$notice = new AdminNotices();
			$notice->warning( 'Missing plugin → All in One SEO', 'BCGov Block Theme requires the activation of the All in One SEO plugin to enable breadcrumb navigation and SEO/social sharing. Breadcrumb navigation is set in the page templates.', 'aioseo-breadcrumbs-warning-message' );

		}

		if ( ! function_exists( 'acf_register_block_type' ) ) {

			$notice = new AdminNotices();
			$notice->warning( 'Missing plugin → Advanced Custom Fields (or Pro version)', 'BCGov Block Theme requires the activation of the Advanced Custom Fields or ACF Pro plugin to enable theme specific blocks and add custom fields to pages, posts and site specific Custom Post Types.', 'acf-warning-message' );

		}

		if ( ! function_exists( 'cptui_loaded' ) ) {

			$notice = new AdminNotices();
			$notice->warning( 'Missing plugin → Custom Post Type UI', 'BCGov Block Theme requires the activation of the Custom Post Type UI plugin to enable to Custom Post Types (CPTs) which allow for customised templating features and aggragation of specific content types using the query loop block.', 'cptui-warning-message' );

		}
	}
}

<?php

namespace Bcgov\Theme\Block\Actions;

/**
 * Sets the default favicon to the approved BC Gov logo favicon.
 *
 * @since 1.5.0
 */
class SetDefaultFavicon {

	/**
	 * Defines the default favicon url and adds it to the head.
	 *
	 * @since 1.5.0
	 *
	 * @return void
	 */
	public function add_favicon_to_head() {

        $favicon_url = get_template_directory_uri() . '/assets/images/block-theme/favicon.ico';
        echo '<link rel="icon" href="' . esc_url( $favicon_url ) . '" type="image/x-icon" />';
	}
}

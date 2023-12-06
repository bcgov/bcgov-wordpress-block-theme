<?php
/**
 * Handles theme filters for allowed redirect hosts.
 *
 * @since 1.1.1
 *
 * @package Bcgov/Theme/Block
 */

namespace Bcgov\Theme\Block\Filters;

/**
 * This class extends the list of allowed redirect hosts.
 *
 * @since 1.1.1
 */
class AllowedHosts {

	/**
	 * Extend allowed hosts by adding new sites to the list of safe redirect targets.
	 *
	 * @param  string[] $hosts Array of allowed host names.
	 * @return string[]
	 */
	public function add_allowed_redirect_hosts( $hosts ) {
        $my_hosts = array( 'bcgov.github.io' );
        return array_merge( $hosts, $my_hosts );
	}
}

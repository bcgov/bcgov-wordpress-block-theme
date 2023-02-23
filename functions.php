<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bcgov/Theme/Block
 * @since 1.0.0
 *
 * @return void
 */

namespace Bcgov\Theme\Block;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}

require_once get_template_directory() . '/src/Loader.php';
require_once get_template_directory() . '/src/Setup.php';

if ( class_exists( 'Bcgov\\Theme\\Block\\Loader' ) && class_exists( 'Bcgov\\Theme\\Block\\Setup' ) ) {
    new Setup();
}


/**
 * Constants to enable/disable specific site features.
 *
 * @since 1.0.3
 */
if ( 'cleanbc' === get_option( 'active_site_pattern_styles' ) ) {
	define( __NAMESPACE__ . '\CLEANBC', true );
} else {
	define( __NAMESPACE__ . '\CLEANBC', false );
}

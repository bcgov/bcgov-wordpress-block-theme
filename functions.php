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
	exit;
}

require_once get_template_directory() . '/src/Setup.php';

if ( class_exists( 'Bcgov\\Theme\\Block\\Setup' ) ) {
    new Setup();
}

/**
 * Load core file.
 *
 * @since 1.0.0
 */
require_once get_template_directory() . '/inc/core/theme-bootstrap.php';

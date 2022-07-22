<?php

namespace BCGov\BlocksTheme;

/**
 * BCGov Blocks Theme: Add theme page to the admin mmenu.
 *
 * @since 1.0.0
 *
 * @return void
 */
function bcgov_blocks_theme_menu() {
	add_theme_page( esc_html__( 'BCGov Blocks Theme', 'bcgov-blocks-theme' ), esc_html__( 'BCGov Blocks Theme', 'bcgov-blocks-theme' ), 'edit_theme_options', 'bcgov-blocks-theme-info', 'bcgov_blocks_theme_page_display' );
}
add_action( 'admin_menu', __NAMESPACE__ . '\bcgov_blocks_theme_menu' );

/**
 * Display BCGov Block Theme features and instructions page.
 *
 * @since 1.0.0
 *
 * @return void
 */
function bcgov_blocks_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}

	include_once 'templates/theme-info-page.php';
}

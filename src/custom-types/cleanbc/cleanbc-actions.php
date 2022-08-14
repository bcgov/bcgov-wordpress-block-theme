<?php
/**
 * CleanBC Action custom post type.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

$args = [
	'description'         => __( 'Actions.', 'cleanbc-actions' ),
	'public'              => true,
	'show_in_nav_menus'   => true,
	'show_in_admin_bar'   => true,
	'exclude_from_search' => false,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'can_export'          => true,
	'delete_with_user'    => false,
	'hierarchical'        => false,
	'has_archive'         => false,
	'menu_icon'           => 'dashicons-controls-repeat',
	'menu_position'       => 20,
	'query_var'           => 'cleanbc_actions',
	'labels'              => [
		'name'          => 'Actions',
		'singular_name' => 'Action',
	],
	'supports'            => [
		'title',
		'editor',
	],
	'show_in_rest'        => true,
];

register_post_type( 'cleanbc-actions', $args );

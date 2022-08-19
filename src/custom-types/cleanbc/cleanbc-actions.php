<?php
/**
 * CleanBC Action custom post type.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

$labels = array(
	'name'                  => _x( 'CleanBC Actions', 'Post Type General Name', 'bcgov-block-theme' ),
	'singular_name'         => _x( 'CleanBC Action', 'Post Type Singular Name', 'bcgov-block-theme' ),
	'menu_name'             => __( 'Actions', 'bcgov-block-theme' ),
	'name_admin_bar'        => __( 'Actions', 'bcgov-block-theme' ),
	'archives'              => __( 'Actions Archives', 'bcgov-block-theme' ),
	'attributes'            => __( 'Actions Attributes', 'bcgov-block-theme' ),
	'parent_item_colon'     => __( 'Parent Item:', 'bcgov-block-theme' ),
	'all_items'             => __( 'All Items', 'bcgov-block-theme' ),
	'add_new_item'          => __( 'Add New Item', 'bcgov-block-theme' ),
	'add_new'               => __( 'Add New Action', 'bcgov-block-theme' ),
	'new_item'              => __( 'New Action', 'bcgov-block-theme' ),
	'edit_item'             => __( 'Edit Action', 'bcgov-block-theme' ),
	'update_item'           => __( 'Update Action', 'bcgov-block-theme' ),
	'view_item'             => __( 'View Action', 'bcgov-block-theme' ),
	'view_items'            => __( 'View Actions', 'bcgov-block-theme' ),
	'search_items'          => __( 'Search Action', 'bcgov-block-theme' ),
	'not_found'             => __( 'Action Not found', 'bcgov-block-theme' ),
	'not_found_in_trash'    => __( 'Action Not found in Trash', 'bcgov-block-theme' ),
	'featured_image'        => __( 'Featured Image', 'bcgov-block-theme' ),
	'set_featured_image'    => __( 'Set featured image', 'bcgov-block-theme' ),
	'remove_featured_image' => __( 'Remove featured image', 'bcgov-block-theme' ),
	'use_featured_image'    => __( 'Use as featured image', 'bcgov-block-theme' ),
	'insert_into_item'      => __( 'Insert into Action', 'bcgov-block-theme' ),
	'uploaded_to_this_item' => __( 'Uploaded to this Action', 'bcgov-block-theme' ),
	'items_list'            => __( 'Actions list', 'bcgov-block-theme' ),
	'items_list_navigation' => __( 'Actions list navigation', 'bcgov-block-theme' ),
	'filter_items_list'     => __( 'Filter Actions list', 'bcgov-block-theme' ),
);
$args   = array(
	'label'               => __( 'action', 'bcgov-block-theme' ),
	'description'         => __( 'Actions', 'bcgov-block-theme' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor', 'page-attributes', 'excerpt', 'thumbnail' ),
	'taxonomies'          => array( 'projects' ),
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_position'       => 20,
	'menu_icon'           => 'dashicons-controls-repeat',
	'show_in_admin_bar'   => true,
	'show_in_nav_menus'   => true,
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'capability_type'     => 'post',
	'show_in_rest'        => true,
);
register_post_type( 'cleanbc-actions', $args );

<?php
/**
 * CleanBC Project custom post type.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

$labels = array(
	'name'                  => _x( 'CleanBC Projects', 'Post Type General Name', 'bcgov-block-theme' ),
	'singular_name'         => _x( 'CleanBC Project', 'Post Type Singular Name', 'bcgov-block-theme' ),
	'menu_name'             => __( 'Projects', 'bcgov-block-theme' ),
	'name_admin_bar'        => __( 'Projects', 'bcgov-block-theme' ),
	'archives'              => __( 'Projects Archives', 'bcgov-block-theme' ),
	'attributes'            => __( 'Projects Attributes', 'bcgov-block-theme' ),
	'parent_item_colon'     => __( 'Parent Item:', 'bcgov-block-theme' ),
	'all_items'             => __( 'All Projects', 'bcgov-block-theme' ),
	'add_new_item'          => __( 'Add New Item', 'bcgov-block-theme' ),
	'add_new'               => __( 'Add New Project', 'bcgov-block-theme' ),
	'new_item'              => __( 'New Project', 'bcgov-block-theme' ),
	'edit_item'             => __( 'Edit Project', 'bcgov-block-theme' ),
	'update_item'           => __( 'Update Project', 'bcgov-block-theme' ),
	'view_item'             => __( 'View Project', 'bcgov-block-theme' ),
	'view_items'            => __( 'View Projects', 'bcgov-block-theme' ),
	'search_items'          => __( 'Search Project', 'bcgov-block-theme' ),
	'not_found'             => __( 'Project Not found', 'bcgov-block-theme' ),
	'not_found_in_trash'    => __( 'Project Not found in Trash', 'bcgov-block-theme' ),
	'featured_image'        => __( 'Featured Image', 'bcgov-block-theme' ),
	'set_featured_image'    => __( 'Set featured image', 'bcgov-block-theme' ),
	'remove_featured_image' => __( 'Remove featured image', 'bcgov-block-theme' ),
	'use_featured_image'    => __( 'Use as featured image', 'bcgov-block-theme' ),
	'insert_into_item'      => __( 'Insert into Project', 'bcgov-block-theme' ),
	'uploaded_to_this_item' => __( 'Uploaded to this Project', 'bcgov-block-theme' ),
	'items_list'            => __( 'Projects list', 'bcgov-block-theme' ),
	'items_list_navigation' => __( 'Projects list navigation', 'bcgov-block-theme' ),
	'filter_items_list'     => __( 'Filter Projects list', 'bcgov-block-theme' ),
);
$args   = array(
	'label'               => __( 'project', 'bcgov-block-theme' ),
	'description'         => __( 'Projects', 'bcgov-block-theme' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor', 'page-attributes', 'excerpt', 'thumbnail', 'post_tag' ),
	'taxonomies'          => array( 'post_tag', 'category' ),
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_position'       => 20,
	'menu_icon'           => 'dashicons-admin-tools',
	'show_in_admin_bar'   => true,
	'show_in_nav_menus'   => true,
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'capability_type'     => 'post',
	'show_in_rest'        => true,
);
register_post_type( 'cleanbc-projects', $args );

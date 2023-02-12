<?php

namespace Bcgov\Theme\Block\Actions;

/**
 * Register a custom patterns post type.
 *
 * @since 1.1.1
 */
class BlockThemeRegisterCustomPatternsPostType {

	/**
	 * Constructs a custom patterns post type.
	 */
	public function __construct() {
		$this->bcgov_block_theme_register_custom_pattern();
	}

	/**
     * Registers a Custom Post Type for  "Custom Patterns".
     *
     * @since 1.1.0
	 *
	 * @return void
     */
	public function bcgov_block_theme_register_custom_pattern() {

		/**
		 * Post Type: Custom Patterns.
		 */

		$labels = [
			'name'                     => __( 'Custom Patterns', 'bcgov-block-theme' ),
			'singular_name'            => __( 'Custom Pattern', 'bcgov-block-theme' ),
			'menu_name'                => __( 'Patterns', 'bcgov-block-theme' ),
			'all_items'                => __( 'All Custom Patterns', 'bcgov-block-theme' ),
			'add_new'                  => __( 'Add new', 'bcgov-block-theme' ),
			'add_new_item'             => __( 'Add new Custom Pattern', 'bcgov-block-theme' ),
			'edit_item'                => __( 'Edit Custom Pattern', 'bcgov-block-theme' ),
			'new_item'                 => __( 'New Custom Pattern', 'bcgov-block-theme' ),
			'view_item'                => __( 'View Custom Pattern', 'bcgov-block-theme' ),
			'view_items'               => __( 'View Custom Patterns', 'bcgov-block-theme' ),
			'search_items'             => __( 'Search Custom Patterns', 'bcgov-block-theme' ),
			'not_found'                => __( 'No Custom Patterns found', 'bcgov-block-theme' ),
			'not_found_in_trash'       => __( 'No Custom Patterns found in trash', 'bcgov-block-theme' ),
			'parent'                   => __( 'Parent Custom Pattern:', 'bcgov-block-theme' ),
			'featured_image'           => __( 'Featured image for this Custom Pattern', 'bcgov-block-theme' ),
			'set_featured_image'       => __( 'Set featured image for this Custom Pattern', 'bcgov-block-theme' ),
			'remove_featured_image'    => __( 'Remove featured image for this Custom Pattern', 'bcgov-block-theme' ),
			'use_featured_image'       => __( 'Use as featured image for this Custom Pattern', 'bcgov-block-theme' ),
			'archives'                 => __( 'Custom Pattern archives', 'bcgov-block-theme' ),
			'insert_into_item'         => __( 'Insert into Custom Pattern', 'bcgov-block-theme' ),
			'uploaded_to_this_item'    => __( 'Upload to this Custom Pattern', 'bcgov-block-theme' ),
			'filter_items_list'        => __( 'Filter Custom Patterns list', 'bcgov-block-theme' ),
			'items_list_navigation'    => __( 'Custom Patterns list navigation', 'bcgov-block-theme' ),
			'items_list'               => __( 'Custom Patterns list', 'bcgov-block-theme' ),
			'attributes'               => __( 'Custom Patterns attributes', 'bcgov-block-theme' ),
			'name_admin_bar'           => __( 'Custom Pattern', 'bcgov-block-theme' ),
			'item_published'           => __( 'Custom Pattern published', 'bcgov-block-theme' ),
			'item_published_privately' => __( 'Custom Pattern published privately.', 'bcgov-block-theme' ),
			'item_reverted_to_draft'   => __( 'Custom Pattern reverted to draft.', 'bcgov-block-theme' ),
			'item_scheduled'           => __( 'Custom Pattern scheduled', 'bcgov-block-theme' ),
			'item_updated'             => __( 'Custom Pattern updated.', 'bcgov-block-theme' ),
			'parent_item_colon'        => __( 'Parent Custom Pattern:', 'bcgov-block-theme' ),
		];

		$args = [
			'label'                 => __( 'Custom Patterns', 'bcgov-block-theme' ),
			'labels'                => $labels,
			'description'           => '',
			'public'                => true,
			'publicly_queryable'    => false,
			'show_ui'               => true,
			'show_in_rest'          => true,
			'rest_base'             => '',
			'rest_controller_class' => 'WP_REST_Posts_Controller',
			'rest_namespace'        => 'wp/v2',
			'has_archive'           => false,
			'show_in_menu'          => true,
			'show_in_nav_menus'     => true,
			'delete_with_user'      => false,
			'exclude_from_search'   => false,
			'capability_type'       => 'post',
			'map_meta_cap'          => true,
			'hierarchical'          => false,
			'can_export'            => true,
			'rewrite'               => [
				'slug'       => 'custom-pattern',
				'with_front' => true,
			],
			'query_var'             => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-editor-kitchensink',
			'supports'              => [ 'title', 'editor', 'revisions' ],
			'taxonomies'            => [ 'pattern-groups' ],
			'show_in_graphql'       => false,
		];

		register_post_type( 'custom-pattern', $args );

        register_taxonomy(
            'pattern-groups',
            [ 'custom-pattern' ],
            [
				'hierarchical'      => true,
				'labels'            => [
					'name'              => _x( 'Pattern Groups', 'taxonomy general name' ),
					'singular_name'     => _x( 'Pattern Group', 'taxonomy singular name' ),
					'search_items'      => __( 'Search Pattern Groups' ),
					'all_items'         => __( 'All Pattern Groups' ),
					'parent_item'       => __( 'Parent Pattern Group' ),
					'parent_item_colon' => __( 'Parent Pattern Group:' ),
					'edit_item'         => __( 'Edit Pattern Group' ),
					'update_item'       => __( 'Update Pattern Group' ),
					'add_new_item'      => __( 'Add New Pattern Group' ),
					'new_item_name'     => __( 'New Pattern Group Name' ),
					'menu_name'         => __( 'Pattern Groups' ),
				],
				'show_ui'           => true,
				'show_in_rest'      => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => [ 'slug' => 'pattern-group' ],
			]
        );

		/**
		 * Taxonomy: Related Search Terms.
		 * Allows adding search keywords to patterns.
		 */
        register_taxonomy(
			'pattern-keywords',
			[ 'custom-pattern' ],
			[
				'hierarchical'      => false,
				'labels'            => [
					'name'          => _x( 'Related Search Terms', 'taxonomy general name' ),
					'singular_name' => _x( 'Related Search Term', 'taxonomy singular name' ),
					'search_items'  => __( 'Search Related Search Terms' ),
					'all_items'     => __( 'All Related Search Terms' ),
					'edit_item'     => __( 'Edit Related Search Term' ),
					'view_item'     => __( 'View Related Search Term' ),
					'update_item'   => __( 'Update Related Search Term name' ),
					'add_new_item'  => __( 'Add Related Search Term' ),
					'new_item_name' => __( 'New Related Term name' ),
					'menu_name'     => __( 'Search Related Terms' ),
				],
				'show_ui'           => true,
				'show_in_rest'      => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => [ 'slug' => 'pattern-keyword' ],
			]
        );
	}
}

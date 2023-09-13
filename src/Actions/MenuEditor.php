<?php

namespace Bcgov\Theme\Block\Actions;

/**
 * Registers and manages 'Menu Manager' post type and navigation block for all users.
 *
 * @since 1.2.11
 *
 * @package Bcgov/Theme/Block
 */
class MenuEditor {


    /**
     * Register Custom Menu Manager Post Type.
     *
     * @since 1.2.11
     *
     * @return void
     */
    public function menu_manager_post_type() {
        $labels = [
            'name'               => _x( 'Menu Manager', 'post type general name' ),
            'singular_name'      => _x( 'Menu Manager', 'post type singular name' ),
            'add_new'            => _x( 'Add New', 'menu manager' ),
            'add_new_item'       => __( 'Add New Menu Manager' ),
            'edit_item'          => __( 'Edit Menu Manager' ),
            'new_item'           => __( 'New Menu Manager' ),
            'view_item'          => __( 'View Menu Manager' ),
            'search_items'       => __( 'Search Menu Manager' ),
            'not_found'          => __( 'No menu manager found' ),
            'not_found_in_trash' => __( 'No menu manager found in the Trash' ),
            'parent_item_colon'  => '',
            'menu_name'          => 'Menu Manager',
        ];

        $args = [
            'labels'             => $labels,
            'public'             => false,
            'publicly_queryable' => false,
            'show_in_nav_menus'  => true,
            'show_in_rest'       => true,
            'supports'           => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ],
            'show_ui'            => true,
            'query_var'          => true,
            'rewrite'            => [ 'slug' => 'menu-manager-post' ],
            'menu_position'      => 60,
            'menu_icon'          => 'dashicons-menu',
            'template'           => [
                [
                    'core/navigation',
                ],
            ],
            'capabilities'       => [
                'create_posts' => 'do_not_allow',
                'delete_posts' => 'do_not_allow',
            ],
            'map_meta_cap'       => true,
        ];

        register_post_type( 'menu_manager_post', $args );
    }

    /**
     * Create inital Menu Manager post (and maintain an existing if trashed).
     *
     * @since 1.2.11
     *
     * @return void
     */
    public function create_initial_menu_manager_post() {
        $post_title = 'Manage Site Navigation';

        $post_args = [
            'post_title'     => $post_title,
            'post_status'    => 'publish',
            'post_type'      => 'menu_manager_post',
            'post_content'   => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"},"margin":{"bottom":"3rem"}}},"borderColor":"gray-40","backgroundColor":"background","layout":{"type":"default"}} -->
        <div class="wp-block-group has-border-color has-gray-40-border-color has-background-background-color has-background" style="margin-bottom:3rem;padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:heading {"align":"wide","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"fontSize":"1.25rem"}}} -->
        <h2 class="wp-block-heading alignwide" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:1.25rem">Instructions:</h2>
        <!-- /wp:heading -->
        
        <!-- wp:list {"ordered":true,"style":{"typography":{"fontSize":"1rem"}}} -->
        <ol style="font-size:1rem"><!-- wp:list-item -->
        <li>Click on the Navigation block below to begin editing.</li>
        <!-- /wp:list-item -->
        
        <!-- wp:list-item -->
        <li>Use the Block Inspector to choose the menu you wish to edit. You may choose from any of the available menus or create a new menu if appropriate.</li>
        <!-- /wp:list-item -->
        
        <!-- wp:list-item -->
        <li>Edit the menu and save your changes.</li>
        <!-- /wp:list-item --></ol>
        <!-- /wp:list --></div>
        <!-- /wp:group --><!-- wp:core/navigation {"align":"wide"} /-->',
            'posts_per_page' => 1,
            'template'       => [
                [ 'core/navigation' ],
            ],
            'capabilities'   => [
                'create_posts' => 'do_not_allow',
                'delete_posts' => 'do_not_allow',
            ],
        ];

        // Check if the post doesn't already exist.
        $existing_post = new \WP_Query(
            [
                'post_type'      => 'menu_manager_post',
                'post_title'     => $post_title,
                'post_content'   => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"},"margin":{"bottom":"3rem"}}},"borderColor":"gray-40","backgroundColor":"background","layout":{"type":"default"}} -->
        <div class="wp-block-group has-border-color has-gray-40-border-color has-background-background-color has-background" style="margin-bottom:3rem;padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:heading {"align":"wide","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"fontSize":"1.25rem"}}} -->
        <h2 class="wp-block-heading alignwide" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:1.25rem">Instructions:</h2>
        <!-- /wp:heading -->
        
        <!-- wp:list {"ordered":true,"style":{"typography":{"fontSize":"1rem"}}} -->
        <ol style="font-size:1rem"><!-- wp:list-item -->
        <li>Click on the Navigation block below to begin editing.</li>
        <!-- /wp:list-item -->
        
        <!-- wp:list-item -->
        <li>Use the Block Inspector to choose the menu you wish to edit. You may choose from any of the available menus or create a new menu if appropriate.</li>
        <!-- /wp:list-item -->
        
        <!-- wp:list-item -->
        <li>Edit the menu and save your changes.</li>
        <!-- /wp:list-item --></ol>
        <!-- /wp:list --></div>
        <!-- /wp:group --><!-- wp:core/navigation {"align":"wide"} /-->',
                'posts_per_page' => 1,
                'template'       => [
                    [ 'core/navigation' ],
                ],
                'capabilities'   => [
                    'create_posts' => 'do_not_allow',
                    'delete_posts' => 'do_not_allow',
                ],
            ]
        );

        if ( ! $existing_post->have_posts() ) {
            wp_insert_post( $post_args );
        }

        $this->remove_unused_menu_manager_post_type();

        register_activation_hook( __FILE__, [ $this, 'create_initial_menu_manager_post' ] );
    }

    /**
     * Removes drafts and empties the trash for the 'menu_manager_post' post type.
     *
     * This function retrieves all trashed posts of the specified post type ('menu_manager_post')
     * and permanently deletes them from the database.
     *
     * @since 1.2.11
     *
     * @return void
     */
    public function remove_unused_menu_manager_post_type() {
        $post_type = 'menu_manager_post';

        $trashed_posts = get_posts(
            [
                'post_type'      => $post_type,
                'post_status'    => 'trash',
                'posts_per_page' => -1,
            ]
        );

        $draft_posts = get_posts(
            [
                'post_type'      => $post_type,
                'post_status'    => 'draft',
                'posts_per_page' => -1,
            ]
        );

        if ( $trashed_posts ) {
            foreach ( $trashed_posts as $post ) {
                wp_delete_post( $post->ID, true );
            }
        }

        if ( $draft_posts ) {
            foreach ( $draft_posts as $post ) {
                wp_delete_post( $post->ID, true );
            }
        }
    }

    /**
     * Allow the Editor role to manage navigation menus outside of the Full Site Editor.
     *
     * @since 1.2.11
     */
    public function add_editor_menu_capabilities() {

        $current_user = wp_get_current_user();

        if ( current_user_can( 'editor' ) && ( ! $current_user->caps['administrator'] ) ) {

            $editor_role = get_role( 'editor' );

            $editor_role->add_cap( 'edit_theme_options' );
            $editor_role->add_cap( 'edit_navigation_block' );
            $editor_role->remove_cap( 'edit_nav_menus' );
            $editor_role->remove_cap( 'manage_sites' );
            $editor_role->remove_cap( 'edit_themes' );
            $editor_role->remove_cap( 'manage_options' );
            $editor_role->remove_cap( 'switch_themes' );

        }
    }

    /**
     * Remove Appearance and Tools admin menu items for Editor roles.
     *
     * @since 1.2.11
     */
    public function hide_appearance_menu_for_editor() {

        $current_user = wp_get_current_user();

        if ( current_user_can( 'editor' ) && ( ! $current_user->caps['administrator'] ) ) {
            remove_menu_page( 'themes.php' );
            remove_menu_page( 'tools.php' );
        }
    }

}

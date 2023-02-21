<?php

namespace Bcgov\Theme\Block\Actions;

use Bcgov\Theme\Block\Templates;

/**
 * The PageCustomClass class adds functionality for setting a custom page class for individual pages/posts.
 *
 * - Adds a custom meta box to the page editor for setting a custom page class.
 * - Saves the custom page class meta data for the current page/post.
 * - Adds a custom class to the body tag of the current page/post if one has been set.
 *
 * @since 1.1.2
 *
 * @package Bcgov/Theme/Block
 */
class PageCustomClass {

	/**
	 * Adds a custom meta box to the page editor for setting a custom page class.
	 *
	 * @since 1.1.2
	 * @return void
     */
	public function custom_page_meta_boxes() {
		add_meta_box(
			'custom-page-class',
			'Custom Page Class',
			[ $this, 'custom_page_class_meta_box' ],
			'page',
			'side',
			'default',
			false,
		);
	}

	/**
	 * Output the custom meta box HTML.
	 *
	 * @since 1.1.2
	 * @return void
     */
	public function custom_page_class_meta_box() {
		$class_name = get_post_meta( get_the_ID(), '_custom_page_class', true );
		?>
		<input type="text" name="custom-page-class" id="custom-page-class" class="components-text-control__input" value="<?php echo esc_attr( $class_name ); ?>">
		<?php
		wp_nonce_field( 'custom-page-class-nonce', 'custom-page-class-nonce' );
	}


	/**
	 * Saves the custom page class meta data for the current page/post.
	 *
	 * @since 1.1.2
	 * @param int $post_id The ID of the current page/post being saved.
	 * @return int|void The post ID if the nonce verification fails, or void otherwise.
     */
	public function custom_save_page_meta( $post_id ) {
		// Verify the nonce.
		if ( ! isset( $_POST['custom-page-class-nonce'] ) || ! wp_verify_nonce( $_POST['custom-page-class-nonce'], 'custom-page-class-nonce' ) ) {
			return $post_id;
		}

		if ( isset( $_POST['custom-page-class'] ) ) {
			$class_name = sanitize_text_field( $_POST['custom-page-class'] );
			update_post_meta( $post_id, '_custom_page_class', $class_name );
		}
	}


	/**
	 * Adds a custom class to the body tag of the current page/post if one has been set.
	 *
	 * @since 1.1.2
	 * @param array $classes An array of existing classes for the body tag.
	 * @return array The modified array of classes with the custom class added, if applicable.
     */
	public function add_custom_class_to_body( $classes ) {
		$class_name = get_post_meta( get_the_ID(), '_custom_page_class', true );
		if ( $class_name ) {
			$classes[] = $class_name;
		}
		return $classes;
	}
}

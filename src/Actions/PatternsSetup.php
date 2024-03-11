<?php

namespace Bcgov\Theme\Block\Actions;

/**
 * BCGov Blocks Theme: Block Patterns.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
class PatternsSetup {

	/**
	 * BCGov Blocks Theme: Registers block patterns and categories.
	 *
	 * @since 1.0.0
	 *
	 * @package Bcgov/Theme/Block
	 */
	public function bcgov_blocks_theme_register_block_patterns() {

		foreach ( $this->get_block_pattern_categories() as $name => $properties ) {
			register_block_pattern_category( $name, $properties );
		}

		if ( function_exists( 'register_block_pattern' ) ) {

			// Register in-theme "global" patterns.
			foreach ( $this->get_block_patterns() as $block_pattern ) {
				register_block_pattern(
					'bcgov-wordpress-block-theme/' . $block_pattern,
					require get_template_directory() . '/inc/core/patterns/' . $block_pattern . '.php'
				);
			}

			// The loop below will setup the global $post with the post it finds, subsequently the call to wp_reset_postdata() will NOT reset the global $post back to null because
			// https://developer.wordpress.org/reference/classes/wp_query/reset_postdata/ shows that it only resets the $post if !empty(), and null is not empty, so the global $post will never get reset back to null, we must do it.
			// if we dont, there is an issue with get_post( 0 ) that will have it return the global $post which is of course wrong; media upload makes use of get_post(0) which causes the media to be incorrectly uploaded to the wrong folder if a global $post is set.
			global $post;
			$global_post_was_null = ( null === $post );  // Limit our code to only if the global post was null, otherwise make sure we dont touch it and let WP handle resetting it later below.

			// Register custom post type patterns.
			$args = array(
				'post_type'      => 'custom-pattern',
				'posts_per_page' => -1,
				'orderby'        => 'name',
			);

			$query = new \WP_Query( $args );

			if ( ! taxonomy_exists( 'pattern-groups' ) ) {
				register_taxonomy( 'pattern-groups', 'custom-pattern', array( 'label' => 'Pattern Groups' ) );
			}

			if ( ! taxonomy_exists( 'pattern-keywords' ) ) {
				register_taxonomy( 'pattern-keywords', 'custom-pattern', array( 'label' => 'Related Search Terms' ) );
			}

			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();

					$id                 = get_the_ID();
					$title              = get_the_title();
					$categories         = get_the_terms( $id, 'pattern-groups' );
					$search_keywords    = get_terms(
						[
							'taxonomy'   => 'pattern-keywords',
							'hide_empty' => false,
						]
					);
					$content            = get_the_content();
					$block_pattern_slug = get_post_field( 'post_name', get_post() );
					$keywords           = [];

					if ( ! empty( $categories ) ) {
						// Register patterns.
						foreach ( $categories as $category ) {
							$block_pattern_name = 'bcgov_blocks_theme-' . $category->slug;

							if ( ! \WP_Block_Patterns_Registry::get_instance()->is_registered( 'bcgov_blocks_theme-' . $category->slug ) ) {
								register_block_pattern_category(
									'bcgov_blocks_theme-' . $category->slug,
									[
										'label' => trim(
											get_term_parents_list(
												$category->term_id,
												'pattern-groups',
												[
													'link' => false,
													'separator' => '//',
												]
											),
											'/'
										),
									]
								);
							}

							if ( ! empty( $search_keywords ) ) {
								foreach ( $search_keywords as $keyword ) {
									$keywords[] = $keyword->name;
								}
							}

							register_block_pattern(
								'bcgov-wordpress-block-theme/' . $block_pattern_slug,
								[
									/* translators: %s: pattern title */
									'title'      => 'bcgov_blocks_theme ' . $title,
									'categories' => [ 'bcgov_blocks_theme-' . $category->slug ],
									'keywords'   => $keywords,
									'content'    => $content,
								]
							);
						}
					}
				}

				if ( $global_post_was_null ) {  // Global $post was null, lets put it back (wp_reset_postdata() wont put back null global $post).
					$post = null; //phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited

				} else {  // There was a global post before we ran, let WP set it back.
					wp_reset_postdata();
				}
			}
		}
	}

	/**
	 * Gets the block pattern categories depending on options and filters.
	 *
	 * @return array
	 */
	public function get_block_pattern_categories(): array {
		/**
		 * BCGov Blocks Theme general use patterns.
		 *
		 * Initialises pattern categories specific to the theme.
		 *
		 * @since 1.0.0
		 *
		 * @package Bcgov/Theme/Block
		 */

		 $block_pattern_categories = [
			 'bcgov-blocks-theme-general'       => [ 'label' => __( 'BCGov: General', 'bcgov_blocks_theme' ) ],
			 'bcgov-blocks-theme-header-footer' => [ 'label' => __( 'BCGov: Header/Footer', 'bcgov_blocks_theme' ) ],
			 'bcgov-blocks-theme-page-layouts'  => [ 'label' => __( 'BCGov: Page Layouts', 'bcgov_blocks_theme' ) ],
			 'bcgov-blocks-theme-query'         => [ 'label' => __( 'BCGov: Post Query', 'bcgov_blocks_theme' ) ],
			 'bcgov-blocks-theme-alpha-v3'      => [ 'label' => __( 'BCGov: Alpha V3', 'bcgov_blocks_theme' ) ],
		 ];

		 /*
		 * CleanBC site specific pattern categories.
		 */
		 if ( \Bcgov\Theme\Block\OPTIONAL || 'true' === get_option( 'enable_all_styles' ) ) {
			 $cleanbc_block_pattern_categories = [
				 'optional-patterns-general' => [ 'label' => __( 'Optional: General', 'bcgov_blocks_theme' ) ],
				 'optional-patterns-banners' => [ 'label' => __( 'Optional: Banners', 'bcgov_blocks_theme' ) ],
			 ];
			 $block_pattern_categories         = array_merge( $block_pattern_categories, $cleanbc_block_pattern_categories );

		 }

		 /**
		  * BCGov Blocks Theme: Filters the theme block pattern categories.
		  *
		  * Site specific patterns: use the project identifier as part of the naming.
		  * This is reflected in the /inc/core/patterns/[project]/[pattern-name] directory.
		  * Eg: for CleanBC patterns – 'cleanbc/header'.
		  *
		  * @since 1.0.0
		  *
		  * @package Bcgov/Theme/Block
		  *
		  * @param array[] $block_pattern_categories {
		  * An associative array of block pattern categories, keyed by category name.
		  *
		  *    @type array[] $properties {
		  *        Array of block category properties.
		  *
		  *        @type string $label A human-readable label for the pattern category.
		  *    }
		  * }
		  */
		 return apply_filters( 'bcgov_blocks_theme_block_pattern_categories', $block_pattern_categories );
	}

	/**
	 * Gets the block pattern categories.
	 *
	 * @return array
	 */
	public function get_block_patterns(): array {
		$block_patterns = [

			/*
			* BCGov default patterns.
			*/
			// Header patterns.
			'header-default',

			// Footer patterns.
			'footer-default',

			// General patterns: not site specific.
			'bcgov-2x2-picture-and-text-grid',
			'bcgov-accordion-with-media-text',
			'bcgov-accordion-with-tables',
			'bcgov-alpha3-1x3-call-to-action',
			'bcgov-alpha3-2x2-descriptive-links',
			'bcgov-alpha3-2x3-instructions',
			'bcgov-alpha3-3x3-questions-answers',
			'bcgov-alpha3-front-page',
			'bcgov-alpha3-heading-1',
			'bcgov-alpha3-heading-2',
			'bcgov-alpha3-hero-image',
			'bcgov-alpha3-large-call-to-action',
			'bcgov-alpha3-title-and-links-video-bkgd',
			'bcgov-alternating-cards',
			'bcgov-card-image-overlay',
			'bcgov-card-image-under-2-up',
			'bcgov-card-with-two-images',
			'bcgov-cards-portrait-3-up',
			'bcgov-detail-card-with-icons',
			'bcgov-general-banner',
			'bcgov-hero-banner',
			'bcgov-long-card',
			'bcgov-quote',
			'bcgov-small-quote-image',
			'bcgov-sequence-steps',
			'bcgov-story-with-dark-bg',
			'general-breadcrumb-nav',
			'general-hero',
			'query-grid',

			// Full page patterns.
			'bcgov-page-layout-example',
		];

		/*
		* Load CleanBC site patterns for CleanBC or sites enabling all styles and patterns.
		*/
		if ( \Bcgov\Theme\Block\OPTIONAL || 'true' === get_option( 'enable_all_styles' ) ) {
			// CleanBC Page Banners (and footers) patterns.
			$block_patterns[] = 'optional/banners/optional-info-cover-banner';
			$block_patterns[] = 'optional/banners/optional-landing-cover-banner';
			$block_patterns[] = 'optional/banners/optional-level-3-dark-banner';
			$block_patterns[] = 'optional/banners/optional-level-4-light-banner';
			$block_patterns[] = 'optional/banners/optional-on-this-page';
			$block_patterns[] = 'optional/banners/optional-scroll-link-banner';

			// CleanBC general patterns.
			$block_patterns[] = 'optional/general/optional-advisory-tag';
			$block_patterns[] = 'optional/general/optional-alternating-home-cards';
			$block_patterns[] = 'optional/general/optional-four-up-cover-card-feature';
			$block_patterns[] = 'optional/general/optional-full-width-constrained-bordered-section';
			$block_patterns[] = 'optional/general/optional-full-width-constrained-floating-section';
			$block_patterns[] = 'optional/general/optional-full-width-constrained-section';
			$block_patterns[] = 'optional/general/optional-graph-card-feature';
			$block_patterns[] = 'optional/general/optional-hazards-section';
			$block_patterns[] = 'optional/general/optional-in-page-cloud-banner';
			$block_patterns[] = 'optional/general/optional-in-page-impact-banner';
			$block_patterns[] = 'optional/general/optional-in-page-level-4-top-banner';
			$block_patterns[] = 'optional/general/optional-in-page-sections-sector-cards';
			$block_patterns[] = 'optional/general/optional-in-page-strategies-banner';
			$block_patterns[] = 'optional/general/optional-small-three-up-card-feature';
			$block_patterns[] = 'optional/general/optional-info-cards';
			$block_patterns[] = 'optional/general/optional-three-up-card-feature';
			$block_patterns[] = 'optional/general/optional-two-up-card-feature-wide';
			$block_patterns[] = 'optional/general/optional-two-up-card-feature';
			$block_patterns[] = 'optional/general/optional-video-feature';
			$block_patterns[] = 'optional/general/optional-warning-section';
		}

		/**
		 * BCGov Blocks Theme: Filters the theme block patterns.
		 *
		 * @since 1.0.0
		 *
		 * @package Bcgov/Theme/Block
		 *
		 * @param $block_patterns array List of block patterns by name.
		 */
		return apply_filters( 'bcgov_blocks_theme_block_patterns', $block_patterns );
	}
}

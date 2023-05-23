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

			wp_reset_postdata();
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
		 ];

		 /*
		 * CleanBC site specific pattern categories.
		 */
		 if ( \Bcgov\Theme\Block\CLEANBC || 'true' === get_option( 'enable_all_styles' ) ) {
			 $cleanbc_block_pattern_categories = [
				 'cleanbc-patterns-general'      => [ 'label' => __( 'CleanBC: General', 'bcgov_blocks_theme' ) ],
				 'cleanbc-patterns-banners'      => [ 'label' => __( 'CleanBC: Banners', 'bcgov_blocks_theme' ) ],
				 'cleanbc-patterns-page-layouts' => [ 'label' => __( 'CleanBC: Page Layouts', 'bcgov_blocks_theme' ) ],
				 'cleanbc-patterns-query'        => [ 'label' => __( 'CleanBC: Post Query', 'bcgov_blocks_theme' ) ],
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
			'bcgov-accordion-with-media-text',
			'bcgov-accordion-with-tables',
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
			'general-breadcrumb-nav',
			'general-hero',
			'query-grid',

			// Full page patterns.
			'bcgov-page-layout-example',
		];

		/*
		* Load CleanBC site patterns for CleanBC or sites enabling all styles and patterns.
		*/
		if ( \Bcgov\Theme\Block\CLEANBC || 'true' === get_option( 'enable_all_styles' ) ) {
			// CleanBC Page Banners (and footers) patterns.
			$block_patterns[] = 'cleanbc/banners/cleanbc-info-cover-banner';
			$block_patterns[] = 'cleanbc/banners/cleanbc-landing-cover-banner';
			$block_patterns[] = 'cleanbc/banners/cleanbc-level-3-dark-banner';
			$block_patterns[] = 'cleanbc/banners/cleanbc-level-4-light-banner';
			$block_patterns[] = 'cleanbc/banners/cleanbc-on-this-page';
			$block_patterns[] = 'cleanbc/banners/cleanbc-scroll-link-banner';

			// CleanBC general patterns.
			$block_patterns[] = 'cleanbc/general/cleanbc-advisory-tag';
			$block_patterns[] = 'cleanbc/general/cleanbc-alternating-home-cards';
			$block_patterns[] = 'cleanbc/general/cleanbc-four-up-cover-card-feature';
			$block_patterns[] = 'cleanbc/general/cleanbc-full-width-constrained-bordered-section';
			$block_patterns[] = 'cleanbc/general/cleanbc-full-width-constrained-floating-section';
			$block_patterns[] = 'cleanbc/general/cleanbc-full-width-constrained-section';
			$block_patterns[] = 'cleanbc/general/cleanbc-graph-card-feature';
			$block_patterns[] = 'cleanbc/general/cleanbc-hazards-section';
			$block_patterns[] = 'cleanbc/general/cleanbc-in-page-cloud-banner';
			$block_patterns[] = 'cleanbc/general/cleanbc-in-page-impact-banner';
			$block_patterns[] = 'cleanbc/general/cleanbc-in-page-level-4-top-banner';
			$block_patterns[] = 'cleanbc/general/cleanbc-in-page-sections-sector-cards';
			$block_patterns[] = 'cleanbc/general/cleanbc-in-page-strategies-banner';
			$block_patterns[] = 'cleanbc/general/cleanbc-small-three-up-card-feature';
			$block_patterns[] = 'cleanbc/general/cleanbc-info-cards';
			$block_patterns[] = 'cleanbc/general/cleanbc-three-up-card-feature';
			$block_patterns[] = 'cleanbc/general/cleanbc-two-up-card-feature-wide';
			$block_patterns[] = 'cleanbc/general/cleanbc-two-up-card-feature';
			$block_patterns[] = 'cleanbc/general/cleanbc-video-feature';
			$block_patterns[] = 'cleanbc/general/cleanbc-warning-section';
		}
		// Load only for CleanBC patterns.
		if ( \Bcgov\Theme\Block\CLEANBC ) {
			$block_patterns[] = 'cleanbc/active-site-only/cleanbc-actions-toggle-query';
			$block_patterns[] = 'cleanbc/active-site-only/cleanbc-dual-warning-section';
			$block_patterns[] = 'cleanbc/active-site-only/cleanbc-footer-01';
			$block_patterns[] = 'cleanbc/active-site-only/cleanbc-three-up-icon-items';
			$block_patterns[] = 'cleanbc/active-site-only/cleanbc-programs';
			// CleanBC query patterns.
			$block_patterns[] = 'cleanbc/active-site-only/cleanbc-actions-query';
			$block_patterns[] = 'cleanbc/active-site-only/cleanbc-projects-accordion-query';
			// CleanBC full page patterns.
			$block_patterns[] = 'cleanbc/active-site-only/cleanbc-page-layout-homepage';
			$block_patterns[] = 'cleanbc/active-site-only/cleanbc-page-layout-impacts';
			$block_patterns[] = 'cleanbc/active-site-only/cleanbc-page-layout-level-3';
			$block_patterns[] = 'cleanbc/active-site-only/cleanbc-page-layout-level-4';
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

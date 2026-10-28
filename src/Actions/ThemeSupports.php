<?php

namespace Bcgov\Theme\Block\Actions;

/**
 * Sets up theme supports.
 *
 * @since 1.1.1
 *
 * @package Bcgov/Theme/Block
 */
class ThemeSupports {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme(): void {

		load_theme_textdomain( 'bcgov-block-theme', get_template_directory() . '/languages' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add alignment option to toolbar options.
		add_theme_support( 'align-wide' );

		// Add support for custom logos.
		add_theme_support( 'custom-logo' );

		// Enqueue editor styles.
		add_editor_style(
			[
				'./assets/css/blocks.css',
			]
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Adds excerpt support to pages.
		add_post_type_support( 'page', 'excerpt' );
	}


	/**
	 * Filter the results of get_custom_logo() if no custom logo has been chosen by injecting a default image.
	 * <-- wp:site-logo --> uses this result internally, and can be easily used with or without choosing a custom logo.
	 * Checks for Alpha v3 tokens to determine which default logo variation to use.
	 *
	 * @param string $html Markup from original get_custom_logo call.
	 * @since 1.0.0
	 *
	 * @return string Filtered HTML containing the custom logo or a default image based on site settings.
	 */
	public function bcgov_block_theme_custom_logo( $html ) {
		// If the site owner has selected a site logo using the theme customizer, use it.
		if ( has_custom_logo() ) {
			return $html;
		}

        $variations = wp_get_global_stylesheet( [ 'variables' ] );

		$image = '<img class="bcgov-logo" src="' . get_stylesheet_directory_uri();

		// If "--bcds" is present Alpha v3 styles have been set.
		if ( strpos( $variations, '--bcds' ) !== false ) {
			$image .= '/assets/images/bc_gov_logo_reverse.svg">';
		} else {
			$image .= '/assets/images/bc_gov_logo_transparent.svg">';
		}

		$html = sprintf(
			'<a href="%1$s" class="custom-logo-link" rel="home"%2$s>%3$s</a>',
			esc_url( home_url( '/' ) ),
			is_front_page() && ! is_paged() ? ' aria-current="page"' : '',
			$image
		);

		return $html;
	}

	/**
	 * Hook to register block style variations for alpha gov headings, to replace multi-markup.
	 *
	 * @return void
	 */
	public function bcgov_block_theme_register_block_styles(): void {
		register_block_style(
            'core/heading',
            array(
				'name'         => 'alphagov-heading',
				'label'        => __( 'AlphaGov' ),
				'inline_style' => '
			.wp-block-heading.is-style-alphagov-heading {
				position: relative;
				margin-top: 3rem;
				margin-bottom: 1.5rem;
			}
			.wp-block-heading.is-style-alphagov-heading:before {
				background-color: var(--wp--preset--color--heading-line);
				position: absolute;
				content: "";
				left: 0;
				width: 36px;
				height: 4px;
				top: -10px;
			}',
            )
        );
	}

	/**
	 * Allow editors to use iframes by adding iframe attributes to allowed tags.
	 *
	 * @param array $allowed_tags
	 * @return array $allowed_tags, with the 'iframe' added if the current user can edit others' posts.
	 */
	public function allow_editors_to_use_iframes( $allowed_tags ) {
		if ( current_user_can( 'edit_posts' ) ) {
			$allowed_tags['iframe'] = [
				'width'          => true,
				'height'         => true,
				'frameborder'    => true,
				'scrolling'      => true,
				'style'          => true,
				'src'            => true,
				'allow'          => true,
				'referrerpolicy' => true,
			];
		}
		return $allowed_tags;
	}
}

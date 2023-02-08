<?php
/**
 * Initialization of theme.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

namespace Bcgov\Theme\Block;

/**
 * Setup class setups up theme.
 */
class Setup {
    /**
     * Constructor.
     */
    public function __construct() {
        $this->hook();
    }

    /**
     * Sets up hooks for theme.
     *
     * @return void
     */
    private function hook() {
		add_action( 'admin_init', [ $this, 'bcgov_block_theme_custom_settings' ] );
		add_action( 'init', [ $this, 'bcgov_block_theme_register_custom_pattern' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'bcgov_block_theme_enqueue_admin_scripts' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'bcgov_block_theme_enqueue_scripts' ] );
		add_action( 'after_setup_theme', [ $this, 'bcgov_block_theme' ] );
		add_action( 'admin_notices', [ $this, 'bcgov_block_theme_dependencies' ] );
		add_action( 'admin_menu', [ $this, 'bcgov_block_theme_menu' ] );
		add_action( 'acf/init', [ $this, 'bcgov_block_theme_acf_init_block_types' ] );
		add_filter( 'wp_headers', [ $this, 'bcgov_block_theme_wp_headers' ] );
		add_filter( 'get_custom_logo', [ $this, 'bcgov_block_theme_custom_logo' ] );
		remove_theme_support( 'core-block-patterns' );

    }

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

		/**
		 * Constants to enable/disable specific site features.
		 *
		 * @since 1.0.3
		 */
		if ( 'cleanbc' === get_option( 'active_site_pattern_styles' ) ) {
			define( 'Bcgov\Theme\Block\CLEANBC', true );
		} else {
			define( 'Bcgov\Theme\Block\CLEANBC', false );
		}
	}

 	/**
     * Enqueue JS variables.
     *
     * @example Sets array values for use in globally scoped JS.
     * @return array
     */
    public function set_javascript_variables() {

		$javascript_variables = [
			'domain'                  => home_url(),
			'siteName'                => esc_attr( get_option( 'active_site_pattern_styles' ) ),
			'templateDir'             => get_template_directory_uri(),
			'headerEffect'            => esc_attr( get_option( 'header_effect' ) ),
			'allSiteStyles'           => esc_attr( get_option( 'enable_all_styles' ) ),
			'customBodyClass'         => esc_attr( get_option( 'custom_body_class' ) ),
			'noticeEnabled'           => esc_attr( get_option( 'notice_enabled' ) ),
			'noticeHomepageOnly'      => esc_attr( get_option( 'notice_homepage_only' ) ),
			'noticeLabelBold'         => esc_attr( get_option( 'notice_label_bold' ) ),
			'noticeLabelBig'          => esc_attr( get_option( 'notice_label_big' ) ),
			'noticeStatus'            => esc_attr( get_option( 'notice_status' ) ),
			'noticeContent'           => esc_attr( get_option( 'notice_content' ) ),
			'noticeButtonLabel'       => esc_attr( get_option( 'notice_button_label' ) ),
			'noticeButtonEnabled'     => esc_attr( get_option( 'notice_button_enabled' ) ),
			'noticeButtonAriaLabel'   => esc_attr( get_option( 'notice_button_aria_label' ) ),
			'noticeButtonLink'        => esc_attr( get_option( 'notice_button_link' ) ),
			'noticeButtonUtmCampaign' => esc_attr( get_option( 'notice_button_utm_campaign' ) ),
			'networkBannerEnabledNet' => esc_attr( get_site_option( 'bcgov_notification_banner_enable_network' ) ),
			'networkBannerType'       => esc_attr( get_site_option( 'bcgov_notification_banner_banner_type' ) ),
			'networkBannerContent'    => esc_html( get_site_option( 'bcgov_notification_banner_banner_content' ) ),
			'networkBannerUtm'        => esc_attr( get_site_option( 'bcgov_notification_banner_utm_campaign' ) ),
		];

		get_site_option( 'bcgov_notification_banner_enable_network' );
		get_site_option( 'bcgov_notification_banner_enable_banner' );
		get_site_option( 'bcgov_notification_banner_banner_type' );
		get_site_option( 'bcgov_notification_banner_banner_content' );
		get_site_option( 'bcgov_notification_banner_utm_campaign' );

		return $javascript_variables;
	}

	/**
	 * Enqueue scripts and styles for public website.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_enqueue_scripts(): void {
		$public_assets  = require_once get_template_directory() . '/dist/public.asset.php';
		$font_assets    = require_once get_template_directory() . '/dist/font.asset.php';
		$public_version = $public_assets['version'] ?? wp_get_theme()->get( 'Version' );
		$font_version   = $font_assets['version'] ?? wp_get_theme()->get( 'Version' );

		wp_enqueue_script(
			'bcgov-block-theme-public',
			get_template_directory_uri() . '/dist/public.js',
			$public_assets['dependencies'] ?? [],
			$public_version,
			true
		);

		$javascript_variables = $this->set_javascript_variables();
		wp_localize_script( 'bcgov-block-theme-public', 'site', $javascript_variables );

		wp_enqueue_style(
			'bcgov-block-theme-public',
			get_template_directory_uri() . '/dist/public.css',
			[],
			$public_version
		);
		wp_enqueue_style(
			'bcgov-block-theme-font',
			get_template_directory_uri() . '/dist/font.css',
			[],
			$font_version
		);
	}

	/**
	 * Enqueue scripts and styles for admin.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_enqueue_admin_scripts(): void {
		$admin_assets  = get_template_directory_uri() . '/dist/admin.asset.php';
		$admin_version = $admin_assets['version'] ?? wp_get_theme()->get( 'Version' );

		wp_enqueue_script(
			'bcgov-block-theme-admin',
			get_template_directory_uri() . '/dist/admin.js',
			$admin_assets['dependencies'] ?? [],
			$admin_version,
			true
		);

		$javascript_variables = $this->set_javascript_variables();

		wp_localize_script( 'bcgov-block-theme-admin', 'site', $javascript_variables );

		wp_enqueue_script(
			'bcgov-blocks-manager',
			get_template_directory_uri() . '/inc/core/theme-blocks-allow-list.js',
			[ 'wp-blocks', 'wp-dom' ],
			filemtime( get_template_directory() . '/inc/core/theme-blocks-allow-list.js' ),
			true
		);

		wp_localize_script(
			'bcgov-blocks-manager',
			'postData',
			[
				'postType' => get_post_type( get_the_id() ),
				'postId'   => get_the_id(),
			]
		);

		wp_enqueue_style(
			'bcgov-block-theme-admin',
			get_template_directory_uri() . '/dist/admin.css',
			[],
			$admin_version
		);
	}

	/**
	 * Filter the results of get_custom_logo() if no custom logo has been chosen by injecting a default image.
	 * <-- wp:site-logo --> uses this result internally, and so can be easily used with or without choosing a custom logo.
	 *
	 * @param string $html Markup from original get_custom_logo call.
	 * @since 1.0.0
	 *
	 * @return string
	 */
	public function bcgov_block_theme_custom_logo( $html ) {
		// If the site owner has selected a site logo using the theme customizer, use it.
		if ( has_custom_logo() ) {
			return $html;
		}
		// Otherwise, inject a default logo markup for use in wp-site-logo blocks.
		$image = '<img class="bcgov-logo" src="' . get_stylesheet_directory_uri() . '/assets/images/bc_gov_logo_transparent.svg">';
		$html  = sprintf(
			'<a href="%1$s" class="custom-logo-link" rel="home"%2$s>%3$s</a>',
			esc_url( home_url( '/' ) ),
			is_front_page() && ! is_paged() ? ' aria-current="page"' : '',
			$image
		);
		return $html;
	}

	/**
	 * Sets admin notice for missing plugin dependencies.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_dependencies() {
		// Checks for AIOSEO breadcrumb specific function.
		$message_intro = __( 'Missing: The BCGov Block Theme needs the', 'bcgov_block_theme' );

		if ( ! function_exists( 'aioseo_breadcrumbs' ) ) {
			$plugin        = 'All in One SEO';
			$className     = 'notice-warning notice';
			$message_extro = __( 'plugin activated to enable to page specific breadcrumb navigation.', 'bcgov_block_theme' );

			printf( '<div class="%1$s"><p>%2$s <strong>%3$s</strong> %4$s</p></div>', esc_attr( $className ), esc_html( $message_intro ), esc_html( $plugin ), esc_html( $message_extro ) );
		}

		if ( ! function_exists( 'acf_register_block_type' ) ) {
			$plugin        = 'Advanced Custom Fields PRO';
			$className     = 'error';
			$message_extro = __( 'plugin activated to enable theme specific blocks.', 'bcgov_block_theme' );

			printf( '<div class="%1$s"><p>%2$s <strong>%3$s</strong> %4$s</p></div>', esc_attr( $className ), esc_html( $message_intro ), esc_html( $plugin ), esc_html( $message_extro ) );
		}

		if ( ! function_exists( 'cptui_loaded' ) ) {
			$plugin        = 'Custom Post Type UI';
			$className     = 'error';
			$message_extro = __( 'plugin activated to enable to custom post types in order to function properly.', 'bcgov_block_theme' );

			printf( '<div class="%1$s"><p>%2$s <strong>%3$s</strong> %4$s</p></div>', esc_attr( $className ), esc_html( $message_intro ), esc_html( $plugin ), esc_html( $message_extro ) );
		}
	}

	/**
	 * BCGov Blocks Theme: Add theme page to the admin mmenu.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_menu() {

		add_theme_page(
			__( 'Using BCGov Block Theme', 'bcgov-block-theme' ),
			__( 'Using the BCGov Block Theme', 'bcgov-block-theme' ),
			'edit_theme_options',
			'bcgov-block-theme-docs',
			[ $this, 'bcgov_block_theme_documentation_display' ]
		);

		add_theme_page(
			__( 'BCGov Block Theme Options', 'bcgov-block-theme' ),
			__( 'Theme Options', 'bcgov-block-theme' ),
			'edit_theme_options',
			'bcgov-block-theme-options',
			[ $this, 'bcgov_block_theme_options_display' ]
		);

		add_theme_page(
			__( 'BCGov Block Notifications Banner', 'bcgov-block-theme' ),
			__( 'Notifications Banner', 'bcgov-block-theme' ),
			'edit_theme_options',
			'bcgov-block-theme-notification-banner',
			[ $this, 'bcgov_block_theme_notification_banner_display' ]
		);

	}

	/**
	 * Display BCGov Block Theme features and instructions page.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_documentation_display() {

		$theme = wp_get_theme();

		if ( is_child_theme() ) {
			$theme = wp_get_theme()->parent();
		}

		require_once get_template_directory() . '/inc/core/templates/theme-info-page.php';
	}

	/**
	 * Display BCGov Block Theme options page.
	 *
	 * @since 1.0.3
	 *
	 * @return void
	 */
	public function bcgov_block_theme_options_display() {

		$theme = wp_get_theme();

		if ( is_child_theme() ) {
			$theme = wp_get_theme()->parent();
		}

		require_once get_template_directory() . '/inc/core/templates/theme-options-page.php';

	}

	/**
	 * Display BCGov Block Theme Notification Banner settings page.
	 *
	 * @since 1.1.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_notification_banner_display() {

		$theme = wp_get_theme();

		if ( is_child_theme() ) {
			$theme = wp_get_theme()->parent();
		}

		require_once get_template_directory() . '/inc/core/templates/theme-notification-banner.php';

	}


	/**
	 * Register Custom Settings and populate with default values.
	 *
	 * @since 1.0.3
	 *
	 * @return void
	 */
	public function bcgov_block_theme_custom_settings() {

		// Editable CSP Settings.
		$this->bcgov_block_theme_setting_to_register(
            'bcgov-block-theme-settings-group',
            [
				'active_site_pattern_styles',
				'header_effect',
				'enable_all_styles',
				'custom_body_class',
				'custom_csp_defaultsrc',
				'custom_csp_scriptsrc',
				'custom_csp_stylesrc',
				'custom_csp_connectsrc',
				'custom_csp_fontsrc',
				'custom_csp_imgsrc',
				'custom_csp_mediasrc',
				'custom_csp_framesrc',
			]
        );

		// Notifications Banner Settings.
		$this->bcgov_block_theme_setting_to_register(
            'bcgov-block-theme-notification-banner-group',
            [
				'notice_enabled',
				'notice_homepage_only',
				'notice_label_bold',
				'notice_label_big',
				'notice_status',
				'notice_content',
				'notice_button_label',
				'notice_button_enabled',
				'notice_button_aria_label',
				'notice_button_link',
				'notice_button_utm_campaign',
			]
        );

		/*
		* Initial settings to maintain configuration of CleanBC in production
		* these will change to default BCGov configuration after v1.0.3.
		*/
		if ( ! get_option( 'active_site_pattern_styles' ) ) {
			update_option( 'enable_all_styles', 'bcgov' );
		}

		if ( ! get_option( 'header_effect' ) ) {
			update_option( 'header_effect', 'hides' ); // will be: fixed.
		}

		if ( ! get_option( 'enable_all_styles' ) ) {
			update_option( 'enable_all_styles', 'false' ); // will be: false.
		}

		if ( ! get_option( 'custom_body_class' ) ) {
			update_option( 'custom_body_class', 'default' );
		}

	}

	/**
	 * Registers settings for Theme and Site Settings
	 *
	 * @since 1.1.0
	 *
	 * @param string $group    The group name for the settings.
	 * @param array  $settings The settings to be registered.
	 *
	 * @return void
	 */
	public function bcgov_block_theme_setting_to_register( $group, $settings ): void {

		if ( function_exists( 'register_setting' ) ) {

			foreach ( $settings as $setting ) {
				register_setting( $group, $setting );
			}
		}
	}

	/**
	 * Register ACF Pro Blocks.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function bcgov_block_theme_acf_init_block_types() {

		// Check function exists.
		if ( function_exists( 'acf_register_block_type' ) ) {

			// Load blocks only meant for CleanBC.
			if ( CLEANBC ) {
				require_once get_template_directory() . '/inc/core/acf_blocks/sites/cleanbc/cleanbc-block-loader.php';
			}
		}
	}

	/**
     * WordPress filter hook for headers.
     *
     * @param array $headers  An array of headers.
     * @return array
     */
    public function bcgov_block_theme_wp_headers( $headers ) {
        $csp         = '';
        $csp_initial = [
            'upgrade-insecure-requests',
            'default-src'     => "'self' gov.bc.ca *.gov.bc.ca data: *.twitter.com *.twimg.com " . ( esc_attr( get_option( 'custom_csp_defaultsrc' ) ) ?? '' ),
            'script-src'      => "'self' 'unsafe-inline' 'unsafe-eval' gov.bc.ca *.gov.bc.ca *.twimg.com *.twitter.com *.flickr.com " . ( esc_attr( get_option( 'custom_csp_scriptsrc' ) ) ?? '' ),
            'style-src'       => "'self' 'unsafe-inline' *.twitter.com *.twimg.com" . ( esc_attr( get_option( 'custom_csp_stylesrc' ) ) ?? '' ),
            'connect-src'     => "'self' gov.bc.ca  *.gov.bc.ca *.flickr.com " . ( esc_attr( get_option( 'custom_csp_connectsrc' ) ) ?? '' ),
            'font-src'        => "'self' 'unsafe-inline' data: " . ( esc_attr( get_option( 'custom_csp_fontsrc' ) ) ?? '' ),
            'img-src'         => "'self' data: gov.bc.ca *.gov.bc.ca *.twimg.com *.twitter.com *.staticflickr.com " . ( esc_attr( get_option( 'custom_csp_imgsrc' ) ) ?? '' ),
            'media-src'       => "'self' 'unsafe-inline' " . ( esc_attr( get_option( 'custom_csp_mediasrc' ) ) ?? '' ),
            'frame-src'       => "'self' gov.bc.ca *.gov.bc.ca *.twitter.com youtube.com *.youtube.com youtu.be " . ( esc_attr( get_option( 'custom_csp_framesrc' ) ) ?? '' ),
            'frame-ancestors' => "'self'",
        ];

        $csp_initial = apply_filters( 'bcgov_block_theme_wp_headers_csp', $csp_initial );
        foreach ( $csp_initial as $directive => $rule ) {
            $csp .= sprintf(
                ' %s %s; ',
                is_string( $directive ) ? $directive : '',
                $rule
            );
        }
        $headers['Content-Security-Policy']   = trim( $csp );
        $headers['Strict-Transport-Security'] = 'max-age=10886400; preload';
        return $headers;
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


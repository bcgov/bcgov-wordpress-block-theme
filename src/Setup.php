<?php

namespace Bcgov\Theme\Block;

use Bcgov\Theme\Block\Actions\{
    ThemeSupports,
    AdminMenus,
    AdminOptions,
	BcgovSettings,
    Dependencies,
    RegisterCustomPatternsPostType,
    EnqueueAndInject,
    ExportOptions,
    PatternsSetup,
    PageCustomClass
};

use Bcgov\Theme\Block\Filters\{
    ButtonEnhanced,
    ImageEnhanced,
    MediaTextEnhanced,
    SiteLogoEnhanced
};


/**
 * Initialization and setup of theme utilising an auto-loader.
 *
 * @since 1.1.1
 *
 * @package Bcgov/Theme/Block
 */
class Setup {
    /**
     * Constructor.
     */
    public function __construct() {
		
		/* DIGMOD PATCH */
		$digimod_v2_templates = ['bcgov-wordpress-block-theme//single-common-component','bcgov-wordpress-block-theme//single-cop'];
		$digimod_v2_urls = [
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/b-c-s-digital-plan/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/digital-framework-progress/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/forms-surveys/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/case-studies/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/case-study-energy-mines-and-digital-trust/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/case-study-medical-services-plan/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/case-study-mines-digital-service/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/case-study-nutrient-management-calculator/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/common-components/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/communities/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/about/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/copyright/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/disclaimer/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/privacy/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/home/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/learning/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/low-touch-saas/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/policies-and-standards/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/policies-and-standards/digital-code-of-practice/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/policies-and-standards/digital-code-of-practice/build-diverse-teams-internal-capacity/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/policies-and-standards/digital-code-of-practice/continuously-learn-improve/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/policies-and-standards/digital-code-of-practice/design-with-people/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/policies-and-standards/digital-code-of-practice/embed-inclusion/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/policies-and-standards/digital-code-of-practice/express-cultural-historical-awareness-respect/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/policies-and-standards/digital-code-of-practice/integrate-ethics/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/policies-and-standards/digital-code-of-practice/manage-risks-proportionately/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/policies-and-standards/digital-code-of-practice/take-an-ecosystem-approach/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/policies-and-standards/digital-code-of-practice/take-care-of-information-and-data/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/policies-and-standards/digital-code-of-practice/work-in-the-open/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/policies-and-standards/digital-principles/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/products-services/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/resources/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/video-conferencing-guide/',
			'https://wordpress-prod.apps.silver.devops.gov.bc.ca/services/',

			'http://localhost:8888/b-c-s-digital-plan/',
			'http://localhost:8888/digital-framework-progress/',
			'http://localhost:8888/forms-surveys/',
			'http://localhost:8888/case-studies/',
			'http://localhost:8888/case-study-energy-mines-and-digital-trust/',
			'http://localhost:8888/case-study-medical-services-plan/',
			'http://localhost:8888/case-study-mines-digital-service/',
			'http://localhost:8888/case-study-nutrient-management-calculator/',
			'http://localhost:8888/common-components/',
			'http://localhost:8888/communities/',
			'http://localhost:8888/about/',
			'http://localhost:8888/copyright/',
			'http://localhost:8888/disclaimer/',
			'http://localhost:8888/privacy/',
			'http://localhost:8888/home/',
			'http://localhost:8888/learning/',
			'http://localhost:8888/low-touch-saas/',
			'http://localhost:8888/policies-and-standards/',
			'http://localhost:8888/policies-and-standards/digital-code-of-practice/',
			'http://localhost:8888/policies-and-standards/digital-code-of-practice/build-diverse-teams-internal-capacity/',
			'http://localhost:8888/policies-and-standards/digital-code-of-practice/continuously-learn-improve/',
			'http://localhost:8888/policies-and-standards/digital-code-of-practice/design-with-people/',
			'http://localhost:8888/policies-and-standards/digital-code-of-practice/embed-inclusion/',
			'http://localhost:8888/policies-and-standards/digital-code-of-practice/express-cultural-historical-awareness-respect/',
			'http://localhost:8888/policies-and-standards/digital-code-of-practice/integrate-ethics/',
			'http://localhost:8888/policies-and-standards/digital-code-of-practice/manage-risks-proportionately/',
			'http://localhost:8888/policies-and-standards/digital-code-of-practice/take-an-ecosystem-approach/',
			'http://localhost:8888/policies-and-standards/digital-code-of-practice/take-care-of-information-and-data/',
			'http://localhost:8888/policies-and-standards/digital-code-of-practice/work-in-the-open/',
			'http://localhost:8888/policies-and-standards/digital-principles/',
			'http://localhost:8888/products-services/',
			'http://localhost:8888/resources/',
			'http://localhost:8888/video-conferencing-guide/',
			'http://localhost:8888/services/'
			];
		$digimod_v2_urls_start = ['https://wordpress-prod.apps.silver.devops.gov.bc.ca/common-component', 'https://wordpress-prod.apps.silver.devops.gov.bc.ca/cop',
		'http://localhost:8888/common-component', 'http://localhost:8888/cop'];

		$digimod_v2_pages = ['616','66', '87', '77', '68', '72', '89', '74', '85', '81', '83', '79', '228', '226', '221', '9', '632', '634', '636', 
							'639', '641', '643', '645', '652', '630', '647', '654', '666', '656', '658', '660', '662', '664', '668', '670', '672', '13']; // todo: remove 810
		

		$current_url = "http" . (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 's' : '') . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

		$start_match = false;
		foreach ($digimod_v2_urls_start as $item) {
			if (strpos($current_url, $item) === 0) {
				$start_match=true;
			}
		}

		$post_id = isset($_GET['post']) ? $_GET['post'] : null;

		if(in_array($current_url,$digimod_v2_urls) or $start_match ) #
		{
			// echo('inject v2 and return');
			$theme_enqueue_and_inject       = new EnqueueAndInject();
			add_action( 'wp_enqueue_scripts', [ $theme_enqueue_and_inject, 'bcgov_block_theme_enqueue_digmod_theme' ] );
			return;
		}
		
		$postId = isset($_GET['postId']) ? $_GET['postId'] : null;
		// echo('postId: '. $postId);
		if (in_array($post_id, $digimod_v2_pages) or in_array($postId,$digimod_v2_templates) or get_post_type($post_id)=="common-component"){
			// echo('v2 add editor styles');
			$theme_enqueue_and_inject       = new EnqueueAndInject();
			add_action( 'after_setup_theme', [$theme_enqueue_and_inject, 'add_editor_styles']);

		/* FINISH DIGMOD PATCH */
		}else{
			// Actions.
			$theme_enqueue_and_inject       = new EnqueueAndInject();
			$theme_admin_menus              = new AdminMenus();
			$theme_admin_options            = new AdminOptions();
			$theme_bcgov_settings           = new BcgovSettings();
			$theme_dependencies             = new Dependencies();
			$theme_register_custom_patterns = new RegisterCustomPatternsPostType();
			$theme_exports                  = new ExportOptions();
			$theme_register_block_patterns  = new PatternsSetup();
			$theme_page_custom_class        = new PageCustomClass();

			// Filters.
			$filter_button_enhanced    = new ButtonEnhanced();
			$filter_image_enhanced     = new ImageEnhanced();
			$filter_mediatext_enhanced = new MediaTextEnhanced();
			$filter_sitelogo_enhanced  = new SiteLogoEnhanced();

			add_action( 'acf/init', [ $theme_admin_options, 'bcgov_block_theme_acf_init_block_types' ] );
			
			add_action( 'admin_init', [ $theme_admin_options, 'bcgov_block_theme_custom_settings' ] );
			add_action( 'admin_menu', [ $theme_admin_menus, 'bcgov_block_theme_menu' ] );
			add_action( 'admin_menu', [ $theme_bcgov_settings, 'bcgov_add_settings_menu' ] );
			add_action( 'admin_notices', [ $theme_dependencies, 'bcgov_block_theme_dependencies' ] );
			add_action( 'export_filters', [ $theme_exports, 'bcgov_block_theme_exports' ] );
			
			add_action( 'init', [ $theme_register_custom_patterns, 'bcgov_block_theme_register_custom_pattern' ] );
			add_action( 'wp_enqueue_scripts', [ $theme_enqueue_and_inject, 'bcgov_block_theme_enqueue_scripts' ] );

			add_action( 'init', [ $theme_register_block_patterns, 'bcgov_blocks_theme_register_block_patterns' ], 9 );

			// Custom Page Class combined Action & Filter hooks into Actions Class.
			add_action( 'add_meta_boxes', [ $theme_page_custom_class, 'custom_page_meta_boxes' ], 10, 2 );
			add_action( 'save_post', [ $theme_page_custom_class, 'custom_save_page_meta' ] );
			add_filter( 'body_class', [ $theme_page_custom_class, 'add_custom_class_to_body' ] );

			
			add_filter( 'wp_headers', [ $theme_admin_options, 'bcgov_block_theme_wp_headers' ] );

			add_filter( 'render_block', [ $filter_button_enhanced, 'add_button_attributes' ], 10, 2 );
			add_filter( 'render_block', [ $filter_image_enhanced, 'add_image_attributes' ], 10, 2 );
			add_filter( 'render_block', [ $filter_mediatext_enhanced, 'add_media_text_attributes' ], 10, 2 );
			add_filter( 'render_block', [ $filter_sitelogo_enhanced, 'add_site_logo_attributes' ], 10, 2 );

		
			$theme_supports = new ThemeSupports();
			add_action( 'after_setup_theme', [ $theme_supports, 'bcgov_block_theme' ] );
			add_filter( 'get_custom_logo', [ $theme_supports, 'bcgov_block_theme_custom_logo' ] );
			add_action( 'admin_enqueue_scripts', [ $theme_enqueue_and_inject, 'bcgov_block_theme_enqueue_admin_scripts' ] );

			remove_theme_support( 'core-block-patterns' );
		}
	}
}

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
		// Run GDX theme logic only on pages that are not old V2 digimod pages

		$digimod_v2_templates = ['bcgov-wordpress-block-theme//single-common-component','bcgov-wordpress-block-theme//single-cop'];
		$digimod_v2_urls = [
			'b-c-s-digital-plan/',
			'digital-framework-progress/',
			'forms-surveys/',
			'case-studies/',
			'case-study-energy-mines-and-digital-trust/',
			'case-study-medical-services-plan/',
			'case-study-mines-digital-service/',
			'case-study-nutrient-management-calculator/',
			'common-components/',
			'communities/',
			'about/',
			'copyright/',
			'disclaimer/',
			'privacy/',
			'home/',
			'learning/',
			'low-touch-saas/',
			'policies-and-standards/',
			'policies-and-standards/digital-code-of-practice/',
			'policies-and-standards/digital-code-of-practice/build-diverse-teams-internal-capacity/',
			'policies-and-standards/digital-code-of-practice/continuously-learn-improve/',
			'policies-and-standards/digital-code-of-practice/design-with-people/',
			'policies-and-standards/digital-code-of-practice/embed-inclusion/',
			'policies-and-standards/digital-code-of-practice/express-cultural-historical-awareness-respect/',
			'policies-and-standards/digital-code-of-practice/integrate-ethics/',
			'policies-and-standards/digital-code-of-practice/manage-risks-proportionately/',
			'policies-and-standards/digital-code-of-practice/take-an-ecosystem-approach/',
			'policies-and-standards/digital-code-of-practice/take-care-of-information-and-data/',
			'policies-and-standards/digital-code-of-practice/work-in-the-open/',
			'policies-and-standards/digital-principles/',
			'products-services/',
			'resources/',
			'video-conferencing-guide/',
			'services/'
			];
		$digimod_v2_urls_start = ['/common-component', '/cop'];

		$digimod_v2_pages = ['616','66', '87', '77', '68', '72', '89', '74', '85', '81', '83', '79', '228', '226', '221', '9', '632', '634', '636', 
							'639', '641', '643', '645', '652', '630', '647', '654', '666', '656', '658', '660', '662', '664', '668', '670', '672', '13']; // todo: remove 810
		

		$runGDX = true;

		try{
			// throw new Exception('whooops');
			$current_url = "http" . (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 's' : '') . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

			// check for common components in communities of practice
			$base = parse_url($current_url, PHP_URL_PATH);
			$start_match = false;
			foreach ($digimod_v2_urls_start as $item) {
				if (strpos($base, $item) === 0) {
					$start_match=true;
				}
			}

			$end_match = false;
			foreach ($digimod_v2_urls as $item) {
				if (str_ends_with($current_url,$item)) {
					$end_match=true;
				}
			}

			$post_id = isset($_GET['post']) ? $_GET['post'] : null;

			// if we're on local, do not apply
			$local=false;
			// if (strpos($_SERVER['HTTP_HOST'], 'localhost' ) === 0) {
			// 	$local=true;
			// }
			// echo($_SERVER['HTTP_HOST']);
			// echo('local: '.  ($local ? 'true' : 'false'));
			
			// if we're on preview url for v2 page, include v2 css only, don't run GDX logic
			if(($end_match or $start_match) && !$local) #
			{
				// echo('inject v2 and return');
				$theme_enqueue_and_inject       = new EnqueueAndInject();
				add_action( 'wp_enqueue_scripts', [ $theme_enqueue_and_inject, 'bcgov_block_theme_enqueue_digmod_theme' ] );
				return;
			}
			
			// if we're on editor for one of V2 pages or full site editing of V2 templates, don't run GDX logic
			$postId = isset($_GET['postId']) ? $_GET['postId'] : null;
			// echo('postId: '. $postId);
			
			if ((in_array($post_id, $digimod_v2_pages) or in_array($postId,$digimod_v2_templates) or get_post_type($post_id)=="common-component")&&!$local){
				// echo('v2 add editor styles');
				$runGDX = false;
				$theme_enqueue_and_inject       = new EnqueueAndInject();
				add_action( 'after_setup_theme', [$theme_enqueue_and_inject, 'add_editor_styles']);
			}
		}catch(\Error $err){

		}
		/* FINISH DIGMOD PATCH */

		if($runGDX){
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

<?php

namespace Bcgov\Theme\Block\Templates;

if ( ! defined( 'ABSPATH' ) ) {
	exit( '<h1>Direct access denied.</h1>' );
}

if ( ! current_user_can( 'manage_options' ) ) {
	exit( '<h1>You do not have sufficient permissions to edit this page.</h1>' );
}

/**
 * Options page in the Admin.
 *
 * @since 1.1.1
 *
 * @package Bcgov/Theme/Block
 */
class OptionsAdminPage {

	/**
     * Constructor.
     */
	public function __construct() {
		$this->build_options_page();
	}

	/**
	 * Ensures custom class name is valid.
	 *
	 * @param string $class input custom class name.
	 *
	 * @since 1.0.4
	 * @return string
	 */
	private function make_class_safe( $class ) {
		$class = str_replace( ' ', '-', $class );
		$class = preg_replace( '~[^\\pL0-9_]+~u', '-', $class );
		$class = trim( $class, '-' );
		$class = iconv( 'utf-8', 'us-ascii//TRANSLIT', $class );
		$class = strtolower( $class );
		$class = preg_replace( '~[^-a-z0-9_]+~', '', $class );
		return $class;
	}

	/**
	 * Ensures directive submissions are valid.
	 *
	 * @param string $directives input custom directives list.
	 *
	 * @since 1.0.6
	 * @return string
	 */
	private function remove_csp_keywords( $directives ) {
		$directives         = strtolower( $directives );
		$substringsToRemove = [ 'data', 'none', 'self', 'unsafe-inline', 'unsafe-eval', ':' ];
		$directives         = str_replace( $substringsToRemove, '', html_entity_decode( $directives, ENT_QUOTES ) );
		$directives         = trim( $directives );
		$directives         = preg_replace( '/x\d+x\d+_\d+x_/ ', '', $directives );
		$directives         = preg_replace( '/(\'|&#0*39;)/', '', $directives );
		return $directives;
	}

	/**
	 * Displays the options page for the BCGov Block Theme,allows users to set various styles,
	 * header functionality, Content Secuirty Policies and more.
	 *
	 * @return void
	 */
	public function build_options_page() {

		$active_site_pattern_styles = esc_attr( get_option( 'active_site_pattern_styles' ) );
		$header_effect              = esc_attr( get_option( 'header_effect' ) );
		$enable_all_styles          = get_option( 'enable_all_styles' );
		$custom_body_class          = $this->make_class_safe( esc_attr( get_option( 'custom_body_class' ) ) );
		$custom_csp_defaultsrc      = $this->remove_csp_keywords( esc_attr( get_option( 'custom_csp_defaultsrc' ) ) );
		$custom_csp_scriptsrc       = $this->remove_csp_keywords( esc_attr( get_option( 'custom_csp_scriptsrc' ) ) );
		$custom_csp_stylesrc        = $this->remove_csp_keywords( esc_attr( get_option( 'custom_csp_stylesrc' ) ) );
		$custom_csp_connectsrc      = $this->remove_csp_keywords( esc_attr( get_option( 'custom_csp_connectsrc' ) ) );
		$custom_csp_fontsrc         = $this->remove_csp_keywords( esc_attr( get_option( 'custom_csp_fontsrc' ) ) );
		$custom_csp_imgsrc          = $this->remove_csp_keywords( esc_attr( get_option( 'custom_csp_imgsrc' ) ) );
		$custom_csp_mediasrc        = $this->remove_csp_keywords( esc_attr( get_option( 'custom_csp_mediasrc' ) ) );
		$custom_csp_framesrc        = $this->remove_csp_keywords( esc_attr( get_option( 'custom_csp_framesrc' ) ) );

		/**
		* Add admin page content
		*
		* @since 1.0.3
		*/
		?>
		<style>
		#wpfooter { position: fixed }
		</style>

		<div class="bcgov-block-theme-page-header">
			<div class="bcgov-block-theme-page-header__container">
				<div class="bcgov-block-theme-page-header__branding">
				<h2>BCGov Block Theme Site Options</h2>
				</div>
				<div class="bcgov-block-theme-page-header__tagline">
					<span  class="bcgov-block-theme-page-header__tagline-text">				
					<?php esc_html_e( 'Theme repository:', 'bcgov-block-theme' ); ?> <a href="https://github.com/bcgov/bcgov-wordpress-block-theme"><?php echo esc_html__( 'Github', 'bcgov-block-theme' ); ?></a>						
					</span>					
				</div>				
			</div>
		</div><!-- /Header -->

		<div class="wrap bcgov-block-theme-container">

			<form method="post" action="options.php">
				
				<?php
					settings_fields( 'bcgov-block-theme-settings-group' );
					do_settings_sections( 'bcgov-block-theme-settings-group' );
					settings_errors();
				?>

				<div class="bcgov-block-theme-grid">

					<div class="bcgov-block-theme-grid-content">
						
						<div class="bcgov-block-theme-body">

							<h1 class="bcgov-block-theme-title" style="margin-bottom: 1rem;"><?php esc_html_e( 'Theme Options and Site Specific Settings', 'bcgov-block-theme' ); ?></h1>
							
							<p class="bcgov-block-theme-intro-text">
								<?php echo esc_html__( 'The following settings will allow adjusting specific behaviours of BCGov Block Theme.', 'bcgov-block-theme' ); ?>
							</p>
						</div> <!-- /Getting started -->

						<div class="bcgov-block-theme-grid-content card">
							<h3 id="active-pattern">Active Site Pattern Styles | DEPRECATED</h3>
							
							<p class="description">Previously used to choose the active site styling – this choice will impact how certain patterns display and which patterns and blocks may or may not be available. This is now handled by the Full Site Editor stles. It is highly recommended to keep this on <strong>Default (BC Government Palette).</strong></p>

							<p><select id="active_site_pattern_styles" name="active_site_pattern_styles">
								<option value="bcgov" <?php if ( 'bcgov' === $active_site_pattern_styles ) { echo ' selected="selected"';} ?>>Default (BC Government Palette)</option>
								<option value="optional" <?php if ( 'optional' === $active_site_pattern_styles ) { echo ' selected="selected"';} ?>>Option 1 (Optional Palette)</option>
								<!--option value="buybc" <?php if ( 'buybc' === $active_site_pattern_styles ) { echo ' selected="selected"';} ?>>Option 2 (BuyBC)</option-->
							</select></p>

							<p class="note"><span class="dashicons dashicons-info" style="color: dodgerblue"></span> <strong>Note:</strong> to change the theme colour palette you will need to do so in the styles option inside the Theme editor. See additional details in the <a href="<?php echo esc_url( home_url() ); ?>/wp-admin/themes.php?page=bcgov-block-theme-docs#colour-palettes">Block Theme documentation</a>.</p>

						</div> <!-- /Active Site Pattern Styles -->

						<div class="bcgov-block-theme-grid-content card">

							<h3 id="header-effect">Header Effect</h3>

							<p class="description">Choose the behaviour of the header bar when using the takeover menu. A "takeover menu" (set in the 'Overlay Menu' option in the template setting for Navigation) collapses the navigation options in a menu to the hamburger icon and opens the menu in a fullscreen overlay. This is the default menu for mobile but can also be used for desktop resolutions.</p>

							<ul>
								<li><label><input id="header_effect" name="header_effect" type="radio" value="scroll" <?php if ( 'scroll' === $header_effect ) { echo ' checked';} ?>>Scrolls with page</label></li>
								<li><label><input id="header_effect" name="header_effect" type="radio" value="fixed" <?php if ( 'fixed' === $header_effect ) { echo ' checked';} ?>>Fixed to top: always visible</label></li>
								<li><label><input id="header_effect" name="header_effect" type="radio" value="hides" <?php if ( 'hides' === $header_effect ) { echo ' checked';} ?>>Fixed to top: show/hide on scroll</label></li>
							</ul>

						</div> <!-- /Header Effect -->

						<div class="bcgov-block-theme-grid-content card">

							<h3 id="styles-patterns">Styles and patterns</h3>

							<p class="description">Gain access to all available styles and patterns regardless of chosen site styles. Ie: choosing this option means you will see optional styles and patterns.</p>

							<ul>
								<li><label class="selected">
										<input id="enable_all_styles" name="enable_all_styles" type="checkbox" value="true" <?php if ( 'true' === $enable_all_styles ) { echo ' checked';} ?>> Enable all styles
								</label></li>
							</ul>
						</div>
						
						<div class="bcgov-block-theme-grid-content card">

							<h2 class="bcgov-block-theme-title">Advanced settings</h2>

							<hr />

							<h3 id="custom-body-class">Custom Body Class</h3>

							<p class="description">This is used for custom styling of a site to enable body class specific overrides.</p>
							
							<p>body.custom-<input id="custom_body_class" name="custom_body_class" type="text" value="<?php if ( ! empty( $custom_body_class ) ) { echo esc_attr( $custom_body_class ); } ?>"></p>
							
							<?php if ( ! empty( $custom_body_class ) ) : ?>
							<p>Adds a custom class that is applied to the body and can be referenced in styles as <strong>body.custom-<?php if ( ! empty( $custom_body_class ) ) { echo esc_attr( $custom_body_class ); } ?></strong> – and is used in conjunction with the <a href="<?php echo esc_url( home_url() ) . '/wp-admin/customize.php'; ?>">Additional CSS</a> customizer tool.</p>
							<?php endif; ?>

							<?php if ( is_admin() ) : ?>
							
							<hr />

							<h3 id="csp">Content Security Policy (CSP)</h3>

							<p>CSP is a way to control what sources a website can load content from. There are different rules for different types of content. Once a website has set a CSP, the browser will only allow content from sources that the website has specifically allowed. Source values are separated by spaces and can only include URLs (with or without a wildcard eg: domain.ca and *.domain.ca). Note that the special <strong>CSP keywords are not allowed</strong> in this list.</p>

							<h4>default-src policy:</h4>
							<p class="description">The fallback directive used to specify the default content policy for most of the source directives</p>
							<div><input class="large-text" id="custom_csp_defaultsrc" name="custom_csp_defaultsrc" type="text" value="<?php if ( ! empty( $custom_csp_defaultsrc ) ) { echo esc_attr( $custom_csp_defaultsrc ); } ?>"></div>
							<p class="description">Default includes: 'self' gov.bc.ca *.gov.bc.ca data: *.twitter.com *.twimg.com  </p>
							
							<h4>script-src policy:</h4>
							<p class="description">Used to allowlist script sources. </p>
							<div><input class="large-text" id="custom_csp_scriptsrc" name="custom_csp_scriptsrc" type="text" value="<?php if ( ! empty( $custom_csp_scriptsrc ) ) { echo esc_attr( $custom_csp_scriptsrc ); } ?>"></div>
							<p class="description">Default includes: 'self' 'unsafe-inline' 'unsafe-eval' gov.bc.ca *.gov.bc.ca *.twimg.com *.twitter.com *.flickr.com  </p>

							<h4>style-src policy:</h4>
							<p class="description">Used to allowlist CSS stylesheet sources</p>
							<div><input class="large-text" id="custom_csp_stylesrc" name="custom_csp_stylesrc" type="text" value="<?php if ( ! empty( $custom_csp_stylesrc ) ) { echo esc_attr( $custom_csp_stylesrc ); } ?>"></div>
							<p class="description">Default includes: 'self' 'unsafe-inline' *.twitter.com *.twimg.com </p>

							<h4>connect-src policy:</h4>
							<p class="description">Specifies permitted origins for direct JavaScript connections that use EventSource, WebSocket, or XMLHttpRequest objects</p>
							<div><input class="large-text" id="custom_csp_connectsrc" name="custom_csp_connectsrc" type="text" value="<?php if ( ! empty( $custom_csp_connectsrc ) ) { echo esc_attr( $custom_csp_connectsrc ); } ?>"></div>
							<p class="description">Default includes: 'self' gov.bc.ca  *.gov.bc.ca *.flickr.com  </p>

							<h4>img-src policy:</h4>
							<p class="description">Lets you restrict image sources.</p>
							<div><input class="large-text" id="custom_csp_imgsrc" name="custom_csp_imgsrc" type="text" value="<?php if ( ! empty( $custom_csp_imgsrc ) ) { echo esc_attr( $custom_csp_imgsrc ); } ?>"></div>
							<p class="description">Default includes: 'self' data: gov.bc.ca *.gov.bc.ca *.twimg.com *.twitter.com *.staticflickr.com </p>

							<h4>font-src policy:</h4>
							<p class="description">Specifies permitted sources for loading fonts</p>
							<div><input class="large-text" id="custom_csp_fontsrc" name="custom_csp_fontsrc" type="text" value="<?php if ( ! empty( $custom_csp_fontsrc ) ) { echo esc_attr( $custom_csp_fontsrc ); } ?>"></div>
							<p class="description">Default includes: 'self' 'unsafe-inline' data:  </p>

							<h4>media-src policy:</h4>
							<p class="description">Restricts origins for loading sound and video resources</p>
							<div><input class="large-text" id="custom_csp_mediasrc" name="custom_csp_mediasrc" type="text" value="<?php if ( ! empty( $custom_csp_mediasrc ) ) { echo esc_attr( $custom_csp_mediasrc ); } ?>"></div>
							<p class="description">Default includes: 'self' 'unsafe-inline' </p>

							<h4>frame-src policy:</h4>
							<p class="description">Used to restrict permitted URLs for JavaScript workers and embedded frame contents, <strong>including embedded videos</strong></p>
							<div><input class="large-text" id="custom_csp_framesrc" name="custom_csp_framesrc" type="text" value="<?php if ( ! empty( $custom_csp_framesrc ) ) { echo esc_attr( $custom_csp_framesrc ); } ?>"></div>
							<p class="description">Default includes: 'self' gov.bc.ca *.gov.bc.ca *.twitter.com youtube.com *.youtube.com youtu.be</p>
							<?php endif; ?>

							</div> <!-- /Custom Body Class -->
					</div><!-- /Content -->

					<!-- Sidebar -->
					<aside class="bcgov-block-theme-grid-sidebar sticky">

						<div class="bcgov-block-theme-grid-sidebar-widget-area">

							<div class="bcgov-block-theme-widget">
									<h2 class="bcgov-block-theme-widget-title">On this page</h2>
									<ul class="bcgov-block-theme-useful-links">
									<li>
											<a href="#active-pattern">Active Site Pattern Styles</a>
										</li>
										<li>
											<a href="#header-effect">Header Effect</a>
										</li>
										<li>
											<a href="#styles-patterns">Styles and patterns</a>
										</li>
										
										<li>
											<p><strong>Advanced management</strong></p>
										</li>
										<li>
											<a href="#custom-body-class">Custom Body Class</a>
										</li>
										<li>
											<a href="#csp">Content Security Policy (CSP)</a>
										</li>
									</ul>
								</div>
								<div class="bcgov-block-theme-widget">
									<h2 class="bcgov-block-theme-widget-title">Other Tools</h2>
										<ul class="bcgov-block-theme-useful-links">
										<li>
											<a href="themes.php?page=bcgov-block-theme-notification-banner">Admin Notifications Banner</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="bcgov-block-theme-widget">

								<h2 class="bcgov-block-theme-widget-title"><?php echo esc_html__( 'Save your changes', 'bcgov-block-theme' ); ?></h2>
								<p><?php echo esc_html__( 'If you make any changes you will need to save them.', 'bcgov-block-theme' ); ?></p>

								<?php
								submit_button();

								?>
								
							</div>

						</div>

					</aside>	
				
				</div> <!-- .grid -->
			</form>

		</div> <!-- .container -->
		<?php
	}
}

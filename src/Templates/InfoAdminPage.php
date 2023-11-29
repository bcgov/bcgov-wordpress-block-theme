<?php

namespace Bcgov\Theme\Block\Templates;

if ( ! defined( 'ABSPATH' ) ) {
	exit( '<h1>Direct access denied.</h1>' );
}

if ( ! current_user_can( 'manage_options' ) ) {
	exit( '<h1>You do not have sufficient permissions to edit this page.</h1>' );
}

/**
 * Theme instructions page for  in the Admin.
 *
 * @since 1.1.1
 *
 * @package Bcgov/Theme/Block
 */
class InfoAdminPage {
	/**
     * Constructor.
     */
	public function __construct() {
		$this->build_options_page();
	}


	/**
	 * Displays the information page for the BCGov Block Theme, including details on getting started,
	 * theme options, general editing, and block patterns and more.
	 *
	 * @return void
	 */
	public function build_options_page() {

		$theme = wp_get_theme();

		if ( is_child_theme() ) {
			$theme = wp_get_theme()->parent();
		}

		$site_name = esc_attr( get_option( 'active_site_pattern_styles' ) );
		?>


			<div class="wrap bcgov-block-theme-container">
				<div class="bcgov-block-theme-grid">
					<div class="bcgov-block-theme-grid-content">
						<div class="bcgov-block-theme-grid-content card">

							<?php
							/*
							* CleanBC site specific patterns.
							*/
							if ( \Bcgov\Theme\Block\OPTIONAL ) :
								?>

								<hr />

								<h2>CleanBC Patterns</h2>
 
								<h3>Banners – including special-use header and footer Patterns</h3>

								<p>Available in the Patterns selector under <strong>CleanBC: Banners</strong>. When using these banner patterns placing one at the top of a page will cause the Breadcrumb navigation to move below the pattern content.</p>

								<p>Note for the home page logo to be added to the banner “swoop” requires CleanBC option being selected in the site options.</p>

								<p>Landing banners can be colourised but require Group > Text colour and Headline > background colour editing. Note that using the Text colour option to affect the colour of the swoop is not intuitive as technically it should use the Background colour tool, but in order to make this feature work as an editable feature inside WordPress, it has to rely on the Text colour.</p>

								<p><span class="dashicons dashicons-info" style="color: green"></span><strong>Expert tip:</strong> Use the HSL colour tool to control the exact alpha transparency (a.k.a. opacity) between areas.</p>

								<h3>“On this page” pattern</h4>

								<p>Links are hash-tagged to named anchors lower int he page eg: a link with #definition should point to a headline or pattern section lower in the page that includes the HTML Anchor ‘definition’. The HTML Anchor field is found in the Advanced control in the majority of individual Block settings.</p>

								<h3>General in-page Patterns</h3>

								<p>Available in the Patterns selector under <strong>CleanBC: General</strong>. Standard in-page content patterns for use in any project. Styles may vary based on the Active Site option selected in the <a href="<?php echo esc_url( home_url() ); ?>/wp-admin/themes.php?page=bcgov-block-theme-options">BCGov Block Theme Options</a>.</p>
								
								<hr />

								<h3>Active Site Patterns</h3>

								<p>Available in the Patterns selector under <strong>CleanBC: Post Query</strong> and <strong>CleanBC: Page Layouts</strong>. These patterns utilise features, content or functionality specific to the CleanBC site and are only available to CleanBC or other sites that set the Active Site option to CleanBC in the BCGov Block Theme Options.</p>
							
							<?php endif; ?>
						</div><!-- /Site specific patterns -->

						<div class="bcgov-block-theme-grid-content card">

							<?php
							/*
							* CleanBC site specific patterns.
							*/
							if ( \Bcgov\Theme\Block\OPTIONAL ) :
								?>

								<hr />

								<h2>CleanBC Buttons</h2>

								<h4>Icon buttons</h4>

								<p>CleanBC offers a special style of button that includes the option to add an icon from a predetermined set of images. These icon buttons can be used as buttons, but if a link is not provided they do not interact as normal buttons and simply behave as labels with an associated icon.</p>

								<ul>
									<li><span class="dashicons dashicons-yes"></span>Icon colours can be changed by setting the background colour on the Button block.</li>

									<li><span class="dashicons dashicons-yes"></span>Text colour can be changed by using the Text colour tool.</li>
								</ul>

							<?php endif; ?>

						</div><!-- /Site specific Blocks -->

					</div> <!-- /Content -->
					
					<!-- Sidebar -->
					<aside class="bcgov-block-theme-grid-sidebar sticky">
						<div class="bcgov-block-theme-grid-sidebar-widget-area">

						<div class="bcgov-block-theme-widget">
								<h2 class="bcgov-block-theme-widget-title">On this page</h2>
								<ul class="bcgov-block-theme-useful-links">
								
								</ul>
							</div>

							<div class="bcgov-block-theme-widget">
								<h2 class="bcgov-block-theme-widget-title">Useful Links</h2>
								<ul class="bcgov-block-theme-useful-links">
									<li>
										<a href="https://learn.wordpress.org/tutorials/" target="_blank">Learn WordPress Tutorials</a>
									</li>
									<li>
										<a href="https://www.youtube.com/playlist?list=PLiPorWuYVbztdvJxv3ZEbdnPYricJ1XwY" target="_blank">Block Editor Tips & Tricks</a>
									</li>
								</ul>
							</div>

							<div class="bcgov-block-theme-widget">
								<h2 class="bcgov-block-theme-widget-title">Do you need support?</h2>
								<p>Are you are having trouble? Reach out to the development team.</p>
								<a href="mailto:govwordpress@gov.bc.ca?SUBJECT=Help needed using <?php echo esc_html( $site_name . ' Theme for WordPress' ); ?>" class="button button-primary button-hero" style="text-decoration: none;" target="_blank">Ask for help</a>
							</div>
							
						</div>					
					</aside>	

				</div> <!-- .grid -->

			</div>
		<?php
	}
}

<?php
/**
 * Theme admin functions.
 *
 * @package BCGov Block Theme
 */

namespace Bcgov\Theme\Block;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}

/**
* Add admin page content
*
* @since 1.0.0
*/
$site_setting = 'BCGov';

if ( function_exists( 'acf_add_options_page' ) ) {
	$site_setting = get_field_object( 'active_site', 'option' );
	$site_name    = $site_setting['choices'][ $site_setting['value'] ];
}
?>

		<div class="bcgov-block-theme-page-header">
			<div class="bcgov-block-theme-page-header__container">
				<div class="bcgov-block-theme-page-header__branding">
				<h2><?php echo esc_html( $theme->name . ' | Current site setting: ' ); ?> <span class="pill"><?php echo esc_html( $site_name ); ?></span></h2>
				</div>
				<div class="bcgov-block-theme-page-header__tagline">
					<span  class="bcgov-block-theme-page-header__tagline-text">				
					<?php esc_html_e( 'Theme repository:', 'bcgov-block-theme' ); ?> <a href="https://github.com/bcgov/bcgov-wordpress-block-theme"><?php echo esc_html__( 'Github', 'bcgov-block-theme' ); ?></a>						
					</span>					
				</div>				
			</div>
		</div><!-- /Header -->

		<div class="wrap bcgov-block-theme-container">
			<div class="bcgov-block-theme-grid">

				<div class="bcgov-block-theme-grid-content">
					<div class="bcgov-block-theme-body">
						<h1 class="bcgov-block-theme-title"><?php esc_html_e( 'Getting Started', 'bcgov-block-theme' ); ?></h1>
						<p class="bcgov-block-theme-intro-text">
							<?php echo esc_html__( 'The BCGov Block Theme is now installed and ready to use. You can start building from scratch using a selection of pre-designed and ready to use block and page patterns available in the page/post editor.', 'bcgov-block-theme' ); ?>
						</p>
					</div> <!-- /Getting started -->

					<div class="bcgov-block-theme-grid-content card">
						<h2 id="theme-options" class="bcgov-block-theme-title"><?php esc_html_e( 'Theme Options', 'bcgov-block-theme' ); ?></h2>

						<h3>Changing theme behaviours</h3>

						<p>The BCGov Block Theme allows you to change some of the behaviours of the site such as theme styles and how the header behaves. Simply go to the <a href="<?php echo esc_url( home_url() ); ?>/wp-admin/admin.php?page=theme-options">Theme Options</a> page in the site admin area and choose the behaviours you wish to use.</p>

						<ul>
							<li><span class="dashicons dashicons-yes"></span>Choose the active site stying – this choice will impact how certain features display or are made available.</li>

							<li><span class="dashicons dashicons-yes"></span>Change the behaviour of the site header bar when using the Takeover Menu.</li>

							<li><span class="dashicons dashicons-yes"></span>Make styles and patterns from non-active sites available to the current site.</li>
						</ul>

						<p>More detail on these features can be found on the Theme Options page.</p>

						<p><strong>Note:</strong> New sites will need to enable the ACF Pro plugin and import the most recent version of the site options export file found in the <a href="https://github.com/bcgov/bcgov-wordpress-block-theme/tree/development/src/exports">src/exports</a> directory in the theme repository on Github.</p>
					</div><!-- /Theme options -->

					<div class="bcgov-block-theme-grid-content card">
						<h2 id="general" class="bcgov-block-theme-title"><?php esc_html_e( 'General editing', 'bcgov-block-theme' ); ?></h2>

						<h3>Understanding the role of margins and padding in the WordPress editor</h3>

						<p><span class="dashicons dashicons-warning" style="color: orange"></span> <strong>Warning:</strong> Be vary careful when using margins and padding in the editor. They are one size fits all (or doesn’t fit as the case may be). Any padding or margin spacing added to any element, layout, pattern or block is going to display similarly across all resolutions. 6rem of margins on a desktop view may look good, but can add a lot of unwanted spacing on mobile devices.</p>

						<p>One day the block editor may allow for differentiating between viewport sizes to add selective padding or margins, but until that day is it always safer to err on the side of cautious use and fulsome testing to ensure the element doesn’t take on unwanted aspects when viewed across all platforms and screen resolutions.</p>
					</div><!-- /General editing -->

					<div class="bcgov-block-theme-grid-content card">
						<h2 id="block-patterns" class="bcgov-block-theme-title"><?php esc_html_e( 'Patterns', 'bcgov-block-theme' ); ?></h2>
						
						<h2>Instructions</h2>

						<p>WordPress block patterns are a collection of pre-made design elements that you can use for creating custom content layouts faster. These patterns include items like pre-built multi-column layouts, media and text patterns, call-to-action patterns, headers, buttons, and more.</p>

						<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/add-block-icon.png'; ?>" alt="style icon" style="float: right; width: 3rem;"/> To use block patterns, you need to edit the WordPress post or page where you want to use the block pattern. On the page/post edit screen, click on the Add Block button to open the block inserter. From there, switch to the Patterns tab to view available block patterns.</p>

						<p>You can also view BCGov specific block patterns in different categories like general, headers, footers, pages, and more including any site specific patterns developed specifically for sites such as CleanBC.</p>

						<hr />

						<h3>Understanding Patterns</h3>
						<ul>
							<li><span class="dashicons dashicons-yes"></span>Patterns are combinations of core block components and custom classes set up in very specific configurations.</li>

							<li><span class="dashicons dashicons-yes"></span>Patterns are typically designed to be discreet page specific sections and are not meant to be combined within other patterns.</li>

							<li><span class="dashicons dashicons-yes"></span>Patterns are usually contained in a Group block at it's top most level when using the List View. Banner patterns typically use the Cover block as the top most block.</li>

							<li><span class="dashicons dashicons-warning" style="color: orange"></span> Pre-defined styling can be changed by moving or altering pattern structure while others may cause design failures.</li>

							<li><span class="dashicons dashicons-warning" style="color: orange"></span> Be very cautious moving patterns into other patterns.</li>
						</ul>

						<h2>BCGov Block Patterns</h2>

						<p>Patterns are separated into different categories such as General, Banners, Header/Footer, Page Layout, Post Queries, etc. These categoris are used to separate intended purpose and also keep the list of patterns from getting too large and inhibit browsing. Should you know the name of a pattern you can use the search tool in the Block Inserter to filter and find the one you need.</p>

						<p>Many patterns are available for use as part of the default BCGov base theme. They offer layouts such as Alternating Cards, Card with Image Overlay, Card with Under Image Portrait 2-Up, Cards Portrait 3-up, Detail Card with Icons, Hero Banner, Long Card, Quote, Small Quote with Image, and many more.</li>
						</p>

					</div><!-- /Patterns -->

					<div class="bcgov-block-theme-grid-content card">
						<h2 id="specific-block-patterns" class="bcgov-block-theme-title">Site Specific Block Patterns</h2>

						<p>Site specific patterns developed specifically for sites can also be inserted from their patterns. Look for  categories that identify the site by name. These patterns can be modified once applied to the page and can either be set up a Reusable Block or alternatively can be copy/pasted between pages or sections once altered.</p>

						<?php
						/*
						* CleanBC site specific patterns.
						*/
						if ( CLEANBC ) :
							?>

							<hr />

							<h2><?php esc_html_e( 'CleanBC Patterns', 'bcgov-block-theme' ); ?></h2>

							<h3>Banners – including special-use header and footer Patterns</h3>

							<p>Available in the Patterns selector under <strong>CleanBC: Banners</strong>. When using these banner patterns placing one at the top of a page will cause the Breadcrumb navigation to move below the pattern content.</p>

							<p>Note for the home page logo to be added to the banner “swoop” requires CleanBC option being selected in the site options.</p>

							<p>Landing banners can be colourised but require Group > Text colour and Headline > background colour editing. Note that using the Text colour option to affect the colour of the swoop is not intuitive as technically it should use the Background colour tool, but in order to make this feature work as an editable feature inside WordPress, it has to rely on the Text colour.</p>

							<p><span class="dashicons dashicons-info" style="color: green"></span><strong>Expert tip:</strong> Use the HSL colour tool to control the exact alpha transparency (a.k.a. opacity) between areas.</p>

							<h3>“On this page” pattern</h4>

							<p>Links are hash-tagged to named anchors lower int he page eg: a link with #definition should point to a headline or pattern section lower in the page that includes the HTML Anchor ‘definition’. The HTML Anchor field is found in the Advanced control in the majority of individual Block settings.</p>

							<h3>General in-page Patterns</h3>

							<p>Available in the Patterns selector under <strong>CleanBC: General</strong>. Standard in-page content patterns for use in any project. Styles may vary based on the Active Site option selected in the <a href="<?php echo esc_url( home_url() ); ?>/wp-admin/admin.php?page=theme-options">BCGov Block Theme Options</a>.</p>
							
							<hr />

							<h3>Active Site Patterns</h3>

							<p>Available in the Patterns selector under <strong>CleanBC: Post Query</strong> and <strong>CleanBC: Page Layouts</strong>. These patterns utilise features, content or functionality specific to the CleanBC site and are only available to CleanBC or other sites that set the Active Site option to CleanBC in the BCGov Block Theme Options.</p>
						
						<?php endif; ?>
					</div><!-- /Site specific patterns -->

					<div class="bcgov-block-theme-grid-content card">
						<h2 id="specific-blocks" class="bcgov-block-theme-title">Site Specific Blocks and Block Styles</h2>

						<p>Site specific blocks and block styles can also be inserted. Look for styles that identify the variations or options.</p>

						<h3>Buttons and Button Blocks</h3>

						<p>Buttons are used extensively as key drivers of linking to other pages and content. While inline linking can be done inside text paragraphs, headlines, etc., buttons offer some additional features that make them extremely useful when building sites.</p>
						<ul>
							<li><span class="dashicons dashicons-yes"></span> Buttons have multiple style options from filled, to outlined or underlined and can be fully customised from colour to sizing in the block editor.</li>

							<li><span class="dashicons dashicons-yes"></span> They have additional Accessibility features that enable better keyboard navigation experiences, but also allow for custom ARIA labels to ensure screen readers or other Assistive Technologies can benefit from proper context.</li>
						</ul>

						<?php
						/*
						* CleanBC site specific patterns.
						*/
						if ( CLEANBC ) :
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
					

					<div class="bcgov-block-theme-grid-content card">
						<h2 id="colour-palettes" class="bcgov-block-theme-title">Colour Palettes</h2>

						<p>Colour palettes for the BCGov Block Theme are made up of 24 pre-defined colours. Any additional Active Site options will also include a palette with an equivalent number of colours in order to make the patterns useable across sites. An associated group of Gradients based on the 16 essential custom colours in the colour palette are also available.</p>

						<h3>Example palettes</h3>

						<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/BCGOV-Colour-Palette-Swatches.jpg'; ?>" alt="BCGov theme colour palette" style="width: 300px;" /> <img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/BCGOV-Gradients-Swatches.jpg'; ?>" alt="BCGov theme colour palette" style="width: 300px;" /></p>
						
						<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/CleanBC-Colour-Palette-Swatches.jpg'; ?>" alt="CleanBC theme colour palette" style="width: 300px;" /> <img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/CleanBC-Gradients-Swatches.jpg'; ?>" alt="BCGov theme colour palette" style="width: 300px;" /></p>
						
						<p>It should be noted that most blocks and patterns can be modified in the editor to override colour or gradient palette options to accomodate specific customisation needs.</p>
						
						<hr />
						
						<h2>Instructions</h2>
						
						<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/style-icon.png'; ?>" alt="style icon" style="float: right; width: 3rem;"/> Global Styles Switcher allows users to switch the theme defaults to alternate colour palettes. Open <strong>Appearance > <a href="<?php echo esc_url( home_url() ) . '/wp-admin/site-editor.php'; ?>">Editor</a></strong> in the admin. You should see the theme variations in the global styles switcher by clicking on the syles icon in the top right corner.</p>

					</div><!-- /Colour Palettes -->

					<h2 class="bcgov-block-theme-title"><?php esc_html_e( 'Advanced theme management', 'bcgov-block-theme' ); ?></h2>

					<div class="bcgov-block-theme-grid-content card">
						
						<h2 id="custom-templates" class="bcgov-block-theme-title">Customisable Templates</h2>
						
						<ul>
							<li><span class="dashicons dashicons-yes"></span> <strong>Page</strong>: displays a single page with the standard layout</li>

							<li><span class="dashicons dashicons-yes"></span> <strong>Page – Content only</strong>: allows for custom banners, requires in-page breadcrumb navigation block if used on site</li>

							<li><span class="dashicons dashicons-yes"></span> <strong>Blank</strong>: no default header, content or footer – for use in creating custom landing pages</li>

							<li><span class="dashicons dashicons-yes"></span> <strong>Search</strong>: display results page</li>

							<li><span class="dashicons dashicons-yes"></span> <strong>404</strong>: displays when no content is found, provides customisable 404 information</li>
						</ul>

						<hr />

						<h2>Instructions</h2>

						<p>The theme editor allows for the customization of the BCGov WordPress theme without writing any code, and modify page templates without breaking the website. This page is not meant for in-depth instruction in using the theme editor, just know the full site editor is a powerful and flexible way to customize the BCGov Block theme and will allow for making substantive changes to a theme and its layout at any time. This enables a level of flexiblility which allows you to easily create on-demand page layouts. For more information regarding WordPress 6+ Templating see: </p>

					</div><!-- /Customisable Templates -->

					<div class="bcgov-block-theme-grid-content card">
						
						<h2 id="custom-template-parts" class="bcgov-block-theme-title">Customisable Template Parts</h2>
						
						<ul>
							<li><span class="dashicons dashicons-yes"></span> <strong>BCGov Header (Standard)</strong>: adds typical BC Gov blue header with site logo, title, navigation and search</li>

							<li><span class="dashicons dashicons-yes"></span> <strong>Navigation</strong>: adds menu navigation to the header</li>

							<li><span class="dashicons dashicons-yes"></span> <strong>Search Field</strong>: adds search field to the header</li>

							<li><span class="dashicons dashicons-yes"></span> <strong>Breadcrumb Nav</strong>: adds breadcrumb navigation, <a href="<?php echo esc_html( admin_url( 'plugins.php' ) ); ?>" rel="noreferrer">requires AIOSEO plugin activation</a></li>

							<li><span class="dashicons dashicons-yes"></span> <strong>BCGov Footer (Standard)</strong>: adds typical BC Gov blue footer</li>
						</ul>

						<hr />

						<h2>Instructions</h2>

						<p>Template parts are used to organize a theme in smaller reusable structural parts. They are commonly used for site headers and site footers. Just like templates, the theme editor allows for the customization of the BCGov WordPress theme without writing any code and this includes modifying template parts.</p>

						<p>The Site Editor’s Template Parts section displays a list of all template parts. You can create template parts using the Add New button. In this view, you can also clear customizations from theme template parts and delete user-created template parts should an error be made while editing inside the editor.</p>

					</div><!-- /Customisable Template Parts -->

				</div> <!-- /Content -->
				
				<!-- Sidebar -->
				<aside class="bcgov-block-theme-grid-sidebar sticky">
					<div class="bcgov-block-theme-grid-sidebar-widget-area">

					<div class="bcgov-block-theme-widget">
							<h2 class="bcgov-block-theme-widget-title"><?php echo esc_html__( 'On this page', 'bcgov-block-theme' ); ?></h2>
							<ul class="bcgov-block-theme-useful-links">
							<li>
									<a href="#theme-options"><?php echo esc_html__( 'Theme Options', 'bcgov-block-theme' ); ?></a>
								</li>
								<li>
									<a href="#general"><?php echo esc_html__( 'General editing', 'bcgov-block-theme' ); ?></a>
								</li>
								<li>
									<a href="#block-patterns"><?php echo esc_html__( 'Block Patterns', 'bcgov-block-theme' ); ?></a>
								</li>
								<li>
									<a href="#specific-block-patterns"><?php echo esc_html__( 'Site Specific Patterns', 'bcgov-block-theme' ); ?></a>
								</li>
								<li>
									<a href="#specific-blocks"><?php echo esc_html__( 'Site Specific Blocks', 'bcgov-block-theme' ); ?></a>
								</li>
								<li>
									<a href="#colour-palettes"><?php echo esc_html__( 'Colour Palettes', 'bcgov-block-theme' ); ?></a>
								</li>
								
								<li>
									<p><strong><?php echo esc_html__( 'Advanced management', 'bcgov-block-theme' ); ?></strong></p>
								</li>
								<li>
									<a href="#custom-templates"><?php echo esc_html__( 'Customisable Templates', 'bcgov-block-theme' ); ?></a>
								</li>
								<li>
									<a href="#custom-template-parts"><?php echo esc_html__( 'Custom Template Parts', 'bcgov-block-theme' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="bcgov-block-theme-widget">
							<h2 class="bcgov-block-theme-widget-title"><?php echo esc_html__( 'Useful Links', 'bcgov-block-theme' ); ?></h2>
							<ul class="bcgov-block-theme-useful-links">
								<li>
									<a href="https://learn.wordpress.org/tutorials/" target="_blank"><?php echo esc_html__( 'Learn WordPress Tutorials', 'bcgov-block-theme' ); ?></a>
								</li>
								<li>
									<a href="https://www.youtube.com/playlist?list=PLiPorWuYVbztdvJxv3ZEbdnPYricJ1XwY" target="_blank"><?php echo esc_html__( 'Block Editor Tips & Tricks', 'bcgov-block-theme' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="bcgov-block-theme-widget">
							<h2 class="bcgov-block-theme-widget-title"><?php echo esc_html__( 'Do you need support?', 'bcgov-block-theme' ); ?></h2>
							<p><?php echo esc_html__( 'Are you are having trouble? Reach out to the development team.', 'bcgov-block-theme' ); ?></p>
							<a href="mailto:govwordpress@gov.bc.ca?SUBJECT=Help needed using <?php echo esc_html( $site_name . ' Theme for WordPress' ); ?>" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Ask for help', 'bcgov-block-theme' ); ?></a>
						</div>
						
					</div>					
				</aside>	

			</div> <!-- .grid -->

		</div>

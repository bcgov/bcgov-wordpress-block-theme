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

			<div class="bcgov-block-theme-page-header">
				<div class="bcgov-block-theme-page-header__container">
					<div class="bcgov-block-theme-page-header__branding">
					<h2><?php echo esc_html( $theme->name . ' | Current site setting: ' ); ?> <a href="<?php echo esc_url( home_url() ); ?>/wp-admin/themes.php?page=bcgov-block-theme-options"><span class="pill"><?php echo esc_html( $site_name ); ?></span></a></h2>
					</div>
					<div class="bcgov-block-theme-page-header__tagline">
						<span  class="bcgov-block-theme-page-header__tagline-text">				
						Theme repository: <a href="https://github.com/bcgov/bcgov-wordpress-block-theme">Github</a>						
						</span>					
					</div>				
				</div>
			</div><!-- /Header -->

			<div class="wrap bcgov-block-theme-container">
				<div class="bcgov-block-theme-grid">

					<div class="bcgov-block-theme-grid-content">
						<div class="bcgov-block-theme-body">
							<h1 class="bcgov-block-theme-title">Getting Started</h1>
							<p class="bcgov-block-theme-intro-text">
								The BCGov Block Theme is now installed and ready to use. You can start building from scratch using a selection of pre-designed and ready to use block and page patterns available in the page/post editor.
							</p>
						</div> <!-- /Getting started -->

						<div class="bcgov-block-theme-grid-content card">
							<h2 id="theme-options" class="bcgov-block-theme-title">Theme Options and Block Theme Settings</h2>

							<h3>Changing theme behaviours in Theme Options</h3>

							<p>The BCGov Block Theme allows you to change some of the behaviours of the site such as theme styles and how the header behaves. These are coupled with the Blovk Theme Appearance settings. Simply go to the <a href="<?php echo esc_url( home_url() ); ?>/wp-admin/themes.php?page=bcgov-block-theme-options">Theme Options</a> page in the site admin area and choose the behaviours you wish to use.</p>

							<ul>
								<li><span class="dashicons dashicons-yes"></span>Choose the active site stying – this choice will impact how certain features display or are made available.</li>

								<li><span class="dashicons dashicons-yes"></span>Change the behaviour of the site header bar when using the Takeover Menu.</li>

								<li><span class="dashicons dashicons-yes"></span>Make styles and patterns from non-active sites available to the current site.</li>
							</ul>

							<p>More detail on these features can be found on the Theme Options page.</p>

							<p><strong>Note:</strong> New sites will need to enable the ACF Pro plugin and import the most recent version of the site options export file found in the <a href="https://github.com/bcgov/bcgov-wordpress-block-theme/tree/development/src/exports">src/exports</a> directory in the theme repository on Github.</p>

							<hr />

							<h3>BCGov Block Theme Settings</h3>

							<p>Some features will need to be turned on to become available to the admin environemnt. These include the Custom Notice Banner feature and the Custom Patterns. Such available options will change over time, so be sure to review this area to determine the latest settings available to the BCGov Block Theme environment. These will be turned off by default in a new installation. For more information on these options see their respective sections below.</p>

							<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/settings-admin-menu.png'; ?>" alt="" style="border: 1px solid #ccc; width: 200px;" />
							<img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/bcgov-block-theme-settings.png'; ?>" alt="" style="border: 1px solid #ccc; width: 400px;" /><br />Other settings for admin enabling options in the Block Theme</p>

						</div><!-- /Theme options -->

						<div class="bcgov-block-theme-grid-content card">
							<h2 id="general" class="bcgov-block-theme-title">General editing and layout</h2>

							<h3>Understanding the role of margins and padding in the WordPress editor</h3>

							<div style="display: flex; gap: 2rem;">
								<div style="max-width: 360px;">

								<p>The WordPress environment allows for responsive padding and margins by using the slider mechanism.</p>

								<ol>
								<li> First, open the page or post where you want to adjust the padding or margin.</li>
								Once you're in the editing mode, select the block you want to adjust.</li>
								<li> On the right-hand side of the editor, you should see a panel called "Block settings". Look for the "Spacing" section within the panel.</li>
								<li> Within the "Spacing" section, you'll see two sliders: one for margin and one for padding. You can adjust these sliders to change the amount of margin or padding around the block.</li>
								<li> The margin slider controls the space outside the block, while the padding slider controls the space inside the block.</li>
								<li> You can either adjust the sliders by dragging the handles or by clicking on the number and typing in a specific value.</li>
								<li> As you adjust the sliders, you'll see the changes reflected in real-time on the preview of your page or post.</li>
								</ol>

								<h3>Linked vs unlinked</h3>

								<p>The link sides icon allows you to choose to apply the same settings to all sides or break them out individually. In some situations you may have access to all sides (top, bottom, left and right) or you may only have top and bottom. In some circumstances you may only have access to paadding or margin but not both. And in other cases the padding and margin option may not be available. It is up to you to use combinations of conatining blocks such as groups, rows, columns, etc. to find the right layout pattern for your desired look and feel.</p>

								<p><span class="dashicons dashicons-warning" style="color: orange"></span> <strong>Warning:</strong> Be careful when using margins and padding in the editor and setting your own sizes. Using explicit sizes – eg: 2rem, 1.5em or 18px – are one size fits all (or doesn’t fit as the case may be). Any padding or margin spacing added to any element, layout, pattern or block is going to display similarly across all resolutions. 6rem of margin on a desktop view may look good, but can add a lot of unwanted spacing on mobile devices.</p>
								</div>
								<div>
								<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/padding-margin-settings.png'; ?>" alt="Enabling printing of an image" style="border: 1px solid #ccc; width: 300px;" /><br />Using sliders to set padding and margin</p>

								</div>

								<hr />

							</div>
							
							<hr/>
							<h3>Fluid Typography</h3>

							<div style="display: flex; gap: 2rem;">
							<div style="max-width: 360px;">
							<p>This feature enables font sizes to adapt to changes in screen size, for example, by growing larger as the viewport width increases, or smaller as it decreases. You will find this control in most text based block inspector options.</p>

							<p>It is still possible to set the size of text or headings in hard coded values by setting a custom size, however much like the margins and padding issue above, it does not scale responsively so use it with care and test across all screen sizes from desktop to mobile.</p>
							</div>
							<div>
							<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/fluid-typography.png'; ?>" alt="Enabling printing of an image" style="border: 1px solid #ccc; width: 300px;" /><br />Font size picker UI control with presets</p>
							</div>
							</div>

							

							

						</div><!-- /General editing -->

						<div class="bcgov-block-theme-grid-content card">
							<h2 id="block-patterns" class="bcgov-block-theme-title">Patterns and Custom Patterns</h2>
							
							<h2>Instructions</h2>

							<p>WordPress block patterns are a collection of pre-made design elements that you can use for creating custom content layouts faster. These patterns include items like pre-built multi-column layouts, media and text patterns, call-to-action patterns, headers, buttons, and more.</p>

							<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/add-block-icon.png'; ?>" alt="style icon" style="float: right; width: 3rem;"/> To use block patterns, you need to edit the WordPress post or page where you want to use the block pattern. On the page/post edit screen, click on the Add Block button to open the block inserter. From there, switch to the Patterns tab to view available block patterns.</p>

							<p>You can also view BCGov specific block patterns in different categories like general, headers, footers, pages, and more including any site specific patterns developed specifically for sites such as CleanBC.</p>

							<hr />

							<h3>Understanding Patterns</h3>
							<ul>
								<li><span class="dashicons dashicons-yes"></span>Patterns are combinations of core block components and custom classes set up in very specific configurations.</li>

								<li><span class="dashicons dashicons-yes"></span>Patterns are typically designed to be discreet page specific sections and are not meant to be combined within other patterns.</li>

								<li><span class="dashicons dashicons-yes"></span>Patterns are usually contained in a Group block at it's top most level when using the List View..</li>

								<li><span class="dashicons dashicons-warning" style="color: orange"></span> Pre-defined styling can be changed by moving or altering pattern structure while others may cause design failures.</li>

								<li><span class="dashicons dashicons-warning" style="color: orange"></span> Be very cautious moving patterns into other patterns.</li>
							</ul>

							<hr />

							<h2>BCGov Block Patterns</h2>

							<p>Patterns are separated into different categories such as General, Banners, Header/Footer, Page Layout, Post Queries, etc. These categoris are used to separate intended purpose and also keep the list of patterns from getting too large and inhibit browsing. Should you know the name of a pattern you can use the search tool in the Block Inserter to filter and find the one you need.</p>

							<p>Many patterns are available for use as part of the default BCGov base theme. They offer layouts such as Alternating Cards, Card with Image Overlay, Card with Under Image Portrait 2-Up, Cards Portrait 3-up, Detail Card with Icons, Hero Banner, Long Card, Quote, Small Quote with Image, and many more.</li>
							</p>

							<hr />

							<h2>Creating Custom Patterns</h2>

							<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/patterns-admin-menu.png'; ?>" alt="Enabling printing of an image" style="border: 1px solid #ccc; width: 200px; margin-left: 1rem; margin-bottom: 1rem; float: right" /> In the site admin click on "Patterns", this will bring up the list of custom patterns currently in your site, or it will be empty if starting new. </p>
							
							<p>Use the "Add new" button to begin building a custom pattern. Enter a name for the pattern and then build it as you would any other layout using the blocks or elements you want to include in your custom pattern.</p>

							<p>Once you've arranged the blocks to your liking, click on the "Publish" button to save your pattern.</p>

							<h3>Adding custom patterns to the pattern chooser</h3>

							<p>To add your custom pattern to the Pattern chooser, you need to add a new or existing "Pattern Group" located on the Custom Pattern tab of the block inspector area. Click on the "Add New Pattern Group" link or choose from any of the options listed.</p>

							<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/pattern-settings.png'; ?>" alt="Enabling printing of an image" style="border: 1px solid #ccc; width: 260px; margin-left: 1rem; margin-bottom: 1rem; float: right" />If creating a new group enter a "New Pattern Group Name" for your new pattern group and select the group option you just created.</p>

							<p>Click on the "Publish" button to save your new pattern category.</p>

							<p>Your custom pattern will now be available in the Pattern Chooser under the category you just added. It will come prefixed with the "Custom: " label, so if your group was called My Great Patterns, in the pattern chooser it will be labeled "Custom: My Great Patterns."</p>

							<h3>Making custom patterns searchable</h3>

							<p>You may have noticed at the top of the block and pattern chooser the ability to search for exiting blocks and patterns. To make your pattern easily findable without browsing to it you can add keywords to aid in finding your pattern.</p>

							<p>Add any keywords you feel make for better searchability to the "Add Related Search Term" under the "Search Related Terms" section found directly below the Pattern Groups.</p>

						</div><!-- /Patterns -->

						<div class="bcgov-block-theme-grid-content card">
							<h2 id="specific-block-patterns" class="bcgov-block-theme-title">Site Specific Patterns</h2>

							<p>Site specific patterns developed specifically for sites can also be inserted from their patterns. Look for  categories that identify the site by name. These patterns can be modified once applied to the page and can either be set up a Reusable Block or alternatively can be copy/pasted between pages or sections once altered.</p>

							<?php
							/*
							* CleanBC site specific patterns.
							*/
							if ( \Bcgov\Theme\Block\CLEANBC ) :
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
							if ( \Bcgov\Theme\Block\CLEANBC ) :
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


						<div class="bcgov-block-theme-grid-content card">
							
							<h2 id="printing" class="bcgov-block-theme-title">Print specific controls</h2>

							<div style="display: flex; gap: 2rem;">
								<div style="max-width: 360px;">
									<h3>Enabling images to print</h3>

									<p>To show an image when printing, or set the width of the image on a printed page, follow these steps:</p>

									<ol><li> Select the image on which you want to add these settings.</li>
									<li> In the Block Inspector, click on the "Other media settings" heading.</li>
									<li> To show the image when printing, check the box next to "Show image when printing".</li>
									<li> To set the maximum width of the block when printed, enter the desired width value in the "Max width on printed page" field as a % of the printed page width.</li></ol>
								</div>
								<div>
								<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/image-print-settings.png'; ?>" alt="Enabling printing of an image" style="border: 1px solid #ccc; width: 300px;" /><br />Enabling printing of an image</p>
								</div>
							</div>
							<p>By default images do not print. If you have an image that conveys information, such as a graph, and want it to print, you will need to enable this by selecting the <strong>Image block or the Media & Text block</strong> (currently the only two blocks supporting printing images).</p>

							<p>Using the "Max width on printed page (%)" slider or its related number firld will set the percentage an image takes on the printed page. This range can be from 10% to 100% width of the printed page width and is set to a default of 25%.</p>

							<p>Once you have set these options, you can preview the block to see how it will appear when printed.</p>
							
						</div><!-- /Print specific controls -->

						<div class="bcgov-block-theme-grid-content card">
							
							<h2 id="accessibility" class="bcgov-block-theme-title">Accessibility specific controls</h2>

							<div style="display: flex; gap: 2rem;">
								<div style="max-width: 360px;">
									<h3>Adding Aria labels to buttons</h3>

									<p>Aria labels, or Accessible Rich Internet Applications (ARIA) labels, should be used to enhance the accessibility of web content for users with disabilities. To this end when using buttons an option to add an Aria label is available in the Block Inspector panel.</p>

									<p>ARIA labels can provide additional context to assistive technology users, such as screen readers, in understanding the purpose and function of various elements on a webpage.</p>

								</div>
								<div>
								<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/aria-labels.png'; ?>" alt="Enabling printing of an image" style="border: 1px solid #ccc; width: 300px;" /><br />Adding an Aria label to a button</p>
								</div>
							</div>
							
							<p>ARIA labels should be concise and descriptive and should be used when the button label does not provide context as to the purpose of the link itself. For example a typical use case is a series of cards that simply say "Learn more" or "Read more". In this situation the Aria label should include the context of the link that the label fails to provide.</p>
							
						</div><!-- /Accessibility controls -->

						<h2 class="bcgov-block-theme-title">Advanced theme management</h2>

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

						<div class="bcgov-block-theme-grid-content card">
							
							<h2 id="custom-notice-banner" class="bcgov-block-theme-title">Custom Notice Banner</h2>
							
							<p>A notification banner on a website is a useful tool that can serve various purposes, including communicating important announcements, informing users about promotions and offers, providing urgent updates such as website maintenance, and acting as a call to action for users.</p>

							<p>The Custom Notice Banner can be enabled in the <a href="<?php echo esc_url( home_url() ); ?>/wp-admin/admin.php?page=bcgov-settings-menu">BCGov Block Theme Settings</a>  page and is to be used when a notification banner is required to relay a message of some importance. When enabling the notification banner on the website, it is essential to ensure that the message is clear and concise and does not detract from the overall purpose of the site itself.</p>

							<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/notice-settings.png'; ?>" alt="Settings for the cutom notice banner" style="border: 1px solid #ccc; width: 100%;" /><br />Settings for the cutom notice banner</p>

							<ol>
							<li> <strong>Enable Admin Notification:</strong> Show or hide the banner on the site.</li>
							<li> <strong>Homepage only:</strong> This refers to a setting that allows the banner to be displayed only on the homepage and not on other pages.</li>
							<li> <strong>Status (colour):</strong> The color used to indicate the status of the message. A number of colour options are available (which can be seen in the image above) and utilise preset colour options that conform to digitial accessibility standards for contrast.</li>
							<li> <strong>Embolden / Embiggen:</strong> These terms refer to the act of making the banner content appear more prominent by increasing the font size or bolding the text.</li>
							<li> <strong>Notification content:</strong> This refers to the message or information displayed in the notification banner itself, such as an alert or banner, that is meant to grab the attention of the user.</li>
							<li> <strong>Enable button:</strong> Show or hide the button inside the banner.</li>
							<li> <strong>Button Label:</strong> This is the text that appears inside the button.</li>
							<li> <strong>Accessibility button label:</strong> This is the text that is read by screen readers to describe the purpose or function of a button to users with disabilities. It is important to ensure that this label accurately reflects the button's purpose to ensure accessibility.</li>
							<li> <strong>UTM Campaign:</strong> A UTM campaign is a set of parameters added to a URL to track the effectiveness of online marketing campaigns. If the button is meant to track click throughs to a specific campaign, add its UTM identifier here. It is ok to leave this empty.</li>
							</ol>

							<p><span class="dashicons dashicons-warning" style="color: orange"></span> When enabled, the positioning of the banner in the page will be based on whether the header is fixed or scrolls with the page. For fixed headers it will appear below the header. For scrolling headers it will appear above.</p>

						</div><!-- /Custom Notice Banner -->

						<div class="bcgov-block-theme-grid-content card">
							
							<h2 id="polylang-navigation" class="bcgov-block-theme-title">Using Polylang for translations</h2>

							<h3>Adding the Language Switcher to navigation</h3>

							<p>Adding the Polylang Language Switcher is accomplished in the Template editor. It is best to associate the switcher with the site Navigation or main menu, but as of Polylang Pro version 3.2.8 the "Language switcher" block which enables the ability to move between languages. The language switcher block can now integrate directly with the main menu navigation if using the "ribbon navigation" styling. If the site design does not use the ribbon navigation, the site administrator needs to be creative with placement and layout.</p>

							<hr />

							<h2>Instructions</h2>
							<div style="display: flex; gap: 2rem;">
								<div style="max-width: 300px;">
									<p>Add the Language switcher block to the same group or row as the Navigation menu and align it as desired.</p>
									<p>With the Language switcher block in place choose the display options that best suit the desired look and feel. The primary options are as either a) a drop select or b) a list view.</p>
									<p><strong>Note the 'Displays as a dropdown' option must be deactivated to behave as a menu rather than a select box in sites that use the 'ribbon navigation' template part.</strong></p>
								</div>
								<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/ls-block-list.png'; ?>" alt="Language switcher in the list view" style="border: 1px solid #ccc; width: 300px;" /><br />Language switcher placement in the list view</p>
							</div>
							<div style="display: flex; gap: 2rem;">
								<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/ls-block-options.png'; ?>" alt="Language switcher options 1 drop down" style="border: 1px solid #ccc;width: 300px;" /><br />Language switcher options – select dropdown <br />(works well beside a hamburger menu control)</p>
								<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/ls-block-options-2.png'; ?>" alt="Language switcher options 2 list items" style="border: 1px solid #ccc;width: 300px;" /><br />Language switcher options – integrated as a menu item</p>
							</div>

							<hr/>

							<h3>Polylang translation of template parts</h3>

							<p>On sites where you wish to translate page elements in the header, footer or menus, if they are based on template parts, you will need to decouple (or detach) them from the template part system prior to adding a translation.</p>
							
							<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/detach-template-part.png'; ?>" alt="Detach template part" style="border: 1px solid #ccc; width: 600px" /><br />Detach the template part prior to translation – this is typically done in the Full Site Editor area under <strong>Appearance > Editor (beta)</strong>.</p>

							<p>If this is not done, Polylang and the Block Theme will not only fail to generate translations, but it will cause the site to generate many additional templates of the same name. This bug may be resolved at some point by the Polylang developer but until that happens detaching template parts is the only way to ensure you will be able to translate this content.</p>
							
						</div><!-- /Polylang -->


						<div class="bcgov-block-theme-grid-content card">
							
							<h2 id="custom-template-parts" class="bcgov-block-theme-title">Content Security Policy (CSP)</h2>
							
							<h3>What is a Content Security Policy?</h3>

							<p>A Content Security Policy (CSP) is an added layer of security that helps protect your website against cross-site scripting (XSS) attacks, data injection, and other types of code injection attacks. CSPs work by specifying which types of content can be loaded and executed on a website, and from which sources they can be loaded. This can help prevent malicious scripts from running on your website, as well as reduce the risk of data theft and other types of attacks.</p>

							<h3>How to Identify What Exception is Needed for a Custom Security Policy Exception</h3>

							<p>If you need to add a Custom Security Policy Exception, follow these steps to identify what exception is needed:</p>
							<ol>
								<li> Determine which specific resources or elements on your website are being blocked by the CSP. You may need to check the browser console or network tab for details on which resources are being blocked.</li>
								<li> Once you've identified the specific resources or elements that are being blocked, determine which type of exception is needed to allow those resources or elements to be loaded. For example, you may need to add an exception for a specific domain or subdomain, or you may need to allow a specific type of resource (such as scripts, images, or stylesheets).</li>
								<li> Once you've determined what type of exception is needed, navigate to the Custom Security Policy Exception form in your site Simply go to the <a href="<?php echo esc_url( home_url() ); ?>/wp-admin/themes.php?page=bcgov-block-theme-options#csp">Theme Options</a> settings.</li>
								<li> In the Custom Security Policy Exception form, enter the specific details of the exception that you need to add. This may include the domain or subdomain that needs to be allowed, the specific resource type that needs to be allowed, and any other relevant information.</li>
								<li> Once you've entered the details of the exception, click the "Save Changes" button to save the exception to your site's CSP.</li>
							</ol>

						</div><!-- /CSP -->

					</div> <!-- /Content -->
					
					<!-- Sidebar -->
					<aside class="bcgov-block-theme-grid-sidebar sticky">
						<div class="bcgov-block-theme-grid-sidebar-widget-area">

						<div class="bcgov-block-theme-widget">
								<h2 class="bcgov-block-theme-widget-title">On this page</h2>
								<ul class="bcgov-block-theme-useful-links">
								<li>
										<a href="#theme-options">Theme Options and Settings</a>
									</li>
									<li>
										<a href="#general">General editing and layout</a>
									</li>
									<li>
										<a href="#block-patterns">Patterns and Custom Patterns</a>
									</li>
									<li>
										<a href="#specific-block-patterns">Site Specific Patterns</a>
									</li>
									<li>
										<a href="#specific-blocks">Site Specific Blocks</a>
									</li>
									<li>
										<a href="#colour-palettes">Colour Palettes</a>
									</li>
									<li>
										<a href="#printing">Print specific controls</a>
									</li>
									<li>
										<a href="#accessibility">Accessibility specific controls</a>
									</li>
									
									<li>
										<p><strong>Advanced management</strong></p>
									</li>
									<li>
										<a href="#custom-templates">Customisable Templates</a>
									</li>
									<li>
										<a href="#custom-template-parts">Custom Template Parts</a>
									</li>
									<li>
										<a href="#custom-notice-banner">Custom Notice Banner</a>
									</li>
									<li>
										<a href="#polylang-navigation">Polylang for multilanguage translation</a>
									</li>
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

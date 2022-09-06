<?php

namespace Bcgov\Theme\Block;

?>

<h1 class="is-medium is-sub">BCGov Block Theme Core Features</h1>

<div class="auth-app-card card">
<h2>BCGov General Block Patterns</h2>
<ul>
<li><span class="dashicons dashicons-yes"></span>Alternating Cards</li>
<li><span class="dashicons dashicons-yes"></span>Card with Image Overlay</li>
<li><span class="dashicons dashicons-yes"></span>Card with Under Image Portrait 2-Up</li>
<li><span class="dashicons dashicons-yes"></span>Cards Portrait 3-up</li>
<li><span class="dashicons dashicons-yes"></span>Detail Card with Icons</li>
<li><span class="dashicons dashicons-yes"></span>Hero Banner</li>
<li><span class="dashicons dashicons-yes"></span>Long Card</li>
<li><span class="dashicons dashicons-yes"></span>Quote</li>
<li><span class="dashicons dashicons-yes"></span>Small Quote with Image</li>
</ul>
<h3>BCGov Full Page Patterns</h3>
<ul>
<li><span class="dashicons dashicons-yes"></span>Landing Page with Banner</li>
</ul>
<h3>BCGov General Navigation Patterns</h3>
<ul>
<li><span class="dashicons dashicons-yes"></span>Breadcrumb Navigation</li>
</ul>
<hr />
<h2>Instructions</h2>
<p>WordPress block patterns are a collection of pre-made design elements that you can use for creating custom content layouts faster. These patterns include items like pre-built multi-column layouts, media and text patterns, call-to-action patterns, headers, buttons, and more.</p>
<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/add-block-icon.png'; ?>" alt="style icon" style="float: right; width: 3rem;"/> To use block patterns, you need to edit the WordPress post or page where you want to use the block pattern. On the page/post edit screen, click on the Add Block button to open the block inserter. From there, switch to the Patterns tab to view available block patterns.</p>
<p>You can also view BCGov specific block patterns in different categories like general, headers, footers, pages, and more including any site specific patterns developed specifically for sites such as CleanBC.</p>
</div>

<div class="auth-app-card card">
<h2>Site Specific Block Patterns</h2>
<p>Site specific patterns developed specifically for sites can also be inserted from their patterns. Look for  categories that identify the site by name. These patterns can be modified once applied to the page and can either be set up a Reusable Block or alternatively can be copy/pasted between pages or sections once altered.</p>

<?php
/*
* CleanBC site specific patterns.
*/
if ( CLEANBC ) :
	?>

<h3>CleanBC Patterns</h3>
<h4>Banners – including special-use header and footer Patterns</h4>
<p>Available in the Patterns selector under <strong>CleanBC: Banners</strong>. When using these banner patterns placing one at the top of a page will cause the Breadcrumb navigation to move below the pattern content.</p>
<hr />

<h4>General in-page Patterns</h4>
<p>Available in the Patterns selector under <strong>CleanBC: General</strong>. Standard in-page content patterns for use in any project. Styles may vary based on the Active Site option selected in the <a href="<?php echo esc_url( home_url() ); ?>/wp-admin/admin.php?page=theme-options">BCGov Block Theme Options</a>.</p>
<hr />

<h4>Active Site Patterns</h4>
<p>Available in the Patterns selector under <strong>CleanBC: Post Query</strong> and <strong>CleanBC: Page Layouts</strong>. These patterns utilise features, content or functionality specific to the CleanBC site and are only available to CleanBC or other sites that set the Active Site option to CleanBC in the BCGov Block Theme Options.</p>
<?php endif; ?>

</div>

<div class="auth-app-card card">
<h2>Colour Palettes</h2>
<p>Colour palettes for the BCGov Block Theme are made up of 24 pre-defined colours. Any additional Active Site options will also include a palette with an equivalent number of colours in order to make the patterns useable across sites. An associated group of Gradients based on the 16 essential custom colours in the colour palette are also available.</p>
<h3>Example palettes</h3>
<p><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/block-theme/BCGOV-Colour-Palette-Swatches.jpg" alt="BCGov theme colour palette" style="width: 300px;" /> <img src="
                        <?php
						echo esc_url( get_template_directory_uri() );
						?>
/assets/images/block-theme/BCGOV-Gradients-Swatches.jpg" alt="BCGov theme colour palette" style="width: 300px;" /></p>
<p><img src="
	<?php
	echo esc_url( get_template_directory_uri() );
	?>
/assets/images/block-theme/CleanBC-Colour-Palette-Swatches.jpg" alt="CleanBC theme colour palette" style="width: 300px;" /> <img src="
	<?php
	echo esc_url( get_template_directory_uri() );
	?>
/assets/images/block-theme/CleanBC-Gradients-Swatches.jpg" alt="BCGov theme colour palette" style="width: 300px;" /></p>
<p>It should be noted that most blocks and patterns can be modified in the editor to override colour or gradient palette options to accomodate specific customisation needs.</p>
<hr />
<h2>Instructions</h2>
<p><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/style-icon.png'; ?>" alt="style icon" style="float: right; width: 3rem;"/> Global Styles Switcher allows users to switch the theme defaults to alternate colour palettes. Open <strong>Appearance > <a href="<?php echo esc_url( home_url() ); ?>/wp-admin/site-editor.php">Editor</a></strong> in the admin. You should see the theme variations in the global styles switcher by clicking on the syles icon in the top right corner.</p>

</div>


<div class="auth-app-card card">
<h2>Customisable Templates</h2>
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
</div>

<div class="auth-app-card card">
<h2>Customisable Template Parts</h2>
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
</div>


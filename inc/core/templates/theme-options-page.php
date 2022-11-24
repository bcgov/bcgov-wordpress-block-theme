<?php
/**
 * Theme admin functions.
 *
 * @package BCGov Block Theme
 */

namespace Bcgov\Theme\Block;

if ( ! defined( 'ABSPATH' ) ) {
	exit( '<h1>Direct access denied.</h1>' );
}

if ( ! current_user_can( 'manage_options' ) ) {
	exit( '<h1>You do not have sufficient permissions to edit this page.</h1>' );
}

$active_site_pattern_styles = esc_attr( get_option( 'active_site_pattern_styles' ) );
$header_effect              = esc_attr( get_option( 'header_effect' ) );
$enable_all_styles          = esc_attr( get_option( 'enable_all_styles' ) );

/**
* Add admin page content
*
* @since 1.0.3
*/
?>


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
		
		<?php settings_fields( 'bcgov-block-theme-settings-group' ); ?>
		<?php do_settings_sections( 'bcgov-block-theme-settings-group' ); ?>

		<div class="bcgov-block-theme-grid">

			<div class="bcgov-block-theme-grid-content">
				
				<div class="bcgov-block-theme-body">

					<h1 class="bcgov-block-theme-title" style="margin-bottom: 1rem;"><?php esc_html_e( 'Theme Options and Site Specific Settings', 'bcgov-block-theme' ); ?></h1>
					
					<p class="bcgov-block-theme-intro-text">
						<?php echo esc_html__( 'The following settings will allow adjusting specific behaviours of BCGov Block Theme.', 'bcgov-block-theme' ); ?>
					</p>
				</div> <!-- /Getting started -->

				<div class="bcgov-block-theme-grid-content card">
					<h3>Active Site Pattern Styles</h3>
					
					<p class="description">Choose the active site – this choice will impact how certain patterns display and which patterns and blocks may or may not be available.</p>

					<p><select id="active_site_pattern_styles" name="active_site_pattern_styles">
						<option value="bcgov" <?php if ( 'bcgov' === $active_site_pattern_styles ) { echo ' selected="selected"';} ?>>Default (BC Government Palette)</option>
						<option value="cleanbc" <?php if ( 'cleanbc' === $active_site_pattern_styles ) { echo ' selected="selected"';} ?>>Option 1 (CleanBC Brand Palette)</option>
						<!--option value="buybc" <?php if ( 'buybc' === $active_site_pattern_styles ) { echo ' selected="selected"';} ?>>Option 2 (BuyBC)</option-->
					</select></p>

					<p class="note"><span class="dashicons dashicons-info" style="color: dodgerblue"></span> <strong>Note:</strong> to change the theme colour palette you will need to do so in the styles option inside the Theme editor. See additional details in the <a href="<?php echo esc_url( home_url() ); ?>/wp-admin/themes.php?page=bcgov-block-theme-docs#colour-palettes">Block Theme documentation</a>.</p>

				</div> <!-- /Active Site Pattern Styles -->

				<div class="bcgov-block-theme-grid-content card">

					<h3 for="acf-field_630ac9b794e5d">Header Effect</h3>

					<p class="description">Choose the behaviour of the header bar when using the takeover menu. A "takeover menu" (set in the 'Overlay Menu' option in the template setting for Navigation) collapses the navigation options in a menu to the hamburger icon and opens the menu in a fullscreen overlay. This is the default menu for mobile but can also be used for desktop resolutions.</p>

					<ul>
						<li><label><input id="header_effect" name="header_effect" type="radio" value="scroll" <?php if ( 'scroll' === $header_effect ) { echo ' checked';} ?>>Scrolls with page</label></li>
						<li><label><input id="header_effect" name="header_effect" type="radio" value="fixed" <?php if ( 'fixed' === $header_effect ) { echo ' checked';} ?>>Fixed to top: always visible</label></li>
						<li><label><input id="header_effect" name="header_effect" type="radio" value="hides" <?php if ( 'hides' === $header_effect ) { echo ' checked';} ?>>Fixed to top: show/hide on scroll</label></li>
					</ul>

				</div> <!-- /Header Effect -->

				<div class="bcgov-block-theme-grid-content card">

					<h3>Styles and patterns</h3>

					<p class="description">Gain access to all available styles and patterns regardless of chosen site styles. Ie: choosing this option means if you have selected Buy BC as your Active Site you will also see CleanBC styles and patterns.</p>

					<ul>
						<li><label class="selected">
								<input id="enable_all_styles" name="enable_all_styles" type="checkbox" value="true" <?php if ( 'true' === $enable_all_styles ) { echo ' checked';} ?>> Enable all styles
						</label></li>
					</ul>
				</div>
					
			</div><!-- /Content -->

			<!-- Sidebar -->
			<aside class="bcgov-block-theme-grid-sidebar sticky">

				<div class="bcgov-block-theme-grid-sidebar-widget-area">

					<div class="bcgov-block-theme-widget">

						<h2 class="bcgov-block-theme-widget-title"><?php echo esc_html__( 'Save your changes', 'bcgov-block-theme' ); ?></h2>
						<p><?php echo esc_html__( 'If you make any changes you will need to save them.', 'bcgov-block-theme' ); ?></p>

						<?php
						 submit_button();
						 settings_errors();
						?>
						
					</div>

				</div>

			</aside>	
		
		</div> <!-- .grid -->
	</form>

</div> <!-- .container -->
	

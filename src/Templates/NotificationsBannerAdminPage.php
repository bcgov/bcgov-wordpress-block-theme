<?php

namespace Bcgov\Theme\Block\Templates;

if ( ! defined( 'ABSPATH' ) ) {
	exit( '<h1>Direct access denied.</h1>' );
}

if ( ! current_user_can( 'manage_options' ) ) {
	exit( '<h1>You do not have sufficient permissions to edit this page.</h1>' );
}

/**
 * Options page for Notification Banner in the Admin.
 *
 * @since 1.1.1
 *
 * @package Bcgov/Theme/Block
 */
class NotificationsBannerAdminPage {

	/**
     * Constructor.
     */
	public function __construct() {
		$this->build_notifications_banner_page();
	}

	/**
	 * Displays the options page for enabling a notifications banner. Using this feature
	 * will override a Network enabled banner. Banner is injected into the DOM and is
	 * set up in `src/scripts/public/notification-banner.js`.
	 *
	 * @return void
	 */
	public function build_notifications_banner_page() {

		$notification_enabled             = esc_attr( get_option( 'notification_enabled' ) );
		$notification_homepage_only       = esc_attr( get_option( 'notification_homepage_only' ) );
		$notification_label_bold          = esc_attr( get_option( 'notification_label_bold' ) );
		$notification_label_big           = esc_attr( get_option( 'notification_label_big' ) );
		$notification_status              = esc_attr( get_option( 'notification_status' ) );
		$notification_content             = esc_attr( get_option( 'notification_content' ) );
		$notification_button_enabled      = esc_attr( get_option( 'notification_button_enabled' ) );
		$notification_button_label        = esc_attr( get_option( 'notification_button_label' ) );
		$notification_button_aria_label   = esc_attr( get_option( 'notification_button_aria_label' ) );
		$notification_button_link         = untrailingslashit( esc_attr( get_option( 'notification_button_link' ) ) );
		$notification_button_utm_campaign = esc_attr( get_option( 'notification_button_utm_campaign' ) );

		?>

		<div class="bcgov-block-theme-page-header">
			<div class="bcgov-block-theme-page-header__container">
				<div class="bcgov-block-theme-page-header__branding">
					<h2><?php esc_html_e( 'Admin Notifications Banner Settings', 'bcgov-block-theme' ); ?> <span class=" <?php echo $notification_enabled ? 'enabled' : 'disabled'; ?> pill">&nbsp;<?php echo $notification_enabled ? 'enabled' : 'disabled'; ?>&nbsp;</span></h2>
				</div>
				<div class="bcgov-block-theme-page-header__tagline">
					<span class="bcgov-block-theme-page-header__tagline-text">
						<?php esc_html_e( 'Theme repository:', 'bcgov-block-theme' ); ?> <a href="https://github.com/bcgov/bcgov-wordpress-block-theme"><?php echo esc_html__( 'Github', 'bcgov-block-theme' ); ?></a>
					</span>
				</div>
			</div>
		</div><!-- /Header -->

		<div class="wrap bcgov-block-theme-container">

			<form method="post" action="options.php">

				<?php
				settings_fields( 'bcgov-block-theme-notification-banner-group' );
				do_settings_sections( 'bcgov-block-theme-notification-banner-group' );
				settings_errors();
				?>

				<div class="bcgov-block-theme-grid">

					<div class="bcgov-block-theme-grid-content">

						<div class="bcgov-block-theme-body pb-0">

							<h1 class="bcgov-block-theme-title" style="margin-bottom: 1rem;">Notification Banner Settings</h1>

							<?php
							if ( $notification_enabled ) :
								$notification_class  = $notification_label_bold ? 'bold ' : '';
								$notification_class .= $notification_label_big ? 'big' : '';
								?>
								<div class="notification <?php echo esc_html( $notification_status ); ?>" role="status">
									<div class="inner-container">
										<p class="<?php echo esc_attr( $notification_class ); ?>"><?php echo esc_html( $notification_content ); ?></p>
										<?php if ( $notification_button_enabled ) : ?>
											<button class="<?php if ( $notification_label_bold ) { echo 'bold '; } ?><?php if ( $notification_label_big ) { echo 'big'; } ?>"
											onclick="location.href='<?php echo esc_html( $notification_button_link ); ?><?php if ( ! empty( $notification_button_utm_campaign ) ) { echo '?utm_campaign=' . esc_html( $notification_button_utm_campaign ); } ?>'" <?php if ( $notification_button_aria_label ) : ?> aria-label="<?php echo esc_html( $notification_button_aria_label ); ?>" <?php endif; ?>><?php echo esc_html( $notification_button_label ); ?></button>
										<?php endif; ?>
									</div>
								</div>
							<?php endif; ?>
							
							<div><?php submit_button(); ?></div>
						</div> <!-- /Getting started -->

						<div class="bcgov-block-theme-grid-content card">
						<h3 id="active-pattern"><?php esc_html_e( 'Notification Settings', 'bcgov-block-theme' ); ?></h3>
							
							<div class="field-grid">
								<div class="field">
									<div class="label">
										<label for="notification_enabled">Enable Admin Notification</label>
									</div>
									<div class="input">
										<div class="true-false">
											<label>
												<input 	type="checkbox" 
														id="notification_enabled" 
														name="notification_enabled" 
														value="1"
														<?php echo $notification_enabled ? 'checked="checked' : ''; ?>
														/>
												<span class="message">Enable / disable banner</span>
											</label>
										</div>
									</div>
								</div>
								<div class="field">
									<div class="label">
										<label for="notification_homepage_only">Homepage only</label>
									</div>
									<div class="input">
										<div class="true-false">
											<label>
													<input 	type="checkbox" 
															id="notification_homepage_only" 				
															name="notification_homepage_only" 
															value="1"
															<?php echo $notification_homepage_only ? 'checked="checked' : ''; ?>
															/>
													<span class="message">Show only on the homepage</span>
											</label>
										</div>
									</div>
								</div>
								<div class="field">
									<div class="label">
										<label for="notification_status">Status (colour)</label>
									</div>
									<div class="input">
										<select id="notification_status" class="" name="notification_status">
											<option <?php echo 'notification-default' === $notification_status ? 'selected' : ''; ?> 
											value="notification-default" >Default (BCGov blue)</option>
											<option <?php echo 'notification-green' === $notification_status ? 'selected' : ''; ?> 
											value="notification-green">Notice (green)</option>
											<option <?php echo 'notification-white' === $notification_status ? 'selected' : ''; ?> 
											value="notification-white">Minimalist (white)</option>
											<option <?php echo 'notification-black' === $notification_status ? 'selected' : ''; ?> 
											value="notification-black">Cancelled (dark)</option>
											<option <?php echo 'notification-yellow' === $notification_status ? 'selected' : ''; ?> 
											value="notification-yellow">Warning (yellow)</option>
											<option <?php echo 'notification-orange' === $notification_status ? 'selected' : ''; ?> 
											value="notification-orange">Alert (orange)</option>
											<option <?php echo 'notification-red' === $notification_status ? 'selected' : ''; ?> value="notification-red">Emergency (red)</option>
										</select>
										<p class="description">Choose a colour for the notification</p>
									</div>
								</div>
								<div class="field">
									<div class="label">
										<label for="notification_label_bold">Embolden / Embiggen</label>
									</div>
									<div class="input">
										<div class="true-false">
										<label>
												<input 	type="checkbox" 
														id="notification_label_bold" 				
														name="notification_label_bold" 
														value="1" 
														<?php
														if ( $notification_label_bold ) {
															echo ' checked="checked"';
														}
														?>
														/>
												<span class="message">Make the text bold</span> </label>

											<label>
												<input 	type="checkbox" 
														id="notification_label_big" 				
														name="notification_label_big" 
														value="1" 
														<?php
														if ( $notification_label_big ) {
															echo ' checked="checked"';
														}
														?>
														/>
												<span class="message">Make the text large</span> </label>
										</div>
									</div>
								</div>
								<div class="field full">
									<div class="label">
										<label for="notification_content">Notification content</label>
									</div>
									<div class="input">
										<div class="input-wrap"><input type="text" id="notification_content" name="notification_content" value="<?php if ( ! empty( $notification_content ) ) { echo esc_attr( $notification_content ); } ?>"></div>
										<p class="description">Please enter the notification information in plain text. HTML or rich text markup is not allowed. To add a link, select the 'enable button' checkbox below.</p>
									</div>
								</div>
								<div class="field">
									<div class="label">
										<label for="notification_button_enabled">Enable button</label>
									</div>
									<div class="input">
										<div class="true-false">
											<label>
												<input 	type="checkbox" 
														id="notification_button_enabled" 				
														name="notification_button_enabled" 
														value="1" 
														<?php
														if ( $notification_button_enabled ) {
															echo ' checked="checked"';
														}
														?>
														/>
												<span class="message">Add a button / link</span> </label>
										</div>
									</div>
								</div>
								<div class="field">
									<div class="label">
										<label for="notification_button_label">Button Label</label>
									</div>
									<div class="input">
										<div class="input-wrap"><input type="text" id="notification_button_label" name="notification_button_label"
										required
										value="<?php if ( ! empty( $notification_button_label ) ) { echo esc_attr( $notification_button_label ); } ?>" maxlength="32"></div>
									</div>
								</div>
								<div class="field half">
									<div class="label">
										<label for="notification_button_aria_label">Accessibility button label</label>
									</div>
									<div class="input">
										<div class="input-wrap"><input type="text" id="notification_button_aria_label" name="notification_button_aria_label" value="<?php if ( ! empty( $notification_button_aria_label ) ) { echo esc_attr( $notification_button_aria_label ); } ?>"></div>
										<p class="description">If the button label is not informative, add a more descriptive label designed to help assistive technology (e.g. screen readers). This will not be visible.</p>
									</div>
								</div>
								<div class="field third">
									<div class="label">
										<label for="notification_button_link">Button link / destination URL</label>
									</div>
									<div class="input">
										<div class="input-wrap"><input type="url" id="notification_button_link" name="notification_button_link" value="<?php if ( ! empty( $notification_button_link ) ) { echo esc_attr( $notification_button_link ); } ?>"></div>
										<p class="description">Please enter the destination link as a fully qualified URL inlcuding the https://...</p>
									</div>
								</div>
								<div class="field">
									<div class="label">
										<label for="notification_button_utm">UTM Campaign</label>
									</div>
									<div class="input">
										<div class="input-wrap"><input type="text" id="notification_button_utm_campaign" name="notification_button_utm_campaign" value="<?php if ( ! empty( $notification_button_utm_campaign ) ) { echo esc_attr( $notification_button_utm_campaign ); } ?>"></div>
										<p class="description">Analytics tracking code</p>
									</div>
								</div>
							</div>
							<div class="flex-right"><?php submit_button(); ?></div>
						</div> <!-- /Active Site Pattern Styles -->
					</div> <!-- .grid -->
			</form>
		</div> <!-- .container -->

		<style>
			#wpfooter {
				position: fixed
			}
		</style>
		<?php
	}
}

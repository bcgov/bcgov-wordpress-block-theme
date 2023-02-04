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

$notice_enabled             = esc_attr( get_option( 'notice_enabled' ) );
$notice_homepage_only       = esc_attr( get_option( 'notice_homepage_only' ) );
$notice_label_bold          = esc_attr( get_option( 'notice_label_bold' ) );
$notice_label_big           = esc_attr( get_option( 'notice_label_big' ) );
$notice_status              = esc_attr( get_option( 'notice_status' ) );
$notice_content             = esc_attr( get_option( 'notice_content' ) );
$notice_button_enabled      = esc_attr( get_option( 'notice_button_enabled' ) );
$notice_button_label        = esc_attr( get_option( 'notice_button_label' ) );
$notice_button_aria_label   = esc_attr( get_option( 'notice_button_aria_label' ) );
$notice_button_link         = untrailingslashit( esc_attr( get_option( 'notice_button_link' ) ) );
$notice_button_utm_campaign = esc_attr( get_option( 'notice_button_utm_campaign' ) );

?>


<div class="bcgov-block-theme-page-header">
	<div class="bcgov-block-theme-page-header__container">
		<div class="bcgov-block-theme-page-header__branding">
			<h2>Admin Notifications Banner  <span class="
            <?php
            if ( $notice_enabled ) {  echo 'enabled';
			} else { echo 'disabled'; }
			?>
             pill">&nbsp;
 <?php
	if ( $notice_enabled ) { echo 'enabled';
	} else { echo 'disabled'; }
	?>
&nbsp;</span></h2>
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

					<h1 class="bcgov-block-theme-title" style="margin-bottom: 1rem;">Theme Options and Site Specific Settings</h1>

					<?php if ( $notice_enabled ) : ?>
						<div class="notice <?php echo esc_html( $notice_status ); ?>" role="status">
							<div class="inner-container">
								<p class="
                                <?php
                                if ( $notice_label_bold ) : echo 'bold ';
endif;
								if ( $notice_label_big ) :  echo 'big';
endif;
								?>
                                "><?php echo esc_html( $notice_content ); ?></p>
								<?php if ( $notice_button_enabled ) : ?>
									<button class="
                                    <?php
                                    if ( $notice_label_bold ) : echo 'bold ';
endif;
									if ( $notice_label_big ) :  echo 'big';
endif;
									?>
                                    "" onclick="location.href='<?php echo esc_html( $notice_button_link ); ?><?php if ( ! empty( $notice_button_utm_campaign ) ) { echo '?utm_campaign=' . esc_html( $notice_button_utm_campaign ); } ?>'" <?php if ( $notice_button_aria_label ) : ?> aria-label="<?php echo esc_html( $notice_button_aria_label ); ?>" <?php endif; ?>><?php echo esc_html( $notice_button_label ); ?></button>
								<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
					
					<div><?php submit_button(); ?></div>
				</div> <!-- /Getting started -->

				<div class="bcgov-block-theme-grid-content card">
					<h3 id="active-pattern">Notification Settings</h3>
					
					<div class="field-grid">
						<div class="field">
							<div class="label">
								<label for="notice_enabled">Enable Admin Notification</label>
							</div>
							<div class="input">
								<div class="true-false">
									<label>
										<input 	type="checkbox" 
												id="notice_enabled" 
												name="notice_enabled" 
												value="1" 
												<?php
                                                if ( $notice_enabled ) {
													echo ' checked="checked"';
												}
                                                ?>
												/>
										<span class="message">Enable / disable banner</span>
									</label>
								</div>
							</div>
						</div>
						<div class="field">
							<div class="label">
								<label for="notice_homepage_only">Homepage only</label>
							</div>
							<div class="input">
								<div class="true-false">
									<label>
											<input 	type="checkbox" 
													id="notice_homepage_only" 				
													name="notice_homepage_only" 
													value="1" 
													<?php
                                                    if ( $notice_homepage_only ) {
														echo ' checked="checked"';
													}
                                                    ?>
													/>
											<span class="message">Show only on the homepage</span>
									</label>
								</div>
							</div>
						</div>
						<div class="field">
							<div class="label">
								<label for="notice_status">Status (colour)</label>
							</div>
							<div class="input">
								<select id="notice_status" class="" name="notice_status">
									<option value="notice-default" 
									<?php
									if ( 'notice-default' === $notice_status ) {
											  echo ' selected';
									}
									?>
                                            >Default (BCGov blue)</option>
									<option value="notice-green" 
									<?php
									if ( 'notice-green' === $notice_status ) {
											  echo ' selected';
									}
									?>
                                            >Notice (green)</option>
									<option value="notice-white" 
									<?php
									if ( 'notice-white' === $notice_status ) {
											  echo ' selected';
									}
									?>
                                            >Minimalist (white)</option>
									<option value="notice-black" 
									<?php
									if ( 'notice-black' === $notice_status ) {
											  echo ' selected';
									}
									?>
                                            >Cancelled (dark)</option>
									<option value="notice-yellow" 
									<?php
									if ( 'notice-yellow' === $notice_status ) {
											  echo ' selected';
									}
									?>
                                            >Warning (yellow)</option>
									<option value="notice-orange" 
									<?php
									if ( 'notice-orange' === $notice_status ) {
											  echo ' selected';
									}
									?>
                                            >Alert (orange)</option>
									<option value="notice-red" 
									<?php
									if ( 'notice-red' === $notice_status ) {
											  echo ' selected';
									}
									?>
                                            >Emergency (red)</option>
								</select>
								<p class="description">Choose a colour for the notice</p>
							</div>
						</div>
						<div class="field">
							<div class="label">
								<label for="notice_label_bold">Embolden / Embiggen</label>
							</div>
							<div class="input">
								<div class="true-false">
								<label>
										<input 	type="checkbox" 
												id="notice_label_bold" 				
												name="notice_label_bold" 
												value="1" 
												<?php
                                                if ( $notice_label_bold ) {
													echo ' checked="checked"';
												}
                                                ?>
												/>
										<span class="message">Make the text bold</span> </label>

									<label>
										<input 	type="checkbox" 
												id="notice_label_big" 				
												name="notice_label_big" 
												value="1" 
												<?php
                                                if ( $notice_label_big ) {
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
								<label for="notice_content">Notification content</label>
							</div>
							<div class="input">
								<div class="input-wrap"><input type="text" id="notice_content" name="notice_content" value="<?php if ( ! empty( $notice_content ) ) { echo esc_attr( $notice_content ); } ?>"></div>
								<p class="description">Please enter the notice information in plain text. HTML or rich text markup is not allowed. To add a link, select the 'enable button' checkbox below.</p>
							</div>
						</div>
						<div class="field">
							<div class="label">
								<label for="notice_button_enabled">Enable button</label>
							</div>
							<div class="input">
								<div class="true-false">
									<label>
										<input 	type="checkbox" 
												id="notice_button_enabled" 				
												name="notice_button_enabled" 
												value="1" 
												<?php
                                                if ( $notice_button_enabled ) {
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
								<label for="notice_button_label">Button Label</label>
							</div>
							<div class="input">
								<div class="input-wrap"><input type="text" id="notice_button_label" name="notice_button_label"
								required
								value="<?php if ( ! empty( $notice_button_label ) ) { echo esc_attr( $notice_button_label ); } ?>" maxlength="32"></div>
							</div>
						</div>
						<div class="field half">
							<div class="label">
								<label for="notice_button_aria_label">Accessibility button label</label>
							</div>
							<div class="input">
								<div class="input-wrap"><input type="text" id="notice_button_aria_label" name="notice_button_aria_label" value="<?php if ( ! empty( $notice_button_aria_label ) ) { echo esc_attr( $notice_button_aria_label ); } ?>"></div>
								<p class="description">If the button label is not informative, add a more descriptive label designed to help assistive technology (e.g. screen readers). This will not be visible.</p>
							</div>
						</div>
						<div class="field third">
							<div class="label">
								<label for="notice_button_link">Button link / destination URL</label>
							</div>
							<div class="input">
								<div class="input-wrap"><input type="url" id="notice_button_link" name="notice_button_link" value="<?php if ( ! empty( $notice_button_link ) ) { echo esc_attr( $notice_button_link ); } ?>"></div>
								<p class="description">Please enter the destination link as a fully qualified URL inlcuding the https://...</p>
							</div>
						</div>
						<div class="field">
							<div class="label">
								<label for="notice_button_utm">UTM Campaign</label>
							</div>
							<div class="input">
								<div class="input-wrap"><input type="text" id="notice_button_utm_campaign" name="notice_button_utm_campaign" value="<?php if ( ! empty( $notice_button_utm_campaign ) ) { echo esc_attr( $notice_button_utm_campaign ); } ?>"></div>
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

<?php

namespace Bcgov\Theme\Block\Actions;

/**
 * A settings page for the BCGov Block Theme, which registers the theme settings and allows users to modify them.
 *
 * @since 1.1.2
 */
class BcgovSettings {

    /**
     * Constructor.
     */
    public function __construct() {
         add_action( 'admin_init', [ $this, 'bcgov_register_settings' ] );
    }

    /**
     * Adds a top level menu to WordPress admin menu to host BCGov settings.
     *
     * @since 1.1.2
     * @return void
     */
    public function bcgov_add_settings_menu() {
         // Add new top level menu to host all BCGov settings.
        add_menu_page(
            'BCGov Settings',
            'BCGov Block Theme Settings',
            'manage_options',
            'bcgov-settings-menu',
            [ $this, 'bcgov_settings_page' ],
            'dashicons-admin-generic',
            77
        );
    }

    /**
     * Displays the BCGov Block Theme settings page.
     *
     * @since 1.1.2
     * @return void
     */
    public function bcgov_settings_page() {
        // Must check that the user has the required capability.
        if ( ! current_user_can( 'manage_options' ) ) {
            die( esc_html( __( 'You do not have sufficient permissions to access this page.' ) ) );
        }

        // Now display the settings editing screen.
        echo '<div class="wrap">';

        // Header.
        echo '<h2>BCGov Block Theme Admin Settings</h2>';

        // Settings form.
        echo '<form name="form1" method="post" action="options.php">';
        settings_fields( 'bcgov-settings-group' );
        do_settings_sections( 'bcgov-theme-settings' );

        echo '<p class="submit">';
        echo '<input type="submit" name="Submit" class="button-primary" value="Save Changes" /> &nbsp;&nbsp;&nbsp;Please press "Save Changes" to update the settings.';
        echo '</p>';

        echo '</form>';
        echo '</div>';
    }


    /**
     * Registers BCGov Block Theme settings and sanitizes user input.
     *
     * @since 1.1.2
     * @return void
     */
    public function bcgov_register_settings() {
        // Register callbacks to sanitize user input:
        // For BCGov Admin Notification settings.
        register_setting(
            'bcgov-settings-group',
            'bcgov_admin_notification_settings',
            [ $this, 'sanitize_bcgov_admin_notification_settings' ]
        );

        // For BCGov Custom Pattern settings.
        register_setting(
            'bcgov-settings-group',
            'bcgov_custom_patterns_settings',
            [ $this, 'sanitize_bcgov_custom_patterns_settings' ]
        );

        // For BCGov Custom Pattern settings.
        register_setting(
            'bcgov-settings-group',
            'bcgov_external_link_icons_settings',
            [ $this, 'sanitize_bcgov_external_link_icons_settings' ]
        );

        // Add settings sections:
        // For BCGov Admin Notification settings.
        add_settings_section(
            'bcgov_admin_notification_settings',
            'Appearance > Custom Notice Banner',
            [ $this, 'bcgov_admin_notification_settings' ],
            'bcgov-theme-settings'
        );

        // For BCGov Custom Pattern settings.
        add_settings_section(
            'bcgov_custom_patterns_settings',
            'Custom Post Type > Patterns',
            [ $this, 'bcgov_custom_patterns_settings' ],
            'bcgov-theme-settings'
        );

        // For External Link Icons setting.
        add_settings_section(
            'bcgov_external_link_icons_settings',
            'Show External Link Icons',
            [ $this, 'bcgov_external_link_icons_settings' ],
            'bcgov-theme-settings'
        );
    }

    /**
     * Sanitize and save the Custom Pattern checkbox value.
     *
     * @param array $input The settings input.
     * @return array The sanitized input.
     */
    public function sanitize_bcgov_custom_patterns_settings( $input ) {
        // Sanitize the checkbox value.
        $input['show_custom_patterns'] = isset( $input['show_custom_patterns'] ) ? 1 : 0;
        return $input;
    }

    /**
     * Sanitize and save the Admin Custom Notification checkbox value.
     *
     * @param array $input The settings input.
     * @return array The sanitized input.
     */
    public function sanitize_bcgov_admin_notification_settings( $input ) {
        // Sanitize the checkbox value.
        $input['show_admin_notification'] = isset( $input['show_admin_notification'] ) ? 1 : 0;
        return $input;
    }

    /**
     * Sanitize and save the External Link Icons checkbox value.
     *
     * @param array $input The settings input.
     * @return array The sanitized input.
     */
    public function sanitize_bcgov_external_link_icons_settings( $input ) {
        // Sanitize the checkbox value.
        $input['show_external_link_icons'] = isset( $input['show_external_link_icons'] ) ? 1 : 0;
        return $input;
    }

    /**
     * Displays the Admin Custom Notification settings section description.
     * Includes a checkbox for enabling/disabling the display of Admin Custom Notifications.
     *
     * @since 1.1.2
     * @return void
     */
    public function bcgov_admin_notification_settings() {
        $value                   = get_option( 'bcgov_admin_notification_settings' ) ?? [];
        $show_admin_notification = isset( $value['show_admin_notification'] ) ? $value['show_admin_notification'] : 0;
		?>
        <input type="checkbox" name="bcgov_admin_notification_settings[show_admin_notification]" id="bcgov_admin_notification" value="1" <?php checked( $show_admin_notification, 1 ); ?> />
        <label for="bcgov_admin_notification">Check to show the Custom Notice Banner tool</label>
		<?php
    }

    /**
     * Displays the Custom Pattern settings section description.
     * Includes a checkbox for enabling/disabling the display of custom patterns.
     *
     * @since 1.1.2
     * @return void
     */
    public function bcgov_custom_patterns_settings() {
        $value                = get_option( 'bcgov_custom_patterns_settings' ) ?? [];
        $show_custom_patterns = isset( $value['show_custom_patterns'] ) ? $value['show_custom_patterns'] : 0;
		?>
        <input type="checkbox" name="bcgov_custom_patterns_settings[show_custom_patterns]" id="bcgov_custom_patterns" value="1" <?php checked( $show_custom_patterns, 1 ); ?> />
        <label for="bcgov_custom_patterns">Check to show Custom Patterns in the admin</label>
        <p>Note: Does not disable or remove custom patterns already added to the site.</p>
		<?php
    }


     /**
      * Enables the display of external links with an icon. Works in tandem with dom-loader.js frontend script.
      * Includes a checkbox for enabling/disabling the display of an icon with inline or button based links.
      *
      * @since 1.2.5
      * @return void
      */
    public function bcgov_external_link_icons_settings() {
        $value                    = get_option( 'bcgov_external_link_icons_settings' ) ?? [];
        $show_external_link_icons = isset( $value['show_external_link_icons'] ) ? $value['show_external_link_icons'] : 0;
		?>
        <input type="checkbox" name="bcgov_external_link_icons_settings[show_external_link_icons]" id="bcgov_external_link_icons" value="1" <?php checked( $show_external_link_icons, 1 ); ?> />
        <label for="bcgov_external_link_icons">Check to show external links with an icon on the visitor facing website.</label>
        <p>Note: "External Links" are any link (whether inline or using the buttons block) in the content region of the website that point to an external domain.</p>
		<?php
    }
}

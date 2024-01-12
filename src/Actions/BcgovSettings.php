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

		// Check if the site name nonce field is set in the $_POST data.
		if ( isset( $_POST['bcgov_google_site_name_nonce'] ) ) {

			if ( wp_verify_nonce( $nonce, 'bcgov_google_site_name_nonce' ) ) {
				if ( isset( $_POST['bcgov_google_site_name'] ) ) {
					$google_site_name = sanitize_text_field( $_POST['bcgov_google_site_name'] );
					update_option( 'bcgov_google_site_name_settings', $google_site_name );
				}
			}
		}

        // Check if the documentation url nonce field is set in the $_POST data.
		if ( isset( $_POST['bcgov_documentation_url_nonce'] ) ) {

			if ( wp_verify_nonce( $doc_nonce, 'bcgov_documentation_url_nonce' ) ) {
				if ( isset( $_POST['bcgov_documentation_url'] ) ) {
					$documentation_url = sanitize_text_field( $_POST['bcgov_documentation_url'] );
					update_option( 'bcgov_documentation_url_settings', $documentation_url );
				}
			}
		}

        // Get the current Google Site Name setting.
        $google_site_name = get_option( 'bcgov_google_site_name_settings', '' );

        $nonce = wp_create_nonce( 'bcgov_google_site_name_nonce' );

        // Get the current Site Documentation URL setting.
        $documentation_url = get_option( 'bcgov_documentation_url_settings', '' );

        // Now display the settings editing screen.
        echo '<div class="wrap">';

        // Header.
        echo '<h2>BCGov Block Theme Admin Settings</h2>';

        // Settings form.
        echo '<form name="form1" method="post" action="options.php">';
        settings_fields( 'bcgov-settings-group' );
        do_settings_sections( 'bcgov-theme-settings' );

        echo '<input type="hidden" name="bcgov_google_site_name_nonce" value="<?php echo esc_attr( $nonce ); ?>">';
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

        // Add the Google Site Name setting.
        register_setting(
            'bcgov-settings-group',
            'bcgov_google_site_name_settings',
            [ $this, 'sanitize_bcgov_google_site_name_settings' ]
        );

        // Add the Documentation URL setting.
        register_setting(
            'bcgov-settings-group',
            'bcgov_documentation_url_settings',
            'sanitize_text_field'
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

        // For Google Site Name setting.
        add_settings_section(
            'bcgov_google_site_name_settings',
            'Google Site Name',
            [ $this, 'bcgov_google_site_name_settings' ],
            'bcgov-theme-settings'
        );

        // For Site Documentation URL setting.
        add_settings_section(
            'bcgov_documentation_url_settings',
            'Site Documentation URL',
            [ $this, 'bcgov_documentation_url_settings' ],
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
     * Sanitize and save the Google Site Name text value.
     *
     * @param array $input The settings input.
     * @return array The sanitized input.
     */
    public function sanitize_bcgov_google_site_name_settings( $input ) {
        // Sanitize the text field value.
        $google_site_name = sanitize_text_field( $input );

        return $google_site_name;
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

    /**
     * Sets the Google Site Name.
     *
     * @since 1.2.9
     * @return void
     */
    public function bcgov_google_site_name_settings() {
        if ( isset( $_POST['bcgov_google_site_name_nonce'] ) ) {

			if ( wp_verify_nonce( $nonce, 'bcgov_google_site_name_nonce' ) ) {
				if ( isset( $_POST['bcgov_google_site_name'] ) ) {
					$google_site_name = sanitize_text_field( $_POST['bcgov_google_site_name'] );
					update_option( 'bcgov_google_site_name', $google_site_name );
				}
			}
		}

        // Get the current Google Site Name setting.
        $google_site_name = get_option( 'bcgov_google_site_name_settings', '' );

        if ( is_array( $google_site_name ) ) {
            $google_site_name = implode( ' ', $google_site_name );
        } else {
            $google_site_name = (string) $google_site_name;
        }

        // Get the default Site Name from WordPress settings.
        $default_site_name = get_bloginfo( 'name' );

        // If the Google Site Name is not set, use the default Site Name as the default value.
        if ( empty( $google_site_name ) ) {
            $google_site_name = $default_site_name;
        }

        $domain = wp_parse_url( get_site_url() );

		?>
        <input type="text" name="bcgov_google_site_name_settings" value="<?php echo esc_attr( $google_site_name ); ?>" placeholder="Enter your Google Site Name here" style="width: 320px" />

        <p class="description" style="max-width: 120ch;">This value will be used to tell the Google Search index the preferred Site Name. The name default is the Site Title in the WordPress site settings but can be overridden here for finer control of the Google Site Name required to differentiate the site from the inferred Gov.bc.ca site naming in Google organic search results. Note this feature provides an Alternate Site Name of <strong><?php echo esc_html( $domain['host'] ); ?></strong> so it is not necessary to use the domain as the preferred Site&nbsp;Name.</p>
		<?php
    }

    /**
     * Sets the Site Documentation URL.
     *
     * @since 1.3.0
     * @return void
     */
    public function bcgov_documentation_url_settings() {
        // Get the current Site Documentation URL setting.
        $documentation_url = get_option( 'bcgov_documentation_url_settings', '' );
		?>
        <input type="text" name="bcgov_documentation_url_settings" value="<?php echo esc_attr( $documentation_url ); ?>" placeholder="Enter your Site Documentation URL here" style="width: 320px" />
        <?php
        echo '<p class="description" style="max-width: 120ch;">' . esc_attr__( 'This value will be used to generate a link to your site-specific documentation URL. If it is set, the link will appear on the "Using the BCGov Block Theme" page.' ) . '</p>';
    }
}

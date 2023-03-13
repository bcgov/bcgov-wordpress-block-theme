<?php

namespace Bcgov\Theme\Block\Utils;

if ( ! defined( 'ABSPATH' ) ) {
	exit( '<h1>Direct access denied.</h1>' );
}

 /**
  * A utility class handles adding, rendering and permanently dismissing notices for the WordPress admin area.
  *
  * @since 1.1.3
  *
  * @package Bcgov/Theme/Block
  */
class AdminNotices {

	/**
	 * The instance of the AdminNotices class.
	 *
	 * @var AdminNotices|null The instance of the class.
	 */
	private static $instance;

	/**
	 * The object that holds the notices.
	 *
	 * @var stdClass The object that holds the notices.
	 */
	private $admin_notices;

	/**
	 * The types of notices that can be added.
	 *
	 * @var string A comma-separated string of notice types.
	 */
	const TYPES = 'error,warning,info,success';

	/**
	 * Constructor.
	 * Initializes the admin notices object and adds the `action_admin_notices` function to the `admin_notices` hook.
	 */
	public function __construct() {
		$this->admin_notices = new \stdClass();
		foreach ( explode( ',', self::TYPES ) as $type ) {
			$this->admin_notices->{$type} = [];
		}
		add_action( 'admin_notices', [ $this, 'action_admin_notices' ], 99 );
	}

	/**
	 * Returns the instance of the class if it already exists, otherwise creates a new instance and returns it.
	 *
	 * @return self The instance of the class.
     */
	public static function get_instance() {
		if ( ! ( self::$instance instanceof self ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Render admin notices to the user.
	 *
	 * Checks if the dismiss option was clicked and updates the corresponding option.
	 * Loops through each notice and prints its HTML if it has not been dismissed.
	 */
	public function action_admin_notices() {

		$dismiss_option = filter_input( INPUT_GET, htmlspecialchars( 'bcgov_block_theme_dismiss' ) );

		if ( is_string( $dismiss_option ) ) {
			update_option( "bcgov_block_theme_dismissed_$dismiss_option", true );
			wp_die();
		}

		foreach ( explode( ',', self::TYPES ) as $type ) {

			foreach ( $this->admin_notices->{$type} as $admin_notice ) {

				$dismiss_url = add_query_arg(
                    [
						'bcgov_block_theme_dismiss' => $admin_notice->dismiss_option,
					],
                    admin_url()
                );

				if ( ! get_option( "bcgov_block_theme_dismissed_{$admin_notice->dismiss_option}" ) ) {

					$can_dismiss = '';
					if ( $admin_notice->dismiss_option ) {
						$can_dismiss = ' is-dismissible';
					}

					printf( '<div class="notice bcgov-block-theme-notice notice-%1$s%2$s"  data-dismiss-url="%3$s"><p><strong>%4$s: </strong> %5$s</p></div>', esc_attr( $type ), esc_attr( $can_dismiss ), esc_url( $dismiss_url ), esc_html( $admin_notice->title ), esc_html( $admin_notice->message ) );

				}
			}
		}
	}

	/**
	 * Add an error notice.
	 *
	 * @param string      $title The title of the notice.
	 * @param string      $message The message of the notice.
	 * @param string|bool $dismiss_option The dismiss option for the notice.
	 */
	public function error( $title, $message, $dismiss_option = false ) {
		$this->notice( 'error', $title, $message, $dismiss_option );
	}

	/**
	 * Add a warning notice.
	 *
	 * @param string      $title The title of the notice.
	 * @param string      $message The message of the notice.
	 * @param string|bool $dismiss_option The dismiss option for the notice.
	 */
	public function warning( $title, $message, $dismiss_option = false ) {
		$this->notice( 'warning', $title, $message, $dismiss_option );
	}

	/**
	 * Add a success notice.
	 *
	 * @param string      $title The title of the notice.
	 * @param string      $message The message of the notice.
	 * @param string|bool $dismiss_option The dismiss option for the notice.
	 */
	public function success( $title, $message, $dismiss_option = false ) {
		$this->notice( 'success', $title, $message, $dismiss_option );
	}

	/**
	 * Add an info notice.
	 *
	 * @param string      $title The title of the notice.
	 * @param string      $message The message of the notice.
	 * @param string|bool $dismiss_option The dismiss option for the notice.
	 */
	public function info( $title, $message, $dismiss_option = false ) {
		$this->notice( 'info', $title, $message, $dismiss_option );
	}

	/**
	 * Add a notice to the corresponding notice array based on the type provided.
	 *
	 * @param string      $type The type of notice. Can be one of 'error', 'warning', 'info', 'success'.
	 * @param string      $title The title of the notice.
	 * @param string      $message The message of the notice.
	 * @param string|bool $dismiss_option The dismiss option for the notice. This should be a unique label as it will be used to permanently hide the banner. Defaults to false if not provided.
     */
	private function notice( $type, $title, $message, $dismiss_option ) {
		$notice                 = new \stdClass();
		$notice->title          = $title;
		$notice->message        = $message;
		$notice->dismiss_option = $dismiss_option;

		$this->admin_notices->{$type}[] = $notice;
	}
}

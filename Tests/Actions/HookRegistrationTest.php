<?php
namespace Bcgov\Theme\Block\Tests\Actions;

use Bcgov\Theme\Block\Actions\BcgovSettings;
use Bcgov\Theme\Block\Actions\RegisterCustomPatternsPostType;
use Bcgov\Theme\Block\Actions\ThemeSupports;
use Bcgov\Theme\Block\Setup;
use Bcgov\Theme\Block\Tests\CommonTestCase;
use Brain\Monkey;

/**
 * Tests hook registration and side-effect-free constructors for theme actions.
 */
class HookRegistrationTest extends CommonTestCase {

	/**
	 * Constructors must not execute behavior or register WordPress hooks.
	 *
	 * @return void
	 */
	public function test_constructors_are_side_effect_free(): void {
		new ThemeSupports();
		new RegisterCustomPatternsPostType();
		new BcgovSettings();

		$this->assertFalse( Monkey\Actions\has( 'after_setup_theme' ) );
		$this->assertFalse( Monkey\Actions\has( 'admin_init' ) );
		$this->assertFalse( Monkey\Actions\has( 'admin_menu' ) );
		$this->assertFalse( Monkey\Actions\has( 'init' ) );
		$this->assertFalse( Monkey\Filters\has( 'wp_kses_allowed_html' ) );
		$this->assertFalse( Monkey\Filters\has( 'get_custom_logo' ) );
	}

	/**
	 * Setup centrally registers the hooks for theme support, custom patterns, and settings.
	 *
	 * @return void
	 */
	public function test_setup_init_registers_action_hooks(): void {
		if ( ! defined( 'ABSPATH' ) ) {
			// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedConstantFound -- WordPress defines this constant.
			define( 'ABSPATH', __DIR__ . '/' );
		}

		Monkey\Functions\stubs( [ 'remove_theme_support' ] );

		$setup = new Setup();
		$this->assertFalse( Monkey\Actions\has( 'after_setup_theme' ) );

		$setup->init();

		$this->assertTrue( Monkey\Actions\has( 'after_setup_theme' ) );
		$this->assertTrue( Monkey\Actions\has( 'admin_init' ) );
		$this->assertTrue( Monkey\Actions\has( 'admin_menu' ) );
		$this->assertTrue( Monkey\Actions\has( 'admin_notices' ) );
		$this->assertTrue( Monkey\Actions\has( 'init' ) );
		$this->assertTrue( Monkey\Filters\has( 'wp_kses_allowed_html' ) );
		$this->assertTrue( Monkey\Filters\has( 'get_custom_logo' ) );
	}
}

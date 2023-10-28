<?php
namespace Bcgov\Theme\Block\Tests;

use PHPUnit\Framework\TestCase;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Brain\Monkey;

/**
 * An abstraction over WP_Mock to do things fast
 * It also uses the snapshot trait
 */
class CommonTestCase extends TestCase {


    /**
     * Setup which calls \WP_Mock setup.
     *
     * @return void
     */
    protected function setUp(): void {
        parent::setUp();
        Monkey\setUp();
        Monkey\Functions\stubEscapeFunctions();
        Monkey\Functions\stubTranslationFunctions();
        Monkey\Functions\stubs(
            [
                'get_query_var',
                'esc_attr',
                'wp_kses',
                'WP_DONTENT_DIR',
                'get_option'        => [ $this, 'get_option' ],
                'wp_parse_args'     => [ $this, 'wp_parse_args' ],
                'wp_nonce_field',
                'get_post_meta'     => [ $this, 'get_post_meta' ],
                'maybe_unserialize' => [ $this, 'maybe_unserialize' ],
                'sanitize_key',
                'sanitize_html_class',

            ]
        );
        Monkey\Functions\when( 'is_sticky' )->justReturn( true );
        Monkey\Functions\when( 'get_permalink' )->justReturn( 'https://gov.bc.ca/wordpress' );
        Monkey\Functions\when( 'get_template_directory_uri' )->justReturn( '/' );
        Monkey\Functions\when( 'get_current_blog_id' )->justReturn( 1 );
        Monkey\Functions\when( 'get_the_ID' )->justReturn( 1 );
        Monkey\Functions\when( 'get_post_type' )->justReturn( 'page' );
    }

    /**
     * Teardown which calls \WP_Mock tearDown
     *
     * @return void
     */
    protected function tearDown(): void {
        Monkey\tearDown();
        parent::tearDown();
    }

    /**
     * Mock WordPress get_options.
     *
     * @param string $option
     * @return string
     */
    public function get_option( $option ) {
        $output = '';
        if ( 'timezone_string' === $option ) {
            $output = 'America/Vancouver';
        }
        return $output;
    }


    /**
     * Mock WordPress get_post_meta.
     *
     * @param int $id  The id.
     * @return array
     */
	//phpcs:ignore
	public function get_post_meta( int $id = 0 ): array {
        return [
            'plugin_name_test_testInput' => 'testInputValue',
        ];
    }

    /**
     * Mock function for WordPress maybe_unserialie.
     *
     * @param string $str  The value.
     * @return mixed
     */
    public function maybe_unserialize( string $str ) {
		//phpcs:ignore
		if ( serialize( false ) === $str || @unserialize( $str ) !== false ) {
			//phpcs:ignore
			$str = unserialize( $str );
        }
        return $str;
    }

    /**
     * Mock function for WordPress wp_parse_args
     *
     * @param array $args  The $args to merge into defaults.
     * @param array $defaults  The defaults, for the merge.
     * @return array
     */
    public function wp_parse_args( array $args, array $defaults = [] ): array {
        return array_merge( $defaults, $args );
    }
}

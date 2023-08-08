<?php
namespace Bcgov\Theme\Block\Tests\Filters;

use Bcgov\Theme\Block\Tests\CommonTestCase;
use Bcgov\Theme\Block\Actions\PatternsSetup;
use \Brain\Monkey;

/**
 * Testing for PatternsSetup.
 */
class PatternsSetupTest extends CommonTestCase {
    /**
     * The PatternsSetup instance.
     *
     * @var PatternsSetup
     */
    protected $pattern;

    /**
     * Used for setup of each test.
     *
     * @inheritDoc
     */
    public function setUp() :void {
        parent::setUp();
        $this->pattern = new PatternsSetup();
    }


    /**
     * Test the block pattern category standard configuration.
     *
     * @return void
     */
    public function test_Register_Block_Pattern_Categories_Standard(): void {
        define( 'Bcgov\Theme\Block\OPTIONAL', false );
        $expected = $this->get_base_patterns();
        $this->assertEquals( $expected, $this->pattern->get_block_pattern_categories() );
    }

    /**
     * Test the block pattern category standard configuration with the option flag set to 'true' to get cleanbc options.
     *
     * @return void
     */
    public function test_Register_Block_Pattern_Categories_With_Enable_All_Styles(): void {
        $expected = array_merge( $this->get_base_patterns(), $this->get_cleanbc_patterns() );
        Monkey\Functions\when( 'get_option' )->justReturn( 'true' );
        $this->assertEquals( $expected, $this->pattern->get_block_pattern_categories() );
    }

    /**
     * Test the block pattern category standard configuration with the custom filter.
     *
     * @return void
     */
    public function test_Register_Block_Pattern_Categories_With_Filtered_Option(): void {
        $filtered_patterns = [
            'test-pattern-1' => [ 'label' => __( 'Test Pattern 1', 'bcgov_blocks_theme' ) ],
			'test-pattern-2' => [ 'label' => __( 'Test Pattern 2', 'bcgov_blocks_theme' ) ],
        ];
        $expected          = array_merge( $this->get_base_patterns(), $filtered_patterns );
        Monkey\Functions\when( 'apply_filters' )->justReturn( array_merge( $this->get_base_patterns(), $filtered_patterns ) );
        $this->assertEquals( $expected, $this->pattern->get_block_pattern_categories() );
    }


    /**
     * Test the block pattern standard configuration.
     *
     * @return void
     */
    public function test_Register_Block_Pattern_Standard(): void {
        $patterns = $this->pattern->get_block_patterns();
        $this->assertContains( 'header-default', $patterns );
        $this->assertContains( 'bcgov-detail-card-with-icons', $patterns );
        $this->assertContains( 'general-hero', $patterns );
        $this->assertContains( 'bcgov-page-layout-example', $patterns );
        $this->assertNotContains( 'optional/banners/optional-info-cover-banner', $patterns );
    }

    /**
     * Test the block pattern standard configuration with option to select all, but not OPTIONAL flag.
     *
     * @return void
     */
    public function test_Register_Block_Pattern_Option_Select_All(): void {
        Monkey\Functions\when( 'get_option' )->justReturn( 'true' );
        $patterns = $this->pattern->get_block_patterns();
        $this->assertContains( 'header-default', $patterns );
        $this->assertContains( 'bcgov-detail-card-with-icons', $patterns );
        $this->assertContains( 'general-hero', $patterns );
        $this->assertContains( 'bcgov-page-layout-example', $patterns );
        $this->assertContains( 'optional/banners/optional-info-cover-banner', $patterns );
    }


    /**
     * Test the block pattern standard configuration but with filter.
     *
     * @return void
     */
    public function test_Register_Block_Pattern_With_Filters(): void {
        $my_patterns = [
            'test-1',
            'test-2',
        ];
        Monkey\Functions\when( 'apply_filters' )->justReturn( $my_patterns );
        $patterns = $this->pattern->get_block_patterns();
        $this->assertContains( 'test-1', $patterns );
        $this->assertContains( 'test-2', $patterns );
        $this->assertNotContains( 'general-hero', $patterns );
        $this->assertNotContains( 'bcgov-page-layout-example', $patterns );
        $this->assertNotContains( 'optional/banners/optional-info-cover-banner', $patterns );
    }

    /**
     * Returns expected base patterns.
     *
     * @return array
     */
    private function get_base_patterns(): array {
        return [
			'bcgov-blocks-theme-general'       => [ 'label' => __( 'BCGov: General', 'bcgov_blocks_theme' ) ],
			'bcgov-blocks-theme-header-footer' => [ 'label' => __( 'BCGov: Header/Footer', 'bcgov_blocks_theme' ) ],
			'bcgov-blocks-theme-page-layouts'  => [ 'label' => __( 'BCGov: Page Layouts', 'bcgov_blocks_theme' ) ],
			'bcgov-blocks-theme-query'         => [ 'label' => __( 'BCGov: Post Query', 'bcgov_blocks_theme' ) ],
		];
    }

    /**
     * Returns expected cleanbc patterns.
     *
     * @return array
     */
    private function get_cleanbc_patterns(): array {
        return [
            'optional-patterns-general' => [ 'label' => __( 'Optional: General', 'bcgov_blocks_theme' ) ],
			'optional-patterns-banners' => [ 'label' => __( 'Optional: Banners', 'bcgov_blocks_theme' ) ],
        ];
    }

}

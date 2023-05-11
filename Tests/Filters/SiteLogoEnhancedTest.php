<?php
namespace Bcgov\Theme\Block\Tests\Filters;

use Bcgov\Theme\Block\Tests\CommonTestCase;
use Bcgov\Theme\Block\Filters\SiteLogoEnhanced;

/**
 * SiteLogoEnhanced test.
 */
class SiteLogoEnhancedTest extends CommonTestCase {
    /**
     * The SiteLogoEnhanced instance.
     *
     * @var SiteLogoEnhanced
     */
    protected $logo;

    /**
     * Used for setup of each test.
     *
     * @inheritDoc
     */
    public function setUp() :void {
        parent::setUp();
        $this->logo = new SiteLogoEnhanced();
    }


    /**
     * Test the site logo with no block contents, should return empty string.
     *
     * @return void
     */
    public function test_Add_Block_Contents_With_No_Site_Logo(): void {
        $this->assertEquals( '', $this->logo->add_site_logo_attributes() );
    }


    /**
     * Test to convert site logo, with no attributes.
     *
     * @return void
     */
    public function test_Add_SiteLogo_With_No_Attributes(): void {
        $block            = [
            'blockName' => 'core/site-logo',
            'attrs'     => [],
        ];
        $block_content    = '<div class="wp-block-site-logo"><a href="/"><img src="logo.jpg" /></a></div>';
        $expected_results = '<div class="wp-block-site-logo"><a href="/"><img  src="logo.jpg" /></a></div>';
        $this->assertEquals( $expected_results, $this->logo->add_site_logo_attributes( $block_content, $block ) );
    }


    /**
     * Test to convert site logo, with an inverted attribute, to include print mode.
     *
     * @return void
     */
    public function test_Add_SiteLogo_With_Inverted_True(): void {
        $block            = [
            'blockName' => 'core/site-logo',
            'attrs'     => [
                'inverted' => true,
            ],
        ];
        $block_content    = '<div class="wp-block-site-logo"><a href="/"><img src="logo.jpg" /></a></div>';
        $expected_results = '<div class="wp-block-site-logo"><a href="/"><img data-print="inverted" src="logo.jpg" /></a></div>';
        $this->assertEquals( $expected_results, $this->logo->add_site_logo_attributes( $block_content, $block ) );
    }

}

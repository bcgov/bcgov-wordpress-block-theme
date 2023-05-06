<?php
namespace Bcgov\Theme\Block\Tests\Filters;

use Bcgov\Theme\Block\Tests\CommonTestCase;
use Bcgov\Theme\Block\Filters\ButtonEnhanced;

/**
 * Test placeholder to make the checklist work for now.
 */
class ButtonEnhancedTest extends CommonTestCase {
    /**
     * The buttonEnhanced instance.
     *
     * @var ButtonEnhanced
     */
    protected $button;

    /**
     * Used for setup of each test.
     *
     * @inheritDoc
     */
    public function setUp() :void {
        parent::setUp();
        $this->button = new ButtonEnhanced();
    }


    /**
     * Test the button with no block contents, should return empty string.
     *
     * @return void
     */
    public function test_Add_Button_With_Attributes_no_block_content(): void {
        $this->assertEquals( '', $this->button->add_button_attributes() );
    }


    /**
     * Test to convert button, with no attributes, but update for the image size class.
     *
     * @return void
     */
    public function test_Add_Button_With_Attributes_as_button(): void {
        $block            = [
            'blockName' => 'core/button',
            'attrs'     => [],
        ];
        $block_content    = '<div class="wp-block-button"><a class="wp-block-button__link">my_link</a></div>';
        $expected_results = '<div class="wp-block-button has-size-regular"><a tabindex="0"  class="wp-block-button__link">my_link</a></div>';
        $this->assertEquals( $expected_results, $this->button->add_button_attributes( $block_content, $block ) );
    }

    /**
     * Test to convert button, with a svg icon to add icon classes.
     *
     * @return void
     */
    public function test_Add_Button_With_Attributes_as_button_with_SVG(): void {
        $block            = [
            'blockName' => 'core/button',
            'attrs'     => [
                'svgIcon' => 'my-icon_house',
            ],
        ];
        $block_content    = '<div class="wp-block-button"><a class="wp-block-button__link">my_link</a></div>';
        $expected_results = '<div class="wp-block-button has-size-regular"><a tabindex="0"  class="wp-block-button__link icon icon-my-icon_house">my_link</a></div>';
        $this->assertEquals( $expected_results, $this->button->add_button_attributes( $block_content, $block ) );
    }

    /**
     * Test to convert button, with a label, to include aria-label.
     *
     * @return void
     */
    public function test_Add_Button_With_Attributes_as_button_with_label(): void {
        $block            = [
            'blockName' => 'core/button',
            'attrs'     => [
                'label' => 'There is a label here',
            ],
        ];
        $block_content    = '<div class="wp-block-button"><a class="wp-block-button__link">my_link</a></div>';
        $expected_results = '<div class="wp-block-button has-size-regular"><a tabindex="0" aria-label="There is a label here" class="wp-block-button__link">my_link</a></div>';
        $this->assertEquals( $expected_results, $this->button->add_button_attributes( $block_content, $block ) );
    }

}

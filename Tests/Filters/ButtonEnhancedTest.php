<?php

use PHPUnit\Framework\TestCase;
use Bcgov\Theme\Block\Filters\ButtonEnhanced;
use \Brain\Monkey;

/**
 * Test placeholder to make the checklist work for now.
 */
class ButtonEnhancedTest extends TestCase {
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

/**
 * Mock function for WordPress wp_parse_args
 *
 * @todo To find a more effective way of mocking WordPress functions
 * @param array $args  The $args to merge into defaults.
 * @param array $defaults  The defaults, for the merge.
 * @return array
 */
function wp_parse_args( array $args, array $defaults = [] ): array {
    return array_merge( $defaults, $args );
}

/**
 * Mock function for WordPress esc_attr
 *
 * @todo To find a more effective way of mocking WordPress functions
 * @param string $attr  The attributes to escape.
 * @return string
 */
function esc_attr( string $attr ): string {
    return $attr;
}

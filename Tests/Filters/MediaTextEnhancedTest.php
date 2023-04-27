<?php

use PHPUnit\Framework\TestCase;
use Bcgov\Theme\Block\Filters\MediaTextEnhanced;

/**
 * Test for the MediaTextEnhanced filter
 */
class MediaTextEnhancedTest extends TestCase {
    /**
     * The MediaTextEnhanced instance.
     *
     * @var MediaTextEnhanced
     */
    protected $media;

    /**
     * Used for setup of each test.
     *
     * @inheritDoc
     */
    public function setUp() :void {
        $this->media = new MediaTextEnhanced();
    }


    /**
     * Test the button with no block contents, should return empty string.
     *
     * @return void
     */
    public function test_Add_Media_Text_With_Attributes_no_block_content(): void {
        $this->assertEquals( '', $this->media->add_media_text_attributes() );
    }


    /**
     * Test to convert button, with no attributes, but update for the image size class.
     *
     * @return void
     */
    public function test_Add_Media_Text_With_Attributes_with_no_atts(): void {
        $block            = [
            'blockName' => 'core/media-text',
            'attrs'     => [],
        ];
        $block_content    = '<img src="https://gov.bc.ca/test.jpg" />';
        $expected_results = '<img   data-print-width="25" src="https://gov.bc.ca/test.jpg" />';
        $this->assertEquals( $expected_results, $this->media->add_media_text_attributes( $block_content, $block ) );
    }

    /**
     * Test to convert button, with a svg icon to add icon classes.
     *
     * @return void
     */
    public function test_Add_Media_Text_With_Attributes_as_button_with_title(): void {
        $block            = [
            'blockName' => 'core/media-text',
            'attrs'     => [
                'title' => 'This is a title',
            ],
        ];
        $block_content    = '<img src="https://gov.bc.ca/test.jpg" />';
        $expected_results = '<img title="This is a title"  data-print-width="25" src="https://gov.bc.ca/test.jpg" />';
        $this->assertEquals( $expected_results, $this->media->add_media_text_attributes( $block_content, $block ) );
    }

    /**
     * Test to convert button, with a label, to include aria-label.
     *
     * @return void
     */
    public function test_Add_Media_Text_With_Attributes_as_button_with_print_mode(): void {
        $block            = [
            'blockName' => 'core/media-text',
            'attrs'     => [
                'printMode' => true,
            ],
        ];
        $block_content    = '<img src="https://gov.bc.ca/test.jpg" />';
        $expected_results = '<img  data-print="true" data-print-width="25" src="https://gov.bc.ca/test.jpg" />';
        $this->assertEquals( $expected_results, $this->media->add_media_text_attributes( $block_content, $block ) );
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

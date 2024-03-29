<?php
/**
 * Sets the default styling for Gravity Forms
 *
 * @since 1.4.0
 *
 * @package Bcgov/Theme/Block
 */

namespace Bcgov\Theme\Block\Filters;

/**
 * This class allows you to set the default style options for Gravity Forms. By default, these are set to use values that
 * are consistent with BC Gov styling. These values can be changed as needed.
 *
 * @since 1.4.0
 */
class GravityFormsStyles {

	/**
	 * Set default style values for Gravity Forms plugin
	 *
	 * @param  string $styles Current styles for the Gravity Form.
	 * @return string
	 */
	public function add_gravity_forms_default_styles( $styles ) {
		$gf_default_styles = [
            'theme'                        => '',
            'inputSize'                    => 'md',
            'inputBorderRadius'            => '5',
            'inputBorderColor'             => '#606060',
            'inputBackgroundColor'         => '#ffffff',
            'inputColor'                   => '#606060',
            'inputPrimaryColor'            => '#3B5A94',
            'labelFontSize'                => '16',
            'labelColor'                   => '#606060',
            'descriptionFontSize'          => '14',
            'descriptionColor'             => '#606060',
            'buttonPrimaryBackgroundColor' => '#003366',
            'buttonPrimaryColor'           => '#ffffff',
		];
        if ( $styles ) {
            // If styles are supplied in the argument, merge those styles with ours, prioritizing ours, then return the result as JSON.
            $decoded_styles = json_decode( $styles, true );
            array_replace( $decoded_styles, $gf_default_styles );
		    return wp_json_encode( $decoded_styles );
        } else {
            // Otherwise, return our default styles as JSON.
            return wp_json_encode( $gf_default_styles );
        }
	}
}

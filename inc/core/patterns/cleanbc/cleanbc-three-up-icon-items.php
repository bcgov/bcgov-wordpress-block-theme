<?php

namespace Bcgov\Theme\Block;

/**
 * CleanBC Three Up Icon Items block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'CleanBC Three Up Icon Items', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"><!-- wp:heading {"level":3} -->
	<h3>B.C.\'s climate action will:</h3>
	<!-- /wp:heading -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"20%"} -->
	<div class="wp-block-column" style="flex-basis:20%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"septenary","width":100,"className":"is-style-icon is-style-blank","svgIcon":"default","clickFlag":true} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-icon is-style-blank"><a class="wp-block-button__link has-septenary-background-color has-background">help protect nature</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"30%"} -->
	<div class="wp-block-column" style="flex-basis:30%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"senary","width":100,"className":"is-style-icon is-style-blank","svgIcon":"default","clickFlag":true} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-icon is-style-blank"><a class="wp-block-button__link has-senary-background-color has-background">sustainably build our economy and</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","width":100,"className":"is-style-icon is-style-blank","svgIcon":"auto","clickFlag":true} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-icon is-style-blank"><a class="wp-block-button__link has-accent-background-color has-background">help us prepare for the changes that are impacting our lives.</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
];

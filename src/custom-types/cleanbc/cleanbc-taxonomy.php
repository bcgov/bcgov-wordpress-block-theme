<?php
/**
 * CleanBC Action custom taxonomy.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

$args = [
	'labels'       => [
		'name'          => 'Projects',
		'singular_name' => 'Project',
	],
	'public'       => true,
	'hierarchical' => true,
];

register_taxonomy( 'projects', [ 'cleanbc-actions' ], $args );

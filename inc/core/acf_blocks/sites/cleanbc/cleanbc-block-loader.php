<?php
/**
 *  Register a CleanBC Project Query block.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

acf_register_block_type(
	[
		'name'            => 'project',
		'title'           => __( 'CleanBC Project Query' ),
		'description'     => __( 'A CleanBC custom project query block.' ),
		'render_template' => get_template_directory() . '/inc/core/acf_blocks/sites/cleanbc/project-query.php',
		'category'        => 'formatting',
		'icon'            => 'list-view',
		'keywords'        => [ 'project', 'list' ],
	]
);

<?php
/**
 * Project Query ACF Block Render Template.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

namespace Bcgov\Theme\Block;

$elId = 'project-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
    $elId = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'project';
if ( ! empty( $block['className'] ) ) {
    $className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $className .= ' align' . $block['align'];
}

$blockCategory       = $block['data']['project_category'];
$blockCategoryUpdate = array_values( $block['data'] );

if ( null === $blockCategory ) {
    $blockCategory = $blockCategoryUpdate[0];
}

$projects = get_posts(
    [
		'post_type'     => 'project',
		'category__and' => $blockCategory,
	]
);

// Category details for Edit screen.
$category_detail = get_field( 'project_category' );
$numItems        = count( $category_detail );
$index           = 0;
$categoryList    = '';

foreach ( $category_detail as $cd ) {
    $catName       = get_cat_name( $cd );
    $categoryList .= $catName;
    if ( ++$index !== $numItems ) {
        $categoryList .= ' + ';
    }
}

$html_output = sprintf(
    '<div class="show-in-admin admin-placeholder" style="padding-top:1rem;"><h3>Project Query Block Placeholder</h3><h4>Category settings: <span style="color: var(--wp--preset--color--secondary-brand)">%1$s</span></h4><p>There are %2$s Project(s) in these categories.</p></div>',
    $categoryList,
    count( $projects )
);

$allowed_html = [
    'div'    => [
        'class' => [],
        'style' => [],
    ],
    'h3'     => [],
    'h4'     => [],
    'p'      => [],
    'span'   => [
        'style' => [],
    ],
    'strong' => [],
];

echo wp_kses( "{$html_output}", $allowed_html );


if ( $projects ) : ?>

<!-- wp:group {"align":"wide","style":{"border":{"radius":"1rem"}}} -->
<div id="<?php echo esc_html( $elId ); ?>" class="<?php echo esc_html( $className ); ?> wp-block-group alignwide" style="border-radius:1rem">


	<?php foreach ( $projects as $project ) : ?>
   
<!-- wp:columns {"style":{"border":{"radius":"1rem"}}} -->
<div class="wp-block-columns hide-in-admin" style="border-radius:1rem"><!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"3rem","left":"3rem"}}},"className":"content-column"} -->
<div class="wp-block-column is-vertically-aligned-center content-column" style="padding-top:2rem;padding-right:0;padding-bottom:2rem;padding-left:0;flex-basis:66.66%"><!-- wp:heading -->
<h2><?php echo esc_html( get_the_title( $project->ID ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
		<?php echo esc_html( get_the_excerpt( $project->ID ) ); ?>

<!-- wp:button {"style":{"spacing":{"padding":{"top":"2rem","right":"0","bottom":"2rem","left":"0"}}} -->
<div class="wp-block-button has-size-regular is-style-underline"><a href="<?php echo esc_html( get_permalink( $project->ID ) ); ?>" tabindex="0" class="wp-block-button__link has-secondary-brand-color has-text-color">View Action</a></div>
<!-- /wp:button -->
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%","backgroundColor":"transparent","className":"image-column"} -->
<div class="wp-block-column is-vertically-aligned-center image-column has-transparent-background-color has-background" style="flex-basis:33.33%"><!-- wp:paragraph -->
		<?php
		$posttags = get_the_tags( $project->ID );

		if ( $posttags ) {
			foreach ( $posttags as $tagItem ) {
				echo esc_html( $tagItem->name . ' ' );
			}
		}
		?>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
	<?php endforeach; ?>
<!-- /wp:group -->
<?php endif; ?>

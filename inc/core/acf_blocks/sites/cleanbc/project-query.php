<?php
/**
 * Project Query ACF Block Render Template.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */

namespace Bcgov\Theme\Block;

// Create id and class attributes allowing for custom "className" and "align" values.
$elId = 'project-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
    $elId = $block['anchor'];
}
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

// Content details for Edit screen.
get_field( 'project_category' ) ? $category_detail = get_field( 'project_category' ) : $category_detail = [];
$numItems     = count( $category_detail );
$index        = 0;
$categoryList = '';

foreach ( $category_detail as $cd ) {
    $catName       = get_cat_name( $cd );
    $categoryList .= $catName;
    if ( ++$index !== $numItems ) {
        $categoryList .= ' + ';
    }
}

$html_output = sprintf(
    '<div class="show-in-admin admin-placeholder" style="padding-top:1rem;padding-bottom:0;"><h4 style="padding-bottom:0;margin-bottom:0;font-size:1.5rem!important;font-weight:300!important;">Project/Action Query Block Placeholder</h4><div style="margin-top:4px;">Please choose at least one Action + Project category combination</div><p><strong>Categories: <span style="color: var(--wp--preset--color--secondary-brand)">%1$s</span></strong></p><p>There are %2$s Project(s) in these categories.</p></div>',
    $categoryList ? $categoryList : 'No categories selected...',
    $numItems
);

$allowed_html = [
    'div'    => [
        'class' => [],
        'style' => [],
    ],
    'h4'     => [
        'class' => [],
        'style' => [],
    ],
    'p'      => [],
    'span'   => [
        'style' => [],
    ],
    'strong' => [],
];

echo wp_kses( "{$html_output}", $allowed_html );

if ( $projects ) { ?>

<div id="<?php echo esc_html( $elId ); ?>" class="<?php echo esc_html( $className ); ?> wp-block-group alignwide" style="border-radius:1rem;padding-top:1rem;">
    <?php
    // Content details for Save screen.
    foreach ( $projects as $project ) :
		?>
   
        <div class="wp-block-columns wp-container-25 hide-in-admin" style="padding-top:2rem;border-radius:1rem">

            <div class="wp-block-column is-vertically-aligned-center content-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:66.66%">

                <h4><?php echo esc_html( get_the_title( $project->ID ) ); ?></h4>

                <?php echo wp_kses_post( get_the_content( null, false, $project->ID ) ); ?>

            </div>

            <div class="wp-block-column is-vertically-aligned-top image-column has-transparent-background-color has-background has-text-align-right has-gray-60-color has-text-color" style="flex-basis:33.33%">

                <?php
                $posttags = get_the_tags( $project->ID );

                if ( $posttags ) {
                    $num_tags = count( $posttags );
                    $index    = 0;
                    $tag_list = '';

                    foreach ( $posttags as $tag_item ) {
                        $tag_list .= $tag_item->name;
                        if ( ++$index !== $num_tags ) {
                            $tag_list .= ', ';
                        }
                    }
                    echo esc_html( $tag_list . ' ' );
                }
                ?>

            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php } else { ?>
<div class="no-results">
    <p class="hide-in-admin">Sorry, there are no projects for this category.</p>
</div>
<?php } ?>

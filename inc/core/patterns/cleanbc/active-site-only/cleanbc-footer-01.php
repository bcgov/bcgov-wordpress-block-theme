<?php
/**
 * CleanBC Footer block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return [
	'title'      => __( 'CleanBC Footer', 'bcgov_blocks_theme' ),
	'categories' => [ 'cleanbc-patterns-general' ],
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"primary-brand","className":"cleanbc-subfooter","layout":{"contentSize":"1440px","wideSize":"100%"}} -->
<div class="wp-block-group alignfull cleanbc-subfooter has-primary-brand-background-color has-background"><!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:navigation {"ref":1167,"textColor":"white","overlayMenu":"never","className":"footer-menu","layout":{"type":"flex","flexWrap":"wrap"}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"logo-columns"} -->
<div class="wp-block-columns logo-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":495,"width":300,"height":100,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/sites/cleanbc//cleanbc-logo-white.svg" alt="" class="wp-image-495" width="300" height="100"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":""} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"1rem","topRight":"1rem","bottomLeft":"0px","bottomRight":"0px"}}},"backgroundColor":"secondary-brand","className":"help"} -->
<div class="wp-block-group help has-secondary-brand-background-color has-background" style="border-top-left-radius:1rem;border-top-right-radius:1rem;border-bottom-left-radius:0px;border-bottom-right-radius:0px"><!-- wp:paragraph {"align":"center","textColor":"white","className":"is-style-custom","fontSize":"extra-small"} -->
<p class="has-text-align-center is-style-custom has-white-color has-text-color has-extra-small-font-size"><strong>Help us improve our digital services<br>by participating in design research.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"white","className":"is-style-custom","fontSize":"extra-small"} -->
<p class="has-text-align-center is-style-custom has-white-color has-text-color has-extra-small-font-size"><a href="#">Sign up and share your experience!</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"territory-acknowledgement"} -->
<div class="wp-block-group territory-acknowledgement"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}}} -->
<div class="wp-block-column" style="padding-top:2rem;padding-bottom:2rem"><!-- wp:paragraph {"textColor":"secondary-brand"} -->
<p class="has-secondary-brand-color has-text-color">We acknowledge that the B.C. Public Service carries out its work on the territories of 204 First Nations communities across B.C., each with unique cultures, languages, legal traditions and relationships to these lands and waters. We also respectfully acknowledge and honour the Métis and Inuit people living in B.C.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
];

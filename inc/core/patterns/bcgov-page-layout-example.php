<?php

namespace Bcgov\Theme\Block;

/**
 * Landing Page block pattern.
 *
 * @since 1.0.0
 *
 * @package Bcgov/Theme/Block
 */
return array(
	'title'      => __( 'Landing Page', 'bcgov_blocks_theme' ),
	'categories' => array( 'bcgov-blocks-theme-pages' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_05.jpg","id":594,"hasParallax":true,"dimRatio":0,"customOverlayColor":"#000000","minHeight":50,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"align":"full"} -->
	<div class="wp-block-cover alignfull is-light has-parallax" style="background-image:url(' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_05.jpg);min-height:50vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#000000"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}},"color":{"background":"#f2f2f2e6"}},"className":"is-style-dropshadow"} -->
	<div class="wp-block-column is-style-dropshadow has-background" style="background-color:#f2f2f2e6;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem;flex-basis:30%"><!-- wp:heading {"align":"wide","style":{"typography":{"fontSize":"3rem","lineHeight":"1.2"}},"textColor":"primary-brand-blue","className":"alignwide has-white-color has-text-color"} -->
	<h2 class="alignwide has-white-color has-text-color has-primary-brand-blue-color" style="font-size:3rem;line-height:1.2">Ullamcorper Ultricies Ridiculus Consectetur Ligula</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"text-colour","fontSize":"normal"} -->
	<p class="has-text-colour-color has-text-color has-normal-font-size">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"3px"}},"className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link" style="border-radius:3px">Learn More </a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover -->
	
	<!-- wp:group {"tagName":"section","align":"wide","style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}}},"layout":{"inherit":false,"contentSize":"1440px"},"fontSize":"extra-small"} -->
	<section class="wp-block-group alignwide has-extra-small-font-size" style="padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:aioseo/breadcrumbs /--></section>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"}}},"className":"is-card-portrait-image-over"} -->
	<div class="wp-block-columns is-card-portrait-image-over" style="padding-top:3rem;padding-bottom:3rem"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"className":"is-style-dropshadow","layout":{"inherit":false}} -->
	<div class="wp-block-column is-style-dropshadow" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:image {"align":"center","id":594,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-large is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_05.jpg" alt="" class="wp-image-594"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"primary-brand-blue","fontSize":"large"} -->
	<h3 class="has-text-align-center has-primary-brand-blue-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Headling specific talking point</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"text-colour","fontSize":"normal"} -->
	<p class="has-text-align-center has-text-colour-color has-text-color has-normal-font-size">Description lorem ipsum lorem ipsum</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"backgroundColor":"primary-brand-blue","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-brand-blue-background-color has-background">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","left":"0px","bottom":"2rem"}}},"className":"is-style-dropshadow"} -->
	<div class="wp-block-column is-style-dropshadow" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:image {"align":"center","id":599,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-large is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_04.jpg" alt="" class="wp-image-599"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"primary-brand-blue","fontSize":"large"} -->
	<h3 class="has-text-align-center has-primary-brand-blue-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Headling specific talking point</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"text-colour","fontSize":"normal"} -->
	<p class="has-text-align-center has-text-colour-color has-text-color has-normal-font-size">Description lorem ipsum lorem ipsum</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"backgroundColor":"primary-brand-blue","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-brand-blue-background-color has-background">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"2rem","left":"0px"}}},"className":"is-style-dropshadow"} -->
	<div class="wp-block-column is-style-dropshadow" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:image {"align":"center","id":593,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-large is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_01.jpg" alt="" class="wp-image-593"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"primary-brand-blue","fontSize":"large"} -->
	<h3 class="has-text-align-center has-primary-brand-blue-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Headling specific talking point</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"text-colour","fontSize":"normal"} -->
	<p class="has-text-align-center has-text-colour-color has-text-color has-normal-font-size">Description lorem ipsum lorem ipsum</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"backgroundColor":"primary-brand-blue","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-brand-blue-background-color has-background">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"2rem","bottom":"2rem"}}}} -->
	<div class="wp-block-group alignwide" style="margin-top:2rem;margin-bottom:2rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"6rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"2px","radius":"0.66rem"},"color":{"background":"#0033661a"}},"borderColor":"primary-brand-blue"} -->
	<div class="wp-block-group has-border-color has-primary-brand-blue-border-color has-background" style="background-color:#0033661a;border-radius:0.66rem;border-width:2px;padding-top:6rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","fontSize":"small"} -->
	<h2 class="has-text-align-center has-small-font-size">small title for card</h2>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"2.5rem"},"spacing":{"margin":{"bottom":"2rem"}}}} -->
	<h3 class="has-text-align-center" style="font-size:2.5rem;margin-bottom:2rem">Main heading for card</h3>
	<!-- /wp:heading -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	
	<!-- wp:image {"align":"center","id":285,"width":351,"height":438,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_02.png" alt="" class="wp-image-285" width="351" height="438"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"6rem","right":"2rem","bottom":"1rem","left":"2rem"}},"border":{"width":"2px","radius":"0.66rem"},"color":{"background":"#0033661a"}},"borderColor":"primary-brand-blue"} -->
	<div class="wp-block-group has-border-color has-primary-brand-blue-border-color has-background" style="background-color:#0033661a;border-radius:0.66rem;border-width:2px;padding-top:6rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","fontSize":"small"} -->
	<h2 class="has-text-align-center has-small-font-size">small title for card</h2>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"2.5rem"},"spacing":{"margin":{"bottom":"2rem"}}}} -->
	<h3 class="has-text-align-center" style="font-size:2.5rem;margin-bottom:2rem">Main heading for card</h3>
	<!-- /wp:heading -->
	
	<!-- wp:buttons {"className":"is-bcgov","layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	
	<!-- wp:image {"align":"center","id":284,"width":351,"height":438,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_07.png" alt="" class="wp-image-284" width="351" height="438"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}}} -->
	<div class="wp-block-group" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:media-text {"align":"","mediaId":185,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_03.png","mediaType":"image","mediaWidth":41,"verticalAlignment":"center","backgroundColor":"white"} -->
	<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center has-white-background-color has-background" style="grid-template-columns:41% auto"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_03.png" alt="" class="wp-image-185 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"6rem","right":"2em","bottom":"6rem","left":"2em"}}}} -->
	<div class="wp-block-group" style="padding-top:6rem;padding-right:2em;padding-bottom:6rem;padding-left:2em"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"large"} -->
	<p class="has-large-font-size" style="line-height:1.2"><strong>Lorem sociis natoque penatibus et magnis</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:quote {"fontSize":"normal"} -->
	<blockquote class="wp-block-quote has-normal-font-size"><p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p><cite>Speaker or citation</cite></blockquote>
	<!-- /wp:quote --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"6rem","right":"2rem","bottom":"2rem","left":"2rem"},"blockGap":"2rem"},"border":{"style":"solid","width":"2px","radius":"0.66rem"}},"borderColor":"primary-brand-blue"} -->
	<div class="wp-block-group alignwide has-border-color has-primary-brand-blue-border-color" style="border-radius:0.66rem;border-style:solid;border-width:2px;padding-top:6rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"3rem","fontStyle":"normal","fontWeight":"300"}},"textColor":"primary-brand-blue"} -->
	<h2 class="has-text-align-center has-primary-brand-blue-color has-text-color" style="font-size:3rem;font-style:normal;font-weight:300">Headline Lorem Ipsum?</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"text-colour","fontSize":"extra-large"} -->
	<p class="has-text-align-center has-text-colour-color has-text-color has-extra-large-font-size">Sub-head highlighting message lorem ipsum lorem ipsum</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"}}}} -->
	<div class="wp-block-columns" style="padding-top:3rem;padding-bottom:3rem"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"align":"center","id":493,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/svg/cleanbc/icon-01.svg" alt="" class="wp-image-493"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"primary-brand-blue","fontSize":"large"} -->
	<h3 class="has-text-align-center has-primary-brand-blue-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Headling specific talking point</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"text-colour","fontSize":"normal"} -->
	<p class="has-text-align-center has-text-colour-color has-text-color has-normal-font-size">Description lorem ipsum lorem ipsum</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"align":"center","id":495,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/svg/cleanbc/icon-02.svg" alt="" class="wp-image-495"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"primary-brand-blue","fontSize":"large"} -->
	<h3 class="has-text-align-center has-primary-brand-blue-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Headling specific talking point</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"text-colour","fontSize":"normal"} -->
	<p class="has-text-align-center has-text-colour-color has-text-color has-normal-font-size">Description lorem ipsum lorem ipsum</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"align":"center","id":496,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/svg/cleanbc/icon-03.svg" alt="" class="wp-image-496"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"2rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"primary-brand-blue","fontSize":"large"} -->
	<h3 class="has-text-align-center has-primary-brand-blue-color has-text-color has-large-font-size" style="font-style:normal;font-weight:300;margin-top:2rem">Headling specific talking point</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","textColor":"text-colour","fontSize":"normal"} -->
	<p class="has-text-align-center has-text-colour-color has-text-color has-normal-font-size">Description lorem ipsum lorem ipsum</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","right":"6rem","left":"6rem"},"blockGap":"3rem","margin":{"top":"6rem","bottom":"6rem"}},"border":{"style":"solid","width":"2px"}},"borderColor":"primary-brand-blue","className":"is-quote"} -->
	<div class="wp-block-group is-quote has-border-color has-primary-brand-blue-border-color" style="border-style:solid;border-width:2px;margin-top:6rem;margin-bottom:6rem;padding-top:6rem;padding-right:6rem;padding-bottom:6rem;padding-left:6rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"1rem","right":"2rem","bottom":"1rem","left":"2rem"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:1rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem"><!-- wp:quote {"textColor":"primary-brand-blue","fontSize":"extra-large"} -->
	<blockquote class="wp-block-quote has-primary-brand-blue-color has-text-color has-extra-large-font-size"><p>Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p><cite>~ Speaker or citation</cite></blockquote>
	<!-- /wp:quote --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}}} -->
	<div class="wp-block-group alignwide" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:media-text {"mediaPosition":"right","mediaId":305,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_10.jpg","mediaType":"image","verticalAlignment":"center","style":{"color":{"background":"#0033661a"}}} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center has-background" style="background-color:#0033661a"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_10.jpg" alt="" class="wp-image-305 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}}} -->
	<div class="wp-block-group" style="padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2","fontSize":"36px"}}} -->
	<p style="font-size:36px;line-height:1.2"><strong>Lorem sociis natoque penatibus et magnis</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"fontSize":"extra-small"} -->
	<p class="has-extra-small-font-size">Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov"} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}}} -->
	<div class="wp-block-group alignwide" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:media-text {"mediaId":185,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_03.png","mediaType":"image","verticalAlignment":"center","style":{"color":{"background":"#fbbb181a"}}} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center has-background" style="background-color:#fbbb181a"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_03.png" alt="" class="wp-image-185 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}}} -->
	<div class="wp-block-group" style="padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2","fontSize":"36px"}}} -->
	<p style="font-size:36px;line-height:1.2"><strong>Lorem sociis natoque penatibus et magnis</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"fontSize":"extra-small"} -->
	<p class="has-extra-small-font-size">Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov"} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"backgroundColor":"primary-brand-yellow","className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-brand-yellow-background-color has-background">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","right":"6rem","left":"6rem"},"blockGap":"3rem","margin":{"top":"3rem","bottom":"3rem"}},"border":{"style":"solid","width":"2px"}},"borderColor":"primary-brand-blue"} -->
	<div class="wp-block-group alignwide has-border-color has-primary-brand-blue-border-color" style="border-style:solid;border-width:2px;margin-top:3rem;margin-bottom:3rem;padding-top:6rem;padding-right:6rem;padding-bottom:6rem;padding-left:6rem"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontSize":"3rem"}},"textColor":"primary-brand-blue"} -->
	<h2 class="has-primary-brand-blue-color has-text-color" style="font-size:3rem"><strong>Lorem sociis natoque penatibus et magnis</strong></h2>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"bottom"} -->
	<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}}} -->
	<div class="wp-block-group" style="padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:paragraph {"fontSize":"normal"} -->
	<p class="has-normal-font-size">Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":"is-bcgov"} -->
	<div class="wp-block-buttons is-bcgov"><!-- wp:button {"backgroundColor":"primary-brand-blue","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-brand-blue-background-color has-background">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"backgroundColor":"primary-brand-blue","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull has-primary-brand-blue-background-color has-background" style="padding-top:80px;padding-bottom:80px"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":2891,"sizeSlug":"large","linkDestination":"none","className":" animated animated-fadeInUp"} -->
	<figure class="wp-block-image size-large  animated animated-fadeInUp"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/block-theme/default_07.png" alt="" class="wp-image-2891"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"3px"}},"textColor":"white","className":" animated animated-fadeInUp"} -->
	<p class="animated animated-fadeInUp has-white-color has-text-color" style="letter-spacing:3px">Malesuada Fringilla Vestibulum Pharetra</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"style":{"typography":{"lineHeight":"1.4"}},"textColor":"white","className":" animated animated-fadeInUp","fontSize":"huge"} -->
	<h2 class="animated animated-fadeInUp has-white-color has-text-color has-huge-font-size" style="line-height:1.4">Vestibulum Sollicitudin Magna</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"left","textColor":"white","className":" animated animated-fadeInUp"} -->
	<p class="has-text-align-left animated animated-fadeInUp has-white-color has-text-color">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"className":" animated animated-fadeInUp","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}}} -->
	<div class="wp-block-buttons  animated animated-fadeInUp" style="margin-top:20px;margin-bottom:20px"><!-- wp:button {"textColor":"background","style":{"border":{"radius":"0px"},"spacing":{"padding":{"right":"35px","left":"35px"}}},"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color" style="border-radius:0px;padding-right:35px;padding-left:35px">Learn More</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);

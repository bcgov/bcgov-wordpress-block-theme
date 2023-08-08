# BCGov WordPress Block Theme

![Lifecycle:Experimental](https://img.shields.io/badge/Lifecycle-Experimental-339999)

## Development Setup

```bash
git clone https://github.com/bcgov/bcgov-wordpress-block-theme.git
cd bcgov-wordpress-block-theme
composer install
npm i
npm run start
```

## Build

* ``` npm run build:production ```
* ``` composer checklist ```

## Managing embedded sites
### v1.0.0

The BCGov Block Theme has been developed with the initial strategy to include sites that utilise it as features of the default installation. In previous versions of WordPress the base theme was developed and then forked to create site specific themes. With the advent of Full Site Editing and Block Themes in WordPress 6 and up, the decision was made to offer the various styles and design features of sites that use it in an onging way to enhance the experience for future site owners.

This adds some housekeeping for the theme developers, which include touchpoints within the code for implementing features such as Templates, Block Styles and variations, Block Patterns, Custom Post Types and more. Here is the current breakdown of where these features are managed. Expect this information to be updated as the site and WordPress itself matures around Full Site Editing using Block Themes.

## Site constants

### Where: functions.php

To turn off and on certain features, PHP constants are defined in the functions file. The following examples will use the CleanBC project constants which are defined as CleanBC.

The \Bcgov\Theme\Block\OPTIONAL constant is used in the following locations:
- Set in [Setup.php](src/Setup.php)
- Used for allowing site specific patterns: inc/core/theme-block-patterns.php

This can be done using the check:

```bash
if ( \Bcgov\Theme\Block\OPTIONAL ) {
```


To enable/disable Javascript based features such as Block Filters, a global Javascript variable is set to allow for checking whether the site is avaiable. Add additional/new site checks to the set_javascript_variables() function:

```bash
/src/Setup.php –> set_javascript_variables()
```

An example of the check can be done in any JS file using the window scope and can be found in: [button-enhanced.js](src/scripts/admin/filters/button-enhanced.js) :

```bash
if ('optional' === window.site.siteName || window.site.allSiteStyles.length) {
```

The `window.site.allSiteStyles` array length check is used to determine if the admin has enabled access to site styles or features that are not specifically used by the site settings they chose. For example if they admin selects Buy BC styling but also chooses 'Enable all styles' in the theme options, this check will allow this code block to run.

## Site Specific Custom Post Types (CPT)

Use the 'Custom Post Type UI' (CPT UI) in conjunction with the 'Advanced Custom Fields Pro' (ACF Pro) plugins to generate new Custom Post Types.

## Site Specific Block Patterns

### Where: /inc/core/theme-block-patterns.php

When registering new Block Paterns use the [SITE] constant check. Eg:

```bash
if ( \Bcgov\Theme\Block\OPTIONAL ) {
```

Add any site specific patterns to the $block_patterns array. The reasoning for this using a pattern specific check is that while Custom Post Types, taxonomies, block filters and more may need to be suppressed for a site, the patterns developed for previous sites can be left available to site owners for use in page building and rapid prototyping layouts.

## Printing features
### as of v1.0.5

Classes to hide elements when printing (use any of the following):

```bash
.do-not-print
.hide-for-print
.hide-when-printing
```

## Admin User Documentation

Added to the site admin under Appearance > BCGov Block Theme and can be modified in:

```bash
/inc/core/templates/theme-info-page.php
```
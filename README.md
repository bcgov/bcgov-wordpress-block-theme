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

### Site constants

#### Where: functions.php

To turn off and on certain features, PHP constants are defined in the functions file. For example the CleanBC features are defines as CLEANBC and CLEANBCPATTERNS. Note the ability to 

The CLEANBC constant is used in the following locations:

- /src/Setup.php – as a check to load/register CleanBC Custom Posts and Taxonomy.

This can be done using the check:

``if ( defined( 'Bcgov\\Theme\\Block\\CLEANBC' ) && CLEANBC ) {

...and the CLEANBC\PATTERNS is used in:

- /inc/core/theme-block-patterns.php – to enable CleanBC site specific patterns. 

This can be done using the check:

``if ( defined( 'Bcgov\\Theme\\Block\\CLEANBC\\PATTERNS' ) && CLEANBC\PATTERNS ) {

To enable/disable Javascript based features such as Block Filters, a global Javascript variable is set to allow for checking whether the site is avaiable. Add additional/new site checks to the set_javascript_variables() function:

- /src/Setup.php –> set_javascript_variables()

An example of the check can be done in any JS file using the window scope and can be found in: /src/scripts/admin/filters/button-enhanced.js:

``if (window.site.cleanbc) {

### Site Specific Custom Post Types (CPT)

#### Where: /src/Setup.php -> bcgov_register_custom_types()

Use the format:

> /src/custom-types/[site]/[site]-[label].php
> /src/custom-types/[site]/[site]-taxonomy.php

Eg:  For the CleanBC Actions CPT:

``/src/custom-types/cleanbc/cleanbc-actions.php
``/src/custom-types/cleanbc/cleanbc-taxonomy.php

Note that the default Block Theme template structure for a CPT can be set in the 'template' argument when using the register_post_type function – eg: register_post_type( 'cleanbc-actions', $args ) – or alternatively a Block Theme style template can be created and placed in the Template directory Eg: 

- /templates/single-cleanbc-actions.html

Currently the only means to remove a template specific to a previous site is to physically remove its HTML file from the templates directory as well as any reference to it in the theme.json file under the 'customTemplates' key Eg:

``"customTemplates": [
``		{
``			"name": "single-cleanbc-actions",
``			"title": "CleanBC Action Post",
``			"postTypes": [
``				"cleanbc-actions"
``			]
``		}

### Site Specific Block Patterns

#### Where: /inc/core/theme-block-patterns.php

When registering new Block Paterns use the [SITE]\PATTERNS constant check. Eg:

``if ( defined( 'Bcgov\\Theme\\Block\\CLEANBC\\PATTERNS' ) && CLEANBC\PATTERNS ) {

Add any site specific patterns to the $block_patterns array. The reasoning for this using a pattern specific check is that while Custom Post Types, taxonomies, block filters and more may need to be suppressed for a site, the patterns developed for previous sites can be left available to site owners for use in page building and rapid prototyping layouts.


## Admin User Documentation

Added to the site admin under Appearance > BCGov Block Theme and can be modified in /inc/core/templates/theme-info-page.php

# Changelog

## 1.0.3: October 24, 2022

– Updates related to implementing styles and patterns to better generalise site specific patterns and blocks. Admin documentation page update. ([DESCW-599]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-599))
- Minor update to site options to allow access to cross-site styles ([DESCW-599]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-599))
- Added theme option export file to repo ([DESCW-599]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-599))
- Added CleanBC Home landing banner null check ([DESCW-599]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-599))
- Removed logo if not set to that site in options ([DESCW-599]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-599))
- First pass at print mode (currently in backlog) ([DESCW-669]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-669))

## 1.0.2: September 19, 2022

– Post-launch design updates. Various landing banner changes + rounding elements + patterns [DESCW-598]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-598)

## 1.0.1: September 19, 2022

– Navigation update: sorting out tagging for production [DESCW-601]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-601)

## 1.0.0: September 19, 2022

– Initial Theme Structure ([DESCW-186](https://apps.itsm.gov.bc.ca/jira/browse/DESCW-186))
- node scripts ([DESCW-237](https://apps.itsm.gov.bc.ca/jira/browse/DESCW-237))
- Bcgov design system header look ([DESCW-261](https://apps.itsm.gov.bc.ca/jira/browse/DESCW-261))
- Breadcrumbs for MVP ([DESCW-468](https://apps.itsm.gov.bc.ca/jira/browse/DESCW-468))
– Determine SCSS/style structure for theme elements ([DESCW-465](https://apps.itsm.gov.bc.ca/jira/browse/DESCW-465))
- Essential template files ([DESCW-467](https://apps.itsm.gov.bc.ca/jira/browse/DESCW-467))
- Initial set up of Block Pattern integration ([DESCW-463]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-463)
- Theme-based custom block refinement – core/buttons variations and filter structure – Modified functions.php to work with added Setup and action/filter Loader – Cleaned up Package/Namespacing – added Basic Cards/Card Containers ([DESCW-497]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-497)
– Added first round of MVP patterns + removed Loader ([DESCW-492]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-492)
– Includes MVP patterns for Alternating Cards, Card with Image Overlay, Card with Under Image Portrait 2-Up, Cards Portrait 3-up, Detail Card with Icons, Hero Banner
Long Card, Quote, Small Quote with Image, etc. ([DESCW-494]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-494)
– Documentation with instructions on Patterns and templates/parts ([DESCW-493]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-493)
– Navigation (takeover and ribbon styles – js & css) for general block theme use (some CleanBC crossover). Additional template & patterns (html) updates. ([DESCW-511]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-511)
– Added CleanBC colour options to site style selector + updated default theme and dark mode (beta) options. Added Query Loop pattern for dynamic post grid view. Additional template & patterns (html) updates for responsiveness. ([DESCW-513]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-513)
– Initial CleanBC "No image" banner with in-page links ([DESCW-514]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-514)
- Two new banners (home + landing) and related scripts/styles. Added static SCSS readable RGB root values for colour palette integration (needs to be generated dynamically). Further break out of CleanBC site scripts/styles/patterns/etc. ([DESCW-514]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-514)
- New Info banner + scripts and style fixes [DESCW-514]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-514)
- Core Templates update [DESCW-512]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-512)
- Enabled CleanBC Custom Post Type and default template. Enabled Site constants to enable/disable embedded site features eg: CleanBC. Replaced array() with [] throughout. Added JS-based site variables and checks. Updated Readme with developer notes. [DESCW-512]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-512)
- Various CleanBC patterns + scripts and styles [DESCW-514]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-514)
- CleanBC added icon buttons, updated CPT, Added patterns and related imagery/icons, Added Allow list for blocks in editor [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
- Added Projects CPT, two querys: toggle for Actions and accordion for Projects, added BCGov Accordion to theme, refactored away from jQuery/Bootstrap, now functions with ES6, various styles and patterns updated/added. [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
- A series of CleanBC patterns. Namespace and other fixes to previous PR. [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
- Added options page with ACF plugin dependency with initial setting to enable body class. Options dynamically populated from Setup.php and removes hard coding of globally scoped site.siteName variable. Default to 'bcgov' when not plugin not available/activated. [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
- Removed Dark.json colour styles. CleanBC theme updates + file restructring to make future development less messy. [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
- CleanBC fixed header navigation updates including back to top. Set up resize/scroll/load listeners + orientation helper classes. CleanBC sector pattern scripts/styles, including global site.templateDir for active WordPress template URL access in JS. [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
– Many patterns + BCgov base theme reuseability fixes (mostly around navigation) + DOM element selector checking for admin. Fixed bug in ribbon style navigation for offscreen flyout sebmenus. [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
– Added initial pass at Projects Query block to enable late changes to information delivery. Additional work needed to tie output into Actions switching mechanism. [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
- Accordion/Actions toggle feature revamped to use new Project Query Block. [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
- Accordion/Project Query Block render output and count initialisation fix. Front end button icon style fix. [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
- Menu and footer navigation, in-page layout styles and breadcrumb placement fixes. [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
- Troubleshooting Template Parts for CleanBC + Admin styles fix/updates. [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
– DESCW-534 Block template parts Area fix + more. Button styles, Project Query Block, Pattern Loremisation [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
– Updated accordion toggle by querystring. Added hierarchy to CleanBC pattern files for better file management. Updated Appearance > BCGov Block Theme Admin instructions page. Responsive styling + CPT plugin detection. Plus additional updates for various patterns, breadcrumb DOM reording, and body class size helpers. [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
– Modified Accordion toggle feature to suppress empty project categories [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
– Added core/button aria-label a11y text [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
– Added ARIA labels into queried content for the Accordion feature [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
– Accordion PHP fix, new pattern + styles [DESCW-534]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-534)
- Project query ordering updated with additional minor style updates and fixes [DESCW-598]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-598)
– Testing updates blocks, patterns, and accessibility. Includes Skip-nav template part, media-text block filters & more [DESCW-601]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-601)
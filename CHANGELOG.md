# Changelog

## 1.1.5 March 27, 2023
- Added @bcgov/webpack-wordpress to package.json dev dependencies for future use of its JS linter rules. ([DESCW-977](https://apps.itsm.gov.bc.ca/jira/browse/DESCW-977))
- Fluid typography updates to remove style overrides. Added Small and Large style options along side default sizing. Heading are sized based on a Minor Third (1.200) scale. ([DESCW-1001]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-1001))

## 1.1.4 March 20, 2023
- Null check bug fix for menu navigation scripts. ([DESCW-1000]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-1000))

## 1.1.3 March 9, 2023
- Updated missing plugin (dependencies) to warning status. Better descriptions for notices. Permaban dismissable notices – not finessed, futured updates could allow for showing again after an intevral or on demand (TBD). ([DESCW-952]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-952))
- Update Block Theme documentation (including graphics where appropriate) to include: Using custom block features such as Accessibility labels, print image options, etc. Fluid typography and responsive margins and padding. Creating custom patterns. Using the custom notification banner. Multilanguage supported placement and settings for adding Polylang language switcher (to the menu or header), and translation of FSE template blocks and decoupling Template Parts. Adding a Custom Security Policy exception. Also added eslint rules to ignore various warnings during build. ([DESCW-975]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-975))

## 1.1.2: February 28, 2023
- Removed block category allow list, fixing bug preventing custom categories in editor ([DESCW-924]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-924))
- Updated package.json:
    - Node version required to be lts/hydrogen (version 18 - 19)
    - Updated @wordpress/scripts version to latest (25.4.0)
    - Note: `npm i` should be run to get the above updates
- Added the ability to export Block Theme templates, teplate parts and global styles via the WordPress exporter tool. ([DESCW-912]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-912))
- Added print bug fix where updating styles for print were bleeding back into the DOM overriding WordPress image settings. Added the ability to set a page specific body class. ([DESCW-949]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-949))
- Added Safari takeove menu layer order fix for Safari. Fixed naming collision inside Admin Notification banner with WordPress generic .notice class. Moved to use vs. require for Loader class in Setup.php. ([DESCW-949]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-949))
- Enabled absolute positioning as a filter to core/image. Removed Gravity Forms block exclusion. ([DESCW-949]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-949))
- Reworked scripts in both Admin and Public directories to use { qs, qsa } from public/utils. Cleaned up geenral registerBlockStyle implementation and lodash imports. Moved Loader into functions.php ahead of Setup initiaition. Setup class cleaned up to remove full namespace from class initiations. Reorganised styles. Added fluid typography to WordPress font sizing. Fixed custom notification banner setting registration bug from previous commmit and refactored some naming to remove pluralisation throughout. ([DESCW-949]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-949))
- Developed a feature flag framework under a "BCGov Block Theme Settings" page to enable faster addition of settings that do not require advanced layout. Applied this to Custom Patterns and the current site's Custom Notice Banner. Feature can be accessed by Admininstor users.  ([DESCW-935]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-935))

## 1.1.1: February 12, 2023
- Restructured `src` and `inc/core` directories – to put more focus on the src directory. Moved away from functional structure to a class/loader system. Added an autoloader to the Setup and reworked the hooks system to utilise this approach through `src/Actions` and `src/Filters` class directories. Admin pages for options, notifications banner and documentation pages moved into `src/Templates`. ([DESCW-911]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-911))

## 1.1.0: February 8, 2023
- Adds a custom post type for "Custom Patterns" and register any categorised Custom Pattern post type as patterns within the pattern picker. ([DESCW-911]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-911))
- Adds the ability to include aliases or keywords that help users discover a pattern while using the pattern search. Includes admin UI updates + twitter block inclusion. ([DESCW-911]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-911))
- Site wide notification banner admin options and injection. Colours added to support banner states. Added network enabled banner integration. ([DESCW-831]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-831))
- JS unit test coverage for functional data manipulations and logical operations added. ([DESCW-901]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-911))

## 1.0.7: January 27, 2023
- Polylang integration into ribbon style menu. Includes utility function additions for querySelect [qs()], querySelectAll [qsa()] and createElement, with associated public facing side refactoring. Includes placeholder masking the language switcher in the Full Site Editor ribbon navigation. ([DESCW-841]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-841))
- Modified langauge switcher to pull in main navigation styles. Removes arrow from langauge switcher when navigation option "show arrow" is not selected. ([DESCW-841]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-841))
- Bug fix for polylang menu integration when no other sub menu items are available to lend classes to synthesised language menu. ([DESCW-841]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-841))

## 1.0.6: January 23, 2023
- Editing padding, margins and gap now use the WordPress 6.1 spacingScale with responsive sizes. Spacing for scroll padding has been added to dynamically adjust based on header size. ([DESCW-840]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-840))
- Added admin editor fix for preview tool (desktop/tablet/mobile) sizing variations ([DESCW-840]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-840))
- Added customisable content security policy and in-page navigation to the options page. ([DESCW-840]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-830))

## 1.0.5: January 16, 2023

- Print mode: additional core block styling, classes to suppress printing, and print specific styling (eg: tables) ([DESCW-828]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-828))
- Enhanced image printing options for image and media-text blocks. Allows specifying the size of the printed image width in print mode. Includes update to site instructions. ([DESCW-828]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-828))

## 1.0.4: January 9, 2023

–  Print mode: header + image printing. Adds core/site-logo print logo against black backing. Adds core/media-text and core/image block setting for print
–  Print mode: Additional print mode styling including script to enable printing of parent containers for images ([DESCW-723]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-723))
– Header footer templates + parts. Updated all templates and related template parts needed to create a global header and footer ([DESCW-721]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-721))
– Adjuststed global header container template part. ([DESCW-721]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-721))
- Patterns update to add and integrate Step through sequence pattern used in Go Electric BC for general Block Theme use.
- Collapse block (accordion) styling picked up for non-pattern usage. Added two patterns using the collapse blocks: table and media-text variations ([DESCW-750]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-750))
- Reviewed and modified default blocks such as heading, paragraph, list, blockquote, table, image, gallery, and more to ensure the styling works as expected for responsive and accessible design. Addresses issues within the WordPress admin as well as visitor facing. Also addresses consistency of display for the header colour and navigation. ([DESCW-749]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-749)) 
- Header + navigation enhancements. Added colour options to takeover underlines. Added custom body class feature and enabled access to Additional CSS customiser tool from settings page. Added admin utility filtering to inject custom body class into customiser tool. Enhanced image block for variable ratio styling. ([DESCW-737]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-737))
- Navigation improvements – fix overzealous custom CSS selector encoding. Refactored styles for navigation options. Updated polylang navigation selector for more consistent display. Added navigation block styles to allow for centring vs column alignment (flex vs grid layouts) when using the overlay (full screen takeover) menu. ([DESCW-751]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-751))


## 1.0.3: November 23, 2022

– Updates related to implementing styles and patterns to better generalise site specific patterns and blocks. Admin documentation page update. ([DESCW-599]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-599))
- Minor update to site options to allow access to cross-site styles ([DESCW-599]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-599))
- Added theme option export file to repo ([DESCW-599]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-599))
- Added CleanBC Home landing banner null check ([DESCW-599]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-599))
- Removed logo if not set to that site in options ([DESCW-599]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-599))
- First pass at print mode ([DESCW-669]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-669))
- Built custom theme options page and refactored setup with default values to make use of new options (uses WordPress Settings API) – minor display fixes for menu and card styles ([DESCW-722]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-722))
- Polylang styling for select element only. Includes documentation update with Language Switcher block information. Other minor styling/interaction enhancements for collapse containers. Minor updates based on last PR feedback. ([DESCW-736]https://apps.itsm.gov.bc.ca/jira/browse/DESCW-736))

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
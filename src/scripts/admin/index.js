/**
 * Entry point for admin-facing interactions.
 *
 * @description This utilizes the @bcgov/design-tokens/css-prefixed package for Alpha v3 design system integration.
 * Prefixed CSS variables are employed to facilitate checks of the design system in PHP hooks.
 * The tokens are merged with Block Theme variables in the alpha.json theme styles palette options.
 * For example, var(--bcds-surface-primary-default) becomes var(--wp--preset--color--primary-brand).
 *
 * @requires @bcgov/design-tokens/css-prefixed/variables.css
 */
import '@bcgov/design-tokens/css-prefixed/variables.css';
import '../../styles/admin/index.scss';

/**
 * Load the wp-admin filters.
 */
import './utils/filter';
import './utils/dismiss-warnings';

/**
 * Load the required site options.
 */
import '../public/dom-loader';
import '../public/sites/cleanbc/cleanbc-dom-loader';

/**
 * Filters modify or enhance existing blocks using addFilter hooks.
 * PHP render functions are used and defined in inc/core/filters directory.
 */
import './filters/button-enhanced';
import './filters/columns-enhanced';
import './filters/column-enhanced';
import './filters/image-enhanced';
import './filters/media-text-enhanced';
import './filters/navigation-enhanced';
import './filters/site-logo-enhanced';
import './filters/query-loop-enhanced';

/**
 * Custom Blocks.
 * PHP render functions are used and defined in inc/core/blocks directory.
 */
// import './blocks/accordion-item';
import './blocks/card/container';
import './blocks/card/item';
import './blocks/collapse/app';
import './blocks/collapse/container';
import './blocks/collapse/item';

/**
 * Pattern scripts.
 */

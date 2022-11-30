import '../../styles/admin/index.scss';

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
import './filters/heading-enhanced';
import './filters/image-enhanced';
import './filters/media-text-enhanced';
import './filters/paragraph-enhanced';
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

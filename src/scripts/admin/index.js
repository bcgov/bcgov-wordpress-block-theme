import '../../styles/admin/index.scss';

/**
 * Filters modify or enhance existing blocks using addFilter hooks.
 * PHP render functions are used and defined in inc/core/filters directory.
 */
import './filters/button-enhanced';
import './filters/column-enhanced';
import './filters/heading-enhanced';
import './filters/media-text-enhanced';
import './filters/paragraph-enhanced';
import './filters/query-loop-enhanced';

/**
 * Custom Blocks.
 * PHP render functions are used and defined in inc/core/blocks directory.
 */
import './blocks/card/container';
import './blocks/card/item';

/**
 * Pattern scripts.
 */
import '../public/cleanbc/patterns/landing-cover-banner';

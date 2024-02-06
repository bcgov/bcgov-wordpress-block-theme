/**
 * Entry point for public-facing interactions.
 *
 * @description This utilizes the @bcgov/design-tokens/css-prefixed package for Alpha v3 design system integration.
 * Prefixed CSS variables are employed to facilitate checks of the design system in PHP hooks.
 * The tokens are merged with Block Theme variables in the alpha.json theme styles palette options.
 * For example, var(--bcds-surface-primary-default) becomes var(--wp--preset--color--primary-brand).
 *
 * @requires @bcgov/design-tokens/css-prefixed/variables.css
 */
import '@bcgov/design-tokens/css-prefixed/variables.css';
import '@bcgov/bc-sans/css/BCSans.css';

import '../../styles/public/index.scss';
import '../../../assets/images/bc_gov_logo_transparent.png';

import './dom-loader';
import './accessibility';
import './notification-banner';
import './print';

import './takeover-navigation';
import './ribbon-navigation';

import './alpha-v3/search';

import '../admin/blocks/collapse/app';

// import './optional/patterns/actions-toggle-query';
// import './optional/patterns/sectors-section-cards';

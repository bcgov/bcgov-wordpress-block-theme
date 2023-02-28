import { qs, qsa } from '../../utils';

/**
 * General CleanBC DOM manipulation.
 */
const domReady = () => {
	// Only run for CleanBC or sites that use all styles.
	if (
		'cleanbc' === window.site.siteName ||
		window.site.allSiteStyles.length
	) {
		/*
		 * SafarIE bug requires 0ms timeout.
		 */
		setTimeout( function () {
			// CleanBC Icon Buttons
			const iconButtons = qsa( 'a.icon' );
			if ( iconButtons.length ) {
				iconButtons.forEach( ( button ) => {
					if ( null === button.getAttribute( 'href' ) ) {
						button.setAttribute( 'tabindex', '-1' );
						button.style.pointerEvents = 'none';
					}
				} );
			}

			// This should be CSS...
			const iconButtonContainers = qsa(
				'.wp-block-button.is-style-icon'
			);
			if ( iconButtonContainers.length ) {
				iconButtonContainers.forEach( ( container ) => {
					const containerLink = qs( 'a', container );
					if (
						null !== containerLink &&
						! container.classList.contains( 'has-size-large' )
					) {
						containerLink.style.outlineOffset = '1rem';
					}
				} );
			}
			/**
			 * Manage events after page scroll.
			 */
			const cleanbcWindowScroll = () => {
				// Do nothing for now – will remove if not needed.
			};
			window.addEventListener( 'scroll', cleanbcWindowScroll );
		}, 0 );
	}
};

if ( 'complete' === document.readyState ) {
	domReady();
} else {
	document.addEventListener( 'DOMContentLoaded', domReady );
}

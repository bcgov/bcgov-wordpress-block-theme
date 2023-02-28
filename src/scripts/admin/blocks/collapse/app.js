/**
 * Collapse block manipulation.
 */
import { triggerClick } from '../../utils/common.js';
import {
	collapseControlsClick,
	collapseItemsButtonClick,
	collapseItemsLinkClick,
} from './container/public';

const domReady = () => {
	setTimeout( function () {
		const collapseAllButtons = document.querySelectorAll(
			'.collapse-container-nav button'
		);
		const collapseItemButtons = document.querySelectorAll(
			'.collapse-header button'
		);
		const collapseItemLinks =
			document.querySelectorAll( '.collapse-close a' );
		const collapseAllButton = document.querySelector(
			'.collapse-collapse-all'
		);

		if ( collapseAllButtons.length ) {
			collapseAllButtons.forEach( ( item ) => {
				item.addEventListener( 'click', collapseControlsClick );
			} );

			collapseItemButtons.forEach( ( item ) => {
				item.addEventListener( 'click', collapseItemsButtonClick );
			} );

			collapseItemLinks.forEach( ( item ) => {
				item.addEventListener( 'click', collapseItemsLinkClick );
			} );

			// initialise load state
			triggerClick( collapseAllButton );
			triggerClick( collapseItemButtons[ 0 ] );
		}
	}, 0 );
};

if ( 'complete' === document.readyState ) {
	domReady();
} else {
	document.addEventListener( 'DOMContentLoaded', domReady );
}

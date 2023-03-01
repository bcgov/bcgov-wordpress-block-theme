import { triggerClick } from '../../../utils/common.js';

/**
 * Click event handlers for collapse and expand all.
 */
export function collapseControlsClick() {
	const target = this.getAttribute( 'data-target' );

	if ( undefined === target ) return;

	const collaspseButtons = document.querySelectorAll(
		`${ target } .collapse-header button`
	);
	const collapseItems = document.querySelectorAll( `${ target } .collapse` );

	if ( this.classList.contains( 'collapse-expand-all' ) ) {
		collaspseButtons.forEach( ( item ) => {
			item.classList.remove( 'collapsed' );
			item.setAttribute( 'aria-expanded', true );
		} );

		collapseItems.forEach( ( item ) => {
			item.classList.remove( 'collapse' );
			item.classList.add( 'collapsing' );
			item.classList.remove( 'hide' );
			item.classList.add( 'show' );
			setTimeout( function () {
				item.classList.add( 'collapse' );
				item.classList.remove( 'collapsing' );
			}, 300 );
		} );
	}
	// }
	if ( this.classList.contains( 'collapse-collapse-all' ) ) {
		collaspseButtons.forEach( ( item ) => {
			item.classList.add( 'collapsed' );
			item.setAttribute( 'aria-expanded', false );
		} );

		collapseItems.forEach( ( item ) => {
			item.classList.remove( 'collapse' );
			item.classList.add( 'collapsing' );
			item.classList.remove( 'show' );
			item.classList.add( 'hide' );
			setTimeout( function () {
				item.classList.add( 'collapse' );
				item.classList.remove( 'collapsing' );
			}, 300 );
		} );
	}
}

/**
 * Function to handle collapse and expand when clicking on collapse header.
 */
export function collapseItemsButtonClick() {
	const target = this.getAttribute( 'data-target' );

	if ( undefined === target ) return;

	const collapseButton = this;
	const collapseItem = collapseButton
		.closest( '.wp-block-bcgov-block-theme-collapse-item' )
		.querySelector( '.collapse-container' );

	collapseItem.classList.remove( 'collapse' );
	collapseItem.classList.add( 'collapsing' );

	collapseButton.setAttribute(
		'aria-expanded',
		collapseButton.getAttribute( 'aria-expanded' ) === 'true'
			? 'false'
			: 'true'
	);

	const buttonState = collapseButton.getAttribute( 'aria-expanded' );

	if ( buttonState === 'true' ) {
		collapseButton.classList.remove( 'collapsed' );
		collapseItem.classList.remove( 'hide' );
		collapseItem.classList.add( 'show' );
	} else {
		collapseButton.classList.add( 'collapsed' );
		collapseItem.classList.add( 'hide' );
		collapseItem.classList.remove( 'show' );
	}

	setTimeout( function () {
		collapseItem.classList.add( 'collapse' );
		collapseItem.classList.remove( 'collapsing' );
	}, 300 );
}

/**
 * Function to handle collapse and expand when clicking on collapse link in body of item.
 */
export function collapseItemsLinkClick() {
	const target = this.getAttribute( 'data-target' );

	if ( undefined === target ) return;

	const buttonToClick = document.querySelector(
		`.collapse-header button[data-target="${ target }"]`
	);

	triggerClick( buttonToClick );
}

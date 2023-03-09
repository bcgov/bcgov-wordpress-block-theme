/* eslint jsdoc/check-line-alignment: "off" */

export const allowedColors = [
	{ name: 'bcgov-background-light', color: '#f2f2f2' },
	{ name: 'bcgov-component', color: '#606060' },
	{ name: 'bcgov-text', color: '#313132' },
	{ name: 'bcgov-white', color: '#fff' },
	{ name: 'bcgov-primary', color: '#036' },
	{ name: 'bcgov-link', color: '#1a5a96' },
	{ name: 'bcgov-background-blue', color: '#38598a' },
	{ name: 'bcgov-yellow', color: '#fcba19' },
	{ name: 'bcgov-red', color: '#d8292f' },
	{ name: 'bcgov-green', color: '#2e8540' },
];

export const mediaQueries = [
	{ value: null, label: 'Select Break Point', disabled: true },
	{ value: 1200, label: '1200px' },
	{ value: 992, label: '992px' },
	{ value: 768, label: '768px' },
	{ value: 576, label: '576px' },
	{ value: 0, label: 'None' },
];

export const defaults = ( value, defaultValue ) => {
	if ( undefined === value ) {
		value = defaultValue;
	}
	return value;
};

/**
 * Simulate a click trigger event.
 *
 * @param {Element} el  the element to simulate a click on
 */
/* eslint-disable no-unused-vars */
export const triggerClick = ( el ) => {
	const evt = new window.MouseEvent( 'click', {
		bubbles: true,
		cancelable: true,
		view: window,
	} );
	const canceled = ! el.dispatchEvent( evt );
};
/* eslint-disable no-unused-vars */

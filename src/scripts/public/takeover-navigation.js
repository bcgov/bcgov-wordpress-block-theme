import { qs, qsa } from './utils';

/**
 * Takeover navigation manipulation.
 * [@return](https://github.com/return) {void}
 */
const domReady = () => {
	/**
	 * Add body class for CSS specificity if Takeover Menu is in use.
	 */
	if ( qsa( '.is-style-takeover-menu' ).length ) {
		qs( 'body' ).classList.add( 'has-takeover-menu' );

		/**
		 * Clone site logo node and insert copy inside modal overlay.
		 */
		const elLogo = qs( '.wp-block-site-logo' );
		const cloneLogo = elLogo.cloneNode( true );
		cloneLogo.id = 'nav-logo';
		cloneLogo
			.querySelector( '.custom-logo-link' )
			.setAttribute( 'tabindex', '-1' );
		document
			.querySelector(
				'.wp-block-navigation__responsive-container-content'
			)
			.after( cloneLogo );

		const elSiteName = qs( '.wp-block-site-title a' );
		const cloneSiteName = elSiteName.cloneNode( true );
		cloneSiteName.id = 'nav-title';
		cloneSiteName.setAttribute( 'aria-label', 'site homepage' );
		document
			.querySelector( '#nav-logo .custom-logo-link' )
			.after( cloneSiteName );
	}

	/**
	 * Override menu open SVG. Affects all hamburger icon instances.
	 */
	const menuOpenSVGToReplace = qs(
		'.wp-block-navigation__responsive-container-open svg'
	);
	const newOpenSVG = document.createElementNS(
		'http://www.w3.org/2000/svg',
		'svg'
	);
	newOpenSVG.setAttribute( 'x', '0' );
	newOpenSVG.setAttribute( 'y', '0' );
	newOpenSVG.setAttribute( 'viewBox', '0 0 24 24' );
	newOpenSVG.setAttribute( 'width', 24 );
	newOpenSVG.setAttribute( 'height', 24 );
	newOpenSVG.setAttribute( 'aria-hidden', 'true' );
	newOpenSVG.setAttribute( 'focusable', 'false' );
	newOpenSVG.innerHTML =
		'<rect x="1.3" y="10.9" width="22" height="2"/><rect x="1.4" y="20.5" width="22" height="2"/><rect x="1.4" y="1.3" width="22" height="2"/>';
	menuOpenSVGToReplace.parentNode.insertBefore(
		newOpenSVG,
		menuOpenSVGToReplace.nextSibling
	);
	menuOpenSVGToReplace.parentNode.removeChild( menuOpenSVGToReplace );

	/**
	 * Override menu close SVG. Affects all close icon instances.
	 */
	const menuCloseSVGToReplace = qs(
		'.wp-block-navigation__responsive-container-close svg'
	);
	const newCloseSVG = document.createElementNS(
		'http://www.w3.org/2000/svg',
		'svg'
	);
	newOpenSVG.setAttribute( 'x', '0' );
	newOpenSVG.setAttribute( 'y', '0' );
	newCloseSVG.setAttribute( 'viewBox', '0 0 24 24' );
	newCloseSVG.setAttribute( 'width', 24 );
	newCloseSVG.setAttribute( 'height', 24 );
	newCloseSVG.setAttribute( 'aria-hidden', 'true' );
	newCloseSVG.setAttribute( 'focusable', 'false' );
	newCloseSVG.innerHTML =
		'<path d="M13.5,11.7l9.2-9.5l-1.5-1.5L12,10L2.9,0.8L1.4,2.2l9.1,9.5l-9.8,10l1.5,1.5l9.8-9.9l9.8,9.9l1.5-1.5L13.5,11.7z"/>';
	menuCloseSVGToReplace.parentNode.insertBefore(
		newCloseSVG,
		menuCloseSVGToReplace.nextSibling
	);
	menuCloseSVGToReplace.parentNode.removeChild( menuCloseSVGToReplace );
};

if ( 'complete' === document.readyState ) {
	domReady();
} else {
	document.addEventListener( 'DOMContentLoaded', domReady );
}

/**
 * Takeover navigation manipulation.
 */
const domReady = () => {
	/**
	 * Add body class for CSS specificity if Takeover Menu is in use.
	 */
	if (document.querySelectorAll('.is-style-takeover-menu').length) {
		document.querySelector('body').classList.add('has-takeover-menu');

		/**
		 * Clone site logo node and insert copy inside modal overlay.
		 */
		const elem = document.querySelector('.wp-block-site-logo');
		const clone = elem.cloneNode(true);
		clone.id = 'nav-logo';
		document
			.querySelector('.wp-block-navigation__responsive-container-close')
			.before(clone);

		/**
		 * Override menu open SVG.
		 */
		const menuOpenSVGToReplace = document.querySelector(
			'.wp-block-navigation__responsive-container-open svg'
		);
		const newOpenSVG = document.createElementNS(
			'http://www.w3.org/2000/svg',
			'svg'
		);
		newOpenSVG.setAttribute('x', '0');
		newOpenSVG.setAttribute('y', '0');
		newOpenSVG.setAttribute('viewBox', '0 0 24 24');
		newOpenSVG.setAttribute('width', 24);
		newOpenSVG.setAttribute('height', 24);
		newOpenSVG.setAttribute('aria-hidden', 'true');
		newOpenSVG.setAttribute('focusable', 'false');
		newOpenSVG.innerHTML =
			'<rect x="1.3" y="10.9" width="22" height="2"/><rect x="1.4" y="20.5" width="22" height="2"/><rect x="1.4" y="1.3" width="22" height="2"/>';
		menuOpenSVGToReplace.parentNode.insertBefore(
			newOpenSVG,
			menuOpenSVGToReplace.nextSibling
		);
		menuOpenSVGToReplace.parentNode.removeChild(menuOpenSVGToReplace);

		/**
		 * Override menu close SVG.
		 */
		const menuCloseSVGToReplace = document.querySelector(
			'.wp-block-navigation__responsive-container-close svg'
		);
		const newCloseSVG = document.createElementNS(
			'http://www.w3.org/2000/svg',
			'svg'
		);
		newOpenSVG.setAttribute('x', '0');
		newOpenSVG.setAttribute('y', '0');
		newCloseSVG.setAttribute('viewBox', '0 0 24 24');
		newCloseSVG.setAttribute('width', 24);
		newCloseSVG.setAttribute('height', 24);
		newCloseSVG.setAttribute('aria-hidden', 'true');
		newCloseSVG.setAttribute('focusable', 'false');
		newCloseSVG.innerHTML =
			'<path d="M13.5,11.7l9.2-9.5l-1.5-1.5L12,10L2.9,0.8L1.4,2.2l9.1,9.5l-9.8,10l1.5,1.5l9.8-9.9l9.8,9.9l1.5-1.5L13.5,11.7z"/>';
		menuCloseSVGToReplace.parentNode.insertBefore(
			newCloseSVG,
			menuCloseSVGToReplace.nextSibling
		);
		menuCloseSVGToReplace.parentNode.removeChild(menuCloseSVGToReplace);
	}
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

/**
 * WordPress Admin DOM manipulation.
 */
const domReady = () => {
	/*
	 * SafarIE bug requires 0ms timeout.
	 */
	setTimeout(function() {
		const body = document.querySelector('body');
		const wpCustomiser = body.classList.contains('wp-customizer');

		if (!wpCustomiser) return;

		const wpAdditionalCSSArea = document.querySelector(
			'#sub-accordion-section-custom_css'
		);
		const wpAdditionalCSSHeadline = wpAdditionalCSSArea.querySelector(
			'h3 .customize-action'
		);

		if (null !== wpAdditionalCSSArea) {
			if (
				null !== wpAdditionalCSSHeadline &&
				null !== window.site.customBodyClass &&
				'' !== window.site.customBodyClass
			) {
				wpAdditionalCSSHeadline.innerHTML = `Custom class: <strong>body.custom-${window.site.customBodyClass}</strong>`;
			}
		}
	}, 0);
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

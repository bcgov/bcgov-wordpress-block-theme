/**
 * General CleanBC DOM manipulation.
 */
const domReady = () => {
	/*
	 * SafarIE bug requires 0ms timeout.
	 */
	setTimeout(function() {
		// Add siteName body class.
		if (null !== window.site.siteName) {
			document.querySelector('body').classList.add(window.site.siteName);
		}
	}, 0);
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

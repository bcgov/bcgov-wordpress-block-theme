/**
 * General CleanBC DOM manipulation.
 */
const domReady = () => {
	// Only run for CleanBC.
	if ('cleanbc' === window.site.siteName) {
		/*
		 * SafarIE bug requires 0ms timeout.
		 */
		setTimeout(function() {
			// CleanBC Icon Buttons
			const iconButtons = document.querySelectorAll('a.icon');
			if (iconButtons.length) {
				iconButtons.forEach((button) => {
					if (null === button.getAttribute('href')) {
						button.setAttribute('tabindex', '-1');
						button.style.pointerEvents = 'none';
					}
				});
			}

			// This should be CSS...
			const iconButtonContainers = document.querySelectorAll(
				'.wp-block-button.is-style-icon'
			);
			if (iconButtonContainers.length) {
				iconButtonContainers.forEach((container) => {
					if (!container.classList.contains('has-size-large')) {
						container.querySelector('a').style.outlineOffset =
							'1rem';
					}
				});
			}
			/**
			 * Manage events after page scroll.
			 */
			const cleanbcWindowScroll = () => {
				// Do nothing for now – will remove if not needed.
			};
			window.addEventListener('scroll', cleanbcWindowScroll);
		}, 0);
	}
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

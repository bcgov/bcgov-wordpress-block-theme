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
			const body = document.querySelector('body');
			const homeBanner = document.querySelector('.home-cover-banner');
			const homeButtons = homeBanner.querySelectorAll('.wp-block-button');

			if (null !== homeBanner) {
				body.classList.add('home');
				homeBanner.addEventListener('click', () => {
					document
						.querySelector('.home-cover-banner + div')
						.scrollIntoView();
				});
				if (null !== homeButtons) {
					homeButtons.forEach((btn) => {
						btn.addEventListener('click', (e) => {
							e.stopPropagation();
						});
					});
				}
			}

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
					const containerLink = container.querySelector('a');
					if (
						null !== containerLink &&
						!container.classList.contains('has-size-large')
					) {
						containerLink.style.outlineOffset = '1rem';
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

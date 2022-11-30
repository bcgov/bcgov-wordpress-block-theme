/**
 * Accessibility DOM manipulation.
 */
const domReady = () => {
	/*
	 * SafarIE bug requires 0ms timeout.
	 */
	setTimeout(function() {
		const siteLogo = document.querySelector('.bcgov-logo');
		const siteName = document.querySelector('.wp-block-site-title');

		if (null !== siteLogo) {
			const invertBackground = siteLogo.hasAttribute('data-print');
			const printHeaderContainer = document.createElement('div');
			const cloneLogo = siteLogo.cloneNode(true);

			printHeaderContainer.className = 'print-header';

			if (invertBackground) {
				printHeaderContainer.classList.add(
					'print-header-black-background'
				);
				const printHeaderBlackImage = document.createElement('img');
				printHeaderBlackImage.className = 'black-background';
				printHeaderBlackImage.setAttribute(
					'src',
					window.site.templateDir + '/assets/images/svg/black.svg'
				);
				printHeaderContainer.append(printHeaderBlackImage);
			}

			document.body.prepend(printHeaderContainer);

			printHeaderContainer.prepend(cloneLogo);

			if (null !== siteName) {
				const cloneSiteName = siteName.cloneNode(true);
				printHeaderContainer.append(cloneSiteName);
			}
		}
	}, 0);
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

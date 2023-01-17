/**
 * Print mode manipulation.
 */
const domReady = () => {
	/*
	 * SafarIE bug requires 0ms timeout.
	 */
	setTimeout(function() {
		const siteLogo = document.querySelector('.bcgov-logo');
		const siteName = document.querySelector('.wp-block-site-title');

		/*
		 * Print mode header synthesis
		 */
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

		/*
		 * Print mode enable parent containers for images allowed to print
		 */
		const imageElement = document.querySelectorAll('img');

		imageElement.forEach((image) => {
			const imageContainer = image.closest('figure');
			if (true === image.hasAttribute('data-print')) {
				if (null !== imageContainer) {
					imageContainer.classList.add('print');
				}
			}
		});

		const printMediaQuery = window.matchMedia('print');

		function handlePrintChange(e) {
			const imagesToPrint = document.querySelectorAll('img');

			if (e.matches) {
				imagesToPrint.forEach((image) => {
					const imageContainer = image.closest('figure');
					if (true === image.hasAttribute('data-print-width')) {
						if (null !== imageContainer) {
							image.setAttribute(
								'style',
								'max-width: ' +
									image.dataset.printWidth +
									'% !important'
							);
						}
					}
				});
			} else {
				imagesToPrint.forEach((image) => {
					const imageContainer = image.closest('figure');
					if (true === image.hasAttribute('data-print-width')) {
						if (null !== imageContainer) {
							image.removeAttribute('style');
						}
					}
				});
			}
		}

		printMediaQuery.addEventListener('change', handlePrintChange);

		// Initial check
		handlePrintChange(printMediaQuery);
	}, 0);
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

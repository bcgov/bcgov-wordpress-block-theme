/**
 * Accessibility DOM manipulation.
 */
const domReady = () => {
	/*
	 * SafarIE bug requires 0ms timeout.
	 */
	setTimeout(function() {
		const bodyInsertion = document.querySelector('body').firstChild;
		const skipNav = document.querySelector('.skip-nav-menu');

		if (null !== skipNav) {
			bodyInsertion.parentNode.insertBefore(skipNav, bodyInsertion);
			const skipNavItems = skipNav.querySelectorAll('.skip-nav');
			skipNavItems.forEach((item) => {
				item.querySelector('a').setAttribute('tabindex', 0);
			});
		}

		const mainMenuHamburger = document.querySelector('header nav > button');
		const mainMenu = document.querySelector(
			'header nav button + .hidden-by-default'
		);

		if (null !== mainMenuHamburger) {
			mainMenuHamburger.setAttribute('id', 'main-menu');

			if (null !== mainMenu) {
				const mainMenuLinks = mainMenu.querySelectorAll('a');
				const mainMenuButtons = mainMenu.querySelectorAll('button');
				if (mainMenu.getAttribute('aria-hidden') !== 'true') {
					mainMenuLinks.forEach((link) => {
						link.setAttribute('tabindex', '-1');
					});
					mainMenuButtons.forEach((button) => {
						button.setAttribute('tabindex', '-1');
					});
				}

				const config = { attributes: true };

				const callback = (mutationList) => {
					for (const mutation of mutationList) {
						if (mutation.type === 'attributes') {
							if (
								mainMenu.getAttribute('aria-hidden') === 'false'
							) {
								mainMenuLinks.forEach((link) => {
									link.setAttribute('tabindex', '0');
								});
								mainMenuButtons.forEach((button) => {
									if (
										button.getAttribute('aria-label') ===
										'Close menu'
									) {
										button.setAttribute('tabindex', '0');
									}
								});
							}
							if (
								mainMenu.getAttribute('aria-hidden') === 'true'
							) {
								mainMenuLinks.forEach((link) => {
									link.setAttribute('tabindex', '-1');
								});
								mainMenuButtons.forEach((button) => {
									button.setAttribute('tabindex', '-1');
								});
							}
						}
					}
				};

				const observer = new window.MutationObserver(callback);

				observer.observe(mainMenu, config);
			}
		}
	}, 0);
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

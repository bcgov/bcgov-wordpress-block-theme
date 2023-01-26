import { createElement, qs, qsa } from './utils';

/**
 * Ribbon navigation manipulation.
 */
const domReady = () => {
	if (qsa('.is-style-ribbon-menu').length) {
		qs('body').classList.add('has-ribbon-menu');

		/*
		 * Check for menu items being out of viewport and class is needed.
		 */
		function doBoundsCheck(targetEl) {
			setTimeout(function() {
				const container = targetEl;
				const childContainer = qs('ul', container);

				let bounding = null;
				const parentBounding = container.getBoundingClientRect();

				if (null !== childContainer) {
					bounding = childContainer.getBoundingClientRect();
				}
				if (
					null !== bounding &&
					bounding.right >
						(window.innerWidth ||
							document.documentElement.clientWidth)
				) {
					if (null !== childContainer) {
						childContainer.classList.add('is-offscreen');
						childContainer.style.left =
							'calc(' + parentBounding.width + 'px - 185%)';
						childContainer.style.right = 'auto';
						childContainer.style.top = '20%';
						childContainer.style.position = 'absolute';
					}
				}
			}, 0);
		}

		if (qsa('li.wp-block-navigation-item').length) {
			const elem = qsa('li.wp-block-navigation-item');

			elem.forEach((i) => {
				i.addEventListener(
					'pointerover',
					(e) => {
						let target = e.target;
						if (target.tagName !== 'LI') {
							target = target.closest('li');
						}
						doBoundsCheck(target);
					},
					{ capture: false }
				);
			});
		}

		/*
		 * Sets up an integrated menu item for the language switcher
		 * when NOT using the "Displays as dropdown" (select-based) option
		 */
		if (
			qs('.wp-block-polylang-language-switcher') &&
			!qs('.wp-block-polylang-language-switcher select')
		) {
			const ul1 = qs('.wp-block-polylang-language-switcher');
			const ul2 = qs('.wp-block-navigation__container');

			if (ul2) {
				ul2.classList.add('primary-menu-container');
			}

			const lis1 = qsa('.lang-item', ul1);

			let currentUl = ul2;

			lis1.forEach((li) => {
				const a = qs('a', li);
				const href = a.getAttribute('href');
				const text = a.textContent;
				let li2 = null;

				if (li.classList.contains('current-lang')) {
					li2 = createElement('li', {
						class:
							'has-text-color has-white-color has-background has-blue-background-background-color has-extra-small-font-size wp-block-navigation-item has-child open-on-hover-click tertiary wp-block-navigation-submenu current-menu-item accent',
					});
				} else {
					li2 = createElement('li', {
						class:
							'language-option has-text-color has-white-color has-background has-blue-background-background-color has-extra-small-font-size wp-block-navigation-item denary wp-block-navigation-link',
					});
				}

				if (li.classList.contains('current-lang')) {
					const button = createElement('button', {
						class:
							'wp-block-navigation__submenu-icon wp-block-navigation-submenu__toggle language_switcher',
						'aria-label': text + ' submenu',
						'aria-expanded': 'false',
					});

					const svg = document.createElementNS(
						'http://www.w3.org/2000/svg',
						'svg'
					);
					svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
					svg.setAttribute('width', '12');
					svg.setAttribute('height', '12');
					svg.setAttribute('viewBox', '0 0 12 12');
					svg.setAttribute('fill', 'none');
					svg.setAttribute('aria-hidden', 'true');
					svg.setAttribute('focusable', 'false');
					const path = document.createElementNS(
						'http://www.w3.org/2000/svg',
						'path'
					);
					path.setAttribute('d', 'M1.50002 4L6.00002 8L10.5 4');
					path.setAttribute('stroke-width', '1.5');
					svg.appendChild(path);

					button.appendChild(svg);
					li2.appendChild(button);

					const ul3 = createElement('ul', {
						class: 'wp-block-navigation__submenu-container',
					});
					currentUl.appendChild(ul3);
					currentUl = ul3;
				}

				const a2 = createElement('a', {
					class: 'wp-block-navigation-item__content',
					href,
					'aria-current': 'page',
				});

				const span = createElement('span', {
					class: 'wp-block-navigation-item__label',
					text,
				});

				currentUl.appendChild(li2);
				a2.appendChild(span);
				li2.appendChild(a2);

				const button = qs(
					'.wp-block-navigation-submenu__toggle.language_switcher'
				);

				// move the link before the button
				if (
					button &&
					li2.classList.contains('wp-block-navigation-submenu')
				) {
					li2.insertBefore(button, a2.nextSibling);
					const ul3 = createElement('ul', {
						class:
							'wp-block-navigation__submenu-container language_switcher_options',
					});
					li2.appendChild(ul3);
				}

				const ul3 = qs(
					'.wp-block-navigation__submenu-container.language_switcher_options'
				);

				if (!li.classList.contains('has-child') && ul3) {
					currentUl = ul3;
				}
			});

			// remove the default language switcher from the DOM when using the "Displays as dropdown" option
			if (!qs('.wp-block-polylang-language-switcher select')) {
				qs('.wp-block-polylang-language-switcher').remove();
			}
		}

		const ulPrimary = qs('.primary-menu-container');

		const ulLanguageOptions = qs('.language_switcher_options');

		const lis2 = qsa('.language-option', ulPrimary);

		lis2.forEach((li) => {
			ulLanguageOptions.appendChild(li);
		});
	}
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

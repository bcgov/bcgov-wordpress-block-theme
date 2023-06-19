import { createElement, qs, qsa } from './utils';

/**
 * Ribbon navigation manipulation.
 * [@return](https://github.com/return) {void}
 */
const domReady = () => {
    if (qsa('.is-style-ribbon-menu').length) {
        qs('body').classList.add('has-ribbon-menu');

        /*
         * Check for menu items being out of viewport and class is needed.
         */
        function doBoundsCheck(targetEl) {
            setTimeout(function () {
                const container = targetEl;
                const childContainer = qs('ul', container);
                const subChildContainer = qs(
                    '.wp-block-navigation__submenu-container .wp-block-navigation__submenu-container',
                    container
                );
                const languageChildContainer = qs('.language_switcher_options');

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
                        childContainer.style.top = '100%';
                        if (null !== subChildContainer) {
                            subChildContainer.style.top = '20%';
                        }
                        if (null !== languageChildContainer) {
                            languageChildContainer.style.top = '100%';
                        }
                        childContainer.style.position = 'absolute';
                    }
                }
            }, 0);
        }

        /*
         * Sets up an integrated menu item for the language switcher
         * when NOT using the "Displays as dropdown" (select-based) option
         */
        let subMenuLanguageGroupLiClasses = '';
        let subMenuLanguageOptionLiClasses = '';

        if (
            qs('.wp-block-polylang-language-switcher') &&
            !qs('.wp-block-polylang-language-switcher select')
        ) {
            const ulmainnav = qs('.wp-block-navigation__container');

            if (ulmainnav) {
                ulmainnav.classList.add('primary-menu-container');
                ulmainnav.classList.add('ul-main-nav');
            }

            const submenuLis = qsa('li', ulmainnav);
            const subSubmenuLis = qsa(
                '.wp-block-navigation__submenu-container li',
                ulmainnav
            );

            submenuLis.forEach((li) => {
                if (
                    li.classList.contains('wp-block-navigation-submenu') &&
                    '' === subMenuLanguageGroupLiClasses
                ) {
                    subMenuLanguageGroupLiClasses = li.classList
                        .toString()
                        .replace(/,/g, ' ')
                        .replace('current-menu-item', '');
                }
            });

            subSubmenuLis.forEach((li) => {
                if (
                    li.classList.contains('wp-block-navigation-item') &&
                    '' === subMenuLanguageOptionLiClasses
                ) {
                    subMenuLanguageOptionLiClasses = li.classList
                        .toString()
                        .replace(/,/g, ' ')
                        .replace('current-menu-item', '');
                }
            });

            // Attempt to assign colours when there aren't any other sub-menus to draw from
            if ('' === subMenuLanguageGroupLiClasses) {
                subMenuLanguageGroupLiClasses = `${subMenuLanguageOptionLiClasses} has-text-color has-background-color has-background has-secondary-brand-background-color wp-block-navigation-item has-child open-on-hover-click wp-block-navigation-submenu`;
            }

            let currentUl = ulmainnav;

            const ulLangSwitch = qs('.wp-block-polylang-language-switcher');
            const lis1 = qsa('.lang-item', ulLangSwitch);

            if (lis1) {
                lis1.forEach((li) => {
                    const a = qs('a', li);
                    const href = a.getAttribute('href');
                    const text = a.textContent;
                    let li2 = null;

                    if (li.classList.contains('current-lang')) {
                        li2 = createElement('li', {
                            class: `language-group ${subMenuLanguageGroupLiClasses}`,
                        });
                    } else {
                        li2 = createElement('li', {
                            class: `language-option ${subMenuLanguageOptionLiClasses}`,
                        });
                    }

                    if (li.classList.contains('current-lang')) {
                        const button = createElement('button', {
                            class: 'wp-block-navigation__submenu-icon wp-block-navigation-submenu__toggle language_switcher',
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
                        currentUl = ul3; //?
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
                            class: 'wp-block-navigation__submenu-container language_switcher_options ul3',
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
            }

            // remove the language switcher down arrow from the DOM when using the "Show arrow" navigation option
            if (!qs('.language-group.open-on-hover-click')) {
                qs('.language-group button').remove();
            }

            // remove the default language switcher from the DOM when using the "Displays as dropdown" option
            if (!qs('.wp-block-polylang-language-switcher select')) {
                qs('.wp-block-polylang-language-switcher').remove();
            }
        }

        const ulPrimary = qs('.primary-menu-container');

        const ulLanguageOptions = qs('.language_switcher_options');

        if (ulPrimary && ulLanguageOptions) {
            const lis2 = qsa('.language-option', ulPrimary);

            if (lis2) {
                lis2.forEach((li) => {
                    subMenuLanguageGroupLiClasses
                        .split(' ')
                        .forEach((className) => {
                            if ('' !== className) {
                                li.classList.add(className);
                            }
                        });
                    ulLanguageOptions.appendChild(li);
                });
            }
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
    }
};

if ('complete' === document.readyState) {
    domReady();
} else {
    document.addEventListener('DOMContentLoaded', domReady);
}

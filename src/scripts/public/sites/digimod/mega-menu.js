/**
 * Navigation DOM manipulation for Mega Menu display characteristics.
 *
 * Note: as this runs on all pages be sure to null check all elements before use.
 *
 * @return {void}
 */
const domReady = () => {
    /*
     * SafarIE bug requires 0ms timeout.
     */
    setTimeout(function () {
        /**
         * This handles the behavior of WordPress navigation menu and submenus as a mega menu.
         */
        const primaryMenuListItems = document.querySelectorAll(
            'header nav > .wp-block-navigation__container > .wp-block-navigation-item.has-child'
        );
        const menuSubUL = document.querySelectorAll(
            '.wp-block-navigation__submenu-container .wp-block-navigation__submenu-container'
        );

        if (primaryMenuListItems) {
            primaryMenuListItems.forEach((item) => {
                const subMenuContainer = item.querySelector(
                    '.wp-block-navigation__submenu-container'
                );

                item.addEventListener('pointerenter', () => {
                    if (subMenuContainer) {
                        const firstSubMenuItemButton =
                            subMenuContainer.querySelector(
                                '.wp-block-navigation-item:first-child button'
                            );
                        if (firstSubMenuItemButton) {
                            if (
                                firstSubMenuItemButton.getAttribute(
                                    'aria-expanded'
                                ) === 'false'
                            ) {
                                firstSubMenuItemButton.focus();
                                firstSubMenuItemButton.click();
                                firstSubMenuItemButton.blur();
                            }
                        }
                    }
                    const itemMenuSubUL = item.querySelector(
                        '.wp-block-navigation__submenu-container .wp-block-navigation__submenu-container'
                    );

                    if (itemMenuSubUL) {
                        const parentULContainer =
                            itemMenuSubUL.parentNode.parentNode;

                        if (
                            parentULContainer.offsetHeight <=
                            itemMenuSubUL.offsetHeight
                        ) {
                            parentULContainer.style.minHeight = `${itemMenuSubUL.offsetHeight}px`;
                        } else {
                            itemMenuSubUL.style.minHeight = `${parentULContainer.offsetHeight}px`;
                        }
                    }
                });

                item.addEventListener('pointerleave', () => {
                    const firstSubMenuItemButton =
                        subMenuContainer.querySelector(
                            '.wp-block-navigation-item:first-child button'
                        );
                    if (firstSubMenuItemButton) {
                        firstSubMenuItemButton.setAttribute(
                            'aria-expanded',
                            'false'
                        );
                    }
                });
            });

            if (menuSubUL) {
                menuSubUL.forEach((menuItem) => {
                    const parentLI = menuItem.parentNode;
                    const headline = document.createElement('li');
                    headline.classList.add('headline');
                    headline.textContent = parentLI.firstChild.textContent;
                    menuItem.prepend(headline);
                    menuItem.style.width = `66vw`;

                    parentLI.addEventListener('pointerenter', () => {
                        const menuItemMenuSubUL = parentLI.querySelector(
                            '.wp-block-navigation__submenu-container .wp-block-navigation__submenu-container'
                        );

                        menuItemMenuSubUL.style.width = `66vw`;
                        if (menuItemMenuSubUL) {
                            const parentULContainer =
                                menuItemMenuSubUL.parentNode.parentNode;
                            if (
                                parentULContainer.offsetHeight <=
                                menuItemMenuSubUL.offsetHeight
                            ) {
                                parentULContainer.style.minHeight = `${menuItemMenuSubUL.offsetHeight}px`;
                            } else {
                                menuItemMenuSubUL.style.minHeight = `${parentULContainer.offsetHeight}px`;
                            }
                        }
                    });
                });
            }
        }
    }, 0);
};

if ('complete' === document.readyState) {
    domReady();
} else {
    document.addEventListener('DOMContentLoaded', domReady);
}

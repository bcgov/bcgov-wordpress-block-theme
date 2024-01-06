import { qs, qsa, addSafeEventListener } from './utils';

/**
 * Accessibility DOM manipulation.
 * [@return](https://github.com/return) {void}
 */
const bcgovBlockThemeAccessibility = () => {
    /*
     * SafarIE iOS requires window.requestAnimationFrame update.
     */
    window.requestAnimationFrame( () => {
        const bodyInsertion = qs( 'body' ).firstChild;
        const skipNav = qs( '.skip-nav-menu' );

        if ( null !== skipNav ) {
            bodyInsertion.parentNode.insertBefore( skipNav, bodyInsertion );
            const skipNavItems = qsa( '.skip-nav', skipNav );
            skipNavItems.forEach( ( item ) => {
                qs( 'a', item ).setAttribute( 'tabindex', 0 );
            } );
        }

        const mainMenuHamburger = qs( 'header nav > button' );
        const mainMenu = qs( 'header nav button + .hidden-by-default' );

        if ( null !== mainMenuHamburger ) {
            mainMenuHamburger.setAttribute( 'id', 'main-menu' );

            if ( null !== mainMenu ) {
                const mainMenuLinks = qsa( 'a', mainMenu );
                const mainMenuButtons = qsa( 'button', mainMenu );
                if ( mainMenu.getAttribute( 'aria-hidden' ) !== 'true' ) {
                    mainMenuLinks.forEach( ( link ) => {
                        link.setAttribute( 'tabindex', '-1' );
                    } );
                    mainMenuButtons.forEach( ( button ) => {
                        button.setAttribute( 'tabindex', '-1' );
                    } );
                }

                const config = { attributes: true };

                const callback = ( mutationList ) => {
                    for ( const mutation of mutationList ) {
                        if ( mutation.type === 'attributes' ) {
                            if (
                                mainMenu.getAttribute( 'aria-hidden' ) ===
                                'false'
                            ) {
                                mainMenuLinks.forEach( ( link ) => {
                                    link.setAttribute( 'tabindex', '0' );
                                } );
                                mainMenuButtons.forEach( ( button ) => {
                                    if (
                                        button.getAttribute( 'aria-label' ) ===
                                        'Close menu'
                                    ) {
                                        button.setAttribute( 'tabindex', '0' );
                                    }
                                } );
                            }
                            if (
                                mainMenu.getAttribute( 'aria-hidden' ) ===
                                'true'
                            ) {
                                mainMenuLinks.forEach( ( link ) => {
                                    link.setAttribute( 'tabindex', '-1' );
                                } );
                                mainMenuButtons.forEach( ( button ) => {
                                    button.setAttribute( 'tabindex', '-1' );
                                } );
                            }
                        }
                    }
                };

                const observer = new window.MutationObserver( callback );

                observer.observe( mainMenu, config );
            }
        }
    } );
};

if ( 'complete' === document.readyState ) {
    bcgovBlockThemeAccessibility();
} else {
    addSafeEventListener(
        document,
        'DOMContentLoaded',
        bcgovBlockThemeAccessibility()
    );
}

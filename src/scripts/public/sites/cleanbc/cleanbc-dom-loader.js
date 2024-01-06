import { qs, qsa, addSafeEventListener } from '../../utils';

/**
 * CleanBC General DOM manipulation.
 * [@return](https://github.com/return) {void}
 */
const bcgovBlockThemeCleanbcDomLoader = () => {
    /*
     * SafarIE iOS requires window.requestAnimationFrame update.
     */
    window.requestAnimationFrame( () => {
        // Only run for CleanBC or sites that use all styles.
        // window.pluginCleanbc is injected by the BCGov Frontend Supplemental: CleanBC plugin
        if ( undefined !== window.pluginCleanbc ) {
            if (
                'optional' === window.pluginCleanbc.siteName ||
                window.site.allSiteStyles
            ) {
                // CleanBC Icon Buttons
                const iconButtons = qsa( 'a.icon' );
                if ( iconButtons.length ) {
                    iconButtons.forEach( ( button ) => {
                        if ( null === button.getAttribute( 'href' ) ) {
                            button.setAttribute( 'tabindex', '-1' );
                            button.style.pointerEvents = 'none';
                        }
                    } );
                }

                // This should be CSS...
                const iconButtonContainers = qsa(
                    '.wp-block-button.is-style-icon'
                );
                if ( iconButtonContainers.length ) {
                    iconButtonContainers.forEach( ( container ) => {
                        const containerLink = qs( 'a', container );
                        if (
                            null !== containerLink &&
                            ! container.classList.contains( 'has-size-large' )
                        ) {
                            containerLink.style.outlineOffset = '1rem';
                        }
                    } );
                }
                /**
                 * Manage events after page scroll.
                 */
                const cleanbcWindowScroll = () => {
                    // Do nothing for now – will remove if not needed.
                };
                window.addEventListener( 'scroll', cleanbcWindowScroll );
            }
        }
    } );
};

if ( 'complete' === document.readyState ) {
    bcgovBlockThemeCleanbcDomLoader();
} else {
    addSafeEventListener(
        document,
        'DOMContentLoaded',
        bcgovBlockThemeCleanbcDomLoader()
    );
}

import { qs, unEscapeCSS, addSafeEventListener } from './utils';

/**
 * General Block Theme window event management and DOM manipulation.
 * [@return](https://github.com/return) {void}
 */
const bcgovBlockThemeDomLoader = () => {
    /*
     * SafarIE iOS requires window.requestAnimationFrame update.
     */
    window.requestAnimationFrame( () => {
        /**
         * Add siteName body classes and modify DOM placement of breadcrumb after first banner.
         */
        const body = qs( 'body' );
        // Guard against being in the WordPress admin area.
        const wpAdmin = body.classList.contains( 'wp-admin' );
        if ( wpAdmin ) return;

        const home = body.classList.contains( 'home' );
        const headerGroup = qs( 'header' );
        const header = qs( '.bcgov-header-group' );
        const isGovLogo = qs( '.wp-block-site-logo' );
        const footer = qs( 'footer' );
        const postContent = qs( '.wp-block-post-content' );
        const customCSS = qs( '#wp-custom-css' );

        if ( null !== customCSS ) {
            customCSS.innerText = unEscapeCSS( customCSS.innerText );
        }

        window.requestAnimationFrame( () => {
            /*
             * Determine padding for body based on header height.
             */
            const headerGroupHeight = window
                .getComputedStyle( headerGroup )
                .getPropertyValue( 'height' );
            const headerHeight = window
                .getComputedStyle( header )
                .getPropertyValue( 'height' );

            if (
                ( headerGroupHeight === '0px' ) === '0px' &&
                headerHeight !== '0px'
            ) {
                body.style.paddingTop = headerGroupHeight;
            } else if ( headerGroupHeight === '0px' ) {
                body.style.paddingTop = headerHeight;
                /*
                 * Set the scroll padding to the height of the fixed header.
                 */
                document.documentElement.style.setProperty(
                    '--scroll-padding',
                    headerGroup.clientHeight + 'px'
                );
            }
        } );

        let bannerElement = null;
        if ( null !== postContent ) {
            bannerElement = postContent.firstElementChild;
        }
        const breadcrumb = qs( '.breadcrumb-nav-section' );

        if ( null !== isGovLogo ) {
            qs( 'img', isGovLogo ).setAttribute( 'alt', 'BCGov Logo' );
        }

        let takeover,
            nav = null;
        if ( null !== header ) {
            takeover = qs( '.is-style-takeover-menu', header );
            nav = qs( 'nav', header );
        }

        if (
            null !== window.site.siteName &&
            '' !== window.site.siteName &&
            undefined !== window.site.siteName
        ) {
            body.classList.add( window.site.siteName );
        } else {
            body.classList.add( 'bcgov' );
        }

        if ( null !== window.site.headerEffect && null !== takeover ) {
            body.classList.add( `header-${ window.site.headerEffect }` );
        } else {
            body.classList.add( 'header-scroll' );
        }

        if (
            null !== window.site.customBodyClass &&
            '' !== window.site.customBodyClass
        ) {
            body.classList.add( `custom-${ window.site.customBodyClass }` );
        }

        if (
            null !== window.site.externalLinkIcons &&
            '' !== window.site.externalLinkIcons &&
            undefined !== window.site.externalLinkIcons
        ) {
            if ( '1' === window.site.externalLinkIcons ) {
                body.classList.add( 'external-link-icons' );
            }
        }

        /*
         * Any inital element with a class that includes 'banner' will be moved above the breadcrumb navigation.
         * However if the class name also includes 'in-page' it will not be moved.
         * eg: in-page-strategies-banner
         */
        if ( null !== bannerElement ) {
            if (
                bannerElement.className
                    .split( ' ' )
                    .some( ( individualClass ) =>
                        /.*banner.*/.test( individualClass )
                    ) &&
                ! bannerElement.className
                    .split( ' ' )
                    .some( ( individualClass ) =>
                        /.*in-page.*/.test( individualClass )
                    )
            ) {
                if ( null !== breadcrumb ) {
                    bannerElement.parentNode.insertBefore(
                        breadcrumb,
                        bannerElement.nextSibling
                    );
                    breadcrumb.classList.add( 'alignwide' );
                    if ( home ) {
                        breadcrumb.remove();
                    }
                }
            }
        }

        /**
         * Enable fixed or scroll header based on site options.
         */
        if (
            null !== nav &&
            ( 'fixed' === window.site.headerEffect ||
                'hides' === window.site.headerEffect )
        ) {
            header.style.position = 'fixed';
        }
        if (
            null !== takeover &&
            ( null === window.site.headerEffect ||
                'scroll' === window.site.headerEffect )
        ) {
            header.style.position = 'absolute';
            header.style.overflow = 'hidden';
            header.style.transform = 'none';
        }
        if ( null === nav ) {
            body.style.paddingTop = 0;
        }

        /**
         * Set up scroll to top link.
         */
        const backToTopBtn = document.createElement( 'a' );
        backToTopBtn.setAttribute( 'class', 'back-to-top' );
        backToTopBtn.setAttribute( 'alt', 'Back to top' );
        backToTopBtn.setAttribute( 'title', 'Back to top' );
        backToTopBtn.setAttribute( 'tabindex', '0' );
        backToTopBtn.setAttribute(
            'aria-label',
            'Click to go back to the top of the page'
        );
        backToTopBtn.setAttribute( 'href', '#top' );
        backToTopBtn.setAttribute( 'role', 'button' );
        if ( null !== footer ) {
            footer.append( backToTopBtn );
        }

        const backToTopImage = document.createElement( 'img' );
        backToTopImage.setAttribute( 'class', 'back-to-top-icon' );
        backToTopImage.setAttribute( 'alt', 'back to top icon' );
        backToTopImage.setAttribute(
            'src',
            window.site.templateDir + '/assets/images/back-to-top.png'
        );
        backToTopBtn.append( backToTopImage );

        let lastScrollTop = 0;
        const scrollTopPadding = 100;

        /**
         * Manage events after page scroll.
         */
        const windowScroll = () => {
            /**
             * Set back to top link visible when close to bottom of window.
             */
            const backToTop = qs( '.back-to-top' );
            if ( null !== backToTop ) {
                if (
                    window.pageYOffset + window.innerHeight >
                    document.body.offsetHeight - 1000
                ) {
                    backToTop.style.display = 'block';
                    backToTop.style.opacity = '0.75';
                } else {
                    backToTop.style.display = 'none';
                    backToTop.style.opacity = '0';
                }
            }
            /**
             * Enable header scroll show/hide based on site options.
             */
            if ( null !== nav && 'hides' === window.site.headerEffect ) {
                const scrollTopPosition =
                    window.pageYOffset || document.documentElement.scrollTop;
                if ( scrollTopPosition < lastScrollTop ) {
                    // Do scroll up management.
                    if ( scrollTopPosition > scrollTopPadding ) {
                        header.style.opacity = '1';
                        header.style.transform = 'translateY(0%)';
                    }
                } else if ( scrollTopPosition > scrollTopPadding ) {
                    header.style.opacity = '0';
                    header.style.transform = 'translateY(-100%)';
                }
                lastScrollTop = scrollTopPosition <= 0 ? 0 : scrollTopPosition;
            }
        };

        addSafeEventListener( document, 'scroll', windowScroll );
    } );
};

if ( 'complete' === document.readyState ) {
    bcgovBlockThemeDomLoader();
} else {
    addSafeEventListener(
        document,
        'DOMContentLoaded',
        bcgovBlockThemeDomLoader()
    );
}

/* Helper functions */

const doExternalLinkCheck = () => {
    /**
     * Set up external icons for links.
     */

    if ( '1' === window.site.externalLinkIcons ) {
        const links = document.querySelectorAll( '.post-content a' );

        if ( links ) {
            links.forEach( ( link ) => {
                const href = link.getAttribute( 'href' );

                if ( null !== href ) {
                    // Check if the link is an anchor link or a relative link
                    if (
                        href.startsWith( '#' ) ||
                        href.startsWith( '/' ) ||
                        href.startsWith( './' ) ||
                        href.startsWith( '../' ) ||
                        href.startsWith( '?' )
                    ) {
                        return;
                    }

                    // Get the current domain
                    const currentDomain = window.location.hostname;

                    // Extract the domain from the link's href
                    const linkDomain = href.match(
                        /^(?:https?:)?(?:\/\/)?([^\/\?]+)/i
                    )[ 1 ];

                    // Check if the domains don't match
                    if ( linkDomain !== currentDomain ) {
                        link.classList.add( 'external' );

                        const svg = document.createElementNS(
                            'http://www.w3.org/2000/svg',
                            'svg'
                        );
                        svg.setAttribute( 'class', 'external-link-icon' );
                        svg.setAttribute( 'version', '1.1' );
                        svg.setAttribute( 'id', 'Layer_1' );
                        svg.setAttribute(
                            'xmlns',
                            'http://www.w3.org/2000/svg'
                        );
                        svg.setAttribute(
                            'xmlns:xlink',
                            'http://www.w3.org/1999/xlink'
                        );
                        svg.setAttribute( 'x', '0px' );
                        svg.setAttribute( 'y', '0px' );
                        svg.setAttribute( 'viewBox', '0 0 18 18' );
                        svg.setAttribute(
                            'style',
                            'enable-background:new 0 0 18 18;'
                        );
                        svg.setAttribute( 'xml:space', 'preserve' );
                        svg.innerHTML =
                            '<path class="st0" d="M9.7,3.9c0-0.1-0.1-0.3-0.2-0.4C9.4,3.4,9.3,3.4,9.2,3.4H1.7c-0.4,0-0.9,0.2-1.2,0.5C0.2,4.2,0,4.6,0,5.1v11.2c0,0.4,0.2,0.9,0.5,1.2C0.8,17.8,1.2,18,1.7,18h11.2c0.4,0,0.9-0.2,1.2-0.5c0.3-0.3,0.5-0.7,0.5-1.2V8.8c0-0.1-0.1-0.3-0.2-0.4 c-0.1-0.1-0.2-0.2-0.4-0.2c-0.1,0-0.3,0.1-0.4,0.2c-0.1,0.1-0.2,0.2-0.2,0.4v7.5c0,0.1-0.1,0.3-0.2,0.4c-0.1,0.1-0.2,0.2-0.4,0.2 H1.7c-0.1,0-0.3-0.1-0.4-0.2c-0.1-0.1-0.2-0.2-0.2-0.4V5.1c0-0.1,0.1-0.3,0.2-0.4c0.1-0.1,0.2-0.2,0.4-0.2h7.5 c0.1,0,0.3-0.1,0.4-0.2C9.7,4.2,9.7,4.1,9.7,3.9z"/><path class="st0" d="M18,0.6c0-0.1-0.1-0.3-0.2-0.4C17.7,0.1,17.6,0,17.4,0h-5.6c-0.1,0-0.3,0.1-0.4,0.2c-0.1,0.1-0.2,0.2-0.2,0.4 s0.1,0.3,0.2,0.4c0.1,0.1,0.2,0.2,0.4,0.2h4.3l-9.2,9.2c-0.1,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.1,0,0.2s0,0.1,0,0.2c0,0.1,0.1,0.1,0.1,0.2C7,11.1,7,11.2,7.1,11.2c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0s0.1-0.1,0.2-0.1l9.2-9.2v4.3c0,0.1,0.1,0.3,0.2,0.4c0.1,0.1,0.2,0.2,0.4,0.2c0.1,0,0.3-0.1,0.4-0.2C17.9,6.5,18,6.3,18,6.2V0.6z"/>';

                        const computedStyle = window.getComputedStyle( link );
                        const fontSize = computedStyle.fontSize;

                        // Set the font size for the SVG
                        svg.style.width = fontSize;
                        svg.style.height = fontSize;

                        link.appendChild( svg );
                    }
                }
            } );
        }
    }
};

/**
 * Window event functions
 *
 * Manage events after page load.
 */
const windowLoad = () => {
    windowResize();
    doExternalLinkCheck();
};

/**
 * Manage events after window resize.
 */
const windowResize = () => {
    /**
     * Set orientation helper classes on body.
     */
    const height = window.innerHeight;
    const width = document.body.clientWidth;
    if ( width > height ) {
        // Landscape
        document.body.classList.remove( 'portrait' );
        document.body.classList.add( 'landscape' );
    } else {
        // Portrait
        document.body.classList.remove( 'landscape' );
        document.body.classList.add( 'portrait' );
    }
    /**
     * Set device size helper classes on body.
     * Needed for overriding WordPress specific block size !important.
     * eg: .wp-block-media-text.is-stacked-on-mobile for small breakpoint.
     */
    if ( width <= 782 ) {
        /**
         * Mobile or small breakpoint: $breakpoint-sm
         */
        document.body.classList.remove( 'largeScreen' );
        document.body.classList.remove( 'tablet' );
        document.body.classList.add( 'mobile' );
    } else if ( width <= 1199 ) {
        /**
         * Tablet or large breakpoint for mid-sized resolution changes: $breakpoint-lg
         */
        document.body.classList.remove( 'mobile' );
        document.body.classList.add( 'tablet' );
        document.body.classList.remove( 'largeScreen' );
    } else {
        /**
         * Desktop or wider than large breakpoint
         */
        document.body.classList.remove( 'mobile' );
        document.body.classList.remove( 'tablet' );
        document.body.classList.add( 'largeScreen' );
    }
};

addSafeEventListener( window, 'resize', windowResize );
addSafeEventListener( window, 'load', windowLoad );

import { qsa, addSafeEventListener } from '../../../utils';

/**
 * CleanBC Landing banners manipulation.
 * [@return](https://github.com/return) {void}
 */
const bcgovBlockThemeLandingBanners = () => {
    /*
     * SafarIE iOS requires window.requestAnimationFrame update.
     */
    window.requestAnimationFrame( () => {
        /*
         * Add a clip path SVG to create a mask on landing banner ::before elements.
         * Works in conjuction with .landing-cover-banner styles in _cleanbc--patterns-banners.scss.
         */
        const isHomeBanner = qsa( '.home-cover-banner' );
        const isLandingBanner = qsa( '.landing-cover-banner' );

        if ( isHomeBanner.length || isLandingBanner.length ) {
            const svg = document.getElementsByTagName( 'svg' )[ 0 ];
            const clipElementDefs = document.createElementNS(
                'http://www.w3.org/2000/svg',
                'defs'
            );
            const clipElementClipPath = document.createElementNS(
                'http://www.w3.org/2000/svg',
                'clipPath'
            );
            clipElementClipPath.setAttribute( 'id', 'svgPath' );

            const clipElementPath = document.createElementNS(
                'http://www.w3.org/2000/svg',
                'path'
            );
            clipElementPath.setAttribute(
                'd',
                'M0,77.2v-24.7c0,-8.6,6.8,-15.6,15.3,-16l901.5,-36.6c44.3,-1.7,81.5,33.1,83.2,77.5l-1000,-0.2z'
            );

            clipElementClipPath.setAttribute( 'transform', 'scale(1.44)' );

            svg.setAttribute( 'clipPathUnits', 'objectBoundingBox' );
            svg.style.visibility = 'visible';

            svg.appendChild( clipElementDefs );
            clipElementDefs.appendChild( clipElementClipPath );
            clipElementClipPath.appendChild( clipElementPath );
        }
    } );
};

if ( 'complete' === document.readyState ) {
    bcgovBlockThemeLandingBanners();
} else {
    addSafeEventListener(
        document,
        'DOMContentLoaded',
        bcgovBlockThemeLandingBanners()
    );
}

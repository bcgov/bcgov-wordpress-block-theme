import { qs, addSafeEventListener } from './utils';

/**
 * Single post manipulation.
 * [@return](https://github.com/return) {void}
 */
const bcgovBlockThemeSinglePost = () => {
    /*
     * SafarIE iOS requires window.requestAnimationFrame update.
     */
    window.requestAnimationFrame( () => {
        /**
         * Check if this is a single post.
         */
        const body = qs( '.single-post' );
        if ( body ) {
            /**
             * Get the header and content elements, make sure they exist, calculate height of header, and subtract it from content min height.
             */
            const headerGroup = qs( '.bcgov-header-container' );
            const content = qs( '.bcgov-body-content' );
            if ( headerGroup && content ) {
                const headerGroupHeight = window
                    .getComputedStyle( headerGroup )
                    .getPropertyValue( 'height' );
                content.style.minHeight =
                    'calc(100dvh - ' + headerGroupHeight + ')';
            }
        }
    } );
};

if ( 'complete' === document.readyState ) {
    bcgovBlockThemeSinglePost();
} else {
    addSafeEventListener(
        document,
        'DOMContentLoaded',
        bcgovBlockThemeSinglePost()
    );
}

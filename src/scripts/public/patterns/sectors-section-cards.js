import { qs, qsa, addSafeEventListener } from '../utils';

/**
 * Sectors captions and link manipulation.
 * [@return](https://github.com/return) {void}
 */
const bcgovBlockThemeSectorsSectionCards = () => {
    /*
     * SafarIE iOS requires window.requestAnimationFrame update.
     */
    window.requestAnimationFrame( () => {
        if ( qs( '.in-page-sectors-section' ) ) {
            const elCaptionContainers = qsa(
                '.in-page-sectors-section .wp-block-column'
            );
            const elCaptions = qsa( '.in-page-sectors-section figcaption' );

            // Manipulate the ::after psedo element content using the image caption.
            // Works in conjunction with CSS.
            if ( elCaptions.length ) {
                elCaptions.forEach( ( item ) => {
                    item.style.color =
                        'var(--wp--preset--color--headline-color)';
                    item.closest( '.wp-block-column' ).setAttribute(
                        'data-after-content',
                        item.innerText
                    );
                } );
            }

            // Capture the click on the column and send down to available link.
            elCaptionContainers.forEach( ( col ) => {
                if ( qs( 'a', col ) ) {
                    col.style.cursor = 'pointer';
                    col.addEventListener( 'click', function () {
                        qs( 'a', this ).click();
                    } );
                }
            } );
        }
    } );
};

if ( 'complete' === document.readyState ) {
    bcgovBlockThemeSectorsSectionCards();
} else {
    addSafeEventListener(
        document,
        'DOMContentLoaded',
        bcgovBlockThemeSectorsSectionCards()
    );
}

import { qs, addSafeEventListener } from '../../public/utils';

/**
 * WordPress Admin DOM manipulation.
 */
const bcgovBlockThemeFilter = () => {
    /*
     * SafarIE iOS requires window.requestAnimationFrame update.
     */
    window.requestAnimationFrame( () => {
        const body = qs( 'body' );
        const wpCustomiser = body.classList.contains( 'wp-customizer' );

        if ( ! wpCustomiser ) return;

        const wpAdditionalCSSArea = qs( '#sub-accordion-section-custom_css' );
        const wpAdditionalCSSHeadline = qs(
            'h3 .customize-action',
            wpAdditionalCSSArea
        );

        if ( null !== wpAdditionalCSSArea ) {
            if (
                null !== wpAdditionalCSSHeadline &&
                null !== window.site.customBodyClass &&
                '' !== window.site.customBodyClass
            ) {
                wpAdditionalCSSHeadline.innerHTML = `Custom class: <strong>body.custom-${ window.site.customBodyClass }</strong>`;
            }
        }
    } );
};

if ( 'complete' === document.readyState ) {
    bcgovBlockThemeFilter();
} else {
    addSafeEventListener(
        document,
        'DOMContentLoaded',
        bcgovBlockThemeFilter()
    );
}

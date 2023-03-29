import { qs } from '../../public/utils';

/**
 * WordPress Admin DOM manipulation.
 */
const domReady = () => {
    /*
     * SafarIE bug requires 0ms timeout.
     */
    setTimeout(function () {
        const body = qs('body');
        const wpCustomiser = body.classList.contains('wp-customizer');

        if (!wpCustomiser) return;

        const wpAdditionalCSSArea = qs('#sub-accordion-section-custom_css');
        const wpAdditionalCSSHeadline = qs(
            'h3 .customize-action',
            wpAdditionalCSSArea
        );

        if (null !== wpAdditionalCSSArea) {
            if (
                null !== wpAdditionalCSSHeadline &&
                null !== window.site.customBodyClass &&
                '' !== window.site.customBodyClass
            ) {
                wpAdditionalCSSHeadline.innerHTML = `Custom class: <strong>body.custom-${window.site.customBodyClass}</strong>`;
            }
        }
    }, 0);
};

if ('complete' === document.readyState) {
    domReady();
} else {
    document.addEventListener('DOMContentLoaded', domReady);
}

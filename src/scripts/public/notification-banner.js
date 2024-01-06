import { createElement, qs, addSafeEventListener } from './utils';

/**
 * General Block Theme Notification banner DOM manipulation.
 * [@return](https://github.com/return) {void}
 */
const bcgovBlockThemeNotificationBanner = () => {
    /*
     * SafarIE iOS requires window.requestAnimationFrame update.
     */
    window.requestAnimationFrame( () => {
        const body = qs( 'body' );
        let notificationEnabled =
            '1' === window.site.noticeEnabled ? true : false;
        const notificationHomepageOnly =
            '1' === window.site.noticeHomepageOnly ? true : false;
        const notificationLabelBold =
            '1' === window.site.noticeLabelBold ? true : false;
        const notificationLabelBig =
            '1' === window.site.noticeLabelBig ? true : false;
        let notificationStatus = window.site.noticeStatus;
        let notificationContent = window.site.noticeContent;
        const notificationButtonLabel = window.site.noticeButtonLabel;
        let notificationButtonEnabled =
            '1' === window.site.noticeButtonEnabled ? true : false;
        const notificationButtonAriaLabel = window.site.noticeButtonAriaLabel;
        const notificationButtonLink = window.site.noticeButtonLink;
        let notificationButtonUtmCampaign = window.site.noticeButtonUtmCampaign;
        const networkNotificationBannerNetworkEnabled =
            '1' === window.site.networkBannerEnabledNet ? true : false;
        const networkNotificationStatus = window.site.networkBannerType;
        const networkNotificationContent = window.site.networkBannerContent;
        const networkNotificationButtonUtmCampaign =
            window.site.networkBannerUtm;

        if ( notificationEnabled && notificationHomepageOnly ) {
            notificationEnabled = body.classList.contains( 'home' )
                ? true
                : false;
        }
        const currentPage = window.location.href;
        if ( notificationEnabled && notificationButtonLink === currentPage ) {
            notificationEnabled = false;
        }

        // Use Network banner content if enabled and not overidden by local banner.
        if (
            networkNotificationBannerNetworkEnabled &&
            ! notificationEnabled
        ) {
            notificationEnabled = true;
            notificationButtonEnabled = false;
            notificationContent = networkNotificationContent;
            notificationStatus = networkNotificationStatus;
            notificationButtonUtmCampaign =
                networkNotificationButtonUtmCampaign;
        }

        if ( notificationEnabled ) {
            const notificationContainer = createElement( 'div', {
                class: `notice notification ${ notificationStatus }`,
                role: 'alert',
                'aria-live': 'assertive',
            } );

            const notificationContentInnerContainer = createElement( 'div', {
                class: 'inner-container',
            } );

            const notificationContentInner = createElement( 'p', {
                class: `${ notificationLabelBold ? 'bold' : '' } ${
                    notificationLabelBig ? 'big' : ''
                }`,
                html: `${ notificationContent }`,
            } );

            const notfificationBtnContainer = createElement( 'div', {
                class: 'btn-container',
            } );

            const notfificationBtn = createElement( 'button', {
                'aria-label': `${
                    notificationButtonAriaLabel
                        ? notificationButtonAriaLabel
                        : notificationContentInner +
                          ' – ' +
                          notificationButtonLabel
                }`,
                class: `${ notificationLabelBold ? 'bold' : '' } ${
                    notificationLabelBig ? 'big' : ''
                }`,
                text: `${ notificationButtonLabel }`,
                onclick: `location.href="${ notificationButtonLink }${
                    notificationButtonUtmCampaign
                        ? '?utm_campaign=' + notificationButtonUtmCampaign
                        : ''
                }"`,
            } );

            // Assemble the Notification banner.
            document.body.prepend( notificationContainer );
            if ( notificationButtonEnabled ) {
                notificationContainer.prepend( notfificationBtnContainer );
                notificationContentInnerContainer.prepend( notfificationBtn );
            } else {
                notificationContentInnerContainer.classList.add( 'no-btn' );
            }
            notificationContainer.prepend( notificationContentInnerContainer );
            notificationContentInnerContainer.prepend(
                notificationContentInner
            );
        }
    } );
};

if ( 'complete' === document.readyState ) {
    bcgovBlockThemeNotificationBanner();
} else {
    addSafeEventListener(
        document,
        'DOMContentLoaded',
        bcgovBlockThemeNotificationBanner()
    );
}

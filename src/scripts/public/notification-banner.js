import { createElement, qs } from './utils';

/**
 * General Block Theme window event management and DOM manipulation.
 * [@return](https://github.com/return) {void}
 */
const domReady = () => {
	/*
	 * SafarIE bug requires 0ms timeout.
	 */
	setTimeout(function() {
		const body = qs('body');
		let notificationsEnabled =
			'1' === window.site.noticeEnabled ? true : false;
		const notificationsHomepageOnly =
			'1' === window.site.noticeHomepageOnly ? true : false;
		const notificationsLabelBold =
			'1' === window.site.noticeLabelBold ? true : false;
		const notificationsLabelBig =
			'1' === window.site.noticeLabelBig ? true : false;
		let notificationsStatus = window.site.noticeStatus;
		let notificationsContent = window.site.noticeContent;
		const notificationsButtonLabel = window.site.noticeButtonLabel;
		let notificationsButtonEnabled =
			'1' === window.site.noticeButtonEnabled ? true : false;
		const notificationsButtonAriaLabel = window.site.noticeButtonAriaLabel;
		const notificationsButtonLink = window.site.noticeButtonLink;
		let notificationsButtonUtmCampaign =
			window.site.noticeButtonUtmCampaign;
		const networkNotificationsBannerNetworkEnabled =
			'1' === window.site.networkBannerEnabledNet ? true : false;
		const networkNotificationsStatus = window.site.networkBannerType;
		const networkNotificationsContent = window.site.networkBannerContent;
		const networkNotificationsButtonUtmCampaign =
			window.site.networkBannerUtm;

		if (notificationsEnabled && notificationsHomepageOnly) {
			notificationsEnabled = body.classList.contains('home')
				? true
				: false;
		}
		const currentPage = window.location.href;
		if (notificationsEnabled && notificationsButtonLink === currentPage) {
			notificationsEnabled = false;
		}

		// Use Network banner content if enabled and not overidden by local banner.
		if (networkNotificationsBannerNetworkEnabled && !notificationsEnabled) {
			notificationsEnabled = true;
			notificationsButtonEnabled = false;
			notificationsContent = networkNotificationsContent;
			notificationsStatus = networkNotificationsStatus;
			notificationsButtonUtmCampaign = networkNotificationsButtonUtmCampaign;
		}

		if (notificationsEnabled) {
			const notfificationContainer = createElement('div', {
				class: `notice ${notificationsStatus}`,
				role: 'alert',
				'aria-live': 'assertive',
			});

			const notificationContentInnerContainer = createElement('div', {
				class: 'inner-container',
			});

			const notificationContent = createElement('p', {
				class: `${notificationsLabelBold ? 'bold' : ''} ${
					notificationsLabelBig ? 'big' : ''
				}`,
				html: `${notificationsContent}`,
			});

			const notfificationBtnContainer = createElement('div', {
				class: 'btn-container',
			});

			const notfificationBtn = createElement('button', {
				'aria-label': `${
					notificationsButtonAriaLabel
						? notificationsButtonAriaLabel
						: notificationsContent +
						  ' – ' +
						  notificationsButtonLabel
				}`,
				class: `${notificationsLabelBold ? 'bold' : ''} ${
					notificationsLabelBig ? 'big' : ''
				}`,
				text: `${notificationsButtonLabel}`,
				onclick: `location.href="${notificationsButtonLink}${
					notificationsButtonUtmCampaign
						? '?utm_campaign=' + notificationsButtonUtmCampaign
						: ''
				}"`,
			});

			// Assemble the Notification banner.
			document.body.prepend(notfificationContainer);
			if (notificationsButtonEnabled) {
				notfificationContainer.prepend(notfificationBtnContainer);
				notificationContentInnerContainer.prepend(notfificationBtn);
			} else {
				notificationContentInnerContainer.classList.add('no-btn');
			}
			notfificationContainer.prepend(notificationContentInnerContainer);
			notificationContentInnerContainer.prepend(notificationContent);
		}
	}, 0);
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

import { createElement, qs } from './utils';

/**
 * General Block Theme window event management and DOM manipulation.
 */
const domReady = () => {
	/*
	 * SafarIE bug requires 0ms timeout.
	 */
	setTimeout(function() {
		const body = qs('body');
		let notificationsEnabled = window.site.noticeEnabled;
		const notificationsHomepageOnly = window.site.noticeHomepageOnly;
		const notificationsLabelBold = window.site.noticeLabelBold;
		const notificationsLabelBig = window.site.noticeLabelBig;
		const notificationsStatus = window.site.noticeStatus;
		const notificationsContent = window.site.noticeContent;
		const notificationsButtonLabel = window.site.noticeButtonLabel;
		const notificationsButtonEnabled = window.site.noticeButtonEnabled;
		const notificationsButtonAriaLabel = window.site.noticeButtonAriaLabel;
		const notificationsButtonLink = window.site.noticeButtonLink;
		const notificationsButtonUtmCampaign =
			window.site.noticeButtonUtmCampaign;

		if (
			notificationsEnabled &&
			notificationsHomepageOnly &&
			body.classList.contains('home')
		) {
			notificationsEnabled = true;
		}
		if (
			notificationsEnabled &&
			notificationsHomepageOnly &&
			!body.classList.contains('home')
		) {
			notificationsEnabled = false;
		}
		const currentPage = window.location.href;
		if (notificationsEnabled && notificationsButtonLink === currentPage) {
			notificationsEnabled = false;
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
				text: `${notificationsContent}`,
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

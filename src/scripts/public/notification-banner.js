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
		let notificationsEnabled = window.site.notice_enabled;
		const notificationsHomepageOnly = window.site.notice_homepage_only;
		const notificationsLabelBold = window.site.notice_label_bold;
		const notificationsLabelBig = window.site.notice_label_big;
		const notificationsStatus = window.site.notice_status;
		const notificationsContent = window.site.notice_content;
		const notificationsButtonLabel = window.site.notice_button_label;
		const notificationsButtonEnabled = window.site.notice_button_enabled;
		const notificationsButtonAriaLabel =
			window.site.notice_button_aria_label;
		const notificationsButtonLink = window.site.notice_button_link;
		const notificationsButtonUtmCampaign =
			window.site.notice_button_utm_campaign;

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

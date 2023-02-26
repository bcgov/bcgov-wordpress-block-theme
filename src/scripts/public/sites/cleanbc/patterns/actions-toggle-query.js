import { qs, qsa } from '../../../utils';
import { triggerClick } from '../../../../admin/utils/common';

/**
 * Actions Toggle manipulation.
 */
const domReady = () => {
	/*
	 * SafarIE bug requires 0ms timeout.
	 */
	setTimeout(function() {
		const elActionToggleButtons = qsa(
			'.actions-toggle-buttons .wp-block-button'
		);

		if (elActionToggleButtons.length) {
			elActionToggleButtons.forEach((element, index) => {
				const button = qs('a.wp-block-button__link', element);
				const buttonText = qs('a.wp-block-button__link', element)
					.innerText;
				const newClass = buttonText
					.toLowerCase()
					.replace(/ /g, '-')
					.replace(/[^\w-]+/g, '');
				const accordionBlockGroup = qsa(
					'.actions-accordion-header .wp-block-group.query-group'
				);
				element.newClass = newClass;
				qs('a.wp-block-button__link', element).classList.add(
					element.newClass
				);

				if (0 === index) {
					button.classList.add('active');
					accordionBlockGroup.forEach((el) => {
						el.classList.add('hidden');
						el.classList.remove('active-group');
						if (el.classList.contains(`${newClass}`)) {
							el.classList.toggle('hidden');
							el.classList.add('active-group');
						}
					});
				}

				button.addEventListener('click', function(e) {
					e.preventDefault();

					const buttonLinks = qsa(
						'.actions-toggle-buttons .wp-block-button a.wp-block-button__link'
					);

					if (buttonLinks.length) {
						buttonLinks.forEach((el) => {
							el.classList.remove('active');
						});
						button.classList.toggle('active');

						const targetAction = e.target.textContent
							.toLowerCase()
							.replace(/ /g, '-')
							.replace(/[^\w-]+/g, '');

						qsa(
							'.actions-toggle-query-loop .category-actions'
						).forEach((el) => {
							el.classList.add('hidden');
							if (el.classList.contains(`${targetAction}`)) {
								el.classList.toggle('hidden');
							}
						});
						accordionBlockGroup.forEach((el) => {
							el.classList.add('hidden');
							el.classList.remove('active-group');
							if (el.classList.contains(`${targetAction}`)) {
								el.classList.toggle('hidden');
								el.classList.add('active-group');
							}
						});

						countActiveProjects();
					}
				});
			});

			const queryParams = new Proxy(
				new URLSearchParams(window.location.search),
				{
					get: (searchParams, prop) => searchParams.get(prop),
				}
			);
			// Get the value of "some_key" in eg "https://example.com/?some_key=some_value"
			const queryValue = queryParams.target; // "some_value"

			const targetButton = qs(
				`.actions-toggle-buttons .wp-block-button__link[href="#${queryValue}"]`
			);

			if (null !== targetButton) {
				triggerClick(targetButton);
			}

			countActiveProjects();

			const elActions = qsa('.type-post.category-actions');

			elActions.forEach((element) => {
				const heading = qs('.wp-block-post-title', element).innerText;
				const image = qs('.attachment-post-thumbnail', element);
				const titleContainer = qs(
					'.wp-block-post-excerpt__excerpt',
					element
				);
				if (null !== image && null !== titleContainer) {
					image.setAttribute('title', titleContainer.innerText);
				}
				const linkAddition = qs('.wp-block-button__link', element);

				if (qsa('.wp-block-button__link', element).length) {
					linkAddition.innerText = `${
						linkAddition.innerText
					} ${heading.toLowerCase()}`;
					linkAddition.setAttribute(
						'src',
						`${window.site.domain}/actions/${heading
							.toLowerCase()
							.replace(/ /g, '-')
							.replace(/[^\w-]+/g, '')}`
					);
					linkAddition.addEventListener('click', (e) => {
						window.location.href = e.target.getAttribute('src');
					});
				}

				const newClass = heading
					.toLowerCase()
					.replace(/ /g, '-')
					.replace(/[^\w-]+/g, '');
				const activeButton = qs('a.wp-block-button__link.active');
				const targetAction = activeButton.innerText
					.toLowerCase()
					.replace(/ /g, '-')
					.replace(/[^\w-]+/g, '');

				element.classList.add(newClass);
				element.classList.add('hidden');
				if (element.classList.contains(`${targetAction}`)) {
					element.classList.toggle('hidden');
				}
			});
		}
	}, 0);

	function countActiveProjects() {
		const elAccordionItems = qsa(
			'.wp-block-bcgov-block-theme-collapse-item'
		);

		elAccordionItems.forEach((item) => {
			item.classList.remove('hidden');
			const queryGroup = qsa('.active-group', item);
			queryGroup.forEach((group) => {
				const childItem = qs('.wp-block-group.project', group);

				if (null !== childItem) {
					const childCount = qsa('.wp-block-columns', childItem);
					const headingCounter = childItem
						.closest('.wp-block-bcgov-block-theme-collapse-item')
						.qs('.collapse-header .collapse-title');
					const headingCounterContainer = qs(
						'.count',
						headingCounter
					);
					const headingCount = childCount.length;
					if (childCount.length) {
						// console.log(headingCount);
						if (null !== headingCounterContainer && headingCount) {
							headingCounterContainer.innerHTML = `${headingCount}`;
						}
						if (null === headingCounterContainer && headingCount) {
							headingCounter.innerHTML = `${headingCounter.innerText} <span class="count">${headingCount} </span>`;
						}
					}
				}
				const noChildItem = qs('.no-results', group);
				if (noChildItem !== null) {
					const headerCollapseItem = noChildItem.closest(
						'.wp-block-bcgov-block-theme-collapse-item'
					);
					const headerContainer = noChildItem
						.closest('.wp-block-bcgov-block-theme-collapse-item')
						.qs('.collapse-title');
					const spanToReset = noChildItem
						.closest('.wp-block-bcgov-block-theme-collapse-item')
						.qs('.collapse-header .count');
					if (null !== headerCollapseItem) {
						headerCollapseItem.classList.add('hidden');
					}
					if (null !== spanToReset) {
						spanToReset.innerHTML = '0';
					} else {
						headerContainer.innerHTML = `${headerContainer.innerText} <span class="count">0</span>`;
					}
				}
			});
		});
	}
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

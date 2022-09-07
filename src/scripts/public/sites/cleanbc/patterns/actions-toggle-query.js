import { triggerClick } from '../../../../admin/utils/common';

/**
 * Actions Toggle manipulation.
 */
const domReady = () => {
	/*
	 * SafarIE bug requires 0ms timeout.
	 */
	setTimeout(function() {
		const elActionToggleButtons = document.querySelectorAll(
			'.actions-toggle-buttons .wp-block-button'
		);

		if (elActionToggleButtons.length) {
			elActionToggleButtons.forEach((element, index) => {
				const button = element.querySelector('a.wp-block-button__link');
				const buttonText = element.querySelector(
					'a.wp-block-button__link'
				).innerText;
				const newClass = buttonText
					.toLowerCase()
					.replace(/ /g, '-')
					.replace(/[^\w-]+/g, '');
				const accordionBlockGroup = document.querySelectorAll(
					'.actions-accordion-header .wp-block-group.query-group'
				);
				element.newClass = newClass;
				element
					.querySelector('a.wp-block-button__link')
					.classList.add(element.newClass);

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

					const buttonLinks = document.querySelectorAll(
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

						document
							.querySelectorAll(
								'.actions-toggle-query-loop .category-actions'
							)
							.forEach((el) => {
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

			const targetButton = document.querySelector(
				`.actions-toggle-buttons .wp-block-button__link[href="#${queryValue}"]`
			);

			if (null !== targetButton) {
				triggerClick(targetButton);
			}

			countActiveProjects();

			const elActions = document.querySelectorAll(
				'.type-post.category-actions'
			);

			elActions.forEach((element) => {
				const heading = element.querySelector('.wp-block-post-title')
					.innerText;
				const linkAddition = element.querySelector(
					'.wp-block-button__link'
				);

				if (element.querySelectorAll('.wp-block-button__link').length) {
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
				const activeButton = document.querySelector(
					'a.wp-block-button__link.active'
				);
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
		const elAccordionItems = document.querySelectorAll(
			'.wp-block-bcgov-collapse-item'
		);

		elAccordionItems.forEach((item) => {
			item.classList.remove('hidden');
			const queryGroup = item.querySelectorAll('.active-group');
			queryGroup.forEach((group) => {
				const childItem = group.querySelector(
					'.wp-block-group.project'
				);

				if (null !== childItem) {
					const childCount = childItem.querySelectorAll(
						'.wp-block-columns'
					);
					const headingCounter = childItem
						.closest('.wp-block-bcgov-collapse-item')
						.querySelector('.collapse-header .collapse-title');
					const headingCounterContainer = headingCounter.querySelector(
						'.count'
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
				const noChildItem = group.querySelector('.no-results');
				if (noChildItem !== null) {
					const headerCollapseItem = noChildItem.closest(
						'.wp-block-bcgov-collapse-item'
					);
					const headerContainer = noChildItem
						.closest('.wp-block-bcgov-collapse-item')
						.querySelector('.collapse-title');
					const spanToReset = noChildItem
						.closest('.wp-block-bcgov-collapse-item')
						.querySelector('.collapse-header .count');
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

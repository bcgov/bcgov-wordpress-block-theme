/**
 * Actions Accordion manipulation.
 */
const domReady = () => {
	/*
	 * SafarIE bug requires 0ms timeout.
	 */
	setTimeout(function() {
		const elAccordionItems = document.querySelectorAll(
			'.wp-block-bcgov-collapse-item'
		);

		elAccordionItems.forEach((item) => {
			const childItems = item.querySelectorAll('.wp-block-post-template');
			childItems.forEach((child) => {
				const headingCount = item.querySelector('.collapse-title');
				headingCount.innerHTML = `${headingCount.innerText} <span class="count">${child.childNodes.length} </span>`;
			});
		});
	}, 0);
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

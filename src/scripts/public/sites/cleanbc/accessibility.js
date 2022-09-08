/**
 * Accessibility DOM manipulation.
 */
const domReady = () => {
	/*
	 * SafarIE bug requires 0ms timeout.
	 */
	if (document.querySelector('.actions-accordion-header')) {
		const getSiblings = function(elem) {
			// Setup siblings array and get the first sibling
			const siblings = [];
			let sibling = elem.parentNode.firstChild;

			// Loop through each sibling and push to the array
			while (sibling) {
				if (sibling.nodeType === 1 && sibling !== elem) {
					siblings.push(sibling);
				}
				sibling = sibling.nextSibling;
			}
			return siblings;
		};
		/*
		 * Inject ARIA labels into queried content.
		 */
		const labelEls = document.querySelectorAll('.labelInjector');
		labelEls.forEach((label) => {
			const siblings = getSiblings(label);
			const ariaLabel = label.getAttribute('data-label');
			siblings.forEach((el) => {
				if (el.classList.contains('wp-block-buttons')) {
					const link = el.querySelector('.wp-block-button__link');
					link.setAttribute('aria-label', ariaLabel);
				}
			});
			label.remove();
		});

		setTimeout(function() {}, 0);
	}
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

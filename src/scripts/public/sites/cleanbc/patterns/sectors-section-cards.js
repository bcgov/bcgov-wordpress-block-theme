/**
 * Actions Accordion manipulation.
 */
const domReady = () => {
	/*
	 * SafarIE bug requires 0ms timeout.
	 */
	if (document.querySelector('.in-page-sectors-section')) {
		setTimeout(function() {
			const elCaptionContainers = document.querySelectorAll(
				'.in-page-sectors-section .wp-block-column'
			);
			const elCaptions = document.querySelectorAll(
				'.in-page-sectors-section figcaption'
			);

			// Manipulate the ::after psedo element content using the image caption.
			// Works in conjunction with CSS.
			if (elCaptions.length) {
				elCaptions.forEach((item) => {
					item.style.color =
						'var(--wp--preset--color--headline-color)';
					item.closest('.wp-block-column').setAttribute(
						'data-after-content',
						item.innerText
					);
				});
			}

			// Capture the click on the column and send down to available link.
			elCaptionContainers.forEach((col) => {
				if (col.querySelector('a')) {
					col.style.cursor = 'pointer';
					col.addEventListener('click', function() {
						this.querySelector('a').click();
					});
				}
			});
		}, 0);
	}
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

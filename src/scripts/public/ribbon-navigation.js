/**
 * Ribbon navigation manipulation.
 */
const domReady = () => {
	if (document.querySelectorAll('.is-style-ribbon-menu').length) {
		document.querySelector('body').classList.add('has-ribbon-menu');

		/*
		 * Check for menu items being out of viewport and class is needed.
		 */
		function doBoundsCheck(targetEl) {
			setTimeout(function() {
				const container = targetEl;
				const childContainer = container.querySelector('ul');

				let bounding = null;
				const parentBounding = container.getBoundingClientRect();

				if (null !== childContainer) {
					bounding = childContainer.getBoundingClientRect();
				}
				if (
					null !== bounding &&
					bounding.right >
						(window.innerWidth ||
							document.documentElement.clientWidth)
				) {
					if (null !== childContainer) {
						childContainer.classList.add('is-offscreen');
						childContainer.style.left =
							'calc(' + parentBounding.width + 'px - 185%)';
						childContainer.style.right = 'auto';
						childContainer.style.top = '20%';
						childContainer.style.position = 'absolute';
					}
				}
			}, 0);
		}

		if (document.querySelectorAll('li.wp-block-navigation-item').length) {
			const elem = document.querySelectorAll(
				'li.wp-block-navigation-item'
			);

			elem.forEach((i) => {
				i.addEventListener(
					'pointerover',
					(e) => {
						let target = e.target;
						if (target.tagName !== 'LI') {
							target = target.closest('li');
						}
						doBoundsCheck(target);
					},
					{ capture: false }
				);
			});
		}
	}
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

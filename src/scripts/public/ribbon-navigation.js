/**
 * Ribbon navigation manipulation.
 */
const domReady = () => {
	if (document.querySelectorAll('.is-style-ribbon-menu').length) {
		document.querySelector('body').classList.add('has-ribbon-menu');

		// Check for menu items being out of viewport and class is needed.

		function doBoundsCheck(t) {
			const container = t.closest('ul');
			const childContainer = container.querySelector('ul');

			let bounding = null;
			const parentBounding = container.getBoundingClientRect();

			if (null !== childContainer) {
				bounding = childContainer.getBoundingClientRect();
			}
			if (
				null !== bounding &&
				bounding.right >
					(window.innerWidth || document.documentElement.clientWidth)
			) {
				if (null !== childContainer) {
					childContainer.classList.add('is-offscreen');
					childContainer.style.left =
						'calc(' + parentBounding.width + 'px - 195%)';
					childContainer.style.right = 'auto';
					childContainer.style.top = '50%';
					childContainer.style.position = 'absolute';
				}
			}
		}

		const elem = document.querySelectorAll('li.wp-block-navigation-item');
		elem.forEach((i) => {
			// console.log("listener set up", i);
			i.addEventListener('mousemove', (e) => {
				// console.log("mousemove listener triggered", e);
				doBoundsCheck(e.target);
			});
			i.addEventListener('keypress', (e) => {
				// console.log("keypress listener triggered");
				doBoundsCheck(e.target);
			});
		});
	}
};

if (document.readyState === 'complete') {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

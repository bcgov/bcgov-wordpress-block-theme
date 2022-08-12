/**
 * Takeover navigation manipulation.
 */
const domReady = () => {
	/*
	 * SafarIE bug requires 0ms timeout.
	 */
	setTimeout(function() {
		const el = document.querySelector('.landing-cover-banner');
		const elSpan = el.querySelector('.wp-block-cover__background');

		updateOverlay(elSpan);

		const observer = new window.MutationObserver(function() {
			updateOverlay(elSpan);
		});

		observer.observe(elSpan, {
			attributeFilter: ['class', 'style'],
		});
	}, 0);

	function updateOverlay(eS) {
		const classSubstring = '-background-color';
		let hasPaletteColor = false;
		let className = '';

		eS.classList.forEach((target) => {
			if (target.includes(classSubstring)) {
				hasPaletteColor = true;
				className = target;
			}
		});

		if (!hasPaletteColor && '' !== eS.style.backgroundColor) {
			document.documentElement.style.setProperty(
				'--landing-cover-banner-bg',
				eS.style.backgroundColor.replace(
					/\brgb\s*\(\s*(\d+)\s*,\s*(\d+)\s*,\s*(\d+)\s*\)/g,
					function($0, $1, $2, $3) {
						return Number($1) + ',' + Number($2) + ',' + Number($3);
					}
				)
			);
		} else {
			const targetEl = className
				.replace('has-', '')
				.replace('-background-color', '');
			document.documentElement.style.setProperty(
				'--landing-cover-banner-bg',
				'var(--' + targetEl + '-rgb)'
			);
		}
	}
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

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
		const classSubstring = '-background-color';
		let hasPaletteColor = false;
		let className = '';

		elSpan.classList.forEach((target) => {
			if (target.includes(classSubstring)) {
				hasPaletteColor = true;
				className = target;
			}
		});

		if (!hasPaletteColor && '' !== elSpan.style.backgroundColor) {
			document.documentElement.style.setProperty(
				'--landing-cover-banner-bg',
				elSpan.style.backgroundColor.replace(
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
	}, 0);
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

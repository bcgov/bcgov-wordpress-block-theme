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

				element.newClass = newClass;

				element
					.querySelector('a.wp-block-button__link')
					.classList.add(element.newClass);

				if (0 === index) {
					button.classList.add('active');
				}

				button.addEventListener('click', function(e) {
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
					}
				});
			});

			const elActions = document.querySelectorAll(
				'.type-post.category-actions'
			);

			elActions.forEach((element, index) => {
				const heading = element.querySelector('h2').innerText;
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
				element.classList.add(newClass);

				if (0 !== index) {
					element.classList.add('hidden');
				}
			});
		}
	}, 0);
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

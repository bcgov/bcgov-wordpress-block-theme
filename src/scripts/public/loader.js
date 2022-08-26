/**
 * General CleanBC DOM manipulation.
 */
const domReady = () => {
	/*
	 * SafarIE bug requires 0ms timeout.
	 */
	setTimeout(function() {
		/**
		 * Add siteName body class.
		 */
		if (null !== window.site.siteName) {
			document.querySelector('body').classList.add(window.site.siteName);
		}

		/**
		 * Set up scroll to top link.
		 */
		const backToTopBtn = document.createElement('a');
		backToTopBtn.setAttribute('class', 'back-to-top');
		backToTopBtn.setAttribute('alt', 'Back to top');
		backToTopBtn.setAttribute('title', 'Back to top');
		backToTopBtn.setAttribute('tabindex', '0');
		backToTopBtn.setAttribute(
			'aria-label',
			'Click to go back to the top of the page'
		);
		backToTopBtn.setAttribute('href', '#top');
		backToTopBtn.setAttribute('role', 'button');
		document.querySelector('footer').append(backToTopBtn);

		const backToTopImage = document.createElement('img');
		backToTopImage.setAttribute('class', 'back-to-top-icon');
		backToTopImage.setAttribute('alt', 'back to top icon');
		backToTopImage.setAttribute(
			'src',
			window.site.templateDir + '/assets/images/back-to-top.png'
		);
		backToTopBtn.append(backToTopImage);

		/**
		 * Manage events after page scroll.
		 */
		const windowScroll = () => {
			/**
			 * Set back to top link visible when close to bottom of windowdy.
			 */
			const backToTop = document.querySelector('.back-to-top');
			if (
				window.pageYOffset + window.innerHeight >
				document.body.offsetHeight - 1000
			) {
				backToTop.style.display = 'block';
				backToTop.style.opacity = '0.75';
			} else {
				backToTop.style.display = 'none';
				backToTop.style.opacity = '0';
			}
		};

		/**
		 * Manage events after page load.
		 */
		const windowLoad = () => {
			windowResize();
		};

		/**
		 * Manage events after window resize.
		 */
		const windowResize = () => {
			/**
			 * Set orientation helper classes on body.
			 */
			const height = window.innerHeight;
			const width = document.body.clientWidth;
			if (width > height) {
				// Landscape
				document.body.classList.remove('portrait');
				document.body.classList.add('landscape');
			} else {
				// Portrait
				document.body.classList.remove('landscape');
				document.body.classList.add('portrait');
			}
		};

		window.addEventListener('resize', windowResize);
		window.addEventListener('scroll', windowScroll);
		window.addEventListener('load', windowLoad);
	}, 0);
};

if ('complete' === document.readyState) {
	domReady();
} else {
	document.addEventListener('DOMContentLoaded', domReady);
}

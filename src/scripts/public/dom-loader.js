import { qs, unEscapeCSS } from './utils';

/**
 * General Block Theme window event management and DOM manipulation.
 * [@return](https://github.com/return) {void}
 */
const domReady = () => {
	/*
	 * SafarIE bug requires 0ms timeout.
	 */
	setTimeout( function () {
		/**
		 * Add siteName body classes and modify DOM placement of breadcrumb after first banner.
		 */
		const body = qs( 'body' );
		// Guard against being in the WordPress admin area.
		const wpAdmin = body.classList.contains( 'wp-admin' );
		if ( wpAdmin ) return;

		const home = body.classList.contains( 'home' );
		const header = qs( '.bcgov-site-header' );
		const isGovLogo = qs( '.wp-block-site-logo' );
		const footer = qs( 'footer' );
		const postContent = qs( '.wp-block-post-content' );
		const customCSS = qs( '#wp-custom-css' );

		if ( null !== customCSS ) {
			customCSS.innerText = unEscapeCSS( customCSS.innerText );
		}

		/*
		 * Set the scroll padding to the height of the header
		 */
		const headerHeight = header.offsetHeight;
		document.documentElement.style.setProperty(
			'--scroll-padding',
			headerHeight + 'px'
		);

		let bannerElement = null;
		if ( null !== postContent ) {
			bannerElement = postContent.firstElementChild;
		}
		const breadcrumb = qs( '.breadcrumb-nav-section' );

		if ( null !== isGovLogo ) {
			qs( 'img', isGovLogo ).setAttribute( 'alt', 'BCGov Logo' );
		}

		let takeover,
			nav = null;
		if ( null !== header ) {
			takeover = qs( '.is-style-takeover-menu', header );
			nav = qs( 'nav', header );
		}

		if (
			null !== window.site.siteName &&
			'' !== window.site.siteName &&
			undefined !== window.site.siteName
		) {
			body.classList.add( window.site.siteName );
		} else {
			body.classList.add( 'bcgov' );
		}

		if ( null !== window.site.headerEffect && null !== takeover ) {
			body.classList.add( `header-${ window.site.headerEffect }` );
		} else {
			body.classList.add( 'header-scroll' );
		}

		if (
			null !== window.site.customBodyClass &&
			'' !== window.site.customBodyClass
		) {
			body.classList.add( `custom-${ window.site.customBodyClass }` );
		}

		/*
		 * Any inital element with a class that includes 'banner' will be moved above the breadcrumb navigation.
		 * However if the class name also includes 'in-page' it will not be moved.
		 * eg: in-page-strategies-banner
		 */
		if ( null !== bannerElement ) {
			if (
				bannerElement.className
					.split( ' ' )
					.some( ( individualClass ) =>
						/.*banner.*/.test( individualClass )
					) &&
				! bannerElement.className
					.split( ' ' )
					.some( ( individualClass ) =>
						/.*in-page.*/.test( individualClass )
					)
			) {
				if ( null !== breadcrumb ) {
					bannerElement.parentNode.insertBefore(
						breadcrumb,
						bannerElement.nextSibling
					);
					breadcrumb.classList.add( 'alignwide' );
					if ( home ) {
						breadcrumb.remove();
					}
				}
			}
		}

		/**
		 * Enable fixed or scroll header based on site options.
		 */
		if (
			null !== nav &&
			( 'fixed' === window.site.headerEffect ||
				'hides' === window.site.headerEffect )
		) {
			header.style.position = 'fixed';
		}
		if (
			null !== takeover &&
			( null === window.site.headerEffect ||
				'scroll' === window.site.headerEffect )
		) {
			header.style.position = 'absolute';
			header.style.overflow = 'hidden';
			header.style.transform = 'none';
		}
		if ( null === nav ) {
			body.style.paddingTop = 0;
		}

		/**
		 * Set up scroll to top link.
		 */
		const backToTopBtn = document.createElement( 'a' );
		backToTopBtn.setAttribute( 'class', 'back-to-top' );
		backToTopBtn.setAttribute( 'alt', 'Back to top' );
		backToTopBtn.setAttribute( 'title', 'Back to top' );
		backToTopBtn.setAttribute( 'tabindex', '0' );
		backToTopBtn.setAttribute(
			'aria-label',
			'Click to go back to the top of the page'
		);
		backToTopBtn.setAttribute( 'href', '#top' );
		backToTopBtn.setAttribute( 'role', 'button' );
		if ( null !== footer ) {
			footer.append( backToTopBtn );
		}

		const backToTopImage = document.createElement( 'img' );
		backToTopImage.setAttribute( 'class', 'back-to-top-icon' );
		backToTopImage.setAttribute( 'alt', 'back to top icon' );
		backToTopImage.setAttribute(
			'src',
			window.site.templateDir + '/assets/images/back-to-top.png'
		);
		backToTopBtn.append( backToTopImage );

		/**
		 * Manage events after page scroll.
		 */

		let lastScrollTop = 0;
		const scrollTopPadding = 100;

		const windowScroll = () => {
			/**
			 * Set back to top link visible when close to bottom of window.
			 */
			const backToTop = qs( '.back-to-top' );
			if ( null !== backToTop ) {
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
			}
			/**
			 * Enable header scroll show/hide based on site options.
			 */
			if ( null !== nav && 'hides' === window.site.headerEffect ) {
				const scrollTopPosition =
					window.pageYOffset || document.documentElement.scrollTop;
				if ( scrollTopPosition < lastScrollTop ) {
					// Do scroll up management.
					if ( scrollTopPosition > scrollTopPadding ) {
						header.style.opacity = '1';
						header.style.transform = 'translateY(0%)';
					}
				} else if ( scrollTopPosition > scrollTopPadding ) {
					header.style.opacity = '0';
					header.style.transform = 'translateY(-100%)';
				}
				lastScrollTop = scrollTopPosition <= 0 ? 0 : scrollTopPosition;
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
			if ( width > height ) {
				// Landscape
				document.body.classList.remove( 'portrait' );
				document.body.classList.add( 'landscape' );
			} else {
				// Portrait
				document.body.classList.remove( 'landscape' );
				document.body.classList.add( 'portrait' );
			}
			/**
			 * Set device size helper classes on body.
			 * Needed for overriding WordPress specific block size !important.
			 * eg: .wp-block-media-text.is-stacked-on-mobile for small breakpoint.
			 */
			if ( width <= 782 ) {
				/**
				 * Mobile or small breakpoint: $breakpoint-sm
				 */
				document.body.classList.remove( 'largeScreen' );
				document.body.classList.remove( 'tablet' );
				document.body.classList.add( 'mobile' );
			} else if ( width <= 1199 ) {
				/**
				 * Tablet or large breakpoint for mid-sized resolution changes: $breakpoint-lg
				 */
				document.body.classList.remove( 'mobile' );
				document.body.classList.add( 'tablet' );
				document.body.classList.remove( 'largeScreen' );
			} else {
				/**
				 * Desktop or wider than large breakpoint
				 */
				document.body.classList.remove( 'mobile' );
				document.body.classList.remove( 'tablet' );
				document.body.classList.add( 'largeScreen' );
			}
		};

		window.addEventListener( 'resize', windowResize );
		window.addEventListener( 'scroll', windowScroll );
		window.addEventListener( 'load', windowLoad );
	}, 0 );
};

if ( 'complete' === document.readyState ) {
	domReady();
} else {
	document.addEventListener( 'DOMContentLoaded', domReady );
}

/**
 * Utility functions for cleaner JavaScript.
 *
 * Unit tests for functional data manipulations and logical operations found in `Tests`.
 */

/**
 * addGlobalEventListener is a utility function that attaches an event listener to the given parent element and triggers the callback function only if the event target matches the given selector.
 *
 * @param {string} type - The type of event to listen for (e.g. 'click', 'pointerevent')
 * @param {string|Element} selector - The selector to match against the event. Can be a CSS selector string or an Element.
 * @param {Function} callback - The function to be called when the event is triggered
 * @param {Element} [parent=document] - The parent element to attach the event listener to (defaults to document)
 */

export function addGlobalEventListener(
	type,
	selector,
	callback,
	parent = document
) {
	// check if the selector is valid
	if (!selector || typeof selector !== 'string') {
		throw new Error('Invalid selector: must be CSS selector or an element');
	}

	// check if the callback is a valid function
	if (typeof callback !== 'function') {
		throw new Error('Invalid callback provided');
	}

	parent.addEventListener(type, (event) => {
		// use qsa to get all elements that match the selector
		const elements = document.querySelectorAll(selector);

		// check if the event target is one of the matching elements
		const target = event.target;
		if (
			elements.includes(target) ||
			elements.some((element) => element.contains(target))
		) {
			callback(event);
		}
	});
}

/**
 * createElement - creates an HTML element with the given type and options
 *
 * @param {string} type - the type of element to create (e.g. 'div', 'p', 'h1')
 * @param {Object} [options={}] - an object containing key-value pairs of attributes and values to set on the element
 * @param {string} options.class - the class(es) to add to the element – a single space-separated string
 * @param {Object} options.dataset - an object containing key-value pairs of data attributes and values to set on the element
 * @param {string} options.text - the text content to set on the element
 * @return {HTMLElement} the created element
 */
export function createElement(type, options = {}) {
	const element = document.createElement(type);
	Object.entries(options).forEach(([key, value]) => {
		if (key === 'class') {
			value.split(' ').forEach((className) => {
				if ('' !== className) {
					element.classList.add(className);
				}
			});
			return;
		}

		if (key === 'dataset') {
			Object.entries(value).forEach(([dataKey, dataValue]) => {
				element.dataset[dataKey] = dataValue;
			});
			return;
		}

		if (key === 'text') {
			element.textContent = value;
			return;
		}

		if (key === 'html') {
			element.innerHTML = value;
			return;
		}

		element.setAttribute(key, value);
	});
	return element;
}

/**
 * qs is a utility function that returns the first element matching the given CSS selector within the given parent element.
 *
 * @param {string} selector - The CSS selector to search for
 * @param {Element} [parent=document] - The parent element to search within (defaults to document)
 * @return {Element} - The first element matching the selector, or null if no match is found
 * @throws {Error} If `selector` argument is missing
 */
export function qs(selector, parent = document) {
	if (!selector) {
		throw new Error('A selector argument is required for the qs function');
	}
	return parent.querySelector(selector);
}

/**
 * qsa is a utility function that returns an array of all elements matching the given CSS selector within the given parent element.
 *
 * @param {string} selector - The CSS selector to search for
 * @param {Element} [parent=document] - The parent element to search within (defaults to document)
 * @return {Element[]} - An array of all elements matching the selector, or an empty array if no matches are found
 * @throws {Error} If `selector` argument is missing
 */
export function qsa(selector, parent = document) {
	if (!selector) {
		throw new Error('A selector argument is required for the qsa function');
	}
	return [...parent.querySelectorAll(selector)];
}

/**
 * unEscapeCSS - replaces escape characters in a CSS string with their unescaped equivalents
 *
 * @param {string} cssStr – the CSS string to unescape containing CSS selectors and attributes
 * @return {string} - An escaped CSS string
 */
export function unEscapeCSS(cssStr) {
	cssStr = cssStr.replace(/&gt;/g, '>');
	cssStr = cssStr.replace(/&quot;/g, '"');
	cssStr = cssStr.replace(/&#39;/g, "'");
	cssStr = cssStr.replace(/&amp;/g, '&');
	return cssStr;
}

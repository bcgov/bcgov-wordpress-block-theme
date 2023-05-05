/**
 * Flex cards DOM manipulation.
 *
 * Note: as this runs on all pages be sure to null check all elements before use.
 *
 * @return {void}
 */
const domReady = () => {
    /*
     * SafarIE bug requires 0ms timeout.
     */
    setTimeout(function () {
        /**
         * Aggregation: Card setup. Used on Guidance, Policies and standards and other pages.
         */
        const isFlexCards = document.querySelector('.flex-cards');
        const flexCardGroup = document.querySelectorAll('.flex-card');

        if (isFlexCards || flexCardGroup) {
            if (flexCardGroup) {
                flexCardGroup.forEach((group) => {
                    const headline = group.querySelector('.card-title');
                    if (headline) {
                        const headlineLink = headline.querySelector('a');
                        if (headlineLink) {
                            if (headlineLink.firstChild) {
                                headline.replaceChild(
                                    headlineLink.firstChild,
                                    headlineLink
                                );
                            } else {
                                headline.remove();
                            }
                            const link = headlineLink.getAttribute('href');
                            const linkWrapper = document.createElement('a');
                            linkWrapper.href = link;
                            group.parentNode.insertBefore(linkWrapper, group);
                            linkWrapper.appendChild(group);
                            linkWrapper.classList.add('card-title-link');
                        }
                    }
                });
            }
        }
    }, 0);
};

if ('complete' === document.readyState) {
    domReady();
} else {
    document.addEventListener('DOMContentLoaded', domReady);
}

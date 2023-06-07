/**
 * Collapse block manipulation.
 */
import { triggerClick } from '../../utils/common.js';
import {
    collapseControlsClick,
    collapseItemsButtonClick,
    collapseItemsLinkClick,
} from './container/public';

const domReady = () => {
    setTimeout(function () {
        const collapseAllButtons = document.querySelectorAll(
            '.collapse-container-nav button'
        );
        const collapseItemButtons = document.querySelectorAll(
            '.collapse-header button'
        );
        const collapseItemLinks =
            document.querySelectorAll('.collapse-close a');

        // Select all Collapse All buttons, used to initialize closed states.
        const collapseAlls = document.querySelectorAll(
            '.collapse-collapse-all'
        );
        // Select all first Collapse Items in each Collapse Container, used to initialize open states.
        const firstCollapseItems = document.querySelectorAll(
            '.wp-block-bcgov-block-theme-collapse > div:nth-child(2) button'
        );

        if (collapseAllButtons.length) {
            collapseAllButtons.forEach((item) => {
                item.addEventListener('click', collapseControlsClick);
            });

            collapseItemButtons.forEach((item) => {
                item.addEventListener('click', collapseItemsButtonClick);
            });

            collapseItemLinks.forEach((item) => {
                item.addEventListener('click', collapseItemsLinkClick);
            });

            // initialise load state
            collapseAlls.forEach(triggerClick);
            firstCollapseItems.forEach(triggerClick);
        }
    }, 0);
};

if ('complete' === document.readyState) {
    domReady();
} else {
    document.addEventListener('DOMContentLoaded', domReady);
}

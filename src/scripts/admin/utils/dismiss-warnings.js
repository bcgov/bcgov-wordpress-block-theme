import { qsa, addSafeEventListener } from '../../public/utils';

/**
 * Admin code for dismissing notifications.
 * Attaches an event listener to the document's DOMContentLoaded event, which retrieves and dismisses notices
 * from the DOM upon click of the 'notice-dismiss' button if the notice contains a 'data-dismiss-url' attribute.
 *
 * @function
 * @name dismissNotices
 * @return {void}
 */
( function () {
    'use strict';
    addSafeEventListener( document, 'DOMContentLoaded', function () {
        const notices = qsa( '.bcgov-block-theme-notice' );
        notices.forEach( function ( notice ) {
            notice.addEventListener( 'click', function ( event ) {
                if ( event.target.classList.contains( 'notice-dismiss' ) ) {
                    const dismissUrl =
                        notice.getAttribute( 'data-dismiss-url' );
                    if ( dismissUrl ) {
                        const xhr = new window.XMLHttpRequest();
                        xhr.open( 'GET', dismissUrl );
                        xhr.send();
                    }
                }
            } );
        } );
    } );
} )();

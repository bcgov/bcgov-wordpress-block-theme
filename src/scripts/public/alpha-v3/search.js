import { qs, addSafeEventListener } from '../utils';
/**
 * Alpha v3 search DOM manipulation. Based on CleanBC search. Only instantiates if the CleanBC plugin is not active.
 */
const bcgovBlockThemeSearch = () => {
    /*
     * SafarIE iOS requires window.requestAnimationFrame update.
     */
    window.requestAnimationFrame( () => {
        const toggleSearchBtn = qs( '.toggle-search-btn a' );
        const searchFieldContainer = qs( '#search-field-container' );

        if ( toggleSearchBtn ) {
            if ( searchFieldContainer ) {
                const siblingElement =
                    searchFieldContainer.previousElementSibling;

                const searchInput = qs( 'input', searchFieldContainer );
                const searchButton = qs( 'button', searchFieldContainer );

                if ( searchFieldContainer && siblingElement ) {
                    siblingElement.parentNode.insertBefore(
                        searchFieldContainer,
                        siblingElement
                    );
                }
                toggleSearchBtn.addEventListener( 'click', function ( event ) {
                    event.preventDefault();

                    if ( searchFieldContainer ) {
                        if (
                            searchFieldContainer.classList.contains( 'hidden' )
                        ) {
                            searchFieldContainer.classList.remove( 'hidden' );
                            if ( searchInput ) {
                                searchInput.focus();
                            }
                        } else {
                            searchFieldContainer.classList.add( 'hidden' );
                        }
                    }
                } );

                toggleSearchBtn.addEventListener( 'keydown', ( event ) => {
                    if ( event.code === 'Space' || event.code === 'Enter' ) {
                        event.preventDefault();
                        toggleSearchBtn.click();
                    }
                } );

                if ( searchFieldContainer ) {
                    searchInput.addEventListener( 'blur', function ( event ) {
                        event.preventDefault();
                        window.requestAnimationFrame( () => {
                            if (
                                searchButton ===
                                event.target.ownerDocument.activeElement
                            )
                                return;
                            if (
                                toggleSearchBtn ===
                                event.target.ownerDocument.activeElement
                            )
                                return;
                            toggleSearchBtn.focus();
                            toggleSearchBtn.click();
                        } );
                    } );

                    searchButton.addEventListener( 'blur', function ( event ) {
                        event.preventDefault();
                        window.requestAnimationFrame( () => {
                            if (
                                searchInput ===
                                event.target.ownerDocument.activeElement
                            )
                                return;
                            if (
                                toggleSearchBtn ===
                                event.target.ownerDocument.activeElement
                            )
                                return;
                            toggleSearchBtn.focus();
                            toggleSearchBtn.click();
                        } );
                    } );
                }
            }
        }
    } );
};

if ( 'complete' === document.readyState ) {
    bcgovBlockThemeSearch();
} else {
    addSafeEventListener(
        document,
        'DOMContentLoaded',
        bcgovBlockThemeSearch()
    );
}

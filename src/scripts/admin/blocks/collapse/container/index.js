import { __ } from '@wordpress/i18n';
import { registerBlockType, registerBlockStyle } from '@wordpress/blocks';
import { InnerBlocks, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, ToggleControl } from '@wordpress/components';
import { attributes } from './attributes';
import { deprecated } from './deprecated';

const styles = [{ name: 'bcgov', label: 'BCGov' }];

styles.forEach((style) =>
    registerBlockStyle('bcgov-block-theme/collapse', style)
);

registerBlockType('bcgov-block-theme/collapse', {
    title: __('Collapse Container', 'bcgov-blocks'),
    icon: 'admin-page',
    category: 'layout',
    attributes,
    supports: {
        align: ['wide'],
    },
    example: {},
    edit: (props) => {
        const {
            attributes: { collapseId, openFirstItem },
            className,
            clientId,
        } = props;

        const toggleOpenFirstItem = () => {
            props.setAttributes({ openFirstItem: !openFirstItem });
        };

        const ALLOWED_BLOCKS = ['bcgov-block-theme/collapse-item'];

        props.setAttributes({
            collapseId: `collapse-container-${clientId}`,
        });

        return (
            <div className={className} id={collapseId}>
                <InspectorControls>
                    <PanelBody title={__('Collapse Settings')}>
                        <ToggleControl
                            label={__('Open First Item')}
                            checked={openFirstItem}
                            onChange={toggleOpenFirstItem}
                        />
                    </PanelBody>
                </InspectorControls>

                <InnerBlocks allowedBlocks={ALLOWED_BLOCKS} />
            </div>
        );
    },
    deprecated,
    save: (props) => {
        const {
            attributes: { collapseId, openFirstItem },
        } = props;

        return (
            <div id={collapseId} data-open-first-item={openFirstItem}>
                <div className="collapse-container-nav">
                    <span>
                        <button
                            data-target={`#${collapseId}`}
                            className="collapse-expand-all"
                        >
                            {__('Expand all')}
                        </button>
                    </span>
                    <span>
                        <button
                            data-target={`#${collapseId}`}
                            className="collapse-collapse-all"
                        >
                            {__('Collapse all')}
                        </button>
                    </span>
                </div>

                <InnerBlocks.Content />
            </div>
        );
    },
});

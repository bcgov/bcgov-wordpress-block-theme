import { __ } from '@wordpress/i18n';
import { InnerBlocks } from '@wordpress/block-editor';

export const deprecated = [
    {
        icon: 'admin-page',
        category: 'layout',
        attributes: {
            collapseId: {
                type: 'string',
                default: '',
            },
        },
        supports: {
            align: ['wide'],
        },
        example: {},
        edit: (props) => {
            const {
                attributes: { collapseId },
                className,
                clientId,
            } = props;
            const ALLOWED_BLOCKS = ['bcgov-block-theme/collapse-item'];
            props.setAttributes({
                collapseId: `collapse-container-${clientId}`,
            });

            return (
                <div className={className} id={collapseId}>
                    <InnerBlocks allowedBlocks={ALLOWED_BLOCKS} />
                </div>
            );
        },
        save: (props) => {
            const {
                attributes: { collapseId },
            } = props;

            return (
                <div id={collapseId}>
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
    },
];

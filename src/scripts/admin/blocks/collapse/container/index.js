import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks } from '@wordpress/block-editor';
import { deprecated } from './deprecated';
import { attributes } from './attributes';

registerBlockType('bcgov/collapse', {
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
			attributes: { collapseId },
			className,
			clientId,
		} = props;
		const ALLOWED_BLOCKS = ['bcgov/collapse-item'];
		props.setAttributes({ collapseId: `collapse-container-${clientId}` });

		return (
			<div className={className} id={collapseId}>
				<InnerBlocks allowedBlocks={ALLOWED_BLOCKS} />
			</div>
		);
	},
	deprecated,
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
});

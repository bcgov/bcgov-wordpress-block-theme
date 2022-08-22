import { __ } from '@wordpress/i18n';
import { attributes } from './attributes';
import { InnerBlocks } from '@wordpress/block-editor';
export const deprecated = [
	{
		attributes,
		save: (props) => {
			const {
				attributes: { collapseId },
			} = props;

			return (
				<div id={collapseId}>
					<div className="collapse-container-nav">
						<span>
							<a
								href="#collapse-expand-all"
								role="button"
								data-target={`#${collapseId}`}
								className="collapse-expand-all"
							>
								{__('Expand all')}
							</a>
						</span>
						<span>
							<a
								href="#collapse-collapse-all"
								role="button"
								data-target={`#${collapseId}`}
								className="collapse-collapse-all"
							>
								{__('Collapse all')}
							</a>
						</span>
					</div>
					<InnerBlocks.Content />
				</div>
			);
		},
	},
];

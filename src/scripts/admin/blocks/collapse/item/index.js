import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks, RichText } from '@wordpress/block-editor';
import { attributes } from './attributes';

registerBlockType('bcgov-block-theme/collapse-item', {
	title: __('Collapse Item', 'bcgov-blocks'),
	icon: 'welcome-add-page',
	category: 'layout',
	attributes,
	example: {},
	edit: (props) => {
		const {
			attributes: { title, itemId, headingId },
			className,
			clientId,
		} = props;

		const onChangeTitle = (value) => {
			props.setAttributes({ title: value });
		};

		props.setAttributes({ itemId: `collapse-item-${clientId}` });
		props.setAttributes({ headingId: `heading-${clientId}` });
		return (
			<div className={className}>
				<div className="collapse-header" id={headingId}>
					<h3>
						<button
							data-toggle="collapse"
							data-target={`#${itemId}`}
							aria-expanded="false"
							aria-controls={itemId}
							className="collapsed"
						>
							<RichText
								tagName="span"
								onChange={onChangeTitle}
								className="collapse-title"
								value={title}
								placeholder={__('…Title')}
							/>
						</button>
					</h3>
				</div>
				<div className="collapse collapse-container" id={itemId}>
					<div className="collapse-body">
						<InnerBlocks />
					</div>
				</div>
			</div>
		);
	},
	save: (props) => {
		const {
			attributes: { title, itemId, headingId },
		} = props;
		return (
			<div>
				<div className="collapse-header" id={headingId}>
					<h3>
						<button
							data-toggle="collapse"
							data-target={`#${itemId}`}
							aria-expanded="false"
							aria-controls={itemId}
							className="collapsed"
						>
							<RichText.Content
								tagName="span"
								className="collapse-title"
								value={title}
							/>
						</button>
					</h3>
				</div>
				<div className="collapse collapse-container" id={itemId}>
					<div className="collapse-body">
						<InnerBlocks.Content />
						<div className="collapse-close">
							<a
								data-toggle="collapse"
								data-target={`#${itemId}`}
								href={`#${itemId}`}
								role="button"
								aria-expanded="true"
								aria-controls={itemId}
							>
								{__('Collapse')}
							</a>
						</div>
					</div>
				</div>
			</div>
		);
	},
});

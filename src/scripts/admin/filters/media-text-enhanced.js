const { registerBlockStyle } = wp.blocks;

const { assign, merge } = require('lodash');

const { addFilter } = wp.hooks;
const { createHigherOrderComponent } = wp.compose;
const { Fragment } = wp.element;
const { InspectorControls } = wp.blockEditor;
const { PanelBody, TextControl } = wp.components;

registerBlockStyle('core/media-text', {
	name: 'dropshadow',
	label: 'Drop shadow',
});

registerBlockStyle('core/media-text', {
	name: 'square',
	label: 'Square',
});

registerBlockStyle('core/media-text', {
	name: 'no-clip',
	label: 'Full Image',
});

/**
 * Add Size attribute to Button block.
 *
 * @param  {Object} settings Original block settings
 * @param  {string} name     Block name
 *
 * @return {Object} Filtered block settings
 */
function addAttributes(settings, name) {
	if (name === 'core/media-text') {
		return assign({}, settings, {
			attributes: merge(settings.attributes, {
				title: {
					type: 'string',
					default: '',
				},
			}),
		});
	}
	return settings;
}

addFilter(
	'blocks.registerBlockType',
	'bcgov-block-theme/media-text/add-attributes',
	addAttributes
);

/**
 * Add Size and Icons control to Button block.
 */
const addInspectorControl = createHigherOrderComponent((BlockEdit) => {
	return (props) => {
		const {
			attributes: { title },
			setAttributes,
			name,
		} = props;

		if (name !== 'core/media-text') {
			return <BlockEdit {...props} />;
		}

		return (
			<Fragment>
				<BlockEdit {...props} />
				<InspectorControls>
					<PanelBody title="Other Media Settings" initialOpen={false}>
						<TextControl
							label="Title (hover details)"
							value={title}
							onChange={(value) =>
								setAttributes({ title: value })
							}
						/>
					</PanelBody>
				</InspectorControls>
			</Fragment>
		);
	};
}, 'withInspectorControl');

addFilter(
	'editor.BlockEdit',
	'bcgov-block-theme/media-text/add-inspector-controls',
	addInspectorControl
);

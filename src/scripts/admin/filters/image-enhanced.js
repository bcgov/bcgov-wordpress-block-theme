const { registerBlockStyle } = wp.blocks;

const { assign, merge } = require('lodash');

const { addFilter } = wp.hooks;
const { createHigherOrderComponent } = wp.compose;
const { Fragment } = wp.element;
const { InspectorControls } = wp.blockEditor;
const { PanelBody, PanelRow, CheckboxControl, TextControl } = wp.components;

registerBlockStyle('core/image', {
	name: 'dropshadow',
	label: 'Drop shadow',
});

registerBlockStyle('core/image', {
	name: 'variable-ratio',
	label: 'Variable ratio',
	description:
		'Image ratio changes between desktop/tablet and mobile. Image displays at 1:1 ratio on large screens and 2:1 ratio (wider than it is high) on mobile screens.',
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
	if (name === 'core/image') {
		return assign({}, settings, {
			attributes: merge(settings.attributes, {
				title: {
					type: 'string',
					default: '',
				},
				printMode: {
					type: 'boolean',
					default: false,
				},
			}),
		});
	}
	return settings;
}

addFilter(
	'blocks.registerBlockType',
	'bcgov-block-theme/image/add-attributes',
	addAttributes
);

/**
 * Add Size and Icons control to Button block.
 */
const addInspectorControl = createHigherOrderComponent((BlockEdit) => {
	return (props) => {
		const {
			attributes: { title, printMode },
			setAttributes,
			name,
		} = props;

		if (name !== 'core/image') {
			return <BlockEdit {...props} />;
		}

		return (
			<Fragment>
				<BlockEdit {...props} />
				<InspectorControls>
					<PanelBody title="Other Media Settings" initialOpen={false}>
						<PanelRow>
							<TextControl
								label="Title (hover details)"
								value={title}
								onChange={(value) =>
									setAttributes({ title: value })
								}
							/>
						</PanelRow>
						<PanelRow>
							<CheckboxControl
								label="Show image when printing"
								checked={printMode}
								onChange={(newval) =>
									setAttributes({ printMode: newval })
								}
							/>
						</PanelRow>
					</PanelBody>
				</InspectorControls>
			</Fragment>
		);
	};
}, 'withInspectorControl');

addFilter(
	'editor.BlockEdit',
	'bcgov-block-theme/image/add-inspector-controls',
	addInspectorControl
);

import { assign, merge } from 'lodash';

const { registerBlockStyle } = wp.blocks;

const { addFilter } = wp.hooks;
const { createHigherOrderComponent } = wp.compose;
const { Fragment } = wp.element;
const { InspectorControls } = wp.blockEditor;
const {
	PanelBody,
	PanelRow,
	CheckboxControl,
	TextControl,
	RangeControl,
} = wp.components;

const styles = [
	{ name: 'dropshadow', label: 'Drop shadow' },
	{ name: 'square', label: 'Square' },
	{ name: 'no-clip', label: 'Full Image' },
];

styles.forEach((style) => {
	registerBlockStyle('core/media-text', style);
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
				printMode: {
					type: 'boolean',
					default: false,
				},
				printWidth: {
					type: 'number',
					default: 25,
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
		const { title, printMode, printWidth } = props.attributes;
		const { setAttributes } = props;
		const { name } = props;

		if (name !== 'core/media-text') {
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
						<PanelRow>
							<RangeControl
								label="Max&nbsp;width&nbsp;on&nbsp;printed&nbsp;page&nbsp;(%)"
								value={printWidth}
								onChange={(newval) =>
									setAttributes({ printWidth: newval })
								}
								min={10}
								max={100}
								separatorType="fullWidth"
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
	'bcgov-block-theme/media-text/add-inspector-controls',
	addInspectorControl
);

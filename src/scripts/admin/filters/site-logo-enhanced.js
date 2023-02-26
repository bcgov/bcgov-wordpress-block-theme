import { assign, merge } from 'lodash';

const { addFilter } = wp.hooks;
const { createHigherOrderComponent } = wp.compose;
const { Fragment } = wp.element;
const { InspectorControls } = wp.blockEditor;
const { PanelBody, PanelRow, CheckboxControl } = wp.components;

/**
 * Add print attribute to Site Logo block.
 *
 * @param  {Object} settings Original block settings
 * @param  {string} name     Block name
 *
 * @return {Object} Filtered block settings
 */
function addAttributes(settings, name) {
	if (name === 'core/site-logo') {
		return assign({}, settings, {
			attributes: merge(settings.attributes, {
				inverted: {
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
	'bcgov-block-theme/site-logo/add-attributes',
	addAttributes
);

/**
 * Add Size and Icons control to Button block.
 */
const addInspectorControl = createHigherOrderComponent((BlockEdit) => {
	return (props) => {
		const { inverted } = props.attributes;
		const { setAttributes } = props;
		const { name } = props;

		if (name !== 'core/site-logo') {
			return <BlockEdit {...props} />;
		}

		return (
			<Fragment>
				<BlockEdit {...props} />
				<InspectorControls>
					<PanelBody title="Other Media Settings" initialOpen={false}>
						<PanelRow>
							<CheckboxControl
								label="Set dark background for print"
								checked={inverted}
								onChange={(newval) =>
									setAttributes({ inverted: newval })
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
	'bcgov-block-theme/site-logo/add-inspector-controls',
	addInspectorControl
);

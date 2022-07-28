import classnames from 'classnames';

const { assign, merge } = require('lodash');

const { registerBlockStyle, unregisterBlockStyle } = wp.blocks;
const { __ } = wp.i18n;
const { addFilter } = wp.hooks;
const { createHigherOrderComponent } = wp.compose;
const { Fragment } = wp.element;
const { InspectorControls } = wp.blockEditor;
const { PanelBody, SelectControl } = wp.components;

/**
 * Modify Button style options.
 */
registerBlockStyle('core/button', {
	name: 'fill',
	label: 'BCGov Fill',
	default: 'is-style-fill',
});
registerBlockStyle('core/button', {
	name: 'outline',
	label: 'BCGov Outline',
});

wp.domReady(() => {
	unregisterBlockStyle('core/button', 'default');
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
	if (name === 'core/button') {
		return assign({}, settings, {
			attributes: merge(settings.attributes, {
				size: {
					type: 'string',
					default: 'regular',
				},
			}),
		});
	}
	return settings;
}

addFilter(
	'blocks.registerBlockType',
	'bcgov-block-theme/button-block/add-attributes',
	addAttributes
);

/**
 * Add Size control to Button block.
 */
const addInspectorControl = createHigherOrderComponent((BlockEdit) => {
	return (props) => {
		const {
			attributes: { size },
			setAttributes,
			name,
		} = props;

		if (name !== 'core/button') {
			return <BlockEdit {...props} />;
		}

		return (
			<Fragment>
				<BlockEdit {...props} />
				<InspectorControls>
					<PanelBody
						title={__('Size options', 'bcgov-block-theme')}
						initialOpen={true}
					>
						<SelectControl
							label={__('Size', 'bcgov-block-theme')}
							value={size}
							options={[
								{
									label: __('Default', 'bcgov-block-theme'),
									value: 'regular',
								},
								// {
								// 	label: __('Small', 'bcgov-block-theme'),
								// 	value: 'small',
								// },
								{
									label: __('Large', 'bcgov-block-theme'),
									value: 'large',
								},
							]}
							onChange={(value) => {
								setAttributes({ size: value });
							}}
						/>
					</PanelBody>
				</InspectorControls>
			</Fragment>
		);
	};
}, 'withInspectorControl');

addFilter(
	'editor.BlockEdit',
	'bcgov-block-theme/button-block/add-inspector-controls',
	addInspectorControl
);

/**
 * Add size class to the block in the editor.
 */
const addSizeClassEditor = createHigherOrderComponent((BlockListBlock) => {
	return (props) => {
		const {
			attributes: { size },
			className,
			name,
		} = props;

		if (name !== 'core/button') {
			return <BlockListBlock {...props} />;
		}

		return (
			<BlockListBlock
				{...props}
				className={classnames(
					className,
					size ? `has-size-${size}` : ''
				)}
			/>
		);
	};
}, 'withClientIdClassName');

addFilter(
	'editor.BlockListBlock',
	'bcgov-block-theme/button-block/add-editor-class',
	addSizeClassEditor
);

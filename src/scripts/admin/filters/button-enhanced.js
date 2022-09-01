import classnames from 'classnames';
import iconsObj from '../utils/button-icons';

const { assign, merge } = require('lodash');

const { registerBlockStyle, unregisterBlockStyle } = wp.blocks;
const { __ } = wp.i18n;
const { addFilter } = wp.hooks;
const { createHigherOrderComponent } = wp.compose;
const { Fragment } = wp.element;
const { InspectorControls } = wp.blockEditor;
const { PanelBody, SelectControl } = wp.components;

/**
 * Add Size control to Button block.
 */
registerBlockStyle('core/button', {
	name: 'fill',
	label: 'BCGov',
	default: 'is-bcgov-fill',
});

registerBlockStyle('core/button', {
	name: 'outline',
	label: 'Outline',
});

registerBlockStyle('core/button', {
	name: 'underline',
	label: 'Underline',
});

if ('cleanbc' === window.site.siteName) {
	registerBlockStyle('core/button', {
		name: 'icon',
		label: 'Icon',
	});
}

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
				svgIcon: {
					type: 'string',
					default: '',
				},
				iconsList: {
					type: 'array',
					default: iconsObj,
				},
				clickFlag: {
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
	'bcgov-block-theme/button-block/add-attributes',
	addAttributes
);

/**
 * Add Size and Icons control to Button block.
 */
const addInspectorControl = createHigherOrderComponent((BlockEdit) => {
	return (props) => {
		const {
			attributes: { size, svgIcon, iconsList, clickFlag },
			setAttributes,
			name,
		} = props;

		if (name !== 'core/button') {
			return <BlockEdit {...props} />;
		}

		const handleClick = () => {
			setAttributes({ clickFlag: true });
		};

		return (
			<Fragment>
				<BlockEdit {...props} />
				<InspectorControls>
					<PanelBody
						title={__('Icon options', 'bcgov-block-theme')}
						initialOpen={false}
					>
						{clickFlag && (
							<SelectControl
								label={__('Icon', 'bcgov-block-theme')}
								value={svgIcon}
								options={iconsList}
								onChange={(value) => {
									setAttributes({ svgIcon: value });
								}}
							/>
						)}
						{!clickFlag && (
							<>
								<h3>Instructions (for CleanBC only):</h3>
								<p>
									To change the colour of an icon use the
									Color ▶ Background setting below.
								</p>
								<p>
									Note that the{' '}
									<em>
										icon color change will only work with
										the Theme palette
									</em>{' '}
									of colours.
								</p>
								<p>
									<strong>Enable the Icon style</strong>{' '}
									button to use list of icon options.
								</p>
								<button onClick={handleClick}>
									Show icons
								</button>
							</>
						)}
					</PanelBody>
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
 * Add additional classes to the block in the editor.
 */
const addClassesToEditor = createHigherOrderComponent((BlockListBlock) => {
	return (props) => {
		const {
			attributes: { size, svgIcon },
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
					size ? `has-size-${size}` : '',
					svgIcon ? `icon icon-${svgIcon}` : ''
				)}
			/>
		);
	};
}, 'withClientIdClassName');

addFilter(
	'editor.BlockListBlock',
	'bcgov-block-theme/button-block/add-editor-class',
	addClassesToEditor
);

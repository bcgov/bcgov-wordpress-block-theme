import { assign, merge } from 'lodash';

const { registerBlockStyle } = wp.blocks;

const { addFilter } = wp.hooks;
const { createHigherOrderComponent } = wp.compose;
const { Fragment } = wp.element;
const { InspectorControls } = wp.blockEditor;
const { PanelBody, PanelRow, CheckboxControl, TextControl, RangeControl } =
	wp.components;

const styles = [
	{ name: 'dropshadow', label: 'Drop shadow' },
	{
		name: 'variable-ratio',
		label: 'Variable ratio',
		description:
			'Image ratio changes between desktop/tablet and mobile. Image displays at 1:1 ratio on large screens and 2:1 ratio (wider than it is high) on mobile screens.',
	},
	{
		name: 'abs-img',
		label: 'Positioned',
		description:
			'Sets the position of the image to absolute. Requires adding styles to position the image as needed.',
	},
];

styles.forEach( ( style ) => registerBlockStyle( 'core/image', style ) );

/**
 * Add Size attribute to Button block.
 *
 * @param  {Object} settings Original block settings
 * @param  {string} name     Block name
 *
 * @return {Object} Filtered block settings
 */
function addAttributes( settings, name ) {
	if ( name === 'core/image' ) {
		return assign( {}, settings, {
			attributes: merge( settings.attributes, {
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
			} ),
		} );
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
const addInspectorControl = createHigherOrderComponent( ( BlockEdit ) => {
	return ( props ) => {
		const { title, printMode, printWidth } = props.attributes;
		const { setAttributes } = props;
		const { name } = props;

		if ( name !== 'core/image' ) {
			return <BlockEdit { ...props } />;
		}

		return (
			<Fragment>
				<BlockEdit { ...props } />
				<InspectorControls>
					<PanelBody
						title="Other Media Settings"
						initialOpen={ false }
					>
						<PanelRow>
							<TextControl
								label="Title (hover details)"
								value={ title }
								onChange={ ( value ) =>
									setAttributes( { title: value } )
								}
							/>
						</PanelRow>
						<PanelRow>
							<CheckboxControl
								label="Show image when printing"
								checked={ printMode }
								onChange={ ( newval ) =>
									setAttributes( { printMode: newval } )
								}
							/>
						</PanelRow>
						<PanelRow>
							<RangeControl
								label="Max&nbsp;width&nbsp;on&nbsp;printed&nbsp;page&nbsp;(%)"
								value={ printWidth }
								onChange={ ( newval ) =>
									setAttributes( { printWidth: newval } )
								}
								min={ 10 }
								max={ 100 }
								separatorType="fullWidth"
							/>
						</PanelRow>
					</PanelBody>
				</InspectorControls>
			</Fragment>
		);
	};
}, 'withInspectorControl' );

addFilter(
	'editor.BlockEdit',
	'bcgov-block-theme/image/add-inspector-controls',
	addInspectorControl
);

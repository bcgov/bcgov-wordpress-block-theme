import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import {
	AlignmentToolbar,
	BlockControls,
	InspectorControls,
	InnerBlocks,
} from '@wordpress/blockEditor';
import { PanelBody, ColorPalette } from '@wordpress/components';
import { attributes } from './attributes';
import { allowedColors, defaults } from '../../../utils/common';

registerBlockType( 'bcgov/card', {
	title: __( 'Basic Card', 'basic-card' ),
	icon: 'format-image',
	category: 'media',
	attributes,
	example: {},
	edit: ( props ) => {
		const {
			attributes: { alignment, color, backgroundColor },
			className,
		} = props;
		const ALLOWED_BLOCKS = [
			'core/heading',
			'core/paragraph',
			'core/image',
			'core/html',
			'core/button',
		];

		const onChangeAlignment = ( newAlignment ) => {
			props.setAttributes( {
				alignment: defaults( newAlignment, 'none' ),
			} );
		};
		const onChangeColor = ( val ) => {
			props.setAttributes( { color: defaults( val, 'transparent' ) } );
		};
		const onChangeBackgroundColor = ( val ) => {
			props.setAttributes( {
				backgroundColor: defaults( val, 'transparent' ),
			} );
		};
		return (
			<li
				className={ `align-${ alignment } ${ className }` }
				style={ {
					backgroundColor,
					color,
				} }
			>
				{
					<BlockControls>
						<AlignmentToolbar
							value={ alignment }
							onChange={ onChangeAlignment }
						/>
					</BlockControls>
				}
				<InspectorControls>
					<PanelBody title={ __( 'Colour' ) }>
						<ColorPalette
							colors={ allowedColors }
							value={ color }
							onChange={ onChangeColor }
						/>
					</PanelBody>
					<PanelBody title={ __( 'Background Colour' ) }>
						<ColorPalette
							colors={ allowedColors }
							value={ backgroundColor }
							onChange={ onChangeBackgroundColor }
						/>
					</PanelBody>
				</InspectorControls>

				<InnerBlocks allowedBlocks={ ALLOWED_BLOCKS } />
			</li>
		);
	},
	save: ( props ) => {
		const {
			attributes: { alignment, backgroundColor, color },
		} = props;

		return (
			<li
				className={ `align-${ alignment }` }
				style={ {
					backgroundColor,
					color,
				} }
			>
				<InnerBlocks.Content />
			</li>
		);
	},
} );

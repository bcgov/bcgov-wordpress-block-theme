import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, ColorPalette, RangeControl } from '@wordpress/components';
import { withState } from '@wordpress/compose';
import { attributes } from './attributes';
import { deprecated } from './deprecated';
import { allowedColors, defaults } from '../../../utils/common';

registerBlockType( 'bcgov/card-container', {
	title: __( 'Basic Card Container', 'basic-card-container' ),
	icon: 'images-alt',
	category: 'media',
	attributes,
	getEditWrapperProps() {
		return {
			'data-align': 'wide',
		};
	},
	supports: {
		align: true,
	},
	example: {},
	edit: ( props ) => {
		const {
			attributes: { cardId, backgroundColor, firstBreakColumns },
			className,
			clientId,
		} = props;
		const ALLOWED_BLOCKS = [ 'bcgov/card', 'bcgov/fancy-button' ];

		props.setAttributes( { cardId: `card-container-${ clientId }` } );

		const onChangeBackgroundColor = ( color ) => {
			props.setAttributes( {
				backgroundColor: defaults( color, 'transparent' ),
			} );
		};

		const RangeControlFirstBreak = withState( {
			column: firstBreakColumns,
		} )( ( { column, setState } ) => (
			<RangeControl
				label={ __( 'Columns' ) }
				value={ column }
				initialPosition="3"
				onChange={ ( val ) => {
					props.setAttributes( { firstBreakColumns: val } );
					setState( { column } );
				} }
				min={ 1 }
				max={ 6 }
			/>
		) );

		return (
			<ul
				className={ className }
				style={ { backgroundColor } }
				id={ cardId }
			>
				<InspectorControls>
					<PanelBody title={ __( 'Background Colour' ) }>
						<ColorPalette
							colors={ allowedColors }
							value={ backgroundColor }
							onChange={ onChangeBackgroundColor }
						/>
					</PanelBody>
					<PanelBody title={ __( 'Desktop Columns' ) }>
						<RangeControlFirstBreak />
					</PanelBody>
				</InspectorControls>
				<InnerBlocks allowedBlocks={ ALLOWED_BLOCKS } />
			</ul>
		);
	},
	deprecated,
	save: ( props ) => {
		const {
			attributes: { cardId, backgroundColor, firstBreakColumns },
			className,
		} = props;

		return (
			<ul
				className={ `${ className } lg-break-${ firstBreakColumns }` }
				id={ cardId }
				style={ { backgroundColor } }
			>
				<InnerBlocks.Content />
			</ul>
		);
	},
} );

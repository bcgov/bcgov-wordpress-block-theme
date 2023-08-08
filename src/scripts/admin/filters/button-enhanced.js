/* eslint jsdoc/check-line-alignment: "off" */

import classnames from 'classnames';
import iconsObj from '../utils/button-icons';

import { assign, merge } from 'lodash';

const { registerBlockStyle, unregisterBlockStyle } = wp.blocks;
const { __ } = wp.i18n;
const { addFilter } = wp.hooks;
const { createHigherOrderComponent } = wp.compose;
const { Fragment } = wp.element;
const { InspectorControls } = wp.blockEditor;
const { PanelBody, SelectControl, TextControl } = wp.components;

/**
 * Add Size control to Button block.
 */
const styles = [
    { name: 'fill', label: 'BCGov', default: 'is-bcgov-fill' },
    { name: 'outline', label: 'Outline' },
    { name: 'underline', label: 'Underline' },
];

styles.forEach((style) => registerBlockStyle('core/button', style));

if ('optional' === window.site.siteName || window.site.allSiteStyles.length) {
    registerBlockStyle('core/button', { name: 'icon', label: 'Icon' });
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
                label: {
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
    'bcgov-block-theme/button-block/add-attributes',
    addAttributes
);

/**
 * Add Size and Icons control to Button block.
 */
const addInspectorControl = createHigherOrderComponent((BlockEdit) => {
    return (props) => {
        const { size, svgIcon, iconsList, clickFlag, label } = props.attributes;
        const { setAttributes } = props;
        const { name } = props;

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
                        {clickFlag ? (
                            <SelectControl
                                label={__('Icon', 'bcgov-block-theme')}
                                value={svgIcon}
                                options={iconsList}
                                onChange={(value) => {
                                    setAttributes({ svgIcon: value });
                                }}
                            />
                        ) : (
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
                    <PanelBody title="Size options" initialOpen={true}>
                        <SelectControl
                            label="Size"
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
                    <PanelBody title="Accessibility" initialOpen={false}>
                        <TextControl
                            label="ARIA Label"
                            value={label}
                            onChange={(value) =>
                                setAttributes({ label: value })
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
    'bcgov-block-theme/button-block/add-inspector-controls',
    addInspectorControl
);

/**
	
	Add additional classes to the block in the editor.
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
                className={classnames(className, {
                    [size]: size,
                    [svgIcon]: svgIcon,
                })}
            />
        );
    };
}, 'addClassesToEditor');

addFilter(
    'editor.BlockListBlock',
    'bcgov-block-theme/button-block/add-classes-to-editor',
    addClassesToEditor
);

export default function Button() {
    return null;
}

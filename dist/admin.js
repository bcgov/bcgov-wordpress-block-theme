/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/styles/admin/index.scss":
/*!*************************************!*\
  !*** ./src/styles/admin/index.scss ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/scripts/admin/blocks/card/container/attributes.js":
/*!***************************************************************!*\
  !*** ./src/scripts/admin/blocks/card/container/attributes.js ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "attributes": () => (/* binding */ attributes)
/* harmony export */ });
const attributes = {
  backgroundColor: {
    type: 'string',
    default: 'transparent'
  },
  firstBreakColumns: {
    type: 'integer',
    default: 3
  },
  cardId: {
    type: 'string',
    default: ''
  }
};

/***/ }),

/***/ "./src/scripts/admin/blocks/card/container/deprecated.js":
/*!***************************************************************!*\
  !*** ./src/scripts/admin/blocks/card/container/deprecated.js ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "deprecated": () => (/* binding */ deprecated)
/* harmony export */ });
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _attributes__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./attributes */ "./src/scripts/admin/blocks/card/container/attributes.js");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);



const deprecated = [{
  attributes: _attributes__WEBPACK_IMPORTED_MODULE_1__.attributes,
  save: props => {
    const {
      attributes: {
        cardId,
        backgroundColor,
        firstBreakColumns,
        firstBreak,
        secondBreakColumns,
        secondBreak
      },
      className
    } = props;
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("style", {
      jsx: true
    }, `
							#${cardId} {
								background-color: ${backgroundColor};
							}
							@media (min-width: ${secondBreak}px) {
								ul#${cardId} {
									-webkit-flex-direction: row;
									-moz-flex-direction: row;
									-ms-flex-direction: row;
									flex-direction: row;
									-webkit-flex-wrap: wrap;
									-moz-flex-wrap: wrap;
									-ms-flex-wrap: wrap;
									flex-wrap: wrap;
									flex-wrap: wrap;
								}
								ul#${cardId} > li {
									width: ${100 / secondBreakColumns - 1 * 2}%;
									margin: 1%;
								}
							}
							@media (min-width: ${firstBreak}px) {
								ul#${cardId} {
									-webkit-flex-direction: row;
									-moz-flex-direction: row;
									-ms-flex-direction: row;
									flex-direction: row;
									-webkit-flex-wrap: wrap;
									-moz-flex-wrap: wrap;
									-ms-flex-wrap: wrap;
									flex-wrap: wrap;
								}
								ul#${cardId} > li {
									width: ${100 / firstBreakColumns - 1 * 2}%;
									margin: 1%;
								}
							}
						`), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("ul", {
      className: className,
      id: cardId
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__.InnerBlocks.Content, null)));
  }
}, {
  attributes: _attributes__WEBPACK_IMPORTED_MODULE_1__.attributes,
  save: props => {
    const {
      attributes: {
        cardId,
        backgroundColor,
        firstBreakColumns,
        firstBreak,
        secondBreakColumns,
        secondBreak
      },
      className
    } = props;
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
      role: "navigation"
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("style", {
      jsx: true
    }, `
							#${cardId} {
								background-color: ${backgroundColor};
							}
							@media (min-width: ${secondBreak}px) {
								ul#${cardId} {
									-webkit-flex-direction: row;
									-moz-flex-direction: row;
									-ms-flex-direction: row;
									flex-direction: row;
									-webkit-flex-wrap: wrap;
									-moz-flex-wrap: wrap;
									-ms-flex-wrap: wrap;
									flex-wrap: wrap;
									flex-wrap: wrap;
								}
								ul#${cardId} > li {
									width: ${100 / secondBreakColumns - 1 * 2}%;
									margin: 1%;
								}
							}
							@media (min-width: ${firstBreak}px) {
								ul#${cardId} {
									-webkit-flex-direction: row;
									-moz-flex-direction: row;
									-ms-flex-direction: row;
									flex-direction: row;
									-webkit-flex-wrap: wrap;
									-moz-flex-wrap: wrap;
									-ms-flex-wrap: wrap;
									flex-wrap: wrap;
								}
								ul#${cardId} > li {
									width: ${100 / firstBreakColumns - 1 * 2}%;
									margin: 1%;
								}
							}
						`), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("ul", {
      className: className,
      id: cardId
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__.InnerBlocks.Content, null)));
  }
}, {
  attributes: _attributes__WEBPACK_IMPORTED_MODULE_1__.attributes,
  save: props => {
    const {
      attributes: {
        cardId // backgroundColor,
        // firstBreakColumns,
        // firstBreak,
        // secondBreakColumns,
        // secondBreak,

      },
      className
    } = props;
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("ul", {
      className: className,
      id: cardId
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__.InnerBlocks.Content, null));
  }
}];

/***/ }),

/***/ "./src/scripts/admin/blocks/card/container/index.js":
/*!**********************************************************!*\
  !*** ./src/scripts/admin/blocks/card/container/index.js ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/compose */ "@wordpress/compose");
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_compose__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _attributes__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./attributes */ "./src/scripts/admin/blocks/card/container/attributes.js");
/* harmony import */ var _deprecated__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./deprecated */ "./src/scripts/admin/blocks/card/container/deprecated.js");
/* harmony import */ var _utils_common__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../../utils/common */ "./src/scripts/admin/utils/common.js");









(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__.registerBlockType)('bcgov/card-container', {
  title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Basic Card Container', 'basic-card-container'),
  icon: 'images-alt',
  category: 'media',
  attributes: _attributes__WEBPACK_IMPORTED_MODULE_6__.attributes,

  getEditWrapperProps() {
    return {
      'data-align': 'wide'
    };
  },

  supports: {
    align: true
  },
  example: {},
  edit: props => {
    const {
      attributes: {
        cardId,
        backgroundColor,
        firstBreakColumns
      },
      className,
      clientId
    } = props;
    const ALLOWED_BLOCKS = ['bcgov/card', 'bcgov/fancy-button'];
    props.setAttributes({
      cardId: `card-container-${clientId}`
    });

    const onChangeBackgroundColor = color => {
      props.setAttributes({
        backgroundColor: (0,_utils_common__WEBPACK_IMPORTED_MODULE_8__.defaults)(color, 'transparent')
      });
    };

    const RangeControlFirstBreak = (0,_wordpress_compose__WEBPACK_IMPORTED_MODULE_5__.withState)({
      column: firstBreakColumns
    })(_ref => {
      let {
        column,
        setState
      } = _ref;
      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.RangeControl, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Columns'),
        value: column,
        initialPosition: "3",
        onChange: val => {
          props.setAttributes({
            firstBreakColumns: val
          });
          setState({
            column
          });
        },
        min: 1,
        max: 6
      });
    });
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("ul", {
      className: className,
      style: {
        backgroundColor
      },
      id: cardId
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.InspectorControls, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.PanelBody, {
      title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Background Colour')
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.ColorPalette, {
      colors: _utils_common__WEBPACK_IMPORTED_MODULE_8__.allowedColors,
      value: backgroundColor,
      onChange: onChangeBackgroundColor
    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.PanelBody, {
      title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Desktop Columns')
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(RangeControlFirstBreak, null))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.InnerBlocks, {
      allowedBlocks: ALLOWED_BLOCKS
    }));
  },
  deprecated: _deprecated__WEBPACK_IMPORTED_MODULE_7__.deprecated,
  save: props => {
    const {
      attributes: {
        cardId,
        backgroundColor,
        firstBreakColumns
      },
      className
    } = props;
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("ul", {
      className: `${className} lg-break-${firstBreakColumns}`,
      id: cardId,
      style: {
        backgroundColor
      }
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__.InnerBlocks.Content, null));
  }
});

/***/ }),

/***/ "./src/scripts/admin/blocks/card/item/attributes.js":
/*!**********************************************************!*\
  !*** ./src/scripts/admin/blocks/card/item/attributes.js ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "attributes": () => (/* binding */ attributes)
/* harmony export */ });
const attributes = {
  title: {
    type: 'array',
    source: 'children',
    selector: '.card-block-title'
  },
  content: {
    type: 'array',
    source: 'children',
    selector: '.card-block-content'
  },
  alignment: {
    type: 'string',
    default: 'none'
  },
  color: {
    type: 'string',
    default: 'inherit'
  },
  backgroundColor: {
    type: 'string',
    default: 'transparent'
  }
};

/***/ }),

/***/ "./src/scripts/admin/blocks/card/item/index.js":
/*!*****************************************************!*\
  !*** ./src/scripts/admin/blocks/card/item/index.js ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_blockEditor__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/blockEditor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_blockEditor__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blockEditor__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _attributes__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./attributes */ "./src/scripts/admin/blocks/card/item/attributes.js");
/* harmony import */ var _utils_common__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../utils/common */ "./src/scripts/admin/utils/common.js");







(0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__.registerBlockType)('bcgov/card', {
  title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Basic Card', 'basic-card'),
  icon: 'format-image',
  category: 'media',
  attributes: _attributes__WEBPACK_IMPORTED_MODULE_5__.attributes,
  example: {},
  edit: props => {
    const {
      attributes: {
        alignment,
        color,
        backgroundColor
      },
      className
    } = props;
    const ALLOWED_BLOCKS = ['core/heading', 'core/paragraph', 'core/image', 'core/html', 'core/button'];

    const onChangeAlignment = newAlignment => {
      props.setAttributes({
        alignment: (0,_utils_common__WEBPACK_IMPORTED_MODULE_6__.defaults)(newAlignment, 'none')
      });
    };

    const onChangeColor = val => {
      props.setAttributes({
        color: (0,_utils_common__WEBPACK_IMPORTED_MODULE_6__.defaults)(val, 'transparent')
      });
    };

    const onChangeBackgroundColor = val => {
      props.setAttributes({
        backgroundColor: (0,_utils_common__WEBPACK_IMPORTED_MODULE_6__.defaults)(val, 'transparent')
      });
    };

    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("li", {
      className: `align-${alignment} ${className}`,
      style: {
        backgroundColor,
        color
      }
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_blockEditor__WEBPACK_IMPORTED_MODULE_3__.BlockControls, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_blockEditor__WEBPACK_IMPORTED_MODULE_3__.AlignmentToolbar, {
      value: alignment,
      onChange: onChangeAlignment
    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_blockEditor__WEBPACK_IMPORTED_MODULE_3__.InspectorControls, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.PanelBody, {
      title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Colour')
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.ColorPalette, {
      colors: _utils_common__WEBPACK_IMPORTED_MODULE_6__.allowedColors,
      value: color,
      onChange: onChangeColor
    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.PanelBody, {
      title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)('Background Colour')
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.ColorPalette, {
      colors: _utils_common__WEBPACK_IMPORTED_MODULE_6__.allowedColors,
      value: backgroundColor,
      onChange: onChangeBackgroundColor
    }))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_blockEditor__WEBPACK_IMPORTED_MODULE_3__.InnerBlocks, {
      allowedBlocks: ALLOWED_BLOCKS
    }));
  },
  save: props => {
    const {
      attributes: {
        alignment,
        backgroundColor,
        color
      }
    } = props;
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("li", {
      className: `align-${alignment}`,
      style: {
        backgroundColor,
        color
      }
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_blockEditor__WEBPACK_IMPORTED_MODULE_3__.InnerBlocks.Content, null));
  }
});

/***/ }),

/***/ "./src/scripts/admin/filters/button-enhanced.js":
/*!******************************************************!*\
  !*** ./src/scripts/admin/filters/button-enhanced.js ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/extends */ "./node_modules/@babel/runtime/helpers/esm/extends.js");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! classnames */ "./node_modules/classnames/index.js");
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(classnames__WEBPACK_IMPORTED_MODULE_2__);




const {
  assign,
  merge
} = __webpack_require__(/*! lodash */ "lodash");

const {
  registerBlockStyle,
  unregisterBlockStyle
} = wp.blocks;
const {
  __
} = wp.i18n;
const {
  addFilter
} = wp.hooks;
const {
  createHigherOrderComponent
} = wp.compose;
const {
  Fragment
} = wp.element;
const {
  InspectorControls
} = wp.blockEditor;
const {
  PanelBody,
  SelectControl
} = wp.components;
/**
 * Modify Button style options.
 */

registerBlockStyle('core/button', {
  name: 'fill',
  label: 'BCGov Fill',
  default: 'is-style-fill'
});
registerBlockStyle('core/button', {
  name: 'outline',
  label: 'BCGov Outline'
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
          default: 'regular'
        }
      })
    });
  }

  return settings;
}

addFilter('blocks.registerBlockType', 'bcgov-block-theme/button-block/add-attributes', addAttributes);
/**
 * Add Size control to Button block.
 */

const addInspectorControl = createHigherOrderComponent(BlockEdit => {
  return props => {
    const {
      attributes: {
        size
      },
      setAttributes,
      name
    } = props;

    if (name !== 'core/button') {
      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(BlockEdit, props);
    }

    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(Fragment, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(BlockEdit, props), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(InspectorControls, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(PanelBody, {
      title: __('Size options', 'bcgov-block-theme'),
      initialOpen: true
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(SelectControl, {
      label: __('Size', 'bcgov-block-theme'),
      value: size,
      options: [{
        label: __('Default', 'bcgov-block-theme'),
        value: 'regular'
      }, // {
      // 	label: __('Small', 'bcgov-block-theme'),
      // 	value: 'small',
      // },
      {
        label: __('Large', 'bcgov-block-theme'),
        value: 'large'
      }],
      onChange: value => {
        setAttributes({
          size: value
        });
      }
    }))));
  };
}, 'withInspectorControl');
addFilter('editor.BlockEdit', 'bcgov-block-theme/button-block/add-inspector-controls', addInspectorControl);
/**
 * Add size class to the block in the editor.
 */

const addSizeClassEditor = createHigherOrderComponent(BlockListBlock => {
  return props => {
    const {
      attributes: {
        size
      },
      className,
      name
    } = props;

    if (name !== 'core/button') {
      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(BlockListBlock, props);
    }

    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(BlockListBlock, (0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__["default"])({}, props, {
      className: classnames__WEBPACK_IMPORTED_MODULE_2___default()(className, size ? `has-size-${size}` : '')
    }));
  };
}, 'withClientIdClassName');
addFilter('editor.BlockListBlock', 'bcgov-block-theme/button-block/add-editor-class', addSizeClassEditor);

/***/ }),

/***/ "./src/scripts/admin/filters/media-text-enhanced.js":
/*!**********************************************************!*\
  !*** ./src/scripts/admin/filters/media-text-enhanced.js ***!
  \**********************************************************/
/***/ (() => {

const {
  registerBlockStyle
} = wp.blocks;
registerBlockStyle('core/media-text', {
  name: 'dropshadow',
  label: 'Drop shadow'
});

/***/ }),

/***/ "./src/scripts/admin/utils/common.js":
/*!*******************************************!*\
  !*** ./src/scripts/admin/utils/common.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "allowedColors": () => (/* binding */ allowedColors),
/* harmony export */   "defaults": () => (/* binding */ defaults),
/* harmony export */   "mediaQueries": () => (/* binding */ mediaQueries)
/* harmony export */ });
const allowedColors = [{
  name: 'bcgov-background-light',
  color: '#f2f2f2'
}, {
  name: 'bcgov-component',
  color: '#606060'
}, {
  name: 'bcgov-text',
  color: '#313132'
}, {
  name: 'bcgov-white',
  color: '#fff'
}, {
  name: 'bcgov-primary',
  color: '#036'
}, {
  name: 'bcgov-link',
  color: '#1a5a96'
}, {
  name: 'bcgov-background-blue',
  color: '#38598a'
}, {
  name: 'bcgov-yellow',
  color: '#fcba19'
}, {
  name: 'bcgov-red',
  color: '#d8292f'
}, {
  name: 'bcgov-green',
  color: '#2e8540'
}];
const mediaQueries = [{
  value: null,
  label: 'Select Break Point',
  disabled: true
}, {
  value: 1200,
  label: '1200px'
}, {
  value: 992,
  label: '992px'
}, {
  value: 768,
  label: '768px'
}, {
  value: 576,
  label: '576px'
}, {
  value: 0,
  label: 'None'
}];
const defaults = (value, defaultValue) => {
  if (undefined === value) {
    value = defaultValue;
  }

  return value;
};

/***/ }),

/***/ "./node_modules/classnames/index.js":
/*!******************************************!*\
  !*** ./node_modules/classnames/index.js ***!
  \******************************************/
/***/ ((module, exports) => {

var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/*!
  Copyright (c) 2018 Jed Watson.
  Licensed under the MIT License (MIT), see
  http://jedwatson.github.io/classnames
*/
/* global define */

(function () {
	'use strict';

	var hasOwn = {}.hasOwnProperty;

	function classNames() {
		var classes = [];

		for (var i = 0; i < arguments.length; i++) {
			var arg = arguments[i];
			if (!arg) continue;

			var argType = typeof arg;

			if (argType === 'string' || argType === 'number') {
				classes.push(arg);
			} else if (Array.isArray(arg)) {
				if (arg.length) {
					var inner = classNames.apply(null, arg);
					if (inner) {
						classes.push(inner);
					}
				}
			} else if (argType === 'object') {
				if (arg.toString === Object.prototype.toString) {
					for (var key in arg) {
						if (hasOwn.call(arg, key) && arg[key]) {
							classes.push(key);
						}
					}
				} else {
					classes.push(arg.toString());
				}
			}
		}

		return classes.join(' ');
	}

	if ( true && module.exports) {
		classNames.default = classNames;
		module.exports = classNames;
	} else if (true) {
		// register as 'classnames', consistent with npm package name
		!(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_RESULT__ = (function () {
			return classNames;
		}).apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
	} else {}
}());


/***/ }),

/***/ "lodash":
/*!*************************!*\
  !*** external "lodash" ***!
  \*************************/
/***/ ((module) => {

"use strict";
module.exports = window["lodash"];

/***/ }),

/***/ "@wordpress/block-editor":
/*!*************************************!*\
  !*** external ["wp","blockEditor"] ***!
  \*************************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["blockEditor"];

/***/ }),

/***/ "@wordpress/blocks":
/*!********************************!*\
  !*** external ["wp","blocks"] ***!
  \********************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["blocks"];

/***/ }),

/***/ "@wordpress/components":
/*!************************************!*\
  !*** external ["wp","components"] ***!
  \************************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["components"];

/***/ }),

/***/ "@wordpress/compose":
/*!*********************************!*\
  !*** external ["wp","compose"] ***!
  \*********************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["compose"];

/***/ }),

/***/ "@wordpress/element":
/*!*********************************!*\
  !*** external ["wp","element"] ***!
  \*********************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["element"];

/***/ }),

/***/ "@wordpress/i18n":
/*!******************************!*\
  !*** external ["wp","i18n"] ***!
  \******************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["i18n"];

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/extends.js":
/*!************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/extends.js ***!
  \************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _extends)
/* harmony export */ });
function _extends() {
  _extends = Object.assign ? Object.assign.bind() : function (target) {
    for (var i = 1; i < arguments.length; i++) {
      var source = arguments[i];

      for (var key in source) {
        if (Object.prototype.hasOwnProperty.call(source, key)) {
          target[key] = source[key];
        }
      }
    }

    return target;
  };
  return _extends.apply(this, arguments);
}

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!************************************!*\
  !*** ./src/scripts/admin/index.js ***!
  \************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_admin_index_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../styles/admin/index.scss */ "./src/styles/admin/index.scss");
/* harmony import */ var _blocks_card_container__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./blocks/card/container */ "./src/scripts/admin/blocks/card/container/index.js");
/* harmony import */ var _blocks_card_item__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./blocks/card/item */ "./src/scripts/admin/blocks/card/item/index.js");
/* harmony import */ var _filters_button_enhanced__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./filters/button-enhanced */ "./src/scripts/admin/filters/button-enhanced.js");
/* harmony import */ var _filters_media_text_enhanced__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./filters/media-text-enhanced */ "./src/scripts/admin/filters/media-text-enhanced.js");
/* harmony import */ var _filters_media_text_enhanced__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_filters_media_text_enhanced__WEBPACK_IMPORTED_MODULE_4__);

/**
 * Custom Blocks.
 * PHP render functions are used and defined in inc/core/blocks directory.
 */



/**
 * Filters modify or enhance existing blocks using addFilter hooks.
 * PHP render functions are used and defined in inc/core/filters directory.
 */



})();

/******/ })()
;
//# sourceMappingURL=admin.js.map
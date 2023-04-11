(()=>{var e={644:()=>{const{registerBlockStyle:e}=wp.blocks;e("core/column",{name:"dropshadow",label:"Drop shadow"})},274:()=>{const{registerBlockStyle:e}=wp.blocks;e("core/columns",{name:"constrained",label:"Constrained"})},680:()=>{const{registerBlockStyle:e}=wp.blocks;[{name:"default",label:"Centre Overlay",description:"This uses a Flex approach to layout and will use variable width and spacing across a maximum of three columns. Menu groups will wrap to the next row and display in a center aligned position.",isDefault:!0},{name:"grid",label:"Justify Overlay",description:"This uses a Grid approach to layout and will use consistant width and spacing across a maximum of three columns. Menu groups will wrap to the next row and position themselves under the first column."}].forEach((t=>{e("core/navigation",t)}))},548:()=>{const{registerBlockStyle:e}=wp.blocks;[{name:"dropshadow",label:"Drop shadow",isDefault:!0},{name:"default",label:"No Shadow"}].forEach((t=>{e("core/query",t)}))},184:(e,t)=>{var l;!function(){"use strict";var o={}.hasOwnProperty;function n(){for(var e=[],t=0;t<arguments.length;t++){var l=arguments[t];if(l){var a=typeof l;if("string"===a||"number"===a)e.push(l);else if(Array.isArray(l)){if(l.length){var r=n.apply(null,l);r&&e.push(r)}}else if("object"===a){if(l.toString!==Object.prototype.toString&&!l.toString.toString().includes("[native code]")){e.push(l.toString());continue}for(var s in l)o.call(l,s)&&l[s]&&e.push(s)}}}return e.join(" ")}e.exports?(n.default=n,e.exports=n):void 0===(l=function(){return n}.apply(t,[]))||(e.exports=l)}()}},t={};function l(o){var n=t[o];if(void 0!==n)return n.exports;var a=t[o]={exports:{}};return e[o](a,a.exports,l),a.exports}l.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return l.d(t,{a:t}),t},l.d=(e,t)=>{for(var o in t)l.o(t,o)&&!l.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},l.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";function e(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:document;if(!e)throw new Error("A selector argument is required for the qs function");return t.querySelector(e)}function t(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:document;if(!e)throw new Error("A selector argument is required for the qsa function");return[...t.querySelectorAll(e)]}const o=()=>{setTimeout((function(){if(!e("body").classList.contains("wp-customizer"))return;const t=e("#sub-accordion-section-custom_css"),l=e("h3 .customize-action",t);null!==t&&null!==l&&null!==window.site.customBodyClass&&""!==window.site.customBodyClass&&(l.innerHTML=`Custom class: <strong>body.custom-${window.site.customBodyClass}</strong>`)}),0)};"complete"===document.readyState?o():document.addEventListener("DOMContentLoaded",o),document.addEventListener("DOMContentLoaded",(function(){t(".bcgov-block-theme-notice").forEach((function(e){e.addEventListener("click",(function(t){if(t.target.classList.contains("notice-dismiss")){const t=e.getAttribute("data-dismiss-url");if(t){const e=new window.XMLHttpRequest;e.open("GET",t),e.send()}}}))}))}));const n=()=>{setTimeout((function(){const t=e("body");if(t.classList.contains("wp-admin"))return;const l=t.classList.contains("home"),o=e(".bcgov-site-header"),n=e(".wp-block-site-logo"),a=e("footer"),r=e(".wp-block-post-content"),s=e("#wp-custom-css");if(null!==s&&(s.innerText=s.innerText.replace(/&gt;/g,">").replace(/&quot;/g,'"').replace(/&#39;/g,"'").replace(/&amp;/g,"&")),o){const e=o.offsetHeight;document.documentElement.style.setProperty("--scroll-padding",e+"px")}let c=null;null!==r&&(c=r.firstElementChild);const i=e(".breadcrumb-nav-section");null!==n&&e("img",n).setAttribute("alt","BCGov Logo");let d,u=null;null!==o&&(d=e(".is-style-takeover-menu",o),u=e("nav",o)),null!==window.site.siteName&&""!==window.site.siteName&&void 0!==window.site.siteName?t.classList.add(window.site.siteName):t.classList.add("bcgov"),null!==window.site.headerEffect&&null!==d?t.classList.add(`header-${window.site.headerEffect}`):t.classList.add("header-scroll"),null!==window.site.customBodyClass&&""!==window.site.customBodyClass&&t.classList.add(`custom-${window.site.customBodyClass}`),null!==c&&c.className.split(" ").some((e=>/.*banner.*/.test(e)))&&!c.className.split(" ").some((e=>/.*in-page.*/.test(e)))&&null!==i&&(c.parentNode.insertBefore(i,c.nextSibling),i.classList.add("alignwide"),l&&i.remove()),o&&d&&(null===u||"fixed"!==window.site.headerEffect&&"hides"!==window.site.headerEffect||(o.style.position="fixed"),null===d||null!==window.site.headerEffect&&"scroll"!==window.site.headerEffect||(o.style.position="absolute",o.style.overflow="hidden",o.style.transform="none"),null===u&&(t.style.paddingTop=0));const m=document.createElement("a");m.setAttribute("class","back-to-top"),m.setAttribute("alt","Back to top"),m.setAttribute("title","Back to top"),m.setAttribute("tabindex","0"),m.setAttribute("aria-label","Click to go back to the top of the page"),m.setAttribute("href","#top"),m.setAttribute("role","button"),null!==a&&a.append(m);const p=document.createElement("img");p.setAttribute("class","back-to-top-icon"),p.setAttribute("alt","back to top icon"),p.setAttribute("src",window.site.templateDir+"/assets/images/back-to-top.png"),m.append(p);let b=0;const g=()=>{const e=window.innerHeight,t=document.body.clientWidth;t>e?(document.body.classList.remove("portrait"),document.body.classList.add("landscape")):(document.body.classList.remove("landscape"),document.body.classList.add("portrait")),t<=782?(document.body.classList.remove("largeScreen"),document.body.classList.remove("tablet"),document.body.classList.add("mobile")):t<=1199?(document.body.classList.remove("mobile"),document.body.classList.add("tablet"),document.body.classList.remove("largeScreen")):(document.body.classList.remove("mobile"),document.body.classList.remove("tablet"),document.body.classList.add("largeScreen"))};window.addEventListener("resize",g),window.addEventListener("scroll",(()=>{const t=e(".back-to-top");if(t&&(window.pageYOffset+window.innerHeight>document.body.offsetHeight-1e3?(t.style.display="block",t.style.opacity="0.75"):(t.style.display="none",t.style.opacity="0")),null!==u&&"hides"===window.site.headerEffect){const e=window.pageYOffset||document.documentElement.scrollTop;e<b?e>100&&(o.style.opacity="1",o.style.transform="translateY(0%)"):e>100&&(o.style.opacity="0",o.style.transform="translateY(-100%)"),b=e<=0?0:e}})),window.addEventListener("load",(()=>{g()}))}),0)};"complete"===document.readyState?n():document.addEventListener("DOMContentLoaded",n);const a=()=>{("cleanbc"===window.site.siteName||window.site.allSiteStyles.length)&&setTimeout((function(){const l=t("a.icon");l.length&&l.forEach((e=>{null===e.getAttribute("href")&&(e.setAttribute("tabindex","-1"),e.style.pointerEvents="none")}));const o=t(".wp-block-button.is-style-icon");o.length&&o.forEach((t=>{const l=e("a",t);null===l||t.classList.contains("has-size-large")||(l.style.outlineOffset="1rem")})),window.addEventListener("scroll",(()=>{}))}),0)};function r(){return r=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var l=arguments[t];for(var o in l)Object.prototype.hasOwnProperty.call(l,o)&&(e[o]=l[o])}return e},r.apply(this,arguments)}"complete"===document.readyState?a():document.addEventListener("DOMContentLoaded",a);const s=window.wp.element;var c=l(184),i=l.n(c);const{__}=wp.i18n,d=[{label:__("None","bcgov-block-theme"),value:""},{label:__("Default","bcgov-block-theme"),value:"default"},{label:__("Home","bcgov-block-theme"),value:"home"},{label:__("Auto","bcgov-block-theme"),value:"auto"},{label:__("Book","bcgov-block-theme"),value:"book"},{label:__("Calendar","bcgov-block-theme"),value:"calendar"},{label:__("Case","bcgov-block-theme"),value:"case"},{label:__("Changes","bcgov-block-theme"),value:"changes"},{label:__("Federal","bcgov-block-theme"),value:"federal"},{label:__("Gear","bcgov-block-theme"),value:"gear"},{label:__("Group","bcgov-block-theme"),value:"group"},{label:__("Leaf","bcgov-block-theme"),value:"leaf"},{label:__("Map","bcgov-block-theme"),value:"map"},{label:__("Tag","bcgov-block-theme"),value:"tag"}],u=window.lodash,{registerBlockStyle:m,unregisterBlockStyle:p}=wp.blocks,{__:b}=wp.i18n,{addFilter:g}=wp.hooks,{createHigherOrderComponent:w}=wp.compose,{Fragment:h}=wp.element,{InspectorControls:f}=wp.blockEditor,{PanelBody:v,SelectControl:k,TextControl:E}=wp.components;[{name:"fill",label:"BCGov",default:"is-bcgov-fill"},{name:"outline",label:"Outline"},{name:"underline",label:"Underline"}].forEach((e=>m("core/button",e))),("cleanbc"===window.site.siteName||window.site.allSiteStyles.length)&&m("core/button",{name:"icon",label:"Icon"}),wp.domReady((()=>{p("core/button","default")})),g("blocks.registerBlockType","bcgov-block-theme/button-block/add-attributes",(function(e,t){return"core/button"===t?(0,u.assign)({},e,{attributes:(0,u.merge)(e.attributes,{size:{type:"string",default:"regular"},svgIcon:{type:"string",default:""},iconsList:{type:"array",default:d},clickFlag:{type:"boolean",default:!1},label:{type:"string",default:""}})}):e})),g("editor.BlockEdit","bcgov-block-theme/button-block/add-inspector-controls",w((e=>t=>{const{size:l,svgIcon:o,iconsList:n,clickFlag:a,label:r}=t.attributes,{setAttributes:c}=t,{name:i}=t;return"core/button"!==i?(0,s.createElement)(e,t):(0,s.createElement)(h,null,(0,s.createElement)(e,t),(0,s.createElement)(f,null,(0,s.createElement)(v,{title:b("Icon options","bcgov-block-theme"),initialOpen:!1},a?(0,s.createElement)(k,{label:b("Icon","bcgov-block-theme"),value:o,options:n,onChange:e=>{c({svgIcon:e})}}):(0,s.createElement)(h,null,(0,s.createElement)("h3",null,"Instructions (for CleanBC only):"),(0,s.createElement)("p",null,"To change the colour of an icon use the Color ▶ Background setting below."),(0,s.createElement)("p",null,"Note that the"," ",(0,s.createElement)("em",null,"icon color change will only work with the Theme palette")," ","of colours."),(0,s.createElement)("p",null,(0,s.createElement)("strong",null,"Enable the Icon style")," ","button to use list of icon options."),(0,s.createElement)("button",{onClick:()=>{c({clickFlag:!0})}},"Show icons"))),(0,s.createElement)(v,{title:"Size options",initialOpen:!0},(0,s.createElement)(k,{label:"Size",value:l,options:[{label:b("Default","bcgov-block-theme"),value:"regular"},{label:b("Large","bcgov-block-theme"),value:"large"}],onChange:e=>{c({size:e})}})),(0,s.createElement)(v,{title:"Accessibility",initialOpen:!1},(0,s.createElement)(E,{label:"ARIA Label",value:r,onChange:e=>c({label:e})}))))}),"withInspectorControl")),g("editor.BlockListBlock","bcgov-block-theme/button-block/add-classes-to-editor",w((e=>t=>{const{attributes:{size:l,svgIcon:o},className:n,name:a}=t;return"core/button"!==a?(0,s.createElement)(e,t):(0,s.createElement)(e,r({},t,{className:i()(n,{[l]:l,[o]:o})}))}),"addClassesToEditor")),l(274),l(644);const{registerBlockStyle:y}=wp.blocks,{addFilter:C}=wp.hooks,{createHigherOrderComponent:x}=wp.compose,{Fragment:L}=wp.element,{InspectorControls:B}=wp.blockEditor,{PanelBody:I,PanelRow:A,CheckboxControl:S,TextControl:N,RangeControl:$}=wp.components;[{name:"dropshadow",label:"Drop shadow"},{name:"variable-ratio",label:"Variable ratio",description:"Image ratio changes between desktop/tablet and mobile. Image displays at 1:1 ratio on large screens and 2:1 ratio (wider than it is high) on mobile screens."},{name:"abs-img",label:"Positioned",description:"Sets the position of the image to absolute. Requires adding styles to position the image as needed."}].forEach((e=>y("core/image",e))),C("blocks.registerBlockType","bcgov-block-theme/image/add-attributes",(function(e,t){return"core/image"===t?(0,u.assign)({},e,{attributes:(0,u.merge)(e.attributes,{title:{type:"string",default:""},printMode:{type:"boolean",default:!1},printWidth:{type:"number",default:25}})}):e})),C("editor.BlockEdit","bcgov-block-theme/image/add-inspector-controls",x((e=>t=>{const{title:l,printMode:o,printWidth:n}=t.attributes,{setAttributes:a}=t,{name:r}=t;return"core/image"!==r?(0,s.createElement)(e,t):(0,s.createElement)(L,null,(0,s.createElement)(e,t),(0,s.createElement)(B,null,(0,s.createElement)(I,{title:"Other Media Settings",initialOpen:!1},(0,s.createElement)(A,null,(0,s.createElement)(N,{label:"Title (hover details)",value:l,onChange:e=>a({title:e})})),(0,s.createElement)(A,null,(0,s.createElement)(S,{label:"Show image when printing",checked:o,onChange:e=>a({printMode:e})})),(0,s.createElement)(A,null,(0,s.createElement)($,{label:"Max width on printed page (%)",value:n,onChange:e=>a({printWidth:e}),min:10,max:100,separatorType:"fullWidth"})))))}),"withInspectorControl"));const{registerBlockStyle:T}=wp.blocks,{addFilter:O}=wp.hooks,{createHigherOrderComponent:_}=wp.compose,{Fragment:M}=wp.element,{InspectorControls:P}=wp.blockEditor,{PanelBody:q,PanelRow:z,CheckboxControl:D,TextControl:F,RangeControl:R}=wp.components;[{name:"dropshadow",label:"Drop shadow"},{name:"square",label:"Square"},{name:"no-clip",label:"Full Image"}].forEach((e=>{T("core/media-text",e)})),O("blocks.registerBlockType","bcgov-block-theme/media-text/add-attributes",(function(e,t){return"core/media-text"===t?(0,u.assign)({},e,{attributes:(0,u.merge)(e.attributes,{title:{type:"string",default:""},printMode:{type:"boolean",default:!1},printWidth:{type:"number",default:25}})}):e})),O("editor.BlockEdit","bcgov-block-theme/media-text/add-inspector-controls",_((e=>t=>{const{title:l,printMode:o,printWidth:n}=t.attributes,{setAttributes:a}=t,{name:r}=t;return"core/media-text"!==r?(0,s.createElement)(e,t):(0,s.createElement)(M,null,(0,s.createElement)(e,t),(0,s.createElement)(P,null,(0,s.createElement)(q,{title:"Other Media Settings",initialOpen:!1},(0,s.createElement)(z,null,(0,s.createElement)(F,{label:"Title (hover details)",value:l,onChange:e=>a({title:e})})),(0,s.createElement)(z,null,(0,s.createElement)(D,{label:"Show image when printing",checked:o,onChange:e=>a({printMode:e})})),(0,s.createElement)(z,null,(0,s.createElement)(R,{label:"Max width on printed page (%)",value:n,onChange:e=>a({printWidth:e}),min:10,max:100,separatorType:"fullWidth"})))))}),"withInspectorControl")),l(680);const{addFilter:H}=wp.hooks,{createHigherOrderComponent:j}=wp.compose,{Fragment:W}=wp.element,{InspectorControls:G}=wp.blockEditor,{PanelBody:Y,PanelRow:J,CheckboxControl:U}=wp.components;H("blocks.registerBlockType","bcgov-block-theme/site-logo/add-attributes",(function(e,t){return"core/site-logo"===t?(0,u.assign)({},e,{attributes:(0,u.merge)(e.attributes,{inverted:{type:"boolean",default:!1}})}):e})),H("editor.BlockEdit","bcgov-block-theme/site-logo/add-inspector-controls",j((e=>t=>{const{inverted:l}=t.attributes,{setAttributes:o}=t,{name:n}=t;return"core/site-logo"!==n?(0,s.createElement)(e,t):(0,s.createElement)(W,null,(0,s.createElement)(e,t),(0,s.createElement)(G,null,(0,s.createElement)(Y,{title:"Other Media Settings",initialOpen:!1},(0,s.createElement)(J,null,(0,s.createElement)(U,{label:"Set dark background for print",checked:l,onChange:e=>o({inverted:e})})))))}),"withInspectorControl")),l(548);const V=window.wp.i18n,X=window.wp.blocks,K=window.wp.blockEditor,Q=window.wp.components,Z=window.wp.compose,ee={backgroundColor:{type:"string",default:"transparent"},firstBreakColumns:{type:"integer",default:3},cardId:{type:"string",default:""}},te=[{attributes:ee,save:e=>{const{attributes:{cardId:t,backgroundColor:l,firstBreakColumns:o,firstBreak:n,secondBreakColumns:a,secondBreak:r},className:c}=e;return(0,s.createElement)("div",null,(0,s.createElement)("style",{jsx:!0},`\n                            #${t} {\n                                background-color: ${l};\n                            }\n                            @media (min-width: ${r}px) {\n                                ul#${t} {\n                                    -webkit-flex-direction: row;\n                                    -moz-flex-direction: row;\n                                    -ms-flex-direction: row;\n                                    flex-direction: row;\n                                    -webkit-flex-wrap: wrap;\n                                    -moz-flex-wrap: wrap;\n                                    -ms-flex-wrap: wrap;\n                                    flex-wrap: wrap;\n                                    flex-wrap: wrap;\n                                }\n                                ul#${t} > li {\n                                    width: ${100/a-2}%;\n                                    margin: 1%;\n                                }\n                            }\n                            @media (min-width: ${n}px) {\n                                ul#${t} {\n                                    -webkit-flex-direction: row;\n                                    -moz-flex-direction: row;\n                                    -ms-flex-direction: row;\n                                    flex-direction: row;\n                                    -webkit-flex-wrap: wrap;\n                                    -moz-flex-wrap: wrap;\n                                    -ms-flex-wrap: wrap;\n                                    flex-wrap: wrap;\n                                }\n                                ul#${t} > li {\n                                    width: ${100/o-2}%;\n                                    margin: 1%;\n                                }\n                            }\n                        `),(0,s.createElement)("ul",{className:c,id:t},(0,s.createElement)(K.InnerBlocks.Content,null)))}},{attributes:ee,save:e=>{const{attributes:{cardId:t,backgroundColor:l,firstBreakColumns:o,firstBreak:n,secondBreakColumns:a,secondBreak:r},className:c}=e;return(0,s.createElement)("div",{role:"navigation"},(0,s.createElement)("style",{jsx:!0},`\n                            #${t} {\n                                background-color: ${l};\n                            }\n                            @media (min-width: ${r}px) {\n                                ul#${t} {\n                                    -webkit-flex-direction: row;\n                                    -moz-flex-direction: row;\n                                    -ms-flex-direction: row;\n                                    flex-direction: row;\n                                    -webkit-flex-wrap: wrap;\n                                    -moz-flex-wrap: wrap;\n                                    -ms-flex-wrap: wrap;\n                                    flex-wrap: wrap;\n                                    flex-wrap: wrap;\n                                }\n                                ul#${t} > li {\n                                    width: ${100/a-2}%;\n                                    margin: 1%;\n                                }\n                            }\n                            @media (min-width: ${n}px) {\n                                ul#${t} {\n                                    -webkit-flex-direction: row;\n                                    -moz-flex-direction: row;\n                                    -ms-flex-direction: row;\n                                    flex-direction: row;\n                                    -webkit-flex-wrap: wrap;\n                                    -moz-flex-wrap: wrap;\n                                    -ms-flex-wrap: wrap;\n                                    flex-wrap: wrap;\n                                }\n                                ul#${t} > li {\n                                    width: ${100/o-2}%;\n                                    margin: 1%;\n                                }\n                            }\n                        `),(0,s.createElement)("ul",{className:c,id:t},(0,s.createElement)(K.InnerBlocks.Content,null)))}},{attributes:ee,save:e=>{const{attributes:{cardId:t},className:l}=e;return(0,s.createElement)("ul",{className:l,id:t},(0,s.createElement)(K.InnerBlocks.Content,null))}}],le=[{name:"bcgov-background-light",color:"#f2f2f2"},{name:"bcgov-component",color:"#606060"},{name:"bcgov-text",color:"#313132"},{name:"bcgov-white",color:"#fff"},{name:"bcgov-primary",color:"#036"},{name:"bcgov-link",color:"#1a5a96"},{name:"bcgov-background-blue",color:"#38598a"},{name:"bcgov-yellow",color:"#fcba19"},{name:"bcgov-red",color:"#d8292f"},{name:"bcgov-green",color:"#2e8540"}],oe=(e,t)=>(void 0===e&&(e=t),e),ne=e=>{const t=new window.MouseEvent("click",{bubbles:!0,cancelable:!0,view:window});e.dispatchEvent(t)};function ae(){const e=this.getAttribute("data-target");if(void 0===e)return;const t=document.querySelectorAll(`${e} .collapse-header button`),l=document.querySelectorAll(`${e} .collapse`);this.classList.contains("collapse-expand-all")&&(t.forEach((e=>{e.classList.remove("collapsed"),e.setAttribute("aria-expanded",!0)})),l.forEach((e=>{e.classList.remove("collapse"),e.classList.add("collapsing"),e.classList.remove("hide"),e.classList.add("show"),setTimeout((function(){e.classList.add("collapse"),e.classList.remove("collapsing")}),300)}))),this.classList.contains("collapse-collapse-all")&&(t.forEach((e=>{e.classList.add("collapsed"),e.setAttribute("aria-expanded",!1)})),l.forEach((e=>{e.classList.remove("collapse"),e.classList.add("collapsing"),e.classList.remove("show"),e.classList.add("hide"),setTimeout((function(){e.classList.add("collapse"),e.classList.remove("collapsing")}),300)})))}function re(){if(void 0===this.getAttribute("data-target"))return;const e=this,t=e.closest(".wp-block-bcgov-block-theme-collapse-item").querySelector(".collapse-container");t.classList.remove("collapse"),t.classList.add("collapsing"),e.setAttribute("aria-expanded","true"===e.getAttribute("aria-expanded")?"false":"true"),"true"===e.getAttribute("aria-expanded")?(e.classList.remove("collapsed"),t.classList.remove("hide"),t.classList.add("show")):(e.classList.add("collapsed"),t.classList.add("hide"),t.classList.remove("show")),setTimeout((function(){t.classList.add("collapse"),t.classList.remove("collapsing")}),300)}function se(){const e=this.getAttribute("data-target");if(void 0===e)return;const t=document.querySelector(`.collapse-header button[data-target="${e}"]`);ne(t)}(0,X.registerBlockType)("bcgov/card-container",{title:(0,V.__)("Basic Card Container","basic-card-container"),icon:"images-alt",category:"media",attributes:ee,getEditWrapperProps:()=>({"data-align":"wide"}),supports:{align:!0},example:{},edit:e=>{const{attributes:{cardId:t,backgroundColor:l,firstBreakColumns:o},className:n,clientId:a}=e;e.setAttributes({cardId:`card-container-${a}`});const r=(0,Z.withState)({column:o})((t=>{let{column:l,setState:o}=t;return(0,s.createElement)(Q.RangeControl,{label:(0,V.__)("Columns"),value:l,initialPosition:"3",onChange:t=>{e.setAttributes({firstBreakColumns:t}),o({column:l})},min:1,max:6})}));return(0,s.createElement)("ul",{className:n,style:{backgroundColor:l},id:t},(0,s.createElement)(K.InspectorControls,null,(0,s.createElement)(Q.PanelBody,{title:(0,V.__)("Background Colour")},(0,s.createElement)(Q.ColorPalette,{colors:le,value:l,onChange:t=>{e.setAttributes({backgroundColor:oe(t,"transparent")})}})),(0,s.createElement)(Q.PanelBody,{title:(0,V.__)("Desktop Columns")},(0,s.createElement)(r,null))),(0,s.createElement)(K.InnerBlocks,{allowedBlocks:["bcgov/card","bcgov/fancy-button"]}))},deprecated:te,save:e=>{const{attributes:{cardId:t,backgroundColor:l,firstBreakColumns:o},className:n}=e;return(0,s.createElement)("ul",{className:`${n} lg-break-${o}`,id:t,style:{backgroundColor:l}},(0,s.createElement)(K.InnerBlocks.Content,null))}}),(0,X.registerBlockType)("bcgov/card",{title:(0,V.__)("Basic Card","basic-card"),icon:"format-image",category:"media",attributes:{title:{type:"array",source:"children",selector:".card-block-title"},content:{type:"array",source:"children",selector:".card-block-content"},alignment:{type:"string",default:"none"},color:{type:"string",default:"inherit"},backgroundColor:{type:"string",default:"transparent"}},example:{},edit:e=>{const{attributes:{alignment:t,color:l,backgroundColor:o},className:n}=e;return(0,s.createElement)("li",{className:`align-${t} ${n}`,style:{backgroundColor:o,color:l}},(0,s.createElement)(K.BlockControls,null,(0,s.createElement)(K.AlignmentToolbar,{value:t,onChange:t=>{e.setAttributes({alignment:oe(t,"none")})}})),(0,s.createElement)(K.InspectorControls,null,(0,s.createElement)(Q.PanelBody,{title:(0,V.__)("Colour")},(0,s.createElement)(Q.ColorPalette,{colors:le,value:l,onChange:t=>{e.setAttributes({color:oe(t,"transparent")})}})),(0,s.createElement)(Q.PanelBody,{title:(0,V.__)("Background Colour")},(0,s.createElement)(Q.ColorPalette,{colors:le,value:o,onChange:t=>{e.setAttributes({backgroundColor:oe(t,"transparent")})}}))),(0,s.createElement)(K.InnerBlocks,{allowedBlocks:["core/heading","core/paragraph","core/image","core/html","core/button"]}))},save:e=>{const{attributes:{alignment:t,backgroundColor:l,color:o}}=e;return(0,s.createElement)("li",{className:`align-${t}`,style:{backgroundColor:l,color:o}},(0,s.createElement)(K.InnerBlocks.Content,null))}});const ce=()=>{setTimeout((function(){const e=document.querySelectorAll(".collapse-container-nav button"),t=document.querySelectorAll(".collapse-header button"),l=document.querySelectorAll(".collapse-close a"),o=document.querySelector(".collapse-collapse-all");e.length&&(e.forEach((e=>{e.addEventListener("click",ae)})),t.forEach((e=>{e.addEventListener("click",re)})),l.forEach((e=>{e.addEventListener("click",se)})),ne(o),ne(t[0]))}),0)};"complete"===document.readyState?ce():document.addEventListener("DOMContentLoaded",ce),(0,X.registerBlockType)("bcgov-block-theme/collapse",{title:(0,V.__)("Collapse Container","bcgov-blocks"),icon:"admin-page",category:"layout",attributes:{collapseId:{type:"string",default:""}},supports:{align:["wide"]},example:{},edit:e=>{const{attributes:{collapseId:t},className:l,clientId:o}=e;return e.setAttributes({collapseId:`collapse-container-${o}`}),(0,s.createElement)("div",{className:l,id:t},(0,s.createElement)(K.InnerBlocks,{allowedBlocks:["bcgov-block-theme/collapse-item"]}))},save:e=>{const{attributes:{collapseId:t}}=e;return(0,s.createElement)("div",{id:t},(0,s.createElement)("div",{className:"collapse-container-nav"},(0,s.createElement)("span",null,(0,s.createElement)("button",{"data-target":`#${t}`,className:"collapse-expand-all"},(0,V.__)("Expand all"))),(0,s.createElement)("span",null,(0,s.createElement)("button",{"data-target":`#${t}`,className:"collapse-collapse-all"},(0,V.__)("Collapse all")))),(0,s.createElement)(K.InnerBlocks.Content,null))}}),(0,X.registerBlockType)("bcgov-block-theme/collapse-item",{title:(0,V.__)("Collapse Item","bcgov-blocks"),icon:"welcome-add-page",category:"layout",attributes:{title:{type:"string",selector:".bcgov-collapse-title"},itemId:{type:"string",default:""},headingId:{type:"string",default:""}},example:{},edit:e=>{const{attributes:{title:t,itemId:l,headingId:o},className:n,clientId:a}=e;return e.setAttributes({itemId:`collapse-item-${a}`}),e.setAttributes({headingId:`heading-${a}`}),(0,s.createElement)("div",{className:n},(0,s.createElement)("div",{className:"collapse-header",id:o},(0,s.createElement)("h3",null,(0,s.createElement)("button",{"data-toggle":"collapse","data-target":`#${l}`,"aria-expanded":"false","aria-controls":l,className:"collapsed"},(0,s.createElement)(K.RichText,{tagName:"span",onChange:t=>{e.setAttributes({title:t})},className:"collapse-title",value:t,placeholder:(0,V.__)("…Title")})))),(0,s.createElement)("div",{className:"collapse collapse-container",id:l},(0,s.createElement)("div",{className:"collapse-body"},(0,s.createElement)(K.InnerBlocks,null))))},save:e=>{const{attributes:{title:t,itemId:l,headingId:o}}=e;return(0,s.createElement)("div",null,(0,s.createElement)("div",{className:"collapse-header",id:o},(0,s.createElement)("h3",null,(0,s.createElement)("button",{"data-toggle":"collapse","data-target":`#${l}`,"aria-expanded":"false","aria-controls":l,className:"collapsed"},(0,s.createElement)(K.RichText.Content,{tagName:"span",className:"collapse-title",value:t})))),(0,s.createElement)("div",{className:"collapse collapse-container",id:l},(0,s.createElement)("div",{className:"collapse-body"},(0,s.createElement)(K.InnerBlocks.Content,null),(0,s.createElement)("div",{className:"collapse-close"},(0,s.createElement)("a",{"data-toggle":"collapse","data-target":`#${l}`,href:`#${l}`,role:"button","aria-expanded":"true","aria-controls":l},(0,V.__)("Collapse"))))))}})})()})();

(()=>{var t={644:()=>{const{registerBlockStyle:t}=wp.blocks;t("core/column",{name:"dropshadow",label:"Drop shadow"})},455:()=>{const{registerBlockStyle:t}=wp.blocks;t("core/heading",[{name:"default",label:"Default",isDefault:!0},{name:"custom",label:"Custom Sizes"}])},989:()=>{const{registerBlockStyle:t}=wp.blocks;t("core/media-text",{name:"dropshadow",label:"Drop shadow"})},205:()=>{const{registerBlockStyle:t}=wp.blocks;t("core/paragraph",[{name:"default",label:"Default",isDefault:!0},{name:"custom",label:"Custom Sizes"}])},548:()=>{const{registerBlockStyle:t}=wp.blocks;t("core/query",[{name:"dropshadow",label:"Drop shadow",isDefault:!0},{name:"default",label:"No Shadow"}])},479:()=>{const t=()=>{setTimeout((function(){const t=document.querySelector("body"),e=document.querySelector(".bcgov-site-header");null!==window.site.siteName?t.classList.add(window.site.siteName):t.classList.add("bcgov"),null!==window.site.headerEffect?t.classList.add(`header-${window.site.headerEffect}`):t.classList.add("header-scroll"),"fixed"!==window.site.headerEffect&&"hides"!==window.site.headerEffect||(e.style.position="fixed"),null!==window.site.headerEffect&&"scroll"!==window.site.headerEffect||(e.style.position="absolute",e.style.overflow="hidden",e.style.transform="none");const l=document.createElement("a");l.setAttribute("class","back-to-top"),l.setAttribute("alt","Back to top"),l.setAttribute("title","Back to top"),l.setAttribute("tabindex","0"),l.setAttribute("aria-label","Click to go back to the top of the page"),l.setAttribute("href","#top"),l.setAttribute("role","button"),document.querySelector("footer").append(l);const o=document.createElement("img");o.setAttribute("class","back-to-top-icon"),o.setAttribute("alt","back to top icon"),o.setAttribute("src",window.site.templateDir+"/assets/images/back-to-top.png"),l.append(o);let a=0;const n=()=>{const t=window.innerHeight;document.body.clientWidth>t?(document.body.classList.remove("portrait"),document.body.classList.add("landscape")):(document.body.classList.remove("landscape"),document.body.classList.add("portrait"))};window.addEventListener("resize",n),window.addEventListener("scroll",(()=>{const t=document.querySelector(".back-to-top");if(window.pageYOffset+window.innerHeight>document.body.offsetHeight-1e3?(t.style.display="block",t.style.opacity="0.75"):(t.style.display="none",t.style.opacity="0"),"hides"===window.site.headerEffect){const t=window.pageYOffset||document.documentElement.scrollTop;t<a?t>100&&(e.style.opacity="1",e.style.transform="translateY(0%)"):t>100&&(e.style.opacity="0",e.style.transform="translateY(-100%)"),a=t<=0?0:t}})),window.addEventListener("load",(()=>{n()}))}),0)};"complete"===document.readyState?t():document.addEventListener("DOMContentLoaded",t)},721:()=>{const t=()=>{function t(t){let e=!1,l="";if(t.classList.forEach((t=>{t.includes("-background-color")&&(e=!0,l=t)})),e||""===t.style.backgroundColor){const t=l.replace("has-","").replace("-background-color","");document.documentElement.style.setProperty("--landing-cover-banner-bg","var(--"+t+"-rgb)")}else document.documentElement.style.setProperty("--landing-cover-banner-bg",t.style.backgroundColor.replace(/\brgb\s*\(\s*(\d+)\s*,\s*(\d+)\s*,\s*(\d+)\s*\)/g,(function(t,e,l,o){return Number(e)+","+Number(l)+","+Number(o)})))}setTimeout((function(){if(document.querySelectorAll(".landing-cover-banner").length){const e=document.querySelector(".landing-cover-banner").querySelector(".wp-block-cover__background");t(e),new window.MutationObserver((function(){t(e)})).observe(e,{attributeFilter:["class","style"]})}}),0)};"complete"===document.readyState?t():document.addEventListener("DOMContentLoaded",t)},184:(t,e)=>{var l;!function(){"use strict";var o={}.hasOwnProperty;function a(){for(var t=[],e=0;e<arguments.length;e++){var l=arguments[e];if(l){var n=typeof l;if("string"===n||"number"===n)t.push(l);else if(Array.isArray(l)){if(l.length){var r=a.apply(null,l);r&&t.push(r)}}else if("object"===n)if(l.toString===Object.prototype.toString)for(var c in l)o.call(l,c)&&l[c]&&t.push(c);else t.push(l.toString())}}return t.join(" ")}t.exports?(a.default=a,t.exports=a):void 0===(l=function(){return a}.apply(e,[]))||(t.exports=l)}()},819:t=>{"use strict";t.exports=window.lodash}},e={};function l(o){var a=e[o];if(void 0!==a)return a.exports;var n=e[o]={exports:{}};return t[o](n,n.exports,l),n.exports}l.n=t=>{var e=t&&t.__esModule?()=>t.default:()=>t;return l.d(e,{a:e}),e},l.d=(t,e)=>{for(var o in e)l.o(e,o)&&!l.o(t,o)&&Object.defineProperty(t,o,{enumerable:!0,get:e[o]})},l.o=(t,e)=>Object.prototype.hasOwnProperty.call(t,e),(()=>{"use strict";function t(){return t=Object.assign?Object.assign.bind():function(t){for(var e=1;e<arguments.length;e++){var l=arguments[e];for(var o in l)Object.prototype.hasOwnProperty.call(l,o)&&(t[o]=l[o])}return t},t.apply(this,arguments)}l(479);const e=window.wp.element;var o=l(184),a=l.n(o);const{__}=wp.i18n,n=[{label:__("None","bcgov-block-theme"),value:""},{label:__("Default","bcgov-block-theme"),value:"default"},{label:__("Home","bcgov-block-theme"),value:"home"},{label:__("Auto","bcgov-block-theme"),value:"auto"},{label:__("Book","bcgov-block-theme"),value:"book"},{label:__("Case","bcgov-block-theme"),value:"case"},{label:__("Gear","bcgov-block-theme"),value:"gear"},{label:__("Group","bcgov-block-theme"),value:"group"},{label:__("Tag","bcgov-block-theme"),value:"tag"}],{assign:r,merge:c}=l(819),{registerBlockStyle:s,unregisterBlockStyle:i}=wp.blocks,{__:d}=wp.i18n,{addFilter:u}=wp.hooks,{createHigherOrderComponent:m}=wp.compose,{Fragment:p}=wp.element,{InspectorControls:b}=wp.blockEditor,{PanelBody:g,SelectControl:w}=wp.components;s("core/button",{name:"fill",label:"BCGov",default:"is-bcgov-fill"}),s("core/button",{name:"outline",label:"Outline"}),s("core/button",{name:"underline",label:"Underline"}),"cleanbc"===window.site.siteName&&s("core/button",{name:"blank",label:"Icon"}),wp.domReady((()=>{i("core/button","default")})),u("blocks.registerBlockType","bcgov-block-theme/button-block/add-attributes",(function(t,e){return"core/button"===e?r({},t,{attributes:c(t.attributes,{size:{type:"string",default:"regular"},svgIcon:{type:"string",default:""},iconsList:{type:"array",default:n},clickFlag:{type:"boolean",default:!1}})}):t})),u("editor.BlockEdit","bcgov-block-theme/button-block/add-inspector-controls",m((t=>l=>{const{attributes:{size:o,svgIcon:a,iconsList:n,clickFlag:r},setAttributes:c,name:s}=l;return"core/button"!==s?(0,e.createElement)(t,l):(0,e.createElement)(p,null,(0,e.createElement)(t,l),(0,e.createElement)(b,null,(0,e.createElement)(g,{title:d("Icon options","bcgov-block-theme"),initialOpen:!1},r&&(0,e.createElement)(w,{label:d("Icon","bcgov-block-theme"),value:a,options:n,onChange:t=>{c({svgIcon:t})}}),!r&&(0,e.createElement)(p,null,(0,e.createElement)("h3",null,"Instructions (for CleanBC only):"),(0,e.createElement)("p",null,"To change the colour of an icon use the Color ▶ Background setting below."),(0,e.createElement)("p",null,"Note that the"," ",(0,e.createElement)("em",null,"icon color change will only work with the Theme palette")," ","of colours."),(0,e.createElement)("p",null,(0,e.createElement)("strong",null,"Enable the Icon style")," ","button to use list of icon options."),(0,e.createElement)("button",{onClick:()=>{c({clickFlag:!0})}},"Show icons"))),(0,e.createElement)(g,{title:d("Size options","bcgov-block-theme"),initialOpen:!0},(0,e.createElement)(w,{label:d("Size","bcgov-block-theme"),value:o,options:[{label:d("Default","bcgov-block-theme"),value:"regular"},{label:d("Large","bcgov-block-theme"),value:"large"}],onChange:t=>{c({size:t})}}))))}),"withInspectorControl")),u("editor.BlockListBlock","bcgov-block-theme/button-block/add-editor-class",m((l=>o=>{const{attributes:{size:n,svgIcon:r},className:c,name:s}=o;return"core/button"!==s?(0,e.createElement)(l,o):(0,e.createElement)(l,t({},o,{className:a()(c,n?`has-size-${n}`:"",r?`icon-${r}`:"")}))}),"withClientIdClassName")),l(644),l(455),l(989),l(205),l(548);const f=window.wp.i18n,v=window.wp.blocks,h=window.wp.blockEditor,k=window.wp.components,y=window.wp.compose,E={backgroundColor:{type:"string",default:"transparent"},firstBreakColumns:{type:"integer",default:3},cardId:{type:"string",default:""}},C=[{attributes:E,save:t=>{const{attributes:{cardId:l,backgroundColor:o,firstBreakColumns:a,firstBreak:n,secondBreakColumns:r,secondBreak:c},className:s}=t;return(0,e.createElement)("div",null,(0,e.createElement)("style",{jsx:!0},`\n\t\t\t\t\t\t\t#${l} {\n\t\t\t\t\t\t\t\tbackground-color: ${o};\n\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t@media (min-width: ${c}px) {\n\t\t\t\t\t\t\t\tul#${l} {\n\t\t\t\t\t\t\t\t\t-webkit-flex-direction: row;\n\t\t\t\t\t\t\t\t\t-moz-flex-direction: row;\n\t\t\t\t\t\t\t\t\t-ms-flex-direction: row;\n\t\t\t\t\t\t\t\t\tflex-direction: row;\n\t\t\t\t\t\t\t\t\t-webkit-flex-wrap: wrap;\n\t\t\t\t\t\t\t\t\t-moz-flex-wrap: wrap;\n\t\t\t\t\t\t\t\t\t-ms-flex-wrap: wrap;\n\t\t\t\t\t\t\t\t\tflex-wrap: wrap;\n\t\t\t\t\t\t\t\t\tflex-wrap: wrap;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\tul#${l} > li {\n\t\t\t\t\t\t\t\t\twidth: ${100/r-2}%;\n\t\t\t\t\t\t\t\t\tmargin: 1%;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t@media (min-width: ${n}px) {\n\t\t\t\t\t\t\t\tul#${l} {\n\t\t\t\t\t\t\t\t\t-webkit-flex-direction: row;\n\t\t\t\t\t\t\t\t\t-moz-flex-direction: row;\n\t\t\t\t\t\t\t\t\t-ms-flex-direction: row;\n\t\t\t\t\t\t\t\t\tflex-direction: row;\n\t\t\t\t\t\t\t\t\t-webkit-flex-wrap: wrap;\n\t\t\t\t\t\t\t\t\t-moz-flex-wrap: wrap;\n\t\t\t\t\t\t\t\t\t-ms-flex-wrap: wrap;\n\t\t\t\t\t\t\t\t\tflex-wrap: wrap;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\tul#${l} > li {\n\t\t\t\t\t\t\t\t\twidth: ${100/a-2}%;\n\t\t\t\t\t\t\t\t\tmargin: 1%;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t}\n\t\t\t\t\t\t`),(0,e.createElement)("ul",{className:s,id:l},(0,e.createElement)(h.InnerBlocks.Content,null)))}},{attributes:E,save:t=>{const{attributes:{cardId:l,backgroundColor:o,firstBreakColumns:a,firstBreak:n,secondBreakColumns:r,secondBreak:c},className:s}=t;return(0,e.createElement)("div",{role:"navigation"},(0,e.createElement)("style",{jsx:!0},`\n\t\t\t\t\t\t\t#${l} {\n\t\t\t\t\t\t\t\tbackground-color: ${o};\n\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t@media (min-width: ${c}px) {\n\t\t\t\t\t\t\t\tul#${l} {\n\t\t\t\t\t\t\t\t\t-webkit-flex-direction: row;\n\t\t\t\t\t\t\t\t\t-moz-flex-direction: row;\n\t\t\t\t\t\t\t\t\t-ms-flex-direction: row;\n\t\t\t\t\t\t\t\t\tflex-direction: row;\n\t\t\t\t\t\t\t\t\t-webkit-flex-wrap: wrap;\n\t\t\t\t\t\t\t\t\t-moz-flex-wrap: wrap;\n\t\t\t\t\t\t\t\t\t-ms-flex-wrap: wrap;\n\t\t\t\t\t\t\t\t\tflex-wrap: wrap;\n\t\t\t\t\t\t\t\t\tflex-wrap: wrap;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\tul#${l} > li {\n\t\t\t\t\t\t\t\t\twidth: ${100/r-2}%;\n\t\t\t\t\t\t\t\t\tmargin: 1%;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t@media (min-width: ${n}px) {\n\t\t\t\t\t\t\t\tul#${l} {\n\t\t\t\t\t\t\t\t\t-webkit-flex-direction: row;\n\t\t\t\t\t\t\t\t\t-moz-flex-direction: row;\n\t\t\t\t\t\t\t\t\t-ms-flex-direction: row;\n\t\t\t\t\t\t\t\t\tflex-direction: row;\n\t\t\t\t\t\t\t\t\t-webkit-flex-wrap: wrap;\n\t\t\t\t\t\t\t\t\t-moz-flex-wrap: wrap;\n\t\t\t\t\t\t\t\t\t-ms-flex-wrap: wrap;\n\t\t\t\t\t\t\t\t\tflex-wrap: wrap;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\tul#${l} > li {\n\t\t\t\t\t\t\t\t\twidth: ${100/a-2}%;\n\t\t\t\t\t\t\t\t\tmargin: 1%;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t}\n\t\t\t\t\t\t`),(0,e.createElement)("ul",{className:s,id:l},(0,e.createElement)(h.InnerBlocks.Content,null)))}},{attributes:E,save:t=>{const{attributes:{cardId:l},className:o}=t;return(0,e.createElement)("ul",{className:o,id:l},(0,e.createElement)(h.InnerBlocks.Content,null))}}],x=[{name:"bcgov-background-light",color:"#f2f2f2"},{name:"bcgov-component",color:"#606060"},{name:"bcgov-text",color:"#313132"},{name:"bcgov-white",color:"#fff"},{name:"bcgov-primary",color:"#036"},{name:"bcgov-link",color:"#1a5a96"},{name:"bcgov-background-blue",color:"#38598a"},{name:"bcgov-yellow",color:"#fcba19"},{name:"bcgov-red",color:"#d8292f"},{name:"bcgov-green",color:"#2e8540"}],B=(t,e)=>(void 0===t&&(t=e),t),L=t=>{const e=new window.MouseEvent("click",{bubbles:!0,cancelable:!0,view:window});t.dispatchEvent(e)};function I(){const t=this.getAttribute("data-target");if(void 0===t)return;const e=document.querySelectorAll(`${t} .collapse-header button`),l=document.querySelectorAll(`${t} .collapse`);this.classList.contains("collapse-expand-all")&&(e.forEach((t=>{t.classList.remove("collapsed"),t.setAttribute("aria-expanded",!0)})),l.forEach((t=>{t.classList.remove("collapse"),t.classList.add("collapsing"),t.classList.remove("hide"),t.classList.add("show"),setTimeout((function(){t.classList.add("collapse"),t.classList.remove("collapsing")}),300)}))),this.classList.contains("collapse-collapse-all")&&(e.forEach((t=>{t.classList.add("collapsed"),t.setAttribute("aria-expanded",!1)})),l.forEach((t=>{t.classList.remove("collapse"),t.classList.add("collapsing"),t.classList.remove("show"),t.classList.add("hide"),setTimeout((function(){t.classList.add("collapse"),t.classList.remove("collapsing")}),300)})))}function N(){if(void 0===this.getAttribute("data-target"))return;const t=this,e=t.closest(".wp-block-bcgov-collapse-item").querySelector(".collapse-container");e.classList.remove("collapse"),e.classList.add("collapsing"),t.setAttribute("aria-expanded","true"===t.getAttribute("aria-expanded")?"false":"true"),"true"===t.getAttribute("aria-expanded")?(t.classList.remove("collapsed"),e.classList.remove("hide"),e.classList.add("show")):(t.classList.add("collapsed"),e.classList.add("hide"),e.classList.remove("show")),setTimeout((function(){e.classList.add("collapse"),e.classList.remove("collapsing")}),300)}function $(){const t=this.getAttribute("data-target");if(void 0===t)return;const e=document.querySelector(`.collapse-header button[data-target="${t}"]`);L(e)}(0,v.registerBlockType)("bcgov/card-container",{title:(0,f.__)("Basic Card Container","basic-card-container"),icon:"images-alt",category:"media",attributes:E,getEditWrapperProps:()=>({"data-align":"wide"}),supports:{align:!0},example:{},edit:t=>{const{attributes:{cardId:l,backgroundColor:o,firstBreakColumns:a},className:n,clientId:r}=t;t.setAttributes({cardId:`card-container-${r}`});const c=(0,y.withState)({column:a})((l=>{let{column:o,setState:a}=l;return(0,e.createElement)(k.RangeControl,{label:(0,f.__)("Columns"),value:o,initialPosition:"3",onChange:e=>{t.setAttributes({firstBreakColumns:e}),a({column:o})},min:1,max:6})}));return(0,e.createElement)("ul",{className:n,style:{backgroundColor:o},id:l},(0,e.createElement)(h.InspectorControls,null,(0,e.createElement)(k.PanelBody,{title:(0,f.__)("Background Colour")},(0,e.createElement)(k.ColorPalette,{colors:x,value:o,onChange:e=>{t.setAttributes({backgroundColor:B(e,"transparent")})}})),(0,e.createElement)(k.PanelBody,{title:(0,f.__)("Desktop Columns")},(0,e.createElement)(c,null))),(0,e.createElement)(h.InnerBlocks,{allowedBlocks:["bcgov/card","bcgov/fancy-button"]}))},deprecated:C,save:t=>{const{attributes:{cardId:l,backgroundColor:o,firstBreakColumns:a},className:n}=t;return(0,e.createElement)("ul",{className:`${n} lg-break-${a}`,id:l,style:{backgroundColor:o}},(0,e.createElement)(h.InnerBlocks.Content,null))}}),(0,v.registerBlockType)("bcgov/card",{title:(0,f.__)("Basic Card","basic-card"),icon:"format-image",category:"media",attributes:{title:{type:"array",source:"children",selector:".card-block-title"},content:{type:"array",source:"children",selector:".card-block-content"},alignment:{type:"string",default:"none"},color:{type:"string",default:"inherit"},backgroundColor:{type:"string",default:"transparent"}},example:{},edit:t=>{const{attributes:{alignment:l,color:o,backgroundColor:a},className:n}=t;return(0,e.createElement)("li",{className:`align-${l} ${n}`,style:{backgroundColor:a,color:o}},(0,e.createElement)(h.BlockControls,null,(0,e.createElement)(h.AlignmentToolbar,{value:l,onChange:e=>{t.setAttributes({alignment:B(e,"none")})}})),(0,e.createElement)(h.InspectorControls,null,(0,e.createElement)(k.PanelBody,{title:(0,f.__)("Colour")},(0,e.createElement)(k.ColorPalette,{colors:x,value:o,onChange:e=>{t.setAttributes({color:B(e,"transparent")})}})),(0,e.createElement)(k.PanelBody,{title:(0,f.__)("Background Colour")},(0,e.createElement)(k.ColorPalette,{colors:x,value:a,onChange:e=>{t.setAttributes({backgroundColor:B(e,"transparent")})}}))),(0,e.createElement)(h.InnerBlocks,{allowedBlocks:["core/heading","core/paragraph","core/image","core/html","core/button"]}))},save:t=>{const{attributes:{alignment:l,backgroundColor:o,color:a}}=t;return(0,e.createElement)("li",{className:`align-${l}`,style:{backgroundColor:o,color:a}},(0,e.createElement)(h.InnerBlocks.Content,null))}});const A=()=>{setTimeout((function(){const t=document.querySelectorAll(".collapse-container-nav button"),e=document.querySelectorAll(".collapse-header button"),l=document.querySelectorAll(".collapse-close a"),o=document.querySelector(".collapse-collapse-all");t.length&&(t.forEach((t=>{t.addEventListener("click",I)})),e.forEach((t=>{t.addEventListener("click",N)})),l.forEach((t=>{t.addEventListener("click",$)})),L(o),L(e[0]))}),0)};"complete"===document.readyState?A():document.addEventListener("DOMContentLoaded",A),(0,v.registerBlockType)("bcgov-block-theme/collapse",{title:(0,f.__)("Collapse Container","bcgov-blocks"),icon:"admin-page",category:"layout",attributes:{collapseId:{type:"string",default:""}},supports:{align:["wide"]},example:{},edit:t=>{const{attributes:{collapseId:l},className:o,clientId:a}=t;return t.setAttributes({collapseId:`collapse-container-${a}`}),(0,e.createElement)("div",{className:o,id:l},(0,e.createElement)(h.InnerBlocks,{allowedBlocks:["bcgov-block-theme/collapse-item"]}))},save:t=>{const{attributes:{collapseId:l}}=t;return(0,e.createElement)("div",{id:l},(0,e.createElement)("div",{className:"collapse-container-nav"},(0,e.createElement)("span",null,(0,e.createElement)("button",{"data-target":`#${l}`,className:"collapse-expand-all"},(0,f.__)("Expand all"))),(0,e.createElement)("span",null,(0,e.createElement)("button",{"data-target":`#${l}`,className:"collapse-collapse-all"},(0,f.__)("Collapse all")))),(0,e.createElement)(h.InnerBlocks.Content,null))}}),(0,v.registerBlockType)("bcgov-block-theme/collapse-item",{title:(0,f.__)("Collapse Item","bcgov-blocks"),icon:"welcome-add-page",category:"layout",attributes:{title:{type:"string",selector:".bcgov-collapse-title"},itemId:{type:"string",default:""},headingId:{type:"string",default:""}},example:{},edit:t=>{const{attributes:{title:l,itemId:o,headingId:a},className:n,clientId:r}=t;return t.setAttributes({itemId:`collapse-item-${r}`}),t.setAttributes({headingId:`heading-${r}`}),(0,e.createElement)("div",{className:n},(0,e.createElement)("div",{className:"collapse-header",id:a},(0,e.createElement)("h3",null,(0,e.createElement)("button",{"data-toggle":"collapse","data-target":`#${o}`,"aria-expanded":"false","aria-controls":o,className:"collapsed"},(0,e.createElement)(h.RichText,{tagName:"span",onChange:e=>{t.setAttributes({title:e})},className:"collapse-title",value:l,placeholder:(0,f.__)("…Title")})))),(0,e.createElement)("div",{className:"collapse collapse-container",id:o},(0,e.createElement)("div",{className:"collapse-body"},(0,e.createElement)(h.InnerBlocks,null))))},save:t=>{const{attributes:{title:l,itemId:o,headingId:a}}=t;return(0,e.createElement)("div",null,(0,e.createElement)("div",{className:"collapse-header",id:a},(0,e.createElement)("h3",null,(0,e.createElement)("button",{"data-toggle":"collapse","data-target":`#${o}`,"aria-expanded":"false","aria-controls":o,className:"collapsed"},(0,e.createElement)(h.RichText.Content,{tagName:"span",className:"collapse-title",value:l})))),(0,e.createElement)("div",{className:"collapse collapse-container",id:o},(0,e.createElement)("div",{className:"collapse-body"},(0,e.createElement)(h.InnerBlocks.Content,null),(0,e.createElement)("div",{className:"collapse-close"},(0,e.createElement)("a",{"data-toggle":"collapse","data-target":`#${o}`,href:`#${o}`,role:"button","aria-expanded":"true","aria-controls":o},(0,f.__)("Collapse"))))))}}),l(721)})()})();
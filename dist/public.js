(()=>{var e={598:()=>{const e=()=>{setTimeout((function(){const e=document.querySelector("body").firstChild,t=document.querySelector(".skip-nav-menu");null!==t&&(e.parentNode.insertBefore(t,e),t.querySelectorAll(".skip-nav").forEach((e=>{e.querySelector("a").setAttribute("tabindex",0)})));const o=document.querySelector("header nav > button"),n=document.querySelector("header nav button + .hidden-by-default");if(null!==o&&(o.setAttribute("id","main-menu"),null!==n)){const e=n.querySelectorAll("a"),t=n.querySelectorAll("button");"true"!==n.getAttribute("aria-hidden")&&(e.forEach((e=>{e.setAttribute("tabindex","-1")})),t.forEach((e=>{e.setAttribute("tabindex","-1")})));const o={attributes:!0},c=o=>{for(const c of o)"attributes"===c.type&&("false"===n.getAttribute("aria-hidden")&&(e.forEach((e=>{e.setAttribute("tabindex","0")})),t.forEach((e=>{"Close menu"===e.getAttribute("aria-label")&&e.setAttribute("tabindex","0")}))),"true"===n.getAttribute("aria-hidden")&&(e.forEach((e=>{e.setAttribute("tabindex","-1")})),t.forEach((e=>{e.setAttribute("tabindex","-1")}))))};new window.MutationObserver(c).observe(n,o)}}),0)};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)},479:()=>{const e=()=>{setTimeout((function(){const e=document.querySelector("body");if(e.classList.contains("wp-admin"))return;const t=e.classList.contains("home"),o=document.querySelector(".bcgov-site-header"),n=document.querySelector(".bcgov-web-logo"),c=document.querySelector("footer"),l=document.querySelector(".wp-block-post-content");let s=null;null!==l&&(s=l.firstElementChild);const r=document.querySelector(".breadcrumb-nav-section");null!==n&&n.querySelector("img").setAttribute("alt","BCGov Logo");let a,i=null;null!==o&&(a=o.querySelector(".is-style-takeover-menu"),i=o.querySelector("nav")),null!==window.site.siteName?e.classList.add(window.site.siteName):e.classList.add("bcgov"),null!==window.site.headerEffect&&null!==a?e.classList.add(`header-${window.site.headerEffect}`):e.classList.add("header-scroll"),null!==s&&s.className.split(" ").some((e=>/.*banner.*/.test(e)))&&!s.className.split(" ").some((e=>/.*in-page.*/.test(e)))&&null!==r&&(s.parentNode.insertBefore(r,s.nextSibling),r.classList.add("alignwide"),t&&r.remove()),null===i||"fixed"!==window.site.headerEffect&&"hides"!==window.site.headerEffect||(o.style.position="fixed"),null===a||null!==window.site.headerEffect&&"scroll"!==window.site.headerEffect||(o.style.position="absolute",o.style.overflow="hidden",o.style.transform="none"),null===i&&(e.style.paddingTop=0);const d=document.createElement("a");d.setAttribute("class","back-to-top"),d.setAttribute("alt","Back to top"),d.setAttribute("title","Back to top"),d.setAttribute("tabindex","0"),d.setAttribute("aria-label","Click to go back to the top of the page"),d.setAttribute("href","#top"),d.setAttribute("role","button"),null!==c&&c.append(d);const u=document.createElement("img");u.setAttribute("class","back-to-top-icon"),u.setAttribute("alt","back to top icon"),u.setAttribute("src",window.site.templateDir+"/assets/images/back-to-top.png"),d.append(u);let p=0;const m=()=>{const e=window.innerHeight,t=document.body.clientWidth;t>e?(document.body.classList.remove("portrait"),document.body.classList.add("landscape")):(document.body.classList.remove("landscape"),document.body.classList.add("portrait")),t<=782?(document.body.classList.remove("largeScreen"),document.body.classList.remove("tablet"),document.body.classList.add("mobile")):t<=1199?(document.body.classList.remove("mobile"),document.body.classList.add("tablet"),document.body.classList.remove("largeScreen")):(document.body.classList.remove("mobile"),document.body.classList.remove("tablet"),document.body.classList.add("largeScreen"))};window.addEventListener("resize",m),window.addEventListener("scroll",(()=>{const e=document.querySelector(".back-to-top");if(null!==e&&(window.pageYOffset+window.innerHeight>document.body.offsetHeight-1e3?(e.style.display="block",e.style.opacity="0.75"):(e.style.display="none",e.style.opacity="0")),null!==i&&"hides"===window.site.headerEffect){const e=window.pageYOffset||document.documentElement.scrollTop;e<p?e>100&&(o.style.opacity="1",o.style.transform="translateY(0%)"):e>100&&(o.style.opacity="0",o.style.transform="translateY(-100%)"),p=e<=0?0:e}})),window.addEventListener("load",(()=>{m()}))}),0)};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)},809:()=>{const e=()=>{setTimeout((function(){const e=document.querySelector(".bcgov-logo"),t=document.querySelector(".wp-block-site-title");if(null!==e){const o=e.hasAttribute("data-print"),n=document.createElement("div"),c=e.cloneNode(!0);if(n.className="print-header",o){n.classList.add("print-header-black-background");const e=document.createElement("img");e.className="black-background",e.setAttribute("src",window.site.templateDir+"/assets/images/svg/black.svg"),n.append(e)}if(document.body.prepend(n),n.prepend(c),null!==t){const e=t.cloneNode(!0);n.append(e)}}document.querySelectorAll("img").forEach((e=>{if(!0===e.hasAttribute("data-print")){const t=e.closest("figure");null!==t&&t.classList.add("print")}}))}),0)};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)},934:()=>{const e=()=>{document.querySelectorAll(".is-style-ribbon-menu").length&&(document.querySelector("body").classList.add("has-ribbon-menu"),document.querySelectorAll("li.wp-block-navigation-item").length&&document.querySelectorAll("li.wp-block-navigation-item").forEach((e=>{e.addEventListener("pointerover",(e=>{let t=e.target;var o;"LI"!==t.tagName&&(t=t.closest("li")),o=t,setTimeout((function(){const e=o,t=e.querySelector("ul");let n=null;const c=e.getBoundingClientRect();null!==t&&(n=t.getBoundingClientRect()),null!==n&&n.right>(window.innerWidth||document.documentElement.clientWidth)&&null!==t&&(t.classList.add("is-offscreen"),t.style.left="calc("+c.width+"px - 185%)",t.style.right="auto",t.style.top="20%",t.style.position="absolute")}),0)}),{capture:!1})})))};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)},8:()=>{const e=()=>{setTimeout((function(){if(document.querySelector(".actions-accordion-header")){const e=function(e){const t=[];let o=e.parentNode.firstChild;for(;o;)1===o.nodeType&&o!==e&&t.push(o),o=o.nextSibling;return t};document.querySelectorAll(".labelInjector").forEach((t=>{const o=e(t),n=t.getAttribute("data-label");o.forEach((e=>{e.classList.contains("wp-block-buttons")&&e.querySelector(".wp-block-button__link").setAttribute("aria-label",n)})),t.remove()}))}}),0)};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)},883:()=>{const e=()=>{("cleanbc"===window.site.siteName||window.site.allSiteStyles.length)&&setTimeout((function(){const e=document.querySelectorAll("a.icon");e.length&&e.forEach((e=>{null===e.getAttribute("href")&&(e.setAttribute("tabindex","-1"),e.style.pointerEvents="none")}));const t=document.querySelectorAll(".wp-block-button.is-style-icon");t.length&&t.forEach((e=>{const t=e.querySelector("a");null===t||e.classList.contains("has-size-large")||(t.style.outlineOffset="1rem")})),window.addEventListener("scroll",(()=>{}))}),0)};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)},829:()=>{const e=()=>{setTimeout((function(){const e=document.querySelectorAll(".home-cover-banner"),t=document.querySelectorAll(".landing-cover-banner");if(e.length||t.length){const e=document.getElementsByTagName("svg")[0],t=document.createElementNS("http://www.w3.org/2000/svg","defs"),o=document.createElementNS("http://www.w3.org/2000/svg","clipPath");o.setAttribute("id","svgPath");const n=document.createElementNS("http://www.w3.org/2000/svg","path");n.setAttribute("d","M0,77.2v-24.7c0,-8.6,6.8,-15.6,15.3,-16l901.5,-36.6c44.3,-1.7,81.5,33.1,83.2,77.5l-1000,-0.2z"),o.setAttribute("transform","scale(1.44)"),e.setAttribute("clipPathUnits","objectBoundingBox"),e.style.visibility="visible",e.appendChild(t),t.appendChild(o),o.appendChild(n)}}),0)};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)},275:()=>{const e=()=>{document.querySelector(".in-page-sectors-section")&&setTimeout((function(){const e=document.querySelectorAll(".in-page-sectors-section .wp-block-column"),t=document.querySelectorAll(".in-page-sectors-section figcaption");t.length&&t.forEach((e=>{e.style.color="var(--wp--preset--color--headline-color)",e.closest(".wp-block-column").setAttribute("data-after-content",e.innerText)})),e.forEach((e=>{e.querySelector("a")&&(e.style.cursor="pointer",e.addEventListener("click",(function(){this.querySelector("a").click()})))}))}),0)};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)},884:()=>{const e=()=>{if(document.querySelectorAll(".is-style-takeover-menu").length){document.querySelector("body").classList.add("has-takeover-menu");const e=document.querySelector(".wp-block-site-logo").cloneNode(!0);e.id="nav-logo",e.querySelector(".custom-logo-link").setAttribute("tabindex","-1"),document.querySelector(".wp-block-navigation__responsive-container-content").after(e);const t=document.querySelector(".wp-block-site-title a").cloneNode(!0);t.id="nav-title",t.setAttribute("aria-label","site homepage"),document.querySelector("#nav-logo .custom-logo-link").after(t)}const e=document.querySelector(".wp-block-navigation__responsive-container-open svg"),t=document.createElementNS("http://www.w3.org/2000/svg","svg");t.setAttribute("x","0"),t.setAttribute("y","0"),t.setAttribute("viewBox","0 0 24 24"),t.setAttribute("width",24),t.setAttribute("height",24),t.setAttribute("aria-hidden","true"),t.setAttribute("focusable","false"),t.innerHTML='<rect x="1.3" y="10.9" width="22" height="2"/><rect x="1.4" y="20.5" width="22" height="2"/><rect x="1.4" y="1.3" width="22" height="2"/>',e.parentNode.insertBefore(t,e.nextSibling),e.parentNode.removeChild(e);const o=document.querySelector(".wp-block-navigation__responsive-container-close svg"),n=document.createElementNS("http://www.w3.org/2000/svg","svg");t.setAttribute("x","0"),t.setAttribute("y","0"),n.setAttribute("viewBox","0 0 24 24"),n.setAttribute("width",24),n.setAttribute("height",24),n.setAttribute("aria-hidden","true"),n.setAttribute("focusable","false"),n.innerHTML='<path d="M13.5,11.7l9.2-9.5l-1.5-1.5L12,10L2.9,0.8L1.4,2.2l9.1,9.5l-9.8,10l1.5,1.5l9.8-9.9l9.8,9.9l1.5-1.5L13.5,11.7z"/>',o.parentNode.insertBefore(n,o.nextSibling),o.parentNode.removeChild(o)};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)}},t={};function o(n){var c=t[n];if(void 0!==c)return c.exports;var l=t[n]={exports:{}};return e[n](l,l.exports,o),l.exports}o.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),(()=>{var e;o.g.importScripts&&(e=o.g.location+"");var t=o.g.document;if(!e&&t&&(t.currentScript&&(e=t.currentScript.src),!e)){var n=t.getElementsByTagName("script");n.length&&(e=n[n.length-1].src)}if(!e)throw new Error("Automatic publicPath is not supported in this browser");e=e.replace(/#.*$/,"").replace(/\?.*$/,"").replace(/\/[^\/]+$/,"/"),o.p=e})(),(()=>{"use strict";o.p,o(479),o(598),o(809),o(884),o(934);const e=e=>{const t=new window.MouseEvent("click",{bubbles:!0,cancelable:!0,view:window});e.dispatchEvent(t)};function t(){const e=this.getAttribute("data-target");if(void 0===e)return;const t=document.querySelectorAll(`${e} .collapse-header button`),o=document.querySelectorAll(`${e} .collapse`);this.classList.contains("collapse-expand-all")&&(t.forEach((e=>{e.classList.remove("collapsed"),e.setAttribute("aria-expanded",!0)})),o.forEach((e=>{e.classList.remove("collapse"),e.classList.add("collapsing"),e.classList.remove("hide"),e.classList.add("show"),setTimeout((function(){e.classList.add("collapse"),e.classList.remove("collapsing")}),300)}))),this.classList.contains("collapse-collapse-all")&&(t.forEach((e=>{e.classList.add("collapsed"),e.setAttribute("aria-expanded",!1)})),o.forEach((e=>{e.classList.remove("collapse"),e.classList.add("collapsing"),e.classList.remove("show"),e.classList.add("hide"),setTimeout((function(){e.classList.add("collapse"),e.classList.remove("collapsing")}),300)})))}function n(){if(void 0===this.getAttribute("data-target"))return;const e=this,t=e.closest(".wp-block-bcgov-block-theme-collapse-item").querySelector(".collapse-container");t.classList.remove("collapse"),t.classList.add("collapsing"),e.setAttribute("aria-expanded","true"===e.getAttribute("aria-expanded")?"false":"true"),"true"===e.getAttribute("aria-expanded")?(e.classList.remove("collapsed"),t.classList.remove("hide"),t.classList.add("show")):(e.classList.add("collapsed"),t.classList.add("hide"),t.classList.remove("show")),setTimeout((function(){t.classList.add("collapse"),t.classList.remove("collapsing")}),300)}function c(){const t=this.getAttribute("data-target");if(void 0===t)return;const o=document.querySelector(`.collapse-header button[data-target="${t}"]`);e(o)}const l=()=>{setTimeout((function(){const o=document.querySelectorAll(".collapse-container-nav button"),l=document.querySelectorAll(".collapse-header button"),s=document.querySelectorAll(".collapse-close a"),r=document.querySelector(".collapse-collapse-all");o.length&&(o.forEach((e=>{e.addEventListener("click",t)})),l.forEach((e=>{e.addEventListener("click",n)})),s.forEach((e=>{e.addEventListener("click",c)})),e(r),e(l[0]))}),0)};"complete"===document.readyState?l():document.addEventListener("DOMContentLoaded",l),o(883);const s=()=>{function t(){document.querySelectorAll(".wp-block-bcgov-block-theme-collapse-item").forEach((e=>{e.classList.remove("hidden"),e.querySelectorAll(".active-group").forEach((e=>{const t=e.querySelector(".wp-block-group.project");if(null!==t){const e=t.querySelectorAll(".wp-block-columns"),o=t.closest(".wp-block-bcgov-block-theme-collapse-item").querySelector(".collapse-header .collapse-title"),n=o.querySelector(".count"),c=e.length;e.length&&(null!==n&&c&&(n.innerHTML=`${c}`),null===n&&c&&(o.innerHTML=`${o.innerText} <span class="count">${c} </span>`))}const o=e.querySelector(".no-results");if(null!==o){const e=o.closest(".wp-block-bcgov-block-theme-collapse-item"),t=o.closest(".wp-block-bcgov-block-theme-collapse-item").querySelector(".collapse-title"),n=o.closest(".wp-block-bcgov-block-theme-collapse-item").querySelector(".collapse-header .count");null!==e&&e.classList.add("hidden"),null!==n?n.innerHTML="0":t.innerHTML=`${t.innerText} <span class="count">0</span>`}}))}))}setTimeout((function(){const o=document.querySelectorAll(".actions-toggle-buttons .wp-block-button");if(o.length){o.forEach(((e,o)=>{const n=e.querySelector("a.wp-block-button__link"),c=e.querySelector("a.wp-block-button__link").innerText.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,""),l=document.querySelectorAll(".actions-accordion-header .wp-block-group.query-group");e.newClass=c,e.querySelector("a.wp-block-button__link").classList.add(e.newClass),0===o&&(n.classList.add("active"),l.forEach((e=>{e.classList.add("hidden"),e.classList.remove("active-group"),e.classList.contains(`${c}`)&&(e.classList.toggle("hidden"),e.classList.add("active-group"))}))),n.addEventListener("click",(function(e){e.preventDefault();const o=document.querySelectorAll(".actions-toggle-buttons .wp-block-button a.wp-block-button__link");if(o.length){o.forEach((e=>{e.classList.remove("active")})),n.classList.toggle("active");const c=e.target.textContent.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,"");document.querySelectorAll(".actions-toggle-query-loop .category-actions").forEach((e=>{e.classList.add("hidden"),e.classList.contains(`${c}`)&&e.classList.toggle("hidden")})),l.forEach((e=>{e.classList.add("hidden"),e.classList.remove("active-group"),e.classList.contains(`${c}`)&&(e.classList.toggle("hidden"),e.classList.add("active-group"))})),t()}}))}));const n=new Proxy(new URLSearchParams(window.location.search),{get:(e,t)=>e.get(t)}).target,c=document.querySelector(`.actions-toggle-buttons .wp-block-button__link[href="#${n}"]`);null!==c&&e(c),t(),document.querySelectorAll(".type-post.category-actions").forEach((e=>{const t=e.querySelector(".wp-block-post-title").innerText,o=e.querySelector(".attachment-post-thumbnail"),n=e.querySelector(".wp-block-post-excerpt__excerpt");null!==o&&null!==n&&o.setAttribute("title",n.innerText);const c=e.querySelector(".wp-block-button__link");e.querySelectorAll(".wp-block-button__link").length&&(c.innerText=`${c.innerText} ${t.toLowerCase()}`,c.setAttribute("src",`${window.site.domain}/actions/${t.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,"")}`),c.addEventListener("click",(e=>{window.location.href=e.target.getAttribute("src")})));const l=t.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,""),s=document.querySelector("a.wp-block-button__link.active").innerText.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,"");e.classList.add(l),e.classList.add("hidden"),e.classList.contains(`${s}`)&&e.classList.toggle("hidden")}))}}),0)};"complete"===document.readyState?s():document.addEventListener("DOMContentLoaded",s),o(829),o(275),o(8)})()})();
(()=>{var e={479:()=>{const e=()=>{setTimeout((function(){const e=document.querySelector("body"),t=document.querySelector(".bcgov-site-header");null!==window.site.siteName?e.classList.add(window.site.siteName):e.classList.add("bcgov"),null!==window.site.headerEffect?e.classList.add(`header-${window.site.headerEffect}`):e.classList.add("header-scroll"),"fixed"!==window.site.headerEffect&&"hides"!==window.site.headerEffect||(t.style.position="fixed"),null!==window.site.headerEffect&&"scroll"!==window.site.headerEffect||(t.style.position="absolute",t.style.overflow="hidden",t.style.transform="none");const o=document.createElement("a");o.setAttribute("class","back-to-top"),o.setAttribute("alt","Back to top"),o.setAttribute("title","Back to top"),o.setAttribute("tabindex","0"),o.setAttribute("aria-label","Click to go back to the top of the page"),o.setAttribute("href","#top"),o.setAttribute("role","button"),document.querySelector("footer").append(o);const n=document.createElement("img");n.setAttribute("class","back-to-top-icon"),n.setAttribute("alt","back to top icon"),n.setAttribute("src",window.site.templateDir+"/assets/images/back-to-top.png"),o.append(n);let s=0;const c=()=>{const e=window.innerHeight;document.body.clientWidth>e?(document.body.classList.remove("portrait"),document.body.classList.add("landscape")):(document.body.classList.remove("landscape"),document.body.classList.add("portrait"))};window.addEventListener("resize",c),window.addEventListener("scroll",(()=>{const e=document.querySelector(".back-to-top");if(window.pageYOffset+window.innerHeight>document.body.offsetHeight-1e3?(e.style.display="block",e.style.opacity="0.75"):(e.style.display="none",e.style.opacity="0"),"hides"===window.site.headerEffect){const e=window.pageYOffset||document.documentElement.scrollTop;e<s?e>100&&(t.style.opacity="1",t.style.transform="translateY(0%)"):e>100&&(t.style.opacity="0",t.style.transform="translateY(-100%)"),s=e<=0?0:e}})),window.addEventListener("load",(()=>{c()}))}),0)};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)},934:()=>{const e=()=>{if(document.querySelectorAll(".is-style-ribbon-menu").length){function e(e){const t=e.closest("ul"),o=t.querySelector("ul");let n=null;const s=t.getBoundingClientRect();null!==o&&(n=o.getBoundingClientRect()),null!==n&&n.right>(window.innerWidth||document.documentElement.clientWidth)&&null!==o&&(o.classList.add("is-offscreen"),o.style.left="calc("+s.width+"px - 195%)",o.style.right="auto",o.style.top="50%",o.style.position="absolute")}document.querySelector("body").classList.add("has-ribbon-menu"),document.querySelectorAll("li.wp-block-navigation-item").length&&document.querySelectorAll("li.wp-block-navigation-item").forEach((t=>{t.addEventListener("mousemove",(t=>{e(t.target)})),t.addEventListener("keypress",(t=>{e(t.target)}))}))}};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)},883:()=>{const e=()=>{"cleanbc"===window.site.siteName&&setTimeout((function(){const e=document.querySelectorAll("a.icon");e.length&&e.forEach((e=>{null===e.getAttribute("href")&&(e.setAttribute("tabindex","-1"),e.style.pointerEvents="none")}));const t=document.querySelectorAll(".wp-block-button.is-style-icon");t.length&&t.forEach((e=>{e.classList.contains("has-size-large")||(e.querySelector("a").style.outlineOffset="1rem")})),window.addEventListener("scroll",(()=>{}))}),0)};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)},530:()=>{const e=()=>{setTimeout((function(){document.querySelectorAll(".wp-block-bcgov-collapse-item").forEach((e=>{e.querySelectorAll(".wp-block-post-template").forEach((t=>{const o=e.querySelector(".collapse-title");o.innerHTML=`${o.innerText} <span class="count">${t.childNodes.length} </span>`}))}))}),0)};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)},304:()=>{const e=()=>{setTimeout((function(){const e=document.querySelectorAll(".actions-toggle-buttons .wp-block-button");e.length&&(e.forEach(((e,t)=>{const o=e.querySelector("a.wp-block-button__link"),n=e.querySelector("a.wp-block-button__link").innerText.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,"");e.newClass=n,e.querySelector("a.wp-block-button__link").classList.add(e.newClass),0===t&&o.classList.add("active"),o.addEventListener("click",(function(e){const t=document.querySelectorAll(".actions-toggle-buttons .wp-block-button a.wp-block-button__link");if(t.length){t.forEach((e=>{e.classList.remove("active")})),o.classList.toggle("active");const n=e.target.textContent.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,"");document.querySelectorAll(".actions-toggle-query-loop .category-actions").forEach((e=>{e.classList.add("hidden"),e.classList.contains(`${n}`)&&e.classList.toggle("hidden")}))}}))})),document.querySelectorAll(".type-post.category-actions").forEach(((e,t)=>{const o=e.querySelector("h2").innerText,n=e.querySelector(".wp-block-button__link");e.querySelectorAll(".wp-block-button__link").length&&(n.innerText=`${n.innerText} ${o.toLowerCase()}`,n.setAttribute("src",`${window.site.domain}/actions/${o.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,"")}`),n.addEventListener("click",(e=>{window.location.href=e.target.getAttribute("src")})));const s=o.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,"");e.classList.add(s),0!==t&&e.classList.add("hidden")})))}),0)};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)},721:()=>{const e=()=>{function e(e){let t=!1,o="";if(e.classList.forEach((e=>{e.includes("-background-color")&&(t=!0,o=e)})),t||""===e.style.backgroundColor){const e=o.replace("has-","").replace("-background-color","");document.documentElement.style.setProperty("--landing-cover-banner-bg","var(--"+e+"-rgb)")}else document.documentElement.style.setProperty("--landing-cover-banner-bg",e.style.backgroundColor.replace(/\brgb\s*\(\s*(\d+)\s*,\s*(\d+)\s*,\s*(\d+)\s*\)/g,(function(e,t,o,n){return Number(t)+","+Number(o)+","+Number(n)})))}setTimeout((function(){if(document.querySelectorAll(".landing-cover-banner").length){const t=document.querySelector(".landing-cover-banner").querySelector(".wp-block-cover__background");e(t),new window.MutationObserver((function(){e(t)})).observe(t,{attributeFilter:["class","style"]})}}),0)};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)},275:()=>{const e=()=>{document.querySelector(".in-page-sectors-section")&&setTimeout((function(){const e=document.querySelectorAll(".in-page-sectors-section .wp-block-column"),t=document.querySelectorAll(".in-page-sectors-section figcaption");t.length&&t.forEach((e=>{e.style.color="var(--wp--preset--color--headline-color)",e.closest(".wp-block-column").setAttribute("data-after-content",e.innerText)})),e.forEach((e=>{e.querySelector("a")&&(e.style.cursor="pointer",e.addEventListener("click",(function(){this.querySelector("a").click()})))}))}),0)};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)},884:()=>{const e=()=>{if(document.querySelectorAll(".is-style-takeover-menu").length){document.querySelector("body").classList.add("has-takeover-menu");const e=document.querySelector(".wp-block-site-logo").cloneNode(!0);e.id="nav-logo",e.querySelector(".custom-logo-link").setAttribute("tabindex","-1"),document.querySelector(".wp-block-navigation__responsive-container-content").after(e);const t=document.querySelector(".wp-block-site-title a").cloneNode(!0);t.id="nav-title",t.setAttribute("aria-label","site homepage"),document.querySelector("#nav-logo .custom-logo-link").after(t)}const e=document.querySelector(".wp-block-navigation__responsive-container-open svg"),t=document.createElementNS("http://www.w3.org/2000/svg","svg");t.setAttribute("x","0"),t.setAttribute("y","0"),t.setAttribute("viewBox","0 0 24 24"),t.setAttribute("width",24),t.setAttribute("height",24),t.setAttribute("aria-hidden","true"),t.setAttribute("focusable","false"),t.innerHTML='<rect x="1.3" y="10.9" width="22" height="2"/><rect x="1.4" y="20.5" width="22" height="2"/><rect x="1.4" y="1.3" width="22" height="2"/>',e.parentNode.insertBefore(t,e.nextSibling),e.parentNode.removeChild(e);const o=document.querySelector(".wp-block-navigation__responsive-container-close svg"),n=document.createElementNS("http://www.w3.org/2000/svg","svg");t.setAttribute("x","0"),t.setAttribute("y","0"),n.setAttribute("viewBox","0 0 24 24"),n.setAttribute("width",24),n.setAttribute("height",24),n.setAttribute("aria-hidden","true"),n.setAttribute("focusable","false"),n.innerHTML='<path d="M13.5,11.7l9.2-9.5l-1.5-1.5L12,10L2.9,0.8L1.4,2.2l9.1,9.5l-9.8,10l1.5,1.5l9.8-9.9l9.8,9.9l1.5-1.5L13.5,11.7z"/>',o.parentNode.insertBefore(n,o.nextSibling),o.parentNode.removeChild(o)};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)}},t={};function o(n){var s=t[n];if(void 0!==s)return s.exports;var c=t[n]={exports:{}};return e[n](c,c.exports,o),c.exports}o.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),(()=>{var e;o.g.importScripts&&(e=o.g.location+"");var t=o.g.document;if(!e&&t&&(t.currentScript&&(e=t.currentScript.src),!e)){var n=t.getElementsByTagName("script");n.length&&(e=n[n.length-1].src)}if(!e)throw new Error("Automatic publicPath is not supported in this browser");e=e.replace(/#.*$/,"").replace(/\?.*$/,"").replace(/\/[^\/]+$/,"/"),o.p=e})(),(()=>{"use strict";o.p,o(479),o(884),o(934);const e=e=>{const t=new window.MouseEvent("click",{bubbles:!0,cancelable:!0,view:window});e.dispatchEvent(t)};function t(){const e=this.getAttribute("data-target");if(void 0===e)return;const t=document.querySelectorAll(`${e} .collapse-header button`),o=document.querySelectorAll(`${e} .collapse`);this.classList.contains("collapse-expand-all")&&(t.forEach((e=>{e.classList.remove("collapsed"),e.setAttribute("aria-expanded",!0)})),o.forEach((e=>{e.classList.remove("collapse"),e.classList.add("collapsing"),e.classList.remove("hide"),e.classList.add("show"),setTimeout((function(){e.classList.add("collapse"),e.classList.remove("collapsing")}),300)}))),this.classList.contains("collapse-collapse-all")&&(t.forEach((e=>{e.classList.add("collapsed"),e.setAttribute("aria-expanded",!1)})),o.forEach((e=>{e.classList.remove("collapse"),e.classList.add("collapsing"),e.classList.remove("show"),e.classList.add("hide"),setTimeout((function(){e.classList.add("collapse"),e.classList.remove("collapsing")}),300)})))}function n(){if(void 0===this.getAttribute("data-target"))return;const e=this,t=e.closest(".wp-block-bcgov-collapse-item").querySelector(".collapse-container");t.classList.remove("collapse"),t.classList.add("collapsing"),e.setAttribute("aria-expanded","true"===e.getAttribute("aria-expanded")?"false":"true"),"true"===e.getAttribute("aria-expanded")?(e.classList.remove("collapsed"),t.classList.remove("hide"),t.classList.add("show")):(e.classList.add("collapsed"),t.classList.add("hide"),t.classList.remove("show")),setTimeout((function(){t.classList.add("collapse"),t.classList.remove("collapsing")}),300)}function s(){const t=this.getAttribute("data-target");if(void 0===t)return;const o=document.querySelector(`.collapse-header button[data-target="${t}"]`);e(o)}const c=()=>{setTimeout((function(){const o=document.querySelectorAll(".collapse-container-nav button"),c=document.querySelectorAll(".collapse-header button"),l=document.querySelectorAll(".collapse-close a"),r=document.querySelector(".collapse-collapse-all");o.length&&(o.forEach((e=>{e.addEventListener("click",t)})),c.forEach((e=>{e.addEventListener("click",n)})),l.forEach((e=>{e.addEventListener("click",s)})),e(r),e(c[0]))}),0)};"complete"===document.readyState?c():document.addEventListener("DOMContentLoaded",c),o(883),o(530),o(304),o(721),o(275)})()})();
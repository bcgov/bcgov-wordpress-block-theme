(()=>{var t={8:()=>{const t=()=>{setTimeout((function(){if(document.querySelector(".actions-accordion-header")){const t=function(t){const e=[];let o=t.parentNode.firstChild;for(;o;)1===o.nodeType&&o!==t&&e.push(o),o=o.nextSibling;return e};document.querySelectorAll(".labelInjector").forEach((e=>{const o=t(e),n=e.getAttribute("data-label");o.forEach((t=>{t.classList.contains("wp-block-buttons")&&t.querySelector(".wp-block-button__link").setAttribute("aria-label",n)})),e.remove()}))}}),0)};"complete"===document.readyState?t():document.addEventListener("DOMContentLoaded",t)},883:()=>{const t=()=>{("cleanbc"===window.site.siteName||window.site.allSiteStyles.length)&&setTimeout((function(){const t=document.querySelectorAll("a.icon");t.length&&t.forEach((t=>{null===t.getAttribute("href")&&(t.setAttribute("tabindex","-1"),t.style.pointerEvents="none")}));const e=document.querySelectorAll(".wp-block-button.is-style-icon");e.length&&e.forEach((t=>{const e=t.querySelector("a");null===e||t.classList.contains("has-size-large")||(e.style.outlineOffset="1rem")})),window.addEventListener("scroll",(()=>{}))}),0)};"complete"===document.readyState?t():document.addEventListener("DOMContentLoaded",t)},598:()=>{const t=()=>{setTimeout((function(){const t=document.querySelectorAll(".home-cover-banner"),e=document.querySelectorAll(".landing-cover-banner");if(t.length||e.length){const t=document.getElementsByTagName("svg")[0],e=document.createElementNS("http://www.w3.org/2000/svg","defs"),o=document.createElementNS("http://www.w3.org/2000/svg","clipPath");o.setAttribute("id","svgPath");const n=document.createElementNS("http://www.w3.org/2000/svg","path");n.setAttribute("d","M0,77.2v-24.7c0,-8.6,6.8,-15.6,15.3,-16l901.5,-36.6c44.3,-1.7,81.5,33.1,83.2,77.5l-1000,-0.2z"),o.setAttribute("transform","scale(1.44)"),t.setAttribute("clipPathUnits","objectBoundingBox"),t.style.visibility="visible",t.appendChild(e),e.appendChild(o),o.appendChild(n)}}),0)};"complete"===document.readyState?t():document.addEventListener("DOMContentLoaded",t)},275:()=>{const t=()=>{document.querySelector(".in-page-sectors-section")&&setTimeout((function(){const t=document.querySelectorAll(".in-page-sectors-section .wp-block-column"),e=document.querySelectorAll(".in-page-sectors-section figcaption");e.length&&e.forEach((t=>{t.style.color="var(--wp--preset--color--headline-color)",t.closest(".wp-block-column").setAttribute("data-after-content",t.innerText)})),t.forEach((t=>{t.querySelector("a")&&(t.style.cursor="pointer",t.addEventListener("click",(function(){this.querySelector("a").click()})))}))}),0)};"complete"===document.readyState?t():document.addEventListener("DOMContentLoaded",t)}},e={};function o(n){var s=e[n];if(void 0!==s)return s.exports;var l=e[n]={exports:{}};return t[n](l,l.exports,o),l.exports}o.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(t){if("object"==typeof window)return window}}(),(()=>{var t;o.g.importScripts&&(t=o.g.location+"");var e=o.g.document;if(!t&&e&&(e.currentScript&&(t=e.currentScript.src),!t)){var n=e.getElementsByTagName("script");n.length&&(t=n[n.length-1].src)}if(!t)throw new Error("Automatic publicPath is not supported in this browser");t=t.replace(/#.*$/,"").replace(/\?.*$/,"").replace(/\/[^\/]+$/,"/"),o.p=t})(),(()=>{"use strict";function t(t){let e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};const o=document.createElement(t);return Object.entries(e).forEach((t=>{let[e,n]=t;"class"!==e?"dataset"!==e?"text"!==e?o.setAttribute(e,n):o.textContent=n:Object.entries(n).forEach((t=>{let[e,n]=t;o.dataset[e]=n})):n.split(" ").forEach((t=>o.classList.add(t)))})),o}function e(t){let e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:document;return e.querySelector(t)}function n(t){let e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:document;return[...e.querySelectorAll(t)]}o.p;const s=()=>{setTimeout((function(){const t=e("body");if(t.classList.contains("wp-admin"))return;const o=t.classList.contains("home"),n=e(".bcgov-site-header"),s=e(".wp-block-site-logo"),l=e("footer"),a=e(".wp-block-post-content"),c=e("#wp-custom-css");null!==c&&(c.innerText=c.innerText.replace(/&gt;/g,">").replace(/&quot;/g,'"').replace(/&#39;/g,"'").replace(/&amp;/g,"&"));const i=n.offsetHeight;document.documentElement.style.setProperty("--scroll-padding",i+"px");let r=null;null!==a&&(r=a.firstElementChild);const d=e(".breadcrumb-nav-section");null!==s&&e("img",s).setAttribute("alt","BCGov Logo");let u,p=null;null!==n&&(u=e(".is-style-takeover-menu",n),p=e("nav",n)),null!==window.site.siteName&&""!==window.site.siteName&&void 0!==window.site.siteName?t.classList.add(window.site.siteName):t.classList.add("bcgov"),null!==window.site.headerEffect&&null!==u?t.classList.add(`header-${window.site.headerEffect}`):t.classList.add("header-scroll"),null!==window.site.customBodyClass&&""!==window.site.customBodyClass&&t.classList.add(`custom-${window.site.customBodyClass}`),null!==r&&r.className.split(" ").some((t=>/.*banner.*/.test(t)))&&!r.className.split(" ").some((t=>/.*in-page.*/.test(t)))&&null!==d&&(r.parentNode.insertBefore(d,r.nextSibling),d.classList.add("alignwide"),o&&d.remove()),null===p||"fixed"!==window.site.headerEffect&&"hides"!==window.site.headerEffect||(n.style.position="fixed"),null===u||null!==window.site.headerEffect&&"scroll"!==window.site.headerEffect||(n.style.position="absolute",n.style.overflow="hidden",n.style.transform="none"),null===p&&(t.style.paddingTop=0);const b=document.createElement("a");b.setAttribute("class","back-to-top"),b.setAttribute("alt","Back to top"),b.setAttribute("title","Back to top"),b.setAttribute("tabindex","0"),b.setAttribute("aria-label","Click to go back to the top of the page"),b.setAttribute("href","#top"),b.setAttribute("role","button"),null!==l&&l.append(b);const g=document.createElement("img");g.setAttribute("class","back-to-top-icon"),g.setAttribute("alt","back to top icon"),g.setAttribute("src",window.site.templateDir+"/assets/images/back-to-top.png"),b.append(g);let m=0;const h=()=>{const t=window.innerHeight,e=document.body.clientWidth;e>t?(document.body.classList.remove("portrait"),document.body.classList.add("landscape")):(document.body.classList.remove("landscape"),document.body.classList.add("portrait")),e<=782?(document.body.classList.remove("largeScreen"),document.body.classList.remove("tablet"),document.body.classList.add("mobile")):e<=1199?(document.body.classList.remove("mobile"),document.body.classList.add("tablet"),document.body.classList.remove("largeScreen")):(document.body.classList.remove("mobile"),document.body.classList.remove("tablet"),document.body.classList.add("largeScreen"))};window.addEventListener("resize",h),window.addEventListener("scroll",(()=>{const t=e(".back-to-top");if(null!==t&&(window.pageYOffset+window.innerHeight>document.body.offsetHeight-1e3?(t.style.display="block",t.style.opacity="0.75"):(t.style.display="none",t.style.opacity="0")),null!==p&&"hides"===window.site.headerEffect){const t=window.pageYOffset||document.documentElement.scrollTop;t<m?t>100&&(n.style.opacity="1",n.style.transform="translateY(0%)"):t>100&&(n.style.opacity="0",n.style.transform="translateY(-100%)"),m=t<=0?0:t}})),window.addEventListener("load",(()=>{h()}))}),0)};"complete"===document.readyState?s():document.addEventListener("DOMContentLoaded",s);const l=()=>{setTimeout((function(){const t=e("body").firstChild,o=e(".skip-nav-menu");null!==o&&(t.parentNode.insertBefore(o,t),n(".skip-nav",o).forEach((t=>{e("a",t).setAttribute("tabindex",0)})));const s=e("header nav > button"),l=e("header nav button + .hidden-by-default");if(null!==s&&(s.setAttribute("id","main-menu"),null!==l)){const t=n("a",l),e=n("button",l);"true"!==l.getAttribute("aria-hidden")&&(t.forEach((t=>{t.setAttribute("tabindex","-1")})),e.forEach((t=>{t.setAttribute("tabindex","-1")})));const o={attributes:!0},s=o=>{for(const n of o)"attributes"===n.type&&("false"===l.getAttribute("aria-hidden")&&(t.forEach((t=>{t.setAttribute("tabindex","0")})),e.forEach((t=>{"Close menu"===t.getAttribute("aria-label")&&t.setAttribute("tabindex","0")}))),"true"===l.getAttribute("aria-hidden")&&(t.forEach((t=>{t.setAttribute("tabindex","-1")})),e.forEach((t=>{t.setAttribute("tabindex","-1")}))))};new window.MutationObserver(s).observe(l,o)}}),0)};"complete"===document.readyState?l():document.addEventListener("DOMContentLoaded",l);const a=()=>{setTimeout((function(){const o=e(".wp-block-site-logo img"),s=e(".wp-block-site-title");if(null!==o){const e=o.hasAttribute("data-print"),n=t("div",{class:"print-header"}),l=o.cloneNode(!0);if(n.className="print-header",e){n.classList.add("print-header-black-background");const e=t("img",{class:"black-background",src:window.site.templateDir+"/assets/images/svg/black.svg"});n.append(e)}if(document.body.prepend(n),n.prepend(l),null!==s){const t=s.cloneNode(!0);n.append(t)}}n("img").forEach((t=>{const e=t.closest("figure");!0===t.hasAttribute("data-print")&&null!==e&&e.classList.add("print")}));const l=window.matchMedia("print");function a(t){const e=n("img");t.matches?e.forEach((t=>{const e=t.closest("figure");!0===t.hasAttribute("data-print-width")&&null!==e&&t.setAttribute("style","max-width: "+t.dataset.printWidth+"% !important")})):e.forEach((t=>{const e=t.closest("figure");!0===t.hasAttribute("data-print-width")&&null!==e&&t.removeAttribute("style")}))}!function(t,e,o,n){(arguments.length>4&&void 0!==arguments[4]?arguments[4]:document).addEventListener(t,(t=>{t.target.matches(e)&&o(t)}),n)}("change",l,a),a(l)}),0)};"complete"===document.readyState?a():document.addEventListener("DOMContentLoaded",a);const c=()=>{if(n(".is-style-takeover-menu").length){e("body").classList.add("has-takeover-menu");const t=e(".wp-block-site-logo").cloneNode(!0);t.id="nav-logo",t.querySelector(".custom-logo-link").setAttribute("tabindex","-1"),document.querySelector(".wp-block-navigation__responsive-container-content").after(t);const o=e(".wp-block-site-title a").cloneNode(!0);o.id="nav-title",o.setAttribute("aria-label","site homepage"),document.querySelector("#nav-logo .custom-logo-link").after(o)}const t=e(".wp-block-navigation__responsive-container-open svg"),o=document.createElementNS("http://www.w3.org/2000/svg","svg");o.setAttribute("x","0"),o.setAttribute("y","0"),o.setAttribute("viewBox","0 0 24 24"),o.setAttribute("width",24),o.setAttribute("height",24),o.setAttribute("aria-hidden","true"),o.setAttribute("focusable","false"),o.innerHTML='<rect x="1.3" y="10.9" width="22" height="2"/><rect x="1.4" y="20.5" width="22" height="2"/><rect x="1.4" y="1.3" width="22" height="2"/>',t.parentNode.insertBefore(o,t.nextSibling),t.parentNode.removeChild(t);const s=e(".wp-block-navigation__responsive-container-close svg"),l=document.createElementNS("http://www.w3.org/2000/svg","svg");o.setAttribute("x","0"),o.setAttribute("y","0"),l.setAttribute("viewBox","0 0 24 24"),l.setAttribute("width",24),l.setAttribute("height",24),l.setAttribute("aria-hidden","true"),l.setAttribute("focusable","false"),l.innerHTML='<path d="M13.5,11.7l9.2-9.5l-1.5-1.5L12,10L2.9,0.8L1.4,2.2l9.1,9.5l-9.8,10l1.5,1.5l9.8-9.9l9.8,9.9l1.5-1.5L13.5,11.7z"/>',s.parentNode.insertBefore(l,s.nextSibling),s.parentNode.removeChild(s)};"complete"===document.readyState?c():document.addEventListener("DOMContentLoaded",c);const i=()=>{if(n(".is-style-ribbon-menu").length){if(e("body").classList.add("has-ribbon-menu"),n("li.wp-block-navigation-item").length&&n("li.wp-block-navigation-item").forEach((t=>{t.addEventListener("pointerover",(t=>{let o=t.target;var n;"LI"!==o.tagName&&(o=o.closest("li")),n=o,setTimeout((function(){const t=n,o=e("ul",t);let s=null;const l=t.getBoundingClientRect();null!==o&&(s=o.getBoundingClientRect()),null!==s&&s.right>(window.innerWidth||document.documentElement.clientWidth)&&null!==o&&(o.classList.add("is-offscreen"),o.style.left="calc("+l.width+"px - 185%)",o.style.right="auto",o.style.top="20%",o.style.position="absolute")}),0)}),{capture:!1})})),e(".wp-block-polylang-language-switcher")&&!e(".wp-block-polylang-language-switcher select")){const o=e(".wp-block-polylang-language-switcher"),s=e(".wp-block-navigation__container");s&&s.classList.add("primary-menu-container");const l=n("li",s),a=n(".wp-block-navigation__submenu-container li",s);let c="",i="";l.forEach((t=>{t.classList.contains("wp-block-navigation-submenu")&&""===c&&(c=t.classList.toString().replace(/,/g," "))})),a.forEach((t=>{t.classList.contains("wp-block-navigation-item")&&""===i&&(i=t.classList.toString().replace(/,/g," "))}));const r=n(".lang-item",o);let d=s;r.forEach((o=>{const n=e("a",o),s=n.getAttribute("href"),l=n.textContent;let a=null;if(a=o.classList.contains("current-lang")?t("li",{class:`language-group ${c}`}):t("li",{class:`language-option ${i}`}),o.classList.contains("current-lang")){const e=t("button",{class:"wp-block-navigation__submenu-icon wp-block-navigation-submenu__toggle language_switcher","aria-label":l+" submenu","aria-expanded":"false"}),o=document.createElementNS("http://www.w3.org/2000/svg","svg");o.setAttribute("xmlns","http://www.w3.org/2000/svg"),o.setAttribute("width","12"),o.setAttribute("height","12"),o.setAttribute("viewBox","0 0 12 12"),o.setAttribute("fill","none"),o.setAttribute("aria-hidden","true"),o.setAttribute("focusable","false");const n=document.createElementNS("http://www.w3.org/2000/svg","path");n.setAttribute("d","M1.50002 4L6.00002 8L10.5 4"),n.setAttribute("stroke-width","1.5"),o.appendChild(n),e.appendChild(o),a.appendChild(e);const s=t("ul",{class:"wp-block-navigation__submenu-container"});d.appendChild(s),d=s}const r=t("a",{class:"wp-block-navigation-item__content",href:s,"aria-current":"page"}),u=t("span",{class:"wp-block-navigation-item__label",text:l});d.appendChild(a),r.appendChild(u),a.appendChild(r);const p=e(".wp-block-navigation-submenu__toggle.language_switcher");if(p&&a.classList.contains("wp-block-navigation-submenu")){a.insertBefore(p,r.nextSibling);const e=t("ul",{class:"wp-block-navigation__submenu-container language_switcher_options"});a.appendChild(e)}const b=e(".wp-block-navigation__submenu-container.language_switcher_options");!o.classList.contains("has-child")&&b&&(d=b)})),e(".language-group.open-on-hover-click")||e(".language-group button").remove(),e(".wp-block-polylang-language-switcher select")||e(".wp-block-polylang-language-switcher").remove()}const o=e(".primary-menu-container"),s=e(".language_switcher_options");n(".language-option",o).forEach((t=>{s.appendChild(t)}))}};"complete"===document.readyState?i():document.addEventListener("DOMContentLoaded",i);const r=t=>{const e=new window.MouseEvent("click",{bubbles:!0,cancelable:!0,view:window});t.dispatchEvent(e)};function d(){const t=this.getAttribute("data-target");if(void 0===t)return;const e=document.querySelectorAll(`${t} .collapse-header button`),o=document.querySelectorAll(`${t} .collapse`);this.classList.contains("collapse-expand-all")&&(e.forEach((t=>{t.classList.remove("collapsed"),t.setAttribute("aria-expanded",!0)})),o.forEach((t=>{t.classList.remove("collapse"),t.classList.add("collapsing"),t.classList.remove("hide"),t.classList.add("show"),setTimeout((function(){t.classList.add("collapse"),t.classList.remove("collapsing")}),300)}))),this.classList.contains("collapse-collapse-all")&&(e.forEach((t=>{t.classList.add("collapsed"),t.setAttribute("aria-expanded",!1)})),o.forEach((t=>{t.classList.remove("collapse"),t.classList.add("collapsing"),t.classList.remove("show"),t.classList.add("hide"),setTimeout((function(){t.classList.add("collapse"),t.classList.remove("collapsing")}),300)})))}function u(){if(void 0===this.getAttribute("data-target"))return;const t=this,e=t.closest(".wp-block-bcgov-block-theme-collapse-item").querySelector(".collapse-container");e.classList.remove("collapse"),e.classList.add("collapsing"),t.setAttribute("aria-expanded","true"===t.getAttribute("aria-expanded")?"false":"true"),"true"===t.getAttribute("aria-expanded")?(t.classList.remove("collapsed"),e.classList.remove("hide"),e.classList.add("show")):(t.classList.add("collapsed"),e.classList.add("hide"),e.classList.remove("show")),setTimeout((function(){e.classList.add("collapse"),e.classList.remove("collapsing")}),300)}function p(){const t=this.getAttribute("data-target");if(void 0===t)return;const e=document.querySelector(`.collapse-header button[data-target="${t}"]`);r(e)}const b=()=>{setTimeout((function(){const t=document.querySelectorAll(".collapse-container-nav button"),e=document.querySelectorAll(".collapse-header button"),o=document.querySelectorAll(".collapse-close a"),n=document.querySelector(".collapse-collapse-all");t.length&&(t.forEach((t=>{t.addEventListener("click",d)})),e.forEach((t=>{t.addEventListener("click",u)})),o.forEach((t=>{t.addEventListener("click",p)})),r(n),r(e[0]))}),0)};"complete"===document.readyState?b():document.addEventListener("DOMContentLoaded",b),o(883);const g=()=>{function t(){document.querySelectorAll(".wp-block-bcgov-block-theme-collapse-item").forEach((t=>{t.classList.remove("hidden"),t.querySelectorAll(".active-group").forEach((t=>{const e=t.querySelector(".wp-block-group.project");if(null!==e){const t=e.querySelectorAll(".wp-block-columns"),o=e.closest(".wp-block-bcgov-block-theme-collapse-item").querySelector(".collapse-header .collapse-title"),n=o.querySelector(".count"),s=t.length;t.length&&(null!==n&&s&&(n.innerHTML=`${s}`),null===n&&s&&(o.innerHTML=`${o.innerText} <span class="count">${s} </span>`))}const o=t.querySelector(".no-results");if(null!==o){const t=o.closest(".wp-block-bcgov-block-theme-collapse-item"),e=o.closest(".wp-block-bcgov-block-theme-collapse-item").querySelector(".collapse-title"),n=o.closest(".wp-block-bcgov-block-theme-collapse-item").querySelector(".collapse-header .count");null!==t&&t.classList.add("hidden"),null!==n?n.innerHTML="0":e.innerHTML=`${e.innerText} <span class="count">0</span>`}}))}))}setTimeout((function(){const e=document.querySelectorAll(".actions-toggle-buttons .wp-block-button");if(e.length){e.forEach(((e,o)=>{const n=e.querySelector("a.wp-block-button__link"),s=e.querySelector("a.wp-block-button__link").innerText.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,""),l=document.querySelectorAll(".actions-accordion-header .wp-block-group.query-group");e.newClass=s,e.querySelector("a.wp-block-button__link").classList.add(e.newClass),0===o&&(n.classList.add("active"),l.forEach((t=>{t.classList.add("hidden"),t.classList.remove("active-group"),t.classList.contains(`${s}`)&&(t.classList.toggle("hidden"),t.classList.add("active-group"))}))),n.addEventListener("click",(function(e){e.preventDefault();const o=document.querySelectorAll(".actions-toggle-buttons .wp-block-button a.wp-block-button__link");if(o.length){o.forEach((t=>{t.classList.remove("active")})),n.classList.toggle("active");const s=e.target.textContent.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,"");document.querySelectorAll(".actions-toggle-query-loop .category-actions").forEach((t=>{t.classList.add("hidden"),t.classList.contains(`${s}`)&&t.classList.toggle("hidden")})),l.forEach((t=>{t.classList.add("hidden"),t.classList.remove("active-group"),t.classList.contains(`${s}`)&&(t.classList.toggle("hidden"),t.classList.add("active-group"))})),t()}}))}));const o=new Proxy(new URLSearchParams(window.location.search),{get:(t,e)=>t.get(e)}).target,n=document.querySelector(`.actions-toggle-buttons .wp-block-button__link[href="#${o}"]`);null!==n&&r(n),t(),document.querySelectorAll(".type-post.category-actions").forEach((t=>{const e=t.querySelector(".wp-block-post-title").innerText,o=t.querySelector(".attachment-post-thumbnail"),n=t.querySelector(".wp-block-post-excerpt__excerpt");null!==o&&null!==n&&o.setAttribute("title",n.innerText);const s=t.querySelector(".wp-block-button__link");t.querySelectorAll(".wp-block-button__link").length&&(s.innerText=`${s.innerText} ${e.toLowerCase()}`,s.setAttribute("src",`${window.site.domain}/actions/${e.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,"")}`),s.addEventListener("click",(t=>{window.location.href=t.target.getAttribute("src")})));const l=e.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,""),a=document.querySelector("a.wp-block-button__link.active").innerText.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,"");t.classList.add(l),t.classList.add("hidden"),t.classList.contains(`${a}`)&&t.classList.toggle("hidden")}))}}),0)};"complete"===document.readyState?g():document.addEventListener("DOMContentLoaded",g),o(598),o(275),o(8)})()})();
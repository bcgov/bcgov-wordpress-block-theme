(()=>{"use strict";var t={};function e(t){let e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};const n=document.createElement(t);return Object.entries(e).forEach((t=>{let[e,o]=t;"class"!==e?"dataset"!==e?"text"!==e?"html"!==e?n.setAttribute(e,o):n.innerHTML=o:n.textContent=o:Object.entries(o).forEach((t=>{let[e,o]=t;n.dataset[e]=o})):o.split(" ").forEach((t=>{""!==t&&n.classList.add(t)}))})),n}function n(t){let e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:document;if(!t)throw new Error("A selector argument is required for the qs function");return e.querySelector(t)}function o(t){let e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:document;if(!t)throw new Error("A selector argument is required for the qsa function");return[...e.querySelectorAll(t)]}t.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(t){if("object"==typeof window)return window}}(),(()=>{var e;t.g.importScripts&&(e=t.g.location+"");var n=t.g.document;if(!e&&n&&(n.currentScript&&(e=n.currentScript.src),!e)){var o=n.getElementsByTagName("script");o.length&&(e=o[o.length-1].src)}if(!e)throw new Error("Automatic publicPath is not supported in this browser");e=e.replace(/#.*$/,"").replace(/\?.*$/,"").replace(/\/[^\/]+$/,"/"),t.p=e})(),t.p;const s=()=>{setTimeout((function(){const t=n("body");if(t.classList.contains("wp-admin"))return;const e=t.classList.contains("home"),o=n(".bcgov-site-header"),s=n(".wp-block-site-logo"),i=n("footer"),a=n(".wp-block-post-content"),c=n("#wp-custom-css");null!==c&&(c.innerText=c.innerText.replace(/&gt;/g,">").replace(/&quot;/g,'"').replace(/&#39;/g,"'").replace(/&amp;/g,"&"));const l=o.offsetHeight;document.documentElement.style.setProperty("--scroll-padding",l+"px");let r=null;null!==a&&(r=a.firstElementChild);const d=n(".breadcrumb-nav-section");null!==s&&n("img",s).setAttribute("alt","BCGov Logo");let u,p=null;null!==o&&(u=n(".is-style-takeover-menu",o),p=n("nav",o)),null!==window.site.siteName&&""!==window.site.siteName&&void 0!==window.site.siteName?t.classList.add(window.site.siteName):t.classList.add("bcgov"),null!==window.site.headerEffect&&null!==u?t.classList.add(`header-${window.site.headerEffect}`):t.classList.add("header-scroll"),null!==window.site.customBodyClass&&""!==window.site.customBodyClass&&t.classList.add(`custom-${window.site.customBodyClass}`),null!==r&&r.className.split(" ").some((t=>/.*banner.*/.test(t)))&&!r.className.split(" ").some((t=>/.*in-page.*/.test(t)))&&null!==d&&(r.parentNode.insertBefore(d,r.nextSibling),d.classList.add("alignwide"),e&&d.remove()),null===p||"fixed"!==window.site.headerEffect&&"hides"!==window.site.headerEffect||(o.style.position="fixed"),null===u||null!==window.site.headerEffect&&"scroll"!==window.site.headerEffect||(o.style.position="absolute",o.style.overflow="hidden",o.style.transform="none"),null===p&&(t.style.paddingTop=0);const b=document.createElement("a");b.setAttribute("class","back-to-top"),b.setAttribute("alt","Back to top"),b.setAttribute("title","Back to top"),b.setAttribute("tabindex","0"),b.setAttribute("aria-label","Click to go back to the top of the page"),b.setAttribute("href","#top"),b.setAttribute("role","button"),null!==i&&i.append(b);const g=document.createElement("img");g.setAttribute("class","back-to-top-icon"),g.setAttribute("alt","back to top icon"),g.setAttribute("src",window.site.templateDir+"/assets/images/back-to-top.png"),b.append(g);let m=0;const w=()=>{const t=window.innerHeight,e=document.body.clientWidth;e>t?(document.body.classList.remove("portrait"),document.body.classList.add("landscape")):(document.body.classList.remove("landscape"),document.body.classList.add("portrait")),e<=782?(document.body.classList.remove("largeScreen"),document.body.classList.remove("tablet"),document.body.classList.add("mobile")):e<=1199?(document.body.classList.remove("mobile"),document.body.classList.add("tablet"),document.body.classList.remove("largeScreen")):(document.body.classList.remove("mobile"),document.body.classList.remove("tablet"),document.body.classList.add("largeScreen"))};window.addEventListener("resize",w),window.addEventListener("scroll",(()=>{const t=n(".back-to-top");if(null!==t&&(window.pageYOffset+window.innerHeight>document.body.offsetHeight-1e3?(t.style.display="block",t.style.opacity="0.75"):(t.style.display="none",t.style.opacity="0")),null!==p&&"hides"===window.site.headerEffect){const t=window.pageYOffset||document.documentElement.scrollTop;t<m?t>100&&(o.style.opacity="1",o.style.transform="translateY(0%)"):t>100&&(o.style.opacity="0",o.style.transform="translateY(-100%)"),m=t<=0?0:t}})),window.addEventListener("load",(()=>{w()}))}),0)};"complete"===document.readyState?s():document.addEventListener("DOMContentLoaded",s);const i=()=>{setTimeout((function(){const t=n("body").firstChild,e=n(".skip-nav-menu");null!==e&&(t.parentNode.insertBefore(e,t),o(".skip-nav",e).forEach((t=>{n("a",t).setAttribute("tabindex",0)})));const s=n("header nav > button"),i=n("header nav button + .hidden-by-default");if(null!==s&&(s.setAttribute("id","main-menu"),null!==i)){const t=o("a",i),e=o("button",i);"true"!==i.getAttribute("aria-hidden")&&(t.forEach((t=>{t.setAttribute("tabindex","-1")})),e.forEach((t=>{t.setAttribute("tabindex","-1")})));const n={attributes:!0},s=n=>{for(const o of n)"attributes"===o.type&&("false"===i.getAttribute("aria-hidden")&&(t.forEach((t=>{t.setAttribute("tabindex","0")})),e.forEach((t=>{"Close menu"===t.getAttribute("aria-label")&&t.setAttribute("tabindex","0")}))),"true"===i.getAttribute("aria-hidden")&&(t.forEach((t=>{t.setAttribute("tabindex","-1")})),e.forEach((t=>{t.setAttribute("tabindex","-1")}))))};new window.MutationObserver(s).observe(i,n)}}),0)};"complete"===document.readyState?i():document.addEventListener("DOMContentLoaded",i);const a=()=>{setTimeout((function(){const t=n("body");let o="1"===window.site.noticeEnabled;const s="1"===window.site.noticeHomepageOnly,i="1"===window.site.noticeLabelBold,a="1"===window.site.noticeLabelBig;let c=window.site.noticeStatus,l=window.site.noticeContent;const r=window.site.noticeButtonLabel;let d="1"===window.site.noticeButtonEnabled;const u=window.site.noticeButtonAriaLabel,p=window.site.noticeButtonLink;let b=window.site.noticeButtonUtmCampaign;const g="1"===window.site.networkBannerEnabledNet,m=window.site.networkBannerType,w=window.site.networkBannerContent,h=window.site.networkBannerUtm;o&&s&&(o=!!t.classList.contains("home"));const f=window.location.href;if(o&&p===f&&(o=!1),g&&!o&&(o=!0,d=!1,l=w,c=m,b=h),o){const t=e("div",{class:`notice notification ${c}`,role:"alert","aria-live":"assertive"}),n=e("div",{class:"inner-container"}),o=e("p",{class:`${i?"bold":""} ${a?"big":""}`,html:`${l}`}),s=e("div",{class:"btn-container"}),g=e("button",{"aria-label":`${u||o+" – "+r}`,class:`${i?"bold":""} ${a?"big":""}`,text:`${r}`,onclick:`location.href="${p}${b?"?utm_campaign="+b:""}"`});document.body.prepend(t),d?(t.prepend(s),n.prepend(g)):n.classList.add("no-btn"),t.prepend(n),n.prepend(o)}}),0)};"complete"===document.readyState?a():document.addEventListener("DOMContentLoaded",a);const c=()=>{setTimeout((function(){const t=n(".wp-block-site-logo img"),s=n(".wp-block-site-title");if(null!==t){const n=t.hasAttribute("data-print"),o=e("div",{class:"print-header"}),i=t.cloneNode(!0);if(o.className="print-header",n){o.classList.add("print-header-black-background");const t=e("img",{class:"black-background",src:window.site.templateDir+"/assets/images/svg/black.svg"});o.append(t)}if(document.body.prepend(o),o.prepend(i),null!==s){const t=s.cloneNode(!0);o.append(t)}}o("img").forEach((t=>{const e=t.closest("figure");!0===t.hasAttribute("data-print")&&null!==e&&e.classList.add("print")}));const i=window.matchMedia("print");function a(t){o("img").forEach((e=>{const n=e.closest("figure");!0===e.hasAttribute("data-print-width")&&(t.matches&&(e.dataset.nonPrintStyle=e.getAttribute("style")),null!==n&&(t.matches?e.setAttribute("style","max-width: "+e.dataset.printWidth+"% !important"):e.dataset.nonPrintStyle&&(e.removeAttribute("style"),e.setAttribute("style",e.dataset.nonPrintStyle))))}))}i.addEventListener("change",a),a(i)}),0)};"complete"===document.readyState?c():document.addEventListener("DOMContentLoaded",c);const l=()=>{if(o(".is-style-takeover-menu").length){n("body").classList.add("has-takeover-menu");const t=n(".wp-block-site-logo").cloneNode(!0);t.id="nav-logo",t.querySelector(".custom-logo-link").setAttribute("tabindex","-1"),document.querySelector(".wp-block-navigation__responsive-container-content").after(t);const e=n(".wp-block-site-title a").cloneNode(!0);e.id="nav-title",e.setAttribute("aria-label","site homepage"),document.querySelector("#nav-logo .custom-logo-link").after(e)}const t=n(".wp-block-navigation__responsive-container-open svg");if(t){const e=document.createElementNS("http://www.w3.org/2000/svg","svg");e.setAttribute("x","0"),e.setAttribute("y","0"),e.setAttribute("viewBox","0 0 24 24"),e.setAttribute("width",24),e.setAttribute("height",24),e.setAttribute("aria-hidden","true"),e.setAttribute("focusable","false"),e.innerHTML='<rect x="1.3" y="10.9" width="22" height="2"/><rect x="1.4" y="20.5" width="22" height="2"/><rect x="1.4" y="1.3" width="22" height="2"/>',t.parentNode.insertBefore(e,t.nextSibling),t.parentNode.removeChild(t)}const e=n(".wp-block-navigation__responsive-container-close svg");if(e){const t=document.createElementNS("http://www.w3.org/2000/svg","svg");t.setAttribute("x","0"),t.setAttribute("y","0"),t.setAttribute("viewBox","0 0 24 24"),t.setAttribute("width",24),t.setAttribute("height",24),t.setAttribute("aria-hidden","true"),t.setAttribute("focusable","false"),t.innerHTML='<path d="M13.5,11.7l9.2-9.5l-1.5-1.5L12,10L2.9,0.8L1.4,2.2l9.1,9.5l-9.8,10l1.5,1.5l9.8-9.9l9.8,9.9l1.5-1.5L13.5,11.7z"/>',e.parentNode.insertBefore(t,e.nextSibling),e.parentNode.removeChild(e)}};"complete"===document.readyState?l():document.addEventListener("DOMContentLoaded",l);const r=()=>{if(o(".is-style-ribbon-menu").length){n("body").classList.add("has-ribbon-menu"),o("li.wp-block-navigation-item").length&&o("li.wp-block-navigation-item").forEach((t=>{t.addEventListener("pointerover",(t=>{let e=t.target;var o;"LI"!==e.tagName&&(e=e.closest("li")),o=e,setTimeout((function(){const t=o,e=n("ul",t);let s=null;const i=t.getBoundingClientRect();null!==e&&(s=e.getBoundingClientRect()),null!==s&&s.right>(window.innerWidth||document.documentElement.clientWidth)&&null!==e&&(e.classList.add("is-offscreen"),e.style.left="calc("+i.width+"px - 185%)",e.style.right="auto",e.style.top="20%",e.style.position="absolute")}),0)}),{capture:!1})}));let t="",s="";if(n(".wp-block-polylang-language-switcher")&&!n(".wp-block-polylang-language-switcher select")){const i=n(".wp-block-navigation__container");i&&(i.classList.add("primary-menu-container"),i.classList.add("ul-main-nav"));const a=o("li",i),c=o(".wp-block-navigation__submenu-container li",i);a.forEach((e=>{e.classList.contains("wp-block-navigation-submenu")&&""===t&&(t=e.classList.toString().replace(/,/g," ").replace("current-menu-item",""))})),c.forEach((t=>{t.classList.contains("wp-block-navigation-item")&&""===s&&(s=t.classList.toString().replace(/,/g," ").replace("current-menu-item",""))})),""===t&&(t=`${s} has-text-color has-background-color has-background has-secondary-brand-background-color wp-block-navigation-item has-child open-on-hover-click wp-block-navigation-submenu`);let l=i;const r=o(".lang-item",n(".wp-block-polylang-language-switcher"));r&&r.forEach((o=>{const i=n("a",o),a=i.getAttribute("href"),c=i.textContent;let r=null;if(r=o.classList.contains("current-lang")?e("li",{class:`language-group ${t}`}):e("li",{class:`language-option ${s}`}),o.classList.contains("current-lang")){const t=e("button",{class:"wp-block-navigation__submenu-icon wp-block-navigation-submenu__toggle language_switcher","aria-label":c+" submenu","aria-expanded":"false"}),n=document.createElementNS("http://www.w3.org/2000/svg","svg");n.setAttribute("xmlns","http://www.w3.org/2000/svg"),n.setAttribute("width","12"),n.setAttribute("height","12"),n.setAttribute("viewBox","0 0 12 12"),n.setAttribute("fill","none"),n.setAttribute("aria-hidden","true"),n.setAttribute("focusable","false");const o=document.createElementNS("http://www.w3.org/2000/svg","path");o.setAttribute("d","M1.50002 4L6.00002 8L10.5 4"),o.setAttribute("stroke-width","1.5"),n.appendChild(o),t.appendChild(n),r.appendChild(t);const s=e("ul",{class:"wp-block-navigation__submenu-container"});l.appendChild(s),l=s}const d=e("a",{class:"wp-block-navigation-item__content",href:a,"aria-current":"page"}),u=e("span",{class:"wp-block-navigation-item__label",text:c});l.appendChild(r),d.appendChild(u),r.appendChild(d);const p=n(".wp-block-navigation-submenu__toggle.language_switcher");if(p&&r.classList.contains("wp-block-navigation-submenu")){r.insertBefore(p,d.nextSibling);const t=e("ul",{class:"wp-block-navigation__submenu-container language_switcher_options ul3"});r.appendChild(t)}const b=n(".wp-block-navigation__submenu-container.language_switcher_options");!o.classList.contains("has-child")&&b&&(l=b)})),n(".language-group.open-on-hover-click")||n(".language-group button").remove(),n(".wp-block-polylang-language-switcher select")||n(".wp-block-polylang-language-switcher").remove()}const i=n(".primary-menu-container"),a=n(".language_switcher_options");if(i&&a){const e=o(".language-option",i);e&&e.forEach((e=>{t.split(" ").forEach((t=>{""!==t&&e.classList.add(t)})),a.appendChild(e)}))}}};"complete"===document.readyState?r():document.addEventListener("DOMContentLoaded",r);const d=t=>{const e=new window.MouseEvent("click",{bubbles:!0,cancelable:!0,view:window});t.dispatchEvent(e)};function u(){const t=this.getAttribute("data-target");if(void 0===t)return;const e=document.querySelectorAll(`${t} .collapse-header button`),n=document.querySelectorAll(`${t} .collapse`);this.classList.contains("collapse-expand-all")&&(e.forEach((t=>{t.classList.remove("collapsed"),t.setAttribute("aria-expanded",!0)})),n.forEach((t=>{t.classList.remove("collapse"),t.classList.add("collapsing"),t.classList.remove("hide"),t.classList.add("show"),setTimeout((function(){t.classList.add("collapse"),t.classList.remove("collapsing")}),300)}))),this.classList.contains("collapse-collapse-all")&&(e.forEach((t=>{t.classList.add("collapsed"),t.setAttribute("aria-expanded",!1)})),n.forEach((t=>{t.classList.remove("collapse"),t.classList.add("collapsing"),t.classList.remove("show"),t.classList.add("hide"),setTimeout((function(){t.classList.add("collapse"),t.classList.remove("collapsing")}),300)})))}function p(){if(void 0===this.getAttribute("data-target"))return;const t=this,e=t.closest(".wp-block-bcgov-block-theme-collapse-item").querySelector(".collapse-container");e.classList.remove("collapse"),e.classList.add("collapsing"),t.setAttribute("aria-expanded","true"===t.getAttribute("aria-expanded")?"false":"true"),"true"===t.getAttribute("aria-expanded")?(t.classList.remove("collapsed"),e.classList.remove("hide"),e.classList.add("show")):(t.classList.add("collapsed"),e.classList.add("hide"),e.classList.remove("show")),setTimeout((function(){e.classList.add("collapse"),e.classList.remove("collapsing")}),300)}function b(){const t=this.getAttribute("data-target");if(void 0===t)return;const e=document.querySelector(`.collapse-header button[data-target="${t}"]`);d(e)}const g=()=>{setTimeout((function(){const t=document.querySelectorAll(".collapse-container-nav button"),e=document.querySelectorAll(".collapse-header button"),n=document.querySelectorAll(".collapse-close a"),o=document.querySelectorAll(".collapse-collapse-all"),s=document.querySelectorAll(".wp-block-bcgov-block-theme-collapse > div:nth-child(2) button");t.length&&(t.forEach((t=>{t.addEventListener("click",u)})),e.forEach((t=>{t.addEventListener("click",p)})),n.forEach((t=>{t.addEventListener("click",b)})),o.forEach(d),s.forEach(d))}),0)};"complete"===document.readyState?g():document.addEventListener("DOMContentLoaded",g);const m=()=>{("cleanbc"===window.site.siteName||window.site.allSiteStyles.length)&&setTimeout((function(){const t=o("a.icon");t.length&&t.forEach((t=>{null===t.getAttribute("href")&&(t.setAttribute("tabindex","-1"),t.style.pointerEvents="none")}));const e=o(".wp-block-button.is-style-icon");e.length&&e.forEach((t=>{const e=n("a",t);null===e||t.classList.contains("has-size-large")||(e.style.outlineOffset="1rem")})),window.addEventListener("scroll",(()=>{}))}),0)};"complete"===document.readyState?m():document.addEventListener("DOMContentLoaded",m);const w=()=>{function t(){o(".wp-block-bcgov-block-theme-collapse-item").forEach((t=>{t.classList.remove("hidden"),o(".active-group",t).forEach((t=>{const e=n(".wp-block-group.project",t);if(null!==e){const t=o(".wp-block-columns",e),s=e.closest(".wp-block-bcgov-block-theme-collapse-item").qs(".collapse-header .collapse-title"),i=n(".count",s),a=t.length;t.length&&(null!==i&&a&&(i.innerHTML=`${a}`),null===i&&a&&(s.innerHTML=`${s.innerText} <span class="count">${a} </span>`))}const s=n(".no-results",t);if(null!==s){const t=s.closest(".wp-block-bcgov-block-theme-collapse-item"),e=s.closest(".wp-block-bcgov-block-theme-collapse-item").qs(".collapse-title"),n=s.closest(".wp-block-bcgov-block-theme-collapse-item").qs(".collapse-header .count");null!==t&&t.classList.add("hidden"),null!==n?n.innerHTML="0":e.innerHTML=`${e.innerText} <span class="count">0</span>`}}))}))}setTimeout((function(){const e=o(".actions-toggle-buttons .wp-block-button");if(e.length){e.forEach(((e,s)=>{const i=n("a.wp-block-button__link",e),a=n("a.wp-block-button__link",e).innerText.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,""),c=o(".actions-accordion-header .wp-block-group.query-group");e.newClass=a,n("a.wp-block-button__link",e).classList.add(e.newClass),0===s&&(i.classList.add("active"),c.forEach((t=>{t.classList.add("hidden"),t.classList.remove("active-group"),t.classList.contains(`${a}`)&&(t.classList.toggle("hidden"),t.classList.add("active-group"))}))),i.addEventListener("click",(function(e){e.preventDefault();const n=o(".actions-toggle-buttons .wp-block-button a.wp-block-button__link");if(n.length){n.forEach((t=>{t.classList.remove("active")})),i.classList.toggle("active");const s=e.target.textContent.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,"");o(".actions-toggle-query-loop .category-actions").forEach((t=>{t.classList.add("hidden"),t.classList.contains(`${s}`)&&t.classList.toggle("hidden")})),c.forEach((t=>{t.classList.add("hidden"),t.classList.remove("active-group"),t.classList.contains(`${s}`)&&(t.classList.toggle("hidden"),t.classList.add("active-group"))})),t()}}))}));const s=n(`.actions-toggle-buttons .wp-block-button__link[href="#${new Proxy(new URLSearchParams(window.location.search),{get:(t,e)=>t.get(e)}).target}"]`);null!==s&&d(s),t(),o(".type-post.category-actions").forEach((t=>{const e=n(".wp-block-post-title",t).innerText,s=n(".attachment-post-thumbnail",t),i=n(".wp-block-post-excerpt__excerpt",t);null!==s&&null!==i&&s.setAttribute("title",i.innerText);const a=n(".wp-block-button__link",t);o(".wp-block-button__link",t).length&&(a.innerText=`${a.innerText} ${e.toLowerCase()}`,a.setAttribute("src",`${window.site.domain}/actions/${e.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,"")}`),a.addEventListener("click",(t=>{window.location.href=t.target.getAttribute("src")})));const c=e.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,""),l=n("a.wp-block-button__link.active").innerText.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,"");t.classList.add(c),t.classList.add("hidden"),t.classList.contains(`${l}`)&&t.classList.toggle("hidden")}))}}),0)};"complete"===document.readyState?w():document.addEventListener("DOMContentLoaded",w);const h=()=>{setTimeout((function(){const t=o(".home-cover-banner"),e=o(".landing-cover-banner");if(t.length||e.length){const t=document.getElementsByTagName("svg")[0],e=document.createElementNS("http://www.w3.org/2000/svg","defs"),n=document.createElementNS("http://www.w3.org/2000/svg","clipPath");n.setAttribute("id","svgPath");const o=document.createElementNS("http://www.w3.org/2000/svg","path");o.setAttribute("d","M0,77.2v-24.7c0,-8.6,6.8,-15.6,15.3,-16l901.5,-36.6c44.3,-1.7,81.5,33.1,83.2,77.5l-1000,-0.2z"),n.setAttribute("transform","scale(1.44)"),t.setAttribute("clipPathUnits","objectBoundingBox"),t.style.visibility="visible",t.appendChild(e),e.appendChild(n),n.appendChild(o)}}),0)};"complete"===document.readyState?h():document.addEventListener("DOMContentLoaded",h);const f=()=>{n(".in-page-sectors-section")&&setTimeout((function(){const t=o(".in-page-sectors-section .wp-block-column"),e=o(".in-page-sectors-section figcaption");e.length&&e.forEach((t=>{t.style.color="var(--wp--preset--color--headline-color)",t.closest(".wp-block-column").setAttribute("data-after-content",t.innerText)})),t.forEach((t=>{n("a",t)&&(t.style.cursor="pointer",t.addEventListener("click",(function(){n("a",this).click()})))}))}),0)};"complete"===document.readyState?f():document.addEventListener("DOMContentLoaded",f);const v=()=>{setTimeout((function(){if(n(".actions-accordion-header")){const t=function(t){const e=[];let n=t.parentNode.firstChild;for(;n;)1===n.nodeType&&n!==t&&e.push(n),n=n.nextSibling;return e};o(".labelInjector").forEach((e=>{const o=t(e),s=e.getAttribute("data-label");o.forEach((t=>{t.classList.contains("wp-block-buttons")&&n(".wp-block-button__link",t).setAttribute("aria-label",s)})),e.remove()}))}}),0)};"complete"===document.readyState?v():document.addEventListener("DOMContentLoaded",v)})();
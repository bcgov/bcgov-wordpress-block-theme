(()=>{var e={934:()=>{const e=()=>{if(document.querySelectorAll(".is-style-ribbon-menu").length){function e(e){const t=e.closest("ul"),r=t.querySelector("ul");let n=null;const o=t.getBoundingClientRect();null!==r&&(n=r.getBoundingClientRect()),null!==n&&n.right>(window.innerWidth||document.documentElement.clientWidth)&&null!==r&&(r.classList.add("is-offscreen"),r.style.left="calc("+o.width+"px - 195%)",r.style.right="auto",r.style.top="50%",r.style.position="absolute")}document.querySelector("body").classList.add("has-ribbon-menu"),document.querySelectorAll("li.wp-block-navigation-item").forEach((t=>{t.addEventListener("mousemove",(t=>{e(t.target)})),t.addEventListener("keypress",(t=>{e(t.target)}))}))}};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)},884:()=>{const e=()=>{if(document.querySelectorAll(".is-style-takeover-menu").length){document.querySelector("body").classList.add("has-takeover-menu");const e=document.querySelector(".wp-block-site-logo").cloneNode(!0);e.id="nav-logo",document.querySelector(".wp-block-navigation__responsive-container-close").before(e)}const e=document.querySelector(".wp-block-navigation__responsive-container-open svg"),t=document.createElementNS("http://www.w3.org/2000/svg","svg");t.setAttribute("x","0"),t.setAttribute("y","0"),t.setAttribute("viewBox","0 0 24 24"),t.setAttribute("width",24),t.setAttribute("height",24),t.setAttribute("aria-hidden","true"),t.setAttribute("focusable","false"),t.innerHTML='<rect x="1.3" y="10.9" width="22" height="2"/><rect x="1.4" y="20.5" width="22" height="2"/><rect x="1.4" y="1.3" width="22" height="2"/>',e.parentNode.insertBefore(t,e.nextSibling),e.parentNode.removeChild(e);const r=document.querySelector(".wp-block-navigation__responsive-container-close svg"),n=document.createElementNS("http://www.w3.org/2000/svg","svg");t.setAttribute("x","0"),t.setAttribute("y","0"),n.setAttribute("viewBox","0 0 24 24"),n.setAttribute("width",24),n.setAttribute("height",24),n.setAttribute("aria-hidden","true"),n.setAttribute("focusable","false"),n.innerHTML='<path d="M13.5,11.7l9.2-9.5l-1.5-1.5L12,10L2.9,0.8L1.4,2.2l9.1,9.5l-9.8,10l1.5,1.5l9.8-9.9l9.8,9.9l1.5-1.5L13.5,11.7z"/>',r.parentNode.insertBefore(n,r.nextSibling),r.parentNode.removeChild(r)};"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)}},t={};function r(n){var o=t[n];if(void 0!==o)return o.exports;var i=t[n]={exports:{}};return e[n](i,i.exports,r),i.exports}r.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),(()=>{var e;r.g.importScripts&&(e=r.g.location+"");var t=r.g.document;if(!e&&t&&(t.currentScript&&(e=t.currentScript.src),!e)){var n=t.getElementsByTagName("script");n.length&&(e=n[n.length-1].src)}if(!e)throw new Error("Automatic publicPath is not supported in this browser");e=e.replace(/#.*$/,"").replace(/\?.*$/,"").replace(/\/[^\/]+$/,"/"),r.p=e})(),(()=>{"use strict";r.p,r(884),r(934)})()})();
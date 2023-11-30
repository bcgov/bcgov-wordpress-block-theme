import{_ as a,o,c as n,a as i,b as e,d as t}from"./app-JTVufZSZ.js";const s="/bcgov-wordpress-block-theme/ls-block-list.png",l="/bcgov-wordpress-block-theme/ls-block-options.png",r="/bcgov-wordpress-block-theme/ls-block-options-2.png",h="/bcgov-wordpress-block-theme/detach-template-part.png",c={},d=i('<h1 id="polylang-plugin" tabindex="-1"><a class="header-anchor" href="#polylang-plugin" aria-hidden="true">#</a> Polylang Plugin</h1><h2 id="adding-the-language-switcher-to-navigation" tabindex="-1"><a class="header-anchor" href="#adding-the-language-switcher-to-navigation" aria-hidden="true">#</a> Adding the Language Switcher to navigation</h2><p>Adding the Polylang Language Switcher is accomplished in the Template editor. It is best to associate the switcher with the site Navigation or main menu, but as of Polylang Pro version 3.2.8 the &quot;Language switcher&quot; block which enables the ability to move between languages. The language switcher block can now integrate directly with the main menu navigation if using the &quot;ribbon navigation&quot; styling. If the site design does not use the ribbon navigation, the site administrator needs to be creative with placement and layout.</p><h3 id="instructions" tabindex="-1"><a class="header-anchor" href="#instructions" aria-hidden="true">#</a> Instructions</h3><p>Add the Language switcher block to the same group or row as the Navigation menu and align it as desired.</p><p>With the Language switcher block in place choose the display options that best suit the desired look and feel. The primary options are as either a) a drop select or b) a list view.</p><p><strong>Note the &#39;Displays as a dropdown&#39; option must be deactivated to behave as a menu rather than a select box in sites that use the &#39;ribbon navigation&#39; template part.</strong></p><img src="'+s+'" height="250">',8),g=e("img",{src:l,height:"250",hspace:"15"},null,-1),p=e("img",{src:r,height:"250"},null,-1),u=e("h3",{id:"polylang-translation-of-template-parts",tabindex:"-1"},[e("a",{class:"header-anchor",href:"#polylang-translation-of-template-parts","aria-hidden":"true"},"#"),t(" Polylang translation of template parts")],-1),m=e("p",null,"On sites where you wish to translate page elements in the header, footer or menus, if they are based on template parts, you will need to decouple (or detach) them from the template part system prior to adding a translation.",-1),b=e("img",{src:h,height:"500"},null,-1),_=e("p",null,[t("Detach the template part prior to translation – this is typically done in the Full Site Editor area under "),e("strong",null,"Appearance > Editor (beta).")],-1),y=e("p",null,"If this is not done, Polylang and the Block Theme will not only fail to generate translations, but it will cause the site to generate many additional templates of the same name. This bug may be resolved at some point by the Polylang developer but until that happens detaching template parts is the only way to ensure you will be able to translate this content.",-1),w=[d,g,p,u,m,b,_,y];function f(v,k){return o(),n("div",null,w)}const x=a(c,[["render",f],["__file","Polylang-multi-language.html.vue"]]);export{x as default};

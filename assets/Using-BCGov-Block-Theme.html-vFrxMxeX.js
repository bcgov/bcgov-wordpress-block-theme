import{_ as o,o as s,c as a,a as e,b as t}from"./app-4Bl7QuFH.js";const i="/bcgov-wordpress-block-theme/assets/settings-admin-menu-oiGkPp3c.png",n="/bcgov-wordpress-block-theme/assets/bcgov-block-theme-settings-rluCsln1.png",r="/bcgov-wordpress-block-theme/assets/padding-margin-settings-R6bRNjG7.png",l="/bcgov-wordpress-block-theme/assets/fluid-typography-AKkUP5zw.png",d="/bcgov-wordpress-block-theme/assets/BCGOV-Colour-Palette-Swatches-_pqkJCFJ.jpg",h="/bcgov-wordpress-block-theme/assets/BCGOV-Gradients-Swatches-SCHTpKPd.jpg",c="/bcgov-wordpress-block-theme/assets/CleanBC-Colour-Palette-Swatches-rgylAKLS.jpg",u="/bcgov-wordpress-block-theme/assets/CleanBC-Gradients-Swatches-JUaHi_JF.jpg",g="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAMAAABHPGVmAAAAe1BMVEX///8eHh76+vq+vr4sLCwyMjLW1tZlZWU2NjYkJCShoaH39/fh4eG2trZVVVX8/Pz19fWEhIQ9PT0gICDl5eWqqqp8fHxNTU1GRkZBQUHt7e3s7OzHx8fFxcWvr6+mpqaMjIx3d3dJSUkqKiqZmZl0dHRcXFzQ0NBoaGi3VWOnAAABOklEQVRo3u2ZyW7EIBAFGwy2wfsyHnv2Lcv/f2EOySFRBuaQZ0aOus4lleQFGkEMwzAMMwNRosQfUUn0oLEWANb+SiIgJORDYSKKfAgQHOEIRzjCEY640eVgd9vtzg6lnimSHr+bx3SGiDllX45+bQ6xpOxk0JE2/umkK0lxi42Mm1/OJabNiIzo/o5jCuo1LtLt7zpdRPsOFmkczjWnBhVJa5dTVnUKili3syKLiajM7bQyU5DI2edEdIZECp/zQgUkkvuciXJIRPocQxIS8TsVLScS5HH1D178cj7hIcTPqGWAZUUcAiyQYpIBlnpxC7BpCRMH2H7FVEMHCQdljRyJXIw5cLhzcrUVbEz1cIlQA7cX/X57k/R5dFj2IYgjHOEIRzjyDyKoS5rnXzehLs6efwXIMAyzCD4AWtgdZ3OtGikAAAAASUVORK5CYII=",p={},m=e('<h1 id="theme-settings" tabindex="-1"><a class="header-anchor" href="#theme-settings" aria-hidden="true">#</a> Theme Settings</h1><p>The BCGov Block Theme allows you to change some of the behaviours of the site such as theme styles and how the header behaves. These are coupled with the Block Theme Appearance settings. Simply go to the Theme Options page in the site admin area and choose the behaviours you wish to use.</p><ul><li>Choose the active site styling – this choice will impact how certain features display or are made available.</li><li>Change the behaviour of the site header bar when using the Takeover Menu.</li><li>Enable optional styles and patterns available to the current site.</li><li>Enable a custom body class for site specific style overrides.</li><li>Add custom content security policy overrides.</li></ul><p>More detail on these features can be found on the <strong>Appearance &gt; Theme Options</strong> page.</p><h2 id="bcgov-block-theme-settings" tabindex="-1"><a class="header-anchor" href="#bcgov-block-theme-settings" aria-hidden="true">#</a> BCGov Block Theme Settings</h2><p>Some features will need to be turned on to become available to the admin environment. These include the Custom Notice Banner feature and the Custom Patterns. Such available options will change over time, so be sure to review this area to determine the latest settings available to the BCGov Block Theme environment. These will be turned off by default in a new installation. For more information on these options see their respective sections below.</p><img height="150" src="'+i+'"><img height="150" src="'+n+'"><p>Other settings for admin enabling options in the Block Theme can be found on the <strong>BCGov Block Theme Settings</strong> page</p><h2 id="general-editing-and-layout" tabindex="-1"><a class="header-anchor" href="#general-editing-and-layout" aria-hidden="true">#</a> General editing and layout</h2><h3 id="understanding-the-role-of-margins-and-padding-in-the-wordpress-editor" tabindex="-1"><a class="header-anchor" href="#understanding-the-role-of-margins-and-padding-in-the-wordpress-editor" aria-hidden="true">#</a> Understanding the role of margins and padding in the WordPress editor</h3>',11),b=t("img",{src:r,align:"right",height:"500",hspace:"30",title:"Using sliders to set padding and margin"},null,-1),f=e('<p>The WordPress environment allows for responsive padding and margins by using the slider mechanism.</p><ol><li>First, open the page or post where you want to adjust the padding or margin. Once you&#39;re in the editing mode, select the block you want to adjust.</li><li>On the right-hand side of the editor, you should see a panel called &quot;Block settings&quot;. Look for the &quot;Spacing&quot; section within the panel.</li><li>Within the &quot;Spacing&quot; section, you&#39;ll see two sliders: one for margin and one for padding. You can adjust these sliders to change the amount of margin or padding around the block.</li><li>The margin slider controls the space outside the block, while the padding slider controls the space inside the block.</li><li>You can either adjust the sliders by dragging the handles or by clicking on the number and typing in a specific value.</li><li>As you adjust the sliders, you&#39;ll see the changes reflected in real-time on the preview of your page or post.</li></ol><h3 id="linked-vs-unlinked" tabindex="-1"><a class="header-anchor" href="#linked-vs-unlinked" aria-hidden="true">#</a> Linked vs unlinked</h3><p>The link sides icon allows you to choose to apply the same settings to all sides or break them out individually. In some situations you may have access to all sides (top, bottom, left and right) or you may only have top and bottom. In some circumstances you may only have access to padding or margin but not both. And in other cases the padding and margin option may not be available. It is up to you to use combinations of containing blocks such as groups, rows, columns, etc. to find the right layout pattern for your desired look and feel.</p><p><strong>Warning:</strong> Be careful when using margins and padding in the editor and setting your own sizes. Using explicit sizes – eg: 2rem, 1.5em or 18px – are one size fits all (or doesn’t fit as the case may be). Any padding or margin spacing added to any element, layout, pattern or block is going to display similarly across all resolutions. 6rem of margin on a desktop view may look good, but can add a lot of unwanted spacing on mobile devices.</p><h3 id="fluid-typography" tabindex="-1"><a class="header-anchor" href="#fluid-typography" aria-hidden="true">#</a> Fluid Typography</h3><img src="'+l+'" align="right" height="125"><p>This feature enables font sizes to adapt to changes in screen size, for example, by growing larger as the viewport width increases, or smaller as it decreases. You will find this control in most text based block inspector options.</p><p>It is still possible to set the size of text or headings in hard coded values by setting a custom size, however much like the margins and padding issue above, it does not scale responsively so use it with care and test across all screen sizes from desktop to mobile.</p><h2 id="site-specific-blocks-and-block-styles" tabindex="-1"><a class="header-anchor" href="#site-specific-blocks-and-block-styles" aria-hidden="true">#</a> Site Specific Blocks and Block Styles</h2><p>Site specific blocks and block styles can also be inserted. Look for styles that identify the variations or options.</p><h3 id="buttons-and-button-blocks" tabindex="-1"><a class="header-anchor" href="#buttons-and-button-blocks" aria-hidden="true">#</a> Buttons and Button Blocks</h3><p>Buttons are used extensively as key drivers of linking to other pages and content. While inline linking can be done inside text paragraphs, headlines, etc., buttons offer some additional features that make them extremely useful when building sites.</p><ul><li>Buttons have multiple style options from filled, to outlined or underlined and can be fully customised from colour to sizing in the block editor.</li><li>They have additional Accessibility features that enable better keyboard navigation experiences, but also allow for custom ARIA labels to ensure screen readers or other Assistive Technologies can benefit from proper context.</li></ul><h2 id="colour-palettes" tabindex="-1"><a class="header-anchor" href="#colour-palettes" aria-hidden="true">#</a> Colour Palettes</h2><p>Colour palettes for the BCGov Block Theme are made up of 24 predefined colours. Any additional Active Site options will also include a palette with an equivalent number of colours in order to make the patterns usable across sites. An associated group of Gradients based on the 16 essential custom colours in the colour palette are also available.</p><img src="'+d+'" height="300"><img src="'+h+'" height="300"><img src="'+c+'" height="300"><img src="'+u+'" height="300"><p>It should be noted that most blocks and patterns can be modified in the editor to override colour or gradient palette options to accommodate specific customisation needs.</p><h3 id="instructions" tabindex="-1"><a class="header-anchor" href="#instructions" aria-hidden="true">#</a> Instructions</h3>',22),y=t("img",{src:g,align:"left",height:"50",hspace:"15"},null,-1),v=e('<p>Global Styles Switcher allows users to switch the theme defaults to alternate colour palettes. Open Appearance &gt; Editor in the admin. You should see the theme variations in the global styles switcher by clicking on the styles icon in the top right corner.</p><h1 id="advanced-theme-management" tabindex="-1"><a class="header-anchor" href="#advanced-theme-management" aria-hidden="true">#</a> Advanced Theme Management</h1><h2 id="customisable-templates" tabindex="-1"><a class="header-anchor" href="#customisable-templates" aria-hidden="true">#</a> Customisable Templates</h2><ul><li><strong>Page:</strong> displays a single page with the standard layout</li><li><strong>Page – Content only:</strong> allows for custom banners, requires in-page breadcrumb navigation block if used on site</li><li><strong>Blank:</strong> no default header, content or footer – for use in creating custom landing pages</li><li><strong>Search:</strong> display results page</li><li><strong>404:</strong> displays when no content is found, provides customisable 404 information</li></ul><h3 id="instructions-1" tabindex="-1"><a class="header-anchor" href="#instructions-1" aria-hidden="true">#</a> Instructions</h3><p>The theme editor allows for the customization of the BCGov WordPress theme without writing any code, and modifying page templates without breaking the website. This page is not meant for in-depth instruction in using the theme editor, just know the full site editor is a powerful and flexible way to customise the BCGov Block theme and will allow for making substantive changes to a theme and its layout at any time. This enables a level of flexibility which allows you to easily create on-demand page layouts. For more information regarding WordPress 6+ Templating see:</p><h2 id="customisable-template-parts" tabindex="-1"><a class="header-anchor" href="#customisable-template-parts" aria-hidden="true">#</a> Customisable Template Parts</h2><ul><li><strong>BCGov Header (Standard)</strong> adds typical BC Gov blue header with site logo, title, navigation and search</li><li><strong>Navigation:</strong> adds menu navigation to the header</li><li><strong>Search Field:</strong> adds search field to the header</li><li><strong>Breadcrumb Nav:</strong> adds breadcrumb navigation, requires AIOSEO plugin activation</li><li><strong>BCGov Footer (Standard):</strong> adds typical BC Gov blue footer</li></ul><h3 id="instructions-2" tabindex="-1"><a class="header-anchor" href="#instructions-2" aria-hidden="true">#</a> Instructions</h3><p>Template parts are used to organise a theme in smaller reusable structural parts. They are commonly used for site headers and site footers. Just like templates, the theme editor allows for the customization of the BCGov WordPress theme without writing any code and this includes modifying template parts.</p><p>The Site Editor’s Template Parts section displays a list of all template parts. You can create template parts using the Add New button. In this view, you can also clear customizations from theme template parts and delete user-created template parts should an error be made while editing inside the editor.</p>',11),k=[m,b,f,y,v];function w(B,A){return s(),a("div",null,k)}const _=o(p,[["render",w],["__file","Using-BCGov-Block-Theme.html.vue"]]);export{_ as default};

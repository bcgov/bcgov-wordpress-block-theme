# Theme Settings

The BCGov Block Theme allows you to change some of the behaviours of the site such as theme styles and how the header behaves. These are coupled with the Block Theme Appearance settings. Simply go to the Theme Options page in the site admin area and choose the behaviours you wish to use.

- Choose the active site styling – this choice will impact how certain features display or are made available.
- Change the behaviour of the site header bar when using the Takeover Menu.
- Enable optional styles and patterns available to the current site.
- Enable a custom body class for site specific style overrides.
- Add custom content security policy overrides.

More detail on these features can be found on the  **Appearance > Theme Options**  page.

## BCGov Block Theme Settings

Some features will need to be turned on to become available to the admin environment. These include the Custom Notice Banner feature and the Custom Patterns. Such available options will change over time, so be sure to review this area to determine the latest settings available to the BCGov Block Theme environment. These will be turned off by default in a new installation. For more information on these options see their respective sections below.

<img height="150" src="../../.vuepress/public/settings-admin-menu.png">
<img height="150" src="../../.vuepress/public/bcgov-block-theme-settings.png">

Other settings for admin enabling options in the Block Theme can be found on the  **BCGov Block Theme Settings**  page

## General editing and layout
### Understanding the role of margins and padding in the WordPress editor

<img src="../../.vuepress/public/padding-margin-settings.png" align="right" height="500" hspace="30" title="Using sliders to set padding and margin">

The WordPress environment allows for responsive padding and margins by using the slider mechanism.

1. First, open the page or post where you want to adjust the padding or margin. Once you're in the editing mode, select the block you want to adjust.
2. On the right-hand side of the editor, you should see a panel called "Block settings". Look for the "Spacing" section within the panel.
3. Within the "Spacing" section, you'll see two sliders: one for margin and one for padding. You can adjust these sliders to change the amount of margin or padding around the block.
4. The margin slider controls the space outside the block, while the padding slider controls the space inside the block.
5. You can either adjust the sliders by dragging the handles or by clicking on the number and typing in a specific value.
6. As you adjust the sliders, you'll see the changes reflected in real-time on the preview of your page or post.

### Linked vs unlinked

The link sides icon allows you to choose to apply the same settings to all sides or break them out individually. In some situations you may have access to all sides (top, bottom, left and right) or you may only have top and bottom. In some circumstances you may only have access to padding or margin but not both. And in other cases the padding and margin option may not be available. It is up to you to use combinations of containing blocks such as groups, rows, columns, etc. to find the right layout pattern for your desired look and feel.

 **Warning:**  Be careful when using margins and padding in the editor and setting your own sizes. Using explicit sizes – eg: 2rem, 1.5em or 18px – are one size fits all (or doesn’t fit as the case may be). Any padding or margin spacing added to any element, layout, pattern or block is going to display similarly across all resolutions. 6rem of margin on a desktop view may look good, but can add a lot of unwanted spacing on mobile devices.

### Fluid Typography

<img src="../../.vuepress/public/fluid-typography.png" align="right" height="125">

This feature enables font sizes to adapt to changes in screen size, for example, by growing larger as the viewport width increases, or smaller as it decreases. You will find this control in most text based block inspector options.

It is still possible to set the size of text or headings in hard coded values by setting a custom size, however much like the margins and padding issue above, it does not scale responsively so use it with care and test across all screen sizes from desktop to mobile.



## Site Specific Blocks and Block Styles

Site specific blocks and block styles can also be inserted. Look for styles that identify the variations or options.

### Buttons and Button Blocks

Buttons are used extensively as key drivers of linking to other pages and content. While inline linking can be done inside text paragraphs, headlines, etc., buttons offer some additional features that make them extremely useful when building sites.

- Buttons have multiple style options from filled, to outlined or underlined and can be fully customised from colour to sizing in the block editor.
- They have additional Accessibility features that enable better keyboard navigation experiences, but also allow for custom ARIA labels to ensure screen readers or other Assistive Technologies can benefit from proper context.

## Colour Palettes

Colour palettes for the BCGov Block Theme are made up of 24 predefined colours. Any additional Active Site options will also include a palette with an equivalent number of colours in order to make the patterns usable across sites. An associated group of Gradients based on the 16 essential custom colours in the colour palette are also available.

<img src="../../.vuepress/public/BCGOV-Colour-Palette-Swatches.jpg" height="300">
<img src="../../.vuepress/public/BCGOV-Gradients-Swatches.jpg" height="300">
<img src="../../.vuepress/public/CleanBC-Colour-Palette-Swatches.jpg" height="300">
<img src="../../.vuepress/public/CleanBC-Gradients-Swatches.jpg" height="300">

It should be noted that most blocks and patterns can be modified in the editor to override colour or gradient palette options to accommodate specific customisation needs.

### Instructions

<img src="../../.vuepress/public/style-icon.png" align="left" height="50" hspace="15">

Global Styles Switcher allows users to switch the theme defaults to alternate colour palettes. Open Appearance > Editor in the admin. You should see the theme variations in the global styles switcher by clicking on the styles icon in the top right corner.



# Advanced Theme Management

## Customisable Templates

- **Page:**  displays a single page with the standard layout
- **Page – Content only:**  allows for custom banners, requires in-page breadcrumb navigation block if used on site
- **Blank:**  no default header, content or footer – for use in creating custom landing pages
- **Search:**  display results page
- **404:**  displays when no content is found, provides customisable 404 information


### Instructions

The theme editor allows for the customization of the BCGov WordPress theme without writing any code, and modifying page templates without breaking the website. This page is not meant for in-depth instruction in using the theme editor, just know the full site editor is a powerful and flexible way to customise the BCGov Block theme and will allow for making substantive changes to a theme and its layout at any time. This enables a level of flexibility which allows you to easily create on-demand page layouts. For more information regarding WordPress 6+ Templating see:

## Customisable Template Parts

- **BCGov Header (Standard)**  adds typical BC Gov blue header with site logo, title, navigation and search
- **Navigation:**  adds menu navigation to the header
- **Search Field:**  adds search field to the header
- **Breadcrumb Nav:**  adds breadcrumb navigation, requires AIOSEO plugin activation
- **BCGov Footer (Standard):**  adds typical BC Gov blue footer

### Instructions

Template parts are used to organise a theme in smaller reusable structural parts. They are commonly used for site headers and site footers. Just like templates, the theme editor allows for the customization of the BCGov WordPress theme without writing any code and this includes modifying template parts.

The Site Editor’s Template Parts section displays a list of all template parts. You can create template parts using the Add New button. In this view, you can also clear customizations from theme template parts and delete user-created template parts should an error be made while editing inside the editor.





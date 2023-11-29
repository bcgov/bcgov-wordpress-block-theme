# Polylang Plugin

## Adding the Language Switcher to navigation

Adding the Polylang Language Switcher is accomplished in the Template editor. It is best to associate the switcher with the site Navigation or main menu, but as of Polylang Pro version 3.2.8 the "Language switcher" block which enables the ability to move between languages. The language switcher block can now integrate directly with the main menu navigation if using the "ribbon navigation" styling. If the site design does not use the ribbon navigation, the site administrator needs to be creative with placement and layout.

### Instructions


Add the Language switcher block to the same group or row as the Navigation menu and align it as desired.

With the Language switcher block in place choose the display options that best suit the desired look and feel. The primary options are as either a) a drop select or b) a list view.

 **Note the 'Displays as a dropdown' option must be deactivated to behave as a menu rather than a select box in sites that use the 'ribbon navigation' template part.** 

<img src="/bcgov-wordpress-block-theme/ls-block-list.png" height="250">
<img src="/bcgov-wordpress-block-theme/ls-block-options.png" height="250" hspace="15">
<img src="/bcgov-wordpress-block-theme/ls-block-options-2.png" height="250">

### Polylang translation of template parts

On sites where you wish to translate page elements in the header, footer or menus, if they are based on template parts, you will need to decouple (or detach) them from the template part system prior to adding a translation.

<img src="/bcgov-wordpress-block-theme/detach-template-part.png" height="500">

Detach the template part prior to translation – this is typically done in the Full Site Editor area under  **Appearance > Editor (beta).** 

If this is not done, Polylang and the Block Theme will not only fail to generate translations, but it will cause the site to generate many additional templates of the same name. This bug may be resolved at some point by the Polylang developer but until that happens detaching template parts is the only way to ensure you will be able to translate this content.
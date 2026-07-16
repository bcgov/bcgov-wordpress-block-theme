
# Does This Theme Work?

## Build
- [x] `npm run build` finished with no errors (aside from Dependabot warnings)
  - some deprecation warnings
  - some asset size warnings from Webpack

## Front End of Website
- [x] Home page loads
- [x] BC Sans font looks correct
  - all inspected text shows:  `font-family: BCSans, Noto Sans, Verdana, Arial, sans-serif;`
- [x] Header and footer show up
- [x] Menu works (desktop and mobile/hamburger)
  - submenu also works 

## WordPress Editor
- [x] Site Editor opens
- [x] Can open a template (`page.php`)
- [x] Can edit a page and save it
- [x] Can find and insert a BCGov pattern

## WordPress Admin
- [x] **BCGov Block Theme Settings** page loads from the Admin panel

## No Dependency Files Have Been Changed
- [x] Confirm no dependency files have been modified
  - only ran 'npm i && npm run build`
  - added a .wp-env.json locally to stand up dev environment for this theme

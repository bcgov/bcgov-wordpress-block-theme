# Puppeteer Testing Steps

## 1) Starting tests
  - you can run puppeteer end-to-end tests interactively (show the browser instead of headless operation)
  ```bash
  npm run test:e2e -- --puppeteer-interactive
  ```
  ### wordpress recommended utilities for end-to-end testing [deprecated - gutenberg e2e tests have been migrated to Playwright instead.](https://github.com/WordPress/gutenberg/issues/38851)
  ```bash
  npm install @wordpress/e2e-test-utils --save-dev
  ```

## 2) Configure your environment

  - [install recommended gutenberg e2e test utilities:](https://github.com/WordPress/gutenberg/tree/trunk/packages/e2e-test-utils)
    - login to the dashboard
    - go to a page
    - activate/deactivate a plugin
    - create a new post
    - create a dummy page
```bash
npm install @wordpress/e2e-test-utils --save-dev
```
### Set up Puppeteer: [Puppeteer - getting started](https://pptr.dev)
1) Install jest-puppeteer ( this lets you automate the browser from within a test, using familiar jest syntax)
```bash
npm install --save-dev jest-puppeteer
```
2) add a config file `jest-e23.config.js`
```javascript
/** @type {import('jest').Config} */
const config = {
    verbose: true,
    preset: 'jest-puppeteer',
    roots: [ 'Tests/e2e' ], // force it to only run the e2e tests.
};

module.exports = config;

```
3) in your package.json, add a script with extra arguments to handle e2e testing and to separate it from unit tests:
  - make sure you add a config file for your unit tests that excludes the end-to-end tests!
  - Unit tests should be moved to the ./Tests/unit folder and their imports updated.
```bash
{
  ...
"test:e2e": "wp-scripts test-e2e --config jest-e2e.config.js",
  ...
"test:unit": "wp-scripts test-unit-js --rootDir=Tests/unit",
}
```
4) run the scripts, and observe the different results.
```bash
npm run test:e2e
npm run test:unit // or: `npm run test`
```
The test runner should automatically find and run all your tests.

here is a working example test:
```bash
describe( 'Google', () => {
    beforeAll( async () => {
        await page.goto( 'https://google.com' );
    } );

    it( 'should be titled "Google"', async () => {
        await expect( page.title() ).resolves.toMatch( 'Google' );
    } );

    it( 'should have lorem ipsum', async () => {
        const page = await browser.newPage();
        await page.goto( 'https://localhost' );
        // `.toMachTextContent()` extracts the text nodes from the DOM
        await expect( page ).toMatchTextContent(
            'Ullamcorper Ultricies Ridiculus Consectetur Ligula'
        );
    } );
} );
```
The test runner will (if the test fails) throw a screenshot and snapshot.html in your `/artifacts` directory.
```sh
ls -al artifacts
total 2656
drwxr-xr-x  14 robrien  staff     448 25 Mar 17:22 .
drwxr-xr-x@ 48 robrien  staff    1536 25 Mar 17:56 ..
-rw-r--r--   1 robrien  staff      39 25 Mar 17:13 should be titled -Google- 2024-03-26T00-13-13-snapshot.html
-rw-r--r--   1 robrien  staff    3688 25 Mar 17:13 should be titled -Google- 2024-03-26T00-13-13.jpg
-rw-r--r--   1 robrien  staff  237224 25 Mar 17:22 should have text 2024-03-26T00-22-41-snapshot.html
-rw-r--r--   1 robrien  staff   28755 25 Mar 17:22 should have text 2024-03-26T00-22-41.jpg
```

### Documentation for writing tests:
- [working test from the puppeteer website: https://pptr.dev ](https://pptr.dev/#example)
  - searches developer.chrome.com for blog posts with text "automate beyond recorder"
  - clicks on the first result
  - and print the full title of the blog post

- [Jest-Puppeteer (used by wordpress-scripts to provide an API for writing Jest-based tests for e2e testing ) ](https://github.com/argos-ci/jest-puppeteer#jest-puppeteerconfigjs)
- [Puppeteer API documentation](https://github.com/puppeteer/puppeteer/blob/v1.18.0/docs/api.md)
- [Puppeteer Examples (need to work through setup instructions)](https://github.com/puppeteer/puppeteer/tree/main/examples)
- the default [configuration](https://pptr.dev/guides/configuration) should work, but click the link if you need to change anything
---

## 3) Include extra steps for automation, such clicking elements
- see https://pptr.dev/#example for a great use of browser automation to get expected outputs.
### example (working) test
```javaScript
const puppeteer = require( 'puppeteer' );

describe( 'Basic Page Tests', () => {
    beforeAll( async () => {
        await page.goto( 'https://google.com' );
    } );

    it( 'should be titled "Google"', async () => {
        await expect( page.title() ).resolves.toMatch( 'Google' );
    } );

    it( 'should open a new page', async () => {
        const page = await browser.newPage();
        await page.goto( 'https://google.com' );
    } );

    it( 'should have lorem ipsum', async () => {
        const browser = await puppeteer.launch( { headless: false } );
        const page = await browser.newPage();
        await page.goto( 'https://localhost' );
        await expect( page ).toMatchTextContent(
            'Ullamcorper Ultricies Ridiculus Consectetur Ligula'
        );
        await browser.close();
    } );

    it( `should search developer.chrome.com for blog posts with text "automate beyond recorder,
    click on the first result, and print the full title of the blog post`, async () => {
        // Launch the browser and open a new blank page
        const browser = await puppeteer.launch({ headless: false }); // show browser - default: true
        const page = await browser.newPage();

        // Navigate the page to a URL
        await page.goto( 'https://developer.chrome.com/' );

        // Set screen size
        await page.setViewport( { width: 1080, height: 1024 } );

        // Type into search box
        await page.type( '.devsite-search-field', 'automate beyond recorder' );

        // Wait and click on first result
        const searchResultSelector = '.devsite-result-item-link';
        await page.waitForSelector( searchResultSelector );
        await page.click( searchResultSelector );

        // Locate the full title with a unique string
        const textSelector = await page.waitForSelector(
            'text/Customize and automate'
        );
        const fullTitle = await textSelector?.evaluate(
            ( el ) => el.textContent
        );

        // Print the full title
        console.log( 'The title of this blog post is "%s".', fullTitle );

        await browser.close(); // the 'headless' browser won't be dismissed otherwise.
    } );
} );
```
# Puppeteer Testing Steps

## 1) Starting tests
  - you can run puppeteer end-to-end tests interactively (show the browser instead of headless operation)
  ```bash
  npm run test:e2e -- --puppeteer-interactive
  ```
  ### wordpress recommended utilities for end-to-end testing
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
  - the default [configuration](https://pptr.dev/guides/configuration) should work, but click the link if you need to change anything
  - create a `spec` directory, and put your <testName>.test.js in that directory
  - run
```bash
npm run test:e2e
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
} );
```
The test runner will (if the test fails) throw a screenshot and snapshot.html in your `/artifacts` directory.
```sh

 robrien@NHM500141  ~/work/dev-wp/wp-content/themes/bcgov-wordpress-block-theme   DESCW-2113_research-block-theme-integration-testing ±  ls artifacts
should display -google- text on page 2024-03-25T23-17-44-snapshot.html           should display the correct page title 2024-03-25T23-27-39.jpg
should display -google- text on page 2024-03-25T23-17-44.jpg                     should have lorem ipsum text on the page title 2024-03-25T23-31-13-snapshot.html
should display the correct page title 2024-03-25T23-24-14-snapshot.html          should have lorem ipsum text on the page title 2024-03-25T23-31-13.jpg
should display the correct page title 2024-03-25T23-24-14.jpg                    should have lorem ipsum text on the page title 2024-03-25T23-36-08-snapshot.html
should display the correct page title 2024-03-25T23-27-39-snapshot.html          should have lorem ipsum text on the page title 2024-03-25T23-36-08.jpg
```

### Documentation for writing tests:
- [Jest-Puppeteer (used by wordpress-scripts to provide an API for writing Jest-based tests for e2e testing ) ](https://github.com/argos-ci/jest-puppeteer#jest-puppeteerconfigjs)
- [Puppeteer API documentation](https://github.com/puppeteer/puppeteer/blob/v1.18.0/docs/api.md)
- [Puppeteer Examples (need to work through setup instructions)](https://github.com/puppeteer/puppeteer/tree/main/examples)

---

## 3) set up a test file for cypress to know where the snapshots are and how to compare them
  - I recommend starting with the cypress docs when setting up e2e testing specs: https://docs.cypress.io/guides/end-to-end-testing/writing-your-first-end-to-end-test

  - example: https://github.com/bcgov/wordpress-digimod/blob/1fcf85bb08e35a39d64a935809de1230a6c7b6d8/testing/cypress/e2e/sitemap-snapshot-test.cy.js#L87-L93
  > the snapshot part is the only kind of e2e test we want, so look at the cy.wrap section on L89 of the above example, where it performs the comparison between the generated 'existing' file, and the generated 'new' file.
```javascript
cy.wrap({ html: someRenderedHtmlForSnapshot })
  // use the snapshot plugin to compare
  .snapshot("testName",
     {
       // these config values could probably be hard-coded if we're only testing on snapshot
      snapshotName: 'name-of-snapshot-file', // overrides default filename
      snapshotPath: '/location/of/snapshot/file',  // overrides default path
      json:true // use json format for storing this snapshot file
     })
     // can wrap more than one json file and test it: `cy.wrap({ jsonFileSnapshot})

```
   > - To use the snapshot plugin, see these instructions on how it should be invoked in your test file: https://github.com/bcgov/wordpress-digimod/blob/main/testing/lib/snapshot/README.md

   > in the example, pay special attention to the `afterEach()` callback used in the `runTests()` function.
   > - it waits for the current test to fail
   > - it will generate three snapshot files per url: the expected, the actual, and the diff.

   > runTests() will iterate through all the urls to test, and is in turn called as the callback for the only actual test in the file: `describe('snapshot-test', () => main())`

   - main is just a wrapper that takes the site URLs and invokes `runTests(someSiteUrls)`
> for more info on how to write e2e tests for cypress: https://docs.cypress.io/guides/end-to-end-testing/writing-your-first-end-to-end-test
#### example snapshot comparison:
```javascript
// cypress/integration/login.spec.js

describe('Login Form', () => {
  it('should match the saved snapshot', () => {
    cy.visit('/login'); // Navigate to the login page

    // Capture a snapshot of the login form
    cy.get('form').snapshot('login-form');

    // Perform login actions (e.g., enter credentials, click login button)

    // After login, capture another snapshot
    cy.get('form').snapshot('login-form-after-login');
  });
});
```

## 4) run the test: (pass cypress your test file's location and the test site's location)
```bash
npx cypress run --spec "path-to-snapshot-test-file.js" --browser firefox --env-url=http://localhost:8889/someTestSiteUrl
```

## 5) include extra steps for automation, such clicking elements
- see https://docs.cypress.io/guides/end-to-end-testing/writing-your-first-end-to-end-test#Step-3-Click-an-element
- before trying this, please walk through the above steps, looking at the digimod example config and spec.
- The cypress docs tutorial on getting started will help open a running version of cypress.
  - Follow these steps:
  1) https://docs.cypress.io/guides/getting-started/opening-the-app
  2) https://docs.cypress.io/guides/end-to-end-testing/writing-your-first-end-to-end-test
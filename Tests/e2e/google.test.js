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
        const browser = await puppeteer.launch();
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

        await browser.close();
    } );
} );

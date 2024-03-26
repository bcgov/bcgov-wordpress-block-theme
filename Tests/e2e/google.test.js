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
        const page = await browser.newPage();
        await page.goto( 'https://localhost' );
        await expect( page ).toMatchTextContent(
            'Ullamcorper Ultricies Ridiculus Consectetur Ligula'
        );
    } );
} );

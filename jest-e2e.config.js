/** @type {import('jest').Config} */
const config = {
    verbose: true,
    preset: 'jest-puppeteer',
    roots: [ './Tests/e2e' ],
};

module.exports = config;

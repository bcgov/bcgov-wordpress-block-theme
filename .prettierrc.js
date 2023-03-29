const prettierConfig = require( require.resolve( "@wordpress/scripts/config/.prettierrc.js" ) );

prettierConfig.useTabs = false;

module.exports =  prettierConfig;
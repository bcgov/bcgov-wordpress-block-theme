module.exports = {
    root: true,
    extends: [
        "./node_modules/@bcgov/webpack-wordpress/.eslint.js",
    ],
    env: {
        jest: true,
	},
    globals: {
        wp: true,
    },
};

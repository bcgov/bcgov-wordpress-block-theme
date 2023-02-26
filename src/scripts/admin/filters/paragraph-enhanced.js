const { registerBlockStyle } = wp.blocks;

const paragraphStyles = [
	{
		name: 'default',
		label: 'Default',
		isDefault: true,
	},
	{
		name: 'custom',
		label: 'Custom Sizes',
	},
];

paragraphStyles.forEach((style) => {
	registerBlockStyle('core/paragraph', style);
});

const listStyles = [
	{
		name: 'default',
		label: 'Default',
		isDefault: true,
	},
	{
		name: 'custom',
		label: 'Custom Sizes',
	},
];

listStyles.forEach((style) => {
	registerBlockStyle('core/list', style);
});

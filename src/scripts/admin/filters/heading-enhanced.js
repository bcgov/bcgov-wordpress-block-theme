const { registerBlockStyle } = wp.blocks;

registerBlockStyle('core/heading', [
	{
		name: 'default',
		label: 'Default',
		isDefault: true,
	},
	{
		name: 'custom',
		label: 'Custom Sizes',
	},
]);

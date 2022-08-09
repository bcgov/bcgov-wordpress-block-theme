const { registerBlockStyle } = wp.blocks;

registerBlockStyle('core/paragraph', [
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

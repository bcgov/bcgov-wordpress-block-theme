const { registerBlockStyle } = wp.blocks;

registerBlockStyle('core/query', [
	{
		name: 'dropshadow',
		label: 'Drop shadow',
		isDefault: true,
	},
	{
		name: 'default',
		label: 'No Shadow',
	},
]);

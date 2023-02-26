const { registerBlockStyle } = wp.blocks;

const styles = [
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

styles.forEach((style) => {
	registerBlockStyle('core/heading', style);
});

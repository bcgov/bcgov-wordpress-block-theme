const { registerBlockStyle } = wp.blocks;

const styles = [
	{
		name: 'default',
		label: 'Centre Overlay',
		description:
			'This uses a Flex approach to layout and will use variable width and spacing across a maximum of three columns. Menu groups will wrap to the next row and display in a center aligned position.',
		isDefault: true,
	},
	{
		name: 'grid',
		label: 'Justify Overlay',
		description:
			'This uses a Grid approach to layout and will use consistant width and spacing across a maximum of three columns. Menu groups will wrap to the next row and position themselves under the first column.',
	},
];

styles.forEach((style) => {
	registerBlockStyle('core/navigation', style);
});

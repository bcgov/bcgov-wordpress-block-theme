export const attributes = {
	title: {
		type: 'array',
		source: 'children',
		selector: '.card-block-title',
	},

	content: {
		type: 'array',
		source: 'children',
		selector: '.card-block-content',
	},
	alignment: {
		type: 'string',
		default: 'none',
	},
	color: {
		type: 'string',
		default: 'inherit',
	},
	backgroundColor: {
		type: 'string',
		default: 'transparent',
	},
};

/**
* ALLOWLIST: for Blocks in Admin
* Manage Block Types By Post Type
* This unfortunately is not possible in php.
*/
wp.domReady(function () {
	/**
	* Define the blocks we want on pages
	*/
	if (postData.postType == 'page' || postData.postType === 'post') {
		wp.blocks.getBlockTypes().forEach(function (block) {

			// Allow by Category.
			if (block.category === 'bcgov') return;

			if (block.category === 'text') return;

			if (block.category === 'media') return;

			if (block.category === 'design') return;

			if (block.category === 'theme') return;

			// Remove Variations of core/embed.
			if (block.name === 'core/embed') {
				block.variations.forEach(variant => {
					// Allow Youtube.
					if ('youtube' !== variant.name && 'vimeo' !== variant.name  && 'twitter' !== variant.name) {
						wp.blocks.unregisterBlockVariation(block.name, variant.name);
					}
				});
				return;
			}

			// Allow by Name.
			if (block.name === 'aioseo/breadcrumbs') return;

			// Unregister all other blocks.
			wp.blocks.unregisterBlockType(block.name);
		})
	}

	/**
	* Safe defaults for custom post types.
	*/
	else if (postData.postType == 'cleanbc-actions') {

		wp.blocks.getBlockTypes().forEach(function (block) {

			if (block.category === 'text') return;

			if (block.category === 'media') return;

			if (block.category === 'design') return;

			if (block.category === 'theme') return;

			if (block.name === 'core/embed') {
				block.variations.forEach(variant => {
					if ('youtube' !== variant.name && 'vimeo' !== variant.name && 'twitter' !== variant.name) {
						wp.blocks.unregisterBlockVariation(block.name, variant.name);
					}
				});
				return;
			}

			wp.blocks.unregisterBlockType(block.name);
		})
	}
});
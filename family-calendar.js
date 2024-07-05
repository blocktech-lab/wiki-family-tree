wp.blocks.registerBlockType(
	'wiki-family-tree/family-calendar',
	{
		title: wp.i18n.__( 'Family Calendar', 'wiki-family-tree' ),
		edit: function () {
			return wp.element.createElement(
				wp.serverSideRender,
				{
					block: 'wiki-family-tree/family-calendar'
				}
			);
		}
	}
);

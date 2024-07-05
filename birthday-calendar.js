wp.blocks.registerBlockType(
	'wiki-family-tree/birthday-calendar',
	{
		title: wp.i18n.__( 'Birthday Calendar', 'wiki-family-tree' ),
		edit: function () {
			return wp.element.createElement(
				wp.serverSideRender,
				{
					block: 'wiki-family-tree/birthday-calendar'
				}
			);
		}
	}
);

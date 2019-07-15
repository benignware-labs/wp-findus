import classnames from 'classnames';




/**
 * WordPress dependencies
 */
const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks; // Import registerBlockType() from wp.blocks

/**
 * Internal dependencies
 */
// import deprecated from './deprecated';
import edit from './edit';
import icon from './icon';
import metadata from './block.json';
import save from './save';
// import transforms from './transforms';

const { name } = metadata;

export { metadata, name };

export const settings = {
	title: __( 'Map' ),
	description: __( 'Findus map' ),
	icon,
	keywords: [ __( 'map' ) ],
	supports: {
		align: [ 'wide', 'full' ],
		html: false,
	},
	// transforms,
	edit,
	save,

	/*
	getEditWrapperProps( attributes ) {

		const classes = classnames(
			// className,
			'bcf-form'
		);

		return {
			className: classes,
		};
	},*/
};

registerBlockType(name, {
	...metadata,
	...settings
});

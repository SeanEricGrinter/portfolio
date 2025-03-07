/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

import { useBlockProps, Text } from '@wordpress/block-editor';

import $ from 'jquery';

/**
 * Dynamically creates our typerText elements.
 * 
 * Each typer will store text passed by the user which will be saved and used to populate the element in the view.
 */
var createNewTyper = (attributes, blockProperties) => {
						if (attributes.typerIndex === undefined) {
							attributes.typerIndex = 1
						} else {
							attributes.typerIndex++
						}

						var typerTagName = 'typer' + attributes.typerIndex;

						// Return the new html for the typer
						return <div blockProperties>
							<Text
								tagName={typerTagName}
								onChange={(content) => {
										if (attributes.typer === undefined) {
											attributes.typer = []
										}
										attributes.typer[typerIndex] = content
										setAttributes(attributes)
									}
								}
								placeholder={ __( 'Enter text to be typed.', 'typer-text' ) }
							/>
						</div>
					}

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({attributes, setAttributes, classname}) {
	var blockProperties = { ...useBlockProps() }

	return (
		<div id='typerContainer'>
			<div
				id='addNewTyper'
				tagName='addNewTyper'
				onClick={() => {
						var typer = createNewTyper(attributes, blockProperties)
						$('typerContainer').append(typer)
					}
				}
			>
				+
			</div>
		</div>
	);
}

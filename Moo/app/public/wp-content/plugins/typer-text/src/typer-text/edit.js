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
import { useState } from '@wordpress/element';
import { useBlockProps } from '@wordpress/block-editor';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({attributes, setAttributes, classname}) {
	// The state of the typerTexts
	const [typerTexts, setTyperTexts] = useState([])

	// Add a new typerText to the state
	const addTyperText = () => {
		setTyperTexts(prev => [...prev, {id: typerTexts.length, textToType: ''}])
	}

	// Set the value of a typerText
	const updateTyperText = (params) => {
		var input = params.currentTarget

		typerTexts[input.getAttribute('id')].textToType = input.value
		setTyperTexts(typerTexts)
	}

	var containerBlockProperties = { ...useBlockProps({
		id: 'typersContainer'
	}) }

	return (<div containerBlockProperties>
				<div addNewTyperBlockProperties	onClick={addTyperText}> + </div>
				{typerTexts.map(typerText => <input id={typerText.id} onChange={updateTyperText}/>)}
			</div>);
}

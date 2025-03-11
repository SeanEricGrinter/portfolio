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
 * Get en element from within the iFrame
 * 
 * This is so wrong. Just read this as an MVP or something.
 */
var getJQueryFromIFrame = (elementToGet) => {
	var editorIframe = $('iframe.edit-site-visual-editor__editor-canvas')

	return editorIframe.contents().find(elementToGet)
}

/**
 * Dynamically creates our typerText elements.
 * 
 * Each typer will store text passed by the user which will be saved and used to populate the element in the view.
 * 
 * 
 */
var createNewTyper = (attributes, setAttributes, blockProperties) => {
	if (attributes.typerTextCount === undefined) {
		attributes.typerTextCount = 1
	} else {
		attributes.typerTextCount++
	}

	var typerTextInput = $('<input type=\'text\' id=' + attributes.typerTextCount + ' />')
	
	typerTextInput.on('change', (eventData) => {
		// Need to re-select the typerText
		var typerText = getJQueryFromIFrame(eventData.currentTarget)
		var idOfTyperText = typerText.attr('id')

		var idAsInt = parseInt(idOfTyperText)

		if (idAsInt === NaN) {
			// Shouldn't happen but I'll chuck this is for sanity
			console.error('Id of typerText ' + idOfTyperText + ' is NaN')
		}

		if (attributes.typerTextInputs === undefined) {
			attributes.typerTextInputs = []
		}
		
		// Use the current typerTextCount - 1 as the index in the array to store the content
		// Also this parseInt nonsense is so unsafe and should have handlers etc.
		// Getting data to this point should have some event system that can pass the values I want more effectively
		// I already know what this will be at this point, but I need to go and select again and get values, effectively using the DOM as a way to pass data around the JS - Not good!
		attributes.typerTextInputs[idAsInt - 1] = typerText.val()
		setAttributes(attributes)
	})

	return typerTextInput
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
	var containerBlockProperties = { ...useBlockProps({
		id: 'typersContainer'
	}) }

	var addNewTyperBlockProperties = { ...useBlockProps({
		id: 'addNewTyper',
		tagName: 'addNewTyper'
	}) }

	var typersContainer = 	<div containerBlockProperties>
								<div
									addNewTyperBlockProperties
									onClick={() => {
											var newTyper = createNewTyper(attributes, setAttributes, blockProperties)
											var typersContainer = getJQueryFromIFrame('#typersContainer')
											
											typersContainer.append(newTyper)
									}}
								>
									+
								</div>
							</div>
	


	return (typersContainer);
}

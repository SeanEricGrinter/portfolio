<?php
/**
 * Plugin Name:       typer Text
 * Description:       Text that plays as a typing animation
 * Version:           0.1.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       typer-text
 *
 * @package TyperText
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function typer_text_typer_text_block_init() {
	register_block_type( __DIR__ . '/build/typer-text' );
}
add_action( 'init', 'typer_text_typer_text_block_init' );

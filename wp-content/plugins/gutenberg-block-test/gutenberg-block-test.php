<?php
/**
 * Plugin Name:       Techverx Block
 * Plugin URI:        https://techverx.com/
 * Description:       Techverx Block Desciption
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Techverx
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gutenberg-block-test
 * Domain Path:       techverx.com
 *
 * @package           techverx
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function techverx_gutenberg_block_test_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'techverx_gutenberg_block_test_block_init' );

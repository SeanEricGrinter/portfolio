<?php
/**
 * Title: Welcome
 * Slug: moocopy/welcome
 * Categories: welcome
 * Block Types: core/template-part/welcome
 * Description: A highlighted area to welcome clients
 *
 * @package WordPress
 * @subpackage MooCopy
 * @since MooCopy 1.0
 */

// Includes
require_once(get_theme_file_path('includes/customizer_util.php'));
?>

<!-- wp:group -->
<div class="wp-block-group moocopy-welcome container background-contrast-base text-contrast-3" >
    <!-- wp:group -->
    <div class="wp-block-group clamped-font-large font-plus-jakarta-sans" >
        <!-- wp:paragraph -->
        Welcome to MOO
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group -->
    <div class="wp-block-group clamped-font-small">
        <!-- wp:paragraph -->
        Your highly experienced, results driven marketing agency
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group -->
    <div class="wp-block-group typer-text clamped-font-medium font-plus-jakarta-sans">
        <!-- wp:paragraph -->
        We are your
        <!-- wp:typer-text/typer-text {"typerTexts":[{"id":0,"textToType":"marketing department."},{"id":1,"textToType":"design studio."},{"id":2,"textToType":"web development team."}]} -->
        <!-- /wp:typer-text/typer-text -->
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group -->
    <div class="wp-block-group">
        <!-- wp:paragraph -->
        No matter what business you're in, it's our busniess to make it better
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
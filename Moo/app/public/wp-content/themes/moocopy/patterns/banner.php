<?php
/**
 * Title: Banner
 * Slug: moocopy/banner
 * Categories: banner
 * Block Types: core/template-part/banner
 * Description: Banner with decorations and marketing statement.
 *
 * @package WordPress
 * @subpackage MooCopy
 * @since MooCopy 1.0
 */

// Includes
require_once(get_theme_file_path('includes/customizer_util.php'));
?>

<!-- wp:group -->
<div class="wp-block-group moocopy-banner container" >
    <?php
        $customizer_util = new Customizer_Util();
        $top_left_decoration_source = $customizer_util->get_customizer_option(Customizer_Util::$TOP_LEFT_DECORATION);
    ?>
    <!-- wp:image -->
    <figure class="wp-block-image top-left-decoration">
        <img src=" <?php echo esc_url($top_left_decoration_source) ?> " alt="deco" >
    </figure>
    <!-- /wp:image -->
     <!-- wp:group -->
    <div class="wp-block-group banner-statement">
        <!-- wp:paragraph -->
        Marketing agency and design studio to help you <span class="text-contrast-1">stand out</span> from the herd
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
    <?php
        $header_splash_image_source = $customizer_util->get_customizer_option(Customizer_Util::$BANNER_SPLASH);
    ?>
    <!-- wp:group -->
    <div class="wp-block-group banner-mask">
        <!-- wp:image -->
        <figure class="wp-block-image banner-splash">
            <img src=" <?php echo esc_url($header_splash_image_source) ?> " alt="cow" >
        </figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
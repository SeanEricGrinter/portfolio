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
<div class="wp-block-group moocopy-banner" >
    <?php
        $customizer_util = new Customizer_Util();
        $top_left_decoration_source = $customizer_util->get_customizer_option(Customizer_Util::$TOP_LEFT_DECORATION);
    ?>
    <figure class="wp-block-image top-left-decoration">
        <img class="top-left-decoration" src=" <?php echo esc_url($top_left_decoration_source) ?> " alt="deco" >
    </figure>
    <div class="banner-statement">
        Marketing agency and design studio to help you <strong>stand out</strong> from the herd
    </div>
    <?php
        $header_splash_image_source = $customizer_util->get_customizer_option(Customizer_Util::$BANNER_SPLASH);
    ?>
    <figure class="wp-block-image banner-splash">
        <img class="banner-splash" src=" <?php echo esc_url($header_splash_image_source) ?> " alt="cow" >
    </figure>
</div>
<!-- /wp:group -->
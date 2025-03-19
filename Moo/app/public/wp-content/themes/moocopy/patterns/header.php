<?php
/**
 * Title: Header
 * Slug: moocopy/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with site title and navigation.
 *
 * @package WordPress
 * @subpackage MooCopy
 * @since MooCopy 1.0
 */

// Includes
require_once(get_theme_file_path('includes/customizer_util.php'));
?>

<!-- wp:group -->
<div class="wp-block-group moocopy-header" >
    <?php
        $customizer_util = new Customizer_Util();
        $header_splash_image_source = $customizer_util->get_customizer_option(Customizer_Util::$HEADER_SPLASH);
    ?>
    <!-- wp:image -->
    <figure class="wp-block-image header-splash">
        <img src=" <?php echo esc_url($header_splash_image_source) ?> " alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" >
    </figure>
    <!-- /wp:image -->
     <!-- wp:group -->
    <div class="wp-block-group links-container text-contrast-1">
        <!-- wp:group -->
        <div class="wp-block-group header-link marketing-link">
            <!-- wp:paragraph -->
            MARKETING
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group header-link">
            <!-- wp:paragraph -->
            DESIGN
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group header-link">
            <!-- wp:paragraph -->
            WEBSITES
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group header-link">
            <!-- wp:paragraph -->
            ABOUT
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group header-link">
            <!-- wp:paragraph -->
            CONTACT
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <?php
        // Get the Instagram image
        $instagram_image_source = $customizer_util->get_customizer_option(Customizer_Util::$INSTAGRAM);
    ?>
    <!-- wp:image -->
    <figure class="wp-block-image background-contrast-base social-link header-instagram">
        <img src=" <?php echo esc_url($instagram_image_source) ?> " alt="<?php echo esc_attr( 'https://www.instagram.com/moomarketingdesign/'); ?>" >
    </figure>
    <!-- /wp:image -->

    <?php
        // Get the LinkedIn image
        $linkedin_image_source = $customizer_util->get_customizer_option(Customizer_Util::$LINKEDIN);
    ?>
    <!-- wp:image -->
    <figure class="wp-block-image background-contrast-base social-link header-linkedin">
        <img src=" <?php echo esc_url($linkedin_image_source) ?> " alt="<?php echo esc_attr( 'https://www.linkedin.com/company/moomarketinganddesign/' ); ?>" >
    </figure>
    <!-- /wp:image -->
</div>
<!-- /wp:group -->
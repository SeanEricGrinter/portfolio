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

    function moocopy_header_enqueue_styles() {
        wp_enqueue_style(
            'moocopy-header-style', 
            get_stylesheet_uri() . "/styles/production/header.css"
        );
    }
    add_action( 'wp_enqueue_scripts', 'moocopy_header_enqueue_styles');
?>

<!-- wp:group -->
<div class="wp-block-group moocopy-header" >
    <?php
        $customizer_util = new Customizer_Util();
        $header_splash_image_source = $customizer_util->get_customizer_option(Customizer_Util::$HEADER_SPLASH);
    ?>
    <figure class="wp-block-image header-splash">
        <img class="moo-splash" src=" <?php echo esc_url($header_splash_image_source) ?> " alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" >
    </figure>
    <div class="wp-block-group header-link">
        MARKETING
    </div>
    <div class="wp-block-group header-link">
        DESIGN
    </div>
    <div class="wp-block-group header-link">
        WEBSITES
    </div>
    <div class="wp-block-group header-link">
        ABOUT
    </div>
    <div class="wp-block-group header-link">
        CONTACT
    </div>
    <?php
        // Get the Instagram image
        $instagram_image_source = $customizer_util->get_customizer_option(Customizer_Util::$INSTAGRAM);
    ?>
    <figure class="wp-block-image social-link header-instagram">
        <img class="instagram-logo" src=" <?php echo esc_url($instagram_image_source) ?> " alt="<?php echo esc_attr( 'https://www.instagram.com/moomarketingdesign/'); ?>" >
    </figure>

    <?php
        // Get the LinkedIn image
        $linkedin_image_source = $customizer_util->get_customizer_option(Customizer_Util::$LINKEDIN);
    ?>
    <figure class="wp-block-image social-link header-linkedin">
        <img class="linkin-logo" src=" <?php echo esc_url($linkedin_image_source) ?> " alt="<?php echo esc_attr( 'https://www.linkedin.com/company/moomarketinganddesign/' ); ?>" >
    </figure>
</div>
<!-- /wp:group -->
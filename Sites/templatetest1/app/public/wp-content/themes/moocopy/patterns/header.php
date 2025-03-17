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
	<div class="wp-block-group header-splash" >
        <a href="<?php echo esc_url( home_url( '/' )); ?>">
            <?php
                $customizer_util = new Customizer_Util();
                $image_source = $customizer_util->get_customizer_option(Customizer_Util::$HEADER_SPLASH);
            ?>
            <?php
                // Leaving this here so I can debug later if necessary
                // echo '<div>' . $customizer_util->get_default(Customizer_Util::$HEADER_SPLASH) . '</div>'
            ?>
            <img class="moo-splash" src=" <?php echo esc_url($image_source) ?> " alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
        </a>
    </div>
</div>
<!-- /wp:group -->
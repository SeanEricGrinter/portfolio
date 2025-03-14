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

?>
<!-- wp:group -->
<div class="wp-block-group moocopy-header">
	<!-- wp:group -->
	<div class="wp-block-group header-splash">
    <?php if ( get_theme_mod( 'header_splash' ) ): ?>
        <a href="<?php echo esc_url( home_url( '/' )); ?>">
            <img src="<?php echo esc_attr(get_theme_mod( 'header_splash' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
        </a>
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
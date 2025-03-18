<?php
require_once(get_theme_file_path('includes/util.php'));
require_once(get_theme_file_path('includes/customizer_util.php'));

class Section_Priority
{
    public static $CUSTOM_IMAGES = '-3';
}

/*
 * Add all custom sections to the customizer
 */
function moo_copy_init_sections($wp_customize)
{
    $wp_customize->add_section(
        'custom_images',
        array(
            'title' => 'Custom Images',
            'priority' => Section_Priority::$CUSTOM_IMAGES,
            'description' => 'Customize the images within the theme.'
        )
        );
}

function moo_copy_customizer_custom_images($wp_customize)
{
    $customizer_util = new Customizer_Util();

    // Settings

    // Header Splash
    $wp_customize->add_setting(
        'header_splash',
        array(
            'type' => 'option',
            'default' => $customizer_util->get_default(Customizer_Util::$HEADER_SPLASH)
        )
    );

    // Instagram logo
    $wp_customize->add_setting(
        'instagram',
        array(
            'type' => 'option',
            'default' => $customizer_util->get_default(Customizer_Util::$INSTAGRAM)
        )
    );

    // LinkedIn logo
    $wp_customize->add_setting(
        'linkedin',
        array(
            'type' => 'option',
            'default' => $customizer_util->get_default(Customizer_Util::$LINKEDIN)
        )
    );

    // Top Left Decoration
    $wp_customize->add_setting(
        'top_left_decoration',
        array(
            'type' => 'option',
            'default' => $customizer_util->get_default(Customizer_Util::$TOP_LEFT_DECORATION)
        )
    );

    // Banner Splash
    $wp_customize->add_setting(
        'banner_splash',
        array(
            'type' => 'option',
            'default' => $customizer_util->get_default(Customizer_Util::$BANNER_SPLASH)
        )
    );

    //Controls
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'header_splash',
            array(
                'label' => 'Upload a Header Splash',
                'section' => 'custom_images',
                'settings' => 'header_splash'
            )
        )
    );

    // Instagram logo
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'instagram',
            array(
                'label' => 'Upload an Instagram Logo',
                'section' => 'custom_images',
                'settings' => 'instagram'
            )
        )
    );

    // LinkedIn logo
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'linkedin',
            array(
                'label' => 'Upload a LinkedIn Logo',
                'section' => 'custom_images',
                'settings' => 'linkedin'
            )
        )
    );

    // Top Left Decoration
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'top_left_decoration',
            array(
                'label' => 'Upload a Top left Decoration',
                'section' => 'custom_images',
                'settings' => 'top_left_decoration'
            )
        )
    );

    // Banner Splash
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'banner_splash',
            array(
                'label' => 'Upload a Banner Splash',
                'section' => 'custom_images',
                'settings' => 'banner_splash'
            )
        )
    );
}

add_actions('customize_register', array('moo_copy_init_sections', 'moo_copy_customizer_custom_images'));
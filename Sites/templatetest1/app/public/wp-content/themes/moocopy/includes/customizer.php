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

function moo_copy_header_splash($wp_customize)
{
    $customizer_util = new Customizer_Util();

    // Settings
    $wp_customize->add_setting(
        'header_splash',
        array(
            'type' => 'option',
            'default' => $customizer_util->get_default(Customizer_Util::$HEADER_SPLASH)
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
}

add_actions('customize_register', array('moo_copy_init_sections', 'moo_copy_header_splash'));
<?php

class Customizer_Util
{
    public static $HEADER_SPLASH = 'header_splash';

    private $defaults;

    function __construct()
    {
        $this->defaults = array (
            Customizer_Util::$HEADER_SPLASH => get_theme_file_uri('assets/images/moo_header_splash.svg')
        );
    }

    /**
     * Get a theme default for a setting. If none is found returns an empty string
     */
    public function get_default($setting_name)
    {
        return $this->defaults[$setting_name];
    }

    /**
     * Try and retrieve a user entered setting using get_option
     * 
     * If no setting is found, calls get_default
     */
    public function get_customizer_option($setting_name)
    {
        // Try and get the user entered setting
        $setting = get_option($setting_name);

        // If there is a user entered setting, return it. Else, try and return the default
        return $setting ? $setting : $this->get_default($setting_name);
    }
}
<?php

namespace TrailRunningAcademy\Coordinator;

class Assets
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'scripts'], 100);
    }

    public function scripts()
    {
        wp_enqueue_script('fit-text-js', TRA_THEME_URI . '/assets/js/fit-text.js', '', TRA_THEME_ASSETS_VERSION, ['strategy' => 'defer', 'in_footer' => false]);

        $rootCSS = 'html{ --template-directory: "' . get_template_directory() . '";}';
        wp_add_inline_style('site-style', $rootCSS);
    }

}
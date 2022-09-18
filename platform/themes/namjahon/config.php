<?php

use Botble\Theme\Theme;

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials" and "views"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these events can be overridden by package config.
    |
    */

    'events' => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function (Theme $theme)
        {
            // Partial composer.
            // $theme->partialComposer('header', function($view) {
            //     $view->with('auth', \Auth::user());
            // });

            // You may use this event to set up your assets.

            $theme->asset()->usePath()->add('bootstrap.min', 'css/bootstrap.min.css');
            $theme->asset()->usePath()->add('plugins', 'css/plugins.css');
            $theme->asset()->usePath()->add('style', 'css/style.css');
            $theme->asset()->usePath()->add('custom', 'css/custom.css');

            $theme->asset()->container('footer')->usePath()->add('modernizr-3.6.0.min', 'js/modernizr-3.6.0.min.js');
            $theme->asset()->container('footer')->usePath()->add('jquery.min', 'js/jquery.min.js');
            $theme->asset()->container('footer')->usePath()->add('popper.min', 'js/popper.min.js');
            $theme->asset()->container('footer')->usePath()->add('bootstrap.min', 'js/bootstrap.min.js');
            $theme->asset()->container('footer')->usePath()->add('plugins', 'js/plugins.js');
//            $theme->asset()->container('footer')->usePath()->add('chart.min', 'js/chart.min.js');
//            $theme->asset()->container('footer')->usePath()->add('chart-active', 'js/chart-active.js');
            $theme->asset()->container('footer')->usePath()->add('main', 'js/main.js');

            if (function_exists('shortcode')) {
                $theme->composer(['page', 'post'], function (\Botble\Shortcode\View\View $view) {
                    $view->withShortcodes();
                });
            }
        },

        'beforeRenderLayout' => [
            'default' => function ($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }
        ]
    ]
];

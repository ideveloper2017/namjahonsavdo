<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>

        <!-- Google Font (font-family: 'Karla', sans-serif;) -->
        <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700" rel="stylesheet">
        <!-- Google Font (font-family: 'Rubik', sans-serif;) -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,700" rel="stylesheet">
        {!! Theme::header() !!}
    </head>
    <body class="page-wrapper" @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>
    {!! apply_filters(THEME_FRONT_BODY, null) !!}

    <div id="wrapper" class="wrapper">
        <div class="header sticky-header">

            <!-- Header Top Area -->
            <div class="header-toparea">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-12">
                            <div class="header-topinfo">
                                <ul>
                                    <li><a href="tel://{!! theme_option('phone') !!}"><i class="fa fa-phone"></i>{!! theme_option('phone') !!}</a></li>
                                    <li><a href="mailto://{!! theme_option('email') !!}"><i class="fa fa-envelope-o"></i>
                                            {!! theme_option('email') !!}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5 col-12">
                            <div class="header-topinfo text-right">
                                <ul>
{{--                                    <li><i class="fa fa-clock-o"></i>{!! theme_option('dayofweek') !!}</li>--}}
                                    <li><a href="#" class="bvi-open"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" class="is_mobile"><i class="fa fa-mobile-phone"></i></a></li>
                                    <li> @if (is_plugin_active('language'))
                                            <div class="language d-inline-block font-small {{ $color ?? '' }}">
                                                {!! Theme::partial('language-switcher', ['color' => $color ?? '']) !!}
                                            </div>
                                        @endif</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Header Top Area -->

            <!-- Header Bottom Area -->
            <div class="header-bottomarea">
                <div class="container">
                    <div class="header-bottominner">
                        <div class="header-logo">
                            <a href="{{ route('public.single') }}" class="page-logo">
                                @if (theme_option('logo'))
                                    <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="{{ theme_option('site_title') }}" height="50" >
                                @endif
                            </a>
                        </div>
                        <nav class="tm-navigation">
                            {!!
                               Menu::renderMenuLocation('main-menu', [
                                   'options' => [],
                                   'view'    => 'main-menu',
                               ])
                             !!}
                        </nav>
                        <div class="header-icons">
                            <ul>
                                <li>
                                    <button title="Search" class="header-searchtrigger"><i class="fa fa-search"></i></button>
                                </li>

                            </ul>
                        </div>
                        <div class="single-widget widget-search">
                            <h5 class="widget-title">Search</h5>
                            <form action="#" class="widget-search-form">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <!-- Header Searchform -->
                        <div class="header-searchbox">
                            <form action="#" class="header-searchform">
                                <input type="text" placeholder="Enter search keyword..">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!--// Header Searchform -->

                    </div>
                    <div class="header-mobilemenu clearfix">
                        <div class="tm-mobilenav"></div>
                    </div>
                </div>
            </div>
            <!--// Header Bottom Area -->
        </div>
    @if (!Theme::get('section-name'))
        {!! do_shortcode('[simple-slider key="Home Slider" show_newsletter_form="yes"][/simple-slider]') !!}
    @endif





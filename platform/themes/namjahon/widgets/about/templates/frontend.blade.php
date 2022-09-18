<div class="col-lg-3 col-md-6 col-12">
    <!-- Single Widget (Widget Info) -->
    <div class="single-widget widget-info">
        <a href="index.html" class="widget-info-logo">
            <img src="{{ RvMedia::getImageUrl($config['image']) }}" alt="footer logo">
        </a>
        <p>{{ $config['description'] }}</p>
{{--        <a href="about-us.html" class="tm-button">Read More<b></b></a>--}}
    </div>
    <!--// Single Widget (Widget Info) -->
</div>

{{--<div class="sidebar-widget widget-about mb-50 pt-30 pr-30 pb-30 pl-30 bg-white border-radius-5 has-border  wow fadeInUp animated">--}}
{{--    @if ($config['image'])--}}
{{--        <img class="about-author-img mb-25" src="{{ RvMedia::getImageUrl($config['image']) }}" alt="{{ __('Author') }}">--}}
{{--    @endif--}}
{{--    <h5 class="mb-20">{{ $config['name'] }}</h5>--}}
{{--    <p class="font-medium text-muted">{{ $config['description'] }}</p>--}}
{{--    <strong>{{ __('Follow me') }}: </strong>--}}
{{--    <ul class="header-social-network d-inline-block list-inline color-white mb-20">--}}
{{--        @for ($i = 1; $i <= 5; $i++)--}}
{{--            @if (theme_option('social_' . $i . '_url') && theme_option('social_' . $i . '_name'))--}}
{{--                <li class="list-inline-item"><a style="background: {{ theme_option('social_' . $i . '_color') }}" href="{{ theme_option('social_' . $i . '_url') }}" target="_blank" title="{{ theme_option('social_' . $i . '_name') }}"><i class="elegant-icon {{ theme_option('social_' . $i . '_icon') }}"></i></a></li>--}}
{{--            @endif--}}
{{--        @endfor--}}
{{--    </ul>--}}
{{--</div>--}}

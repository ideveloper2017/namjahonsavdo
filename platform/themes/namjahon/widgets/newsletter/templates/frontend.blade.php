<div class="col-lg-3 col-md-6 col-12">
    <!-- Single Widget (Widget Newsletter) -->
    <div class="single-widget widget-newsletter">
        <h5 class="widget-title">{{ $config['name'] }}</h5>
{{--        <p>{{ __('Subscribe to our newsletter and get our newest updates right on your inbox.') }}</p>--}}
        <form id="tm-mailchimp-form" class="widget-newsletter-form" action="{{ route('public.newsletter.subscribe') }}" method="post">
            @csrf
            @if (setting('enable_captcha') && is_plugin_active('captcha'))
                <div class="form-group">
                    {!! Captcha::display() !!}
                </div>
            @endif
            <input id="email" type="email" name="email" placeholder="{{ __('Enter your email') }}">
            <button id="mc-submit" type="submit" class="tm-button">{{ __('Subscribe') }}<b></b></button>
        </form>
        <!-- Mailchimp Alerts -->
        <div class="tm-mailchimp-alerts">
            <div class="tm-mailchimp-submitting"></div>
            <div class="mailchimp-success"></div>
            <div class="tm-mailchimp-error"></div>
        </div>
        <!--// Mailchimp Alerts -->
    </div>
    <!--// Single Widget (Widget Newsletter) -->
</div>
{{--<div class="col-lg-4 col-md-6">--}}
{{--    <div class="sidebar-widget widget_newsletter wow fadeInUp animated mb-30" data-wow-delay="0.3s">--}}
{{--        <div class="widget-header-2 position-relative mb-30">--}}
{{--            <h5 class="mt-5 mb-30">{{ $config['name'] }}</h5>--}}
{{--        </div>--}}
{{--        <div class="newsletter">--}}
{{--            <p class="font-medium">{{ __('Subscribe to our newsletter and get our newest updates right on your inbox.') }}</p>--}}
{{--            <form class="input-group form-subcriber mt-30 d-flex newsletter-form" action="{{ route('public.newsletter.subscribe') }}" method="post">--}}
{{--                @csrf--}}
{{--                @if (setting('enable_captcha') && is_plugin_active('captcha'))--}}
{{--                    <div class="form-group">--}}
{{--                        {!! Captcha::display() !!}--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--                <input type="email" name="email" class="form-control bg-white font-small" placeholder="{{ __('Enter your email') }}">--}}
{{--                <button class="btn bg-primary text-white" type="submit">{{ __('Subscribe') }}</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="heroslider-wrapper">
    <div class="heroslider-single" data-bgimage="{{ RvMedia::getImageUrl($slider->image, 'small', false, RvMedia::getDefaultImage()) }}" data-black-overlay="8">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="heroslider-content text-center">
                        @if ($slider->title)
                            <div class="heroslider-animatebox">
                                <h1>
                                    <span>{!! clean($slider->title).' '.$key !!}</span>
{{--                                    <b>Consulting Services</b>--}}
                                </h1>
                            </div>
                        @endif
                            @if ($slider->description)
                                <div class="heroslider-animatebox">
                                    <p>{!! clean($slider->description) !!}</p>
                                </div>

                            @endif

                        <div class="heroslider-animatebox" style="display: none">
                            <div class="tm-buttongroup">
                                <a href="about-us.html" class="tm-button">About Us <b></b></a>
                                <a href="services.html" class="tm-button tm-button-white">Our Services
                                    <b></b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<div class="slider-content" style="display: none">--}}
{{--    @if ($slider->title)--}}
{{--        <h1 class="display-2 mb-40">--}}
{{--            {!! clean($slider->title) !!}--}}
{{--        </h1>--}}
{{--    @endif--}}
{{--    @if ($slider->description)--}}
{{--        <p class="mb-65">{!! clean($slider->description) !!}</p>--}}
{{--    @endif--}}
{{--    @if ($shortcode->show_newsletter_form == 'yes' && is_plugin_active('newsletter'))--}}
{{--        <div class="newsletter">--}}
{{--            {!! Theme::partial('newsletter-form') !!}--}}
{{--        </div>--}}
{{--    @endif--}}
{{--</div>--}}

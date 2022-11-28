<div class="tm-section contact-us-area tm-padding-section bg-white">
    <div class="container">
        <div class="row justify-content-center mt-30-reverse">

            <div class="col-lg-4 col-md-6 col-12 mt-30">
                <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-pin"></i>
                                </span>
                    <h5>{{ __('Address') }}</h5>
                    <p>{!! theme_option('address') !!}</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mt-30">
                <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-phone"></i>
                                </span>
                    <h5>{{ __('Phone') }}</h5>
                    <p>{!! theme_option('phone') !!}</p>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mt-30">
                <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-mail"></i>
                                </span>
                    <h5>{{ __('Email') }}</h5>
                    <p>Email: {!! theme_option('email') !!}</p>

                </div>
            </div>

        </div>
    </div>
    <div class="container tm-padding-section-top">
        <div class="row no-gutters">
            <div class="col-lg-7">
                <div class="tm-contact-formwrapper">
                    <h5>{{ __('Contact Us For Any Questions') }}</h5>
                    {!! Form::open(['route' => 'public.send.contact', 'class' => 'contact-form', 'method' => 'POST']) !!}
                        <div class="tm-form-inner">
                            <div class="tm-form-field">
                                <input type="text"  name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}">
                            </div>
                            <div class="tm-form-field">
                                <input type="email"name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}">
                            </div>
                            <div class="tm-form-field">
                                <input type="text" name="subject" value="{{ old('subject') }}" placeholder="{{ __('Subject') }}">
                            </div>
                            <div class="tm-form-field">
                                <input name="phone" value="{{ old('phone') }}" placeholder="{{ __('Phone') }}" type="tel">
                            </div>
                            <div class="tm-form-field">
                                <textarea name="content" cols="30" rows="5"  placeholder="{{ __('Message') }}*">{{ old('content') }}</textarea>
                            </div>
                            @if (setting('enable_captcha') && is_plugin_active('captcha'))
                                <div class="col-md-12">
                                    {!! Captcha::display() !!}
                                </div>
                            @endif
                            <div class="tm-form-field">
                                <button type="submit" class="tm-button">{{ __('Send') }}<b></b></button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                    <div class="contact-form-group"><p>{!! clean(__('The field with (<span style="color:#FF0000;">*</span>) is required.')) !!}</p></div>
                </div>
                <div class="contact-form-group">
                    <div class="contact-message contact-success-message" style="display: none"></div>
                    <div class="contact-message contact-error-message" style="display: none"></div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="tm-contact-map">
                    <div id="google-map">
                        [google-map]Namangan chorsu[/google-map]
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

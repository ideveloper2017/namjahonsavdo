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
                    <h5>Let’s get in touch</h5>
                    {!! Form::open(['route' => 'public.send.contact', 'class' => 'contact-form', 'method' => 'POST']) !!}
                        <div class="tm-form-inner">
                            <div class="tm-form-field">
                                <input type="text" name="name" placeholder="Name*">
                            </div>
                            <div class="tm-form-field">
                                <input type="email" name="email" placeholder="Email*">
                            </div>
                            <div class="tm-form-field">
                                <input type="text" name="subject" placeholder="Subject*">
                            </div>
                            <div class="tm-form-field">
                                <textarea name="message" cols="30" rows="5"  placeholder="{{ __('Message') }}*">{{ old('content') }}</textarea>
                            </div>
                            @if (setting('enable_captcha') && is_plugin_active('captcha'))
                                <div class="col-md-12">
                                    {!! Captcha::display() !!}
                                </div>
                            @endif
                            <div class="tm-form-field">
                                <button type="submit" class="tm-button">Send Message <b></b></button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                    <p class="form-messages"></p>
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
<section class="call-back sec-pad" style="display: none">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12 colmun">
                <div class="call-back-content">
                    <div class="call-back-title">
                        <div class="section-title"><h2>Teskari  Aloqa</h2></div>
                        <div class="title-text"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm temp </p></div>
                    </div>
                    <div class="form-area">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                                    <input type="text" placeholder="Your Name">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                                    <input type="text" placeholder="Phone">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                                    <div class="select-box">
                                        <i class="fa fa-angle-down"></i>
                                        <select class="custom-select-box" id="ui-id-1" style="display: none;">
                                            <option>Select a Topic</option>
                                            <option>Project</option>
                                            <option>Financial</option>
                                            <option>Bima</option>
                                            <option>Insurence</option>
                                        </select><span tabindex="0" id="ui-id-1-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-1-menu" aria-haspopup="true" class="ui-selectmenu-button ui-button ui-widget ui-selectmenu-button-closed ui-corner-all" aria-activedescendant="ui-id-3" aria-labelledby="ui-id-2" aria-disabled="false"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">Select a Topic</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="button">
                                <button class="btn-one style-one radi">Send Request</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

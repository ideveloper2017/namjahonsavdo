<div class="footer fixed-footer">

    <!-- Footer Widgets Area -->
    <div class="footer-toparea tm-padding-section" data-bgimage="{!! Theme::asset()->url('images/bg/footer-bg.jpg') !!}" data-overlay="2">
        <div class="container">
            <div class="row widgets footer-widgets">
                {!! dynamic_sidebar('footer_sidebar_1') !!}
            </div>
        </div>
    </div>
    <!--// Footer Widgets Area -->

    <!-- Footer Copyright Area -->
    <div class="footer-copyrightarea">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <p class="footer-copyright">{!! clean(theme_option('copyright')) !!}</p>
                </div>
                <div class="col-md-4 col-12">
                    <div class="footer-copyrightsocial">

                        <ul>
                            @for ($i = 1; $i <= 5; $i++)
                                @if (theme_option('social_' . $i . '_url') && theme_option('social_' . $i . '_name'))
                                    <li><a style="background: {{ theme_option('social_' . $i . '_color') }}" href="{{ theme_option('social_' . $i . '_url') }}" target="_blank" title="{{ theme_option('social_' . $i . '_name') }}"><i class="elegant-icon {{ theme_option('social_' . $i . '_icon') }}"></i></a></li>
                                @endif
                            @endfor
{{--                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>--}}
{{--                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i--}}
{{--                                        class="fa fa-facebook-f"></i></a></li>--}}
{{--                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>--}}
{{--                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i--}}
{{--                                        class="fa fa-pinterest-p"></i></a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Footer Copyright Area -->

</div>
</div>

{!! Theme::footer() !!}
<script type="text/javascript">
    "use strict";

    $(document).on('click','.is_mobile',function (e){
        e.preventDefault();
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,width=500,height=750,left=100,top=100`;
        window.open('https://namjahonsavdo.uz/', 'test', params)
    });


    new isvek.Bvi();


</script>


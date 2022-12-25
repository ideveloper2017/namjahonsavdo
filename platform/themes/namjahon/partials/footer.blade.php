<div class="footer fixed-footer">

    <!-- Footer Widgets Area -->
    <div class="footer-toparea tm-padding-section" data-bgimage="{!! Theme::asset()->url('images/bg/footer-bg.jpg') !!}" data-overlay="2">
        <div class="container">
            <div class="row widgets footer-widgets">
                {!! dynamic_sidebar('footer_sidebar_1') !!}


                <div class="col-lg-3 col-md-6 col-12">
                <script type="text/javascript" src="//simpoll.ru/embed/framejs/48952c12"></script><noscript><a href="http://simpoll.ru/run/survey/48952c12">Simpoll.ru</a></noscript>
                </div>
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
                        <!-- Yandex.Metrika informer --> <a href="https://metrika.yandex.ru/stat/?id=91733134&amp;from=informer" target="_blank" rel="nofollow"><img src="https://metrika-informer.com/informer/91733134/3_1_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="91733134" data-lang="ru" /></a> <!-- /Yandex.Metrika informer --> <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date(); for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }} k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym"); ym(91733134, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); </script> <!-- /Yandex.Metrika counter -->
                        <ul>
                            @for ($i = 1; $i <= 5; $i++)
                                @if (theme_option('social_' . $i . '_url') && theme_option('social_' . $i . '_name'))
                                    <li><a style="background: {{ theme_option('social_' . $i . '_color') }}" href="{{ theme_option('social_' . $i . '_url') }}" target="_blank" title="{{ theme_option('social_' . $i . '_name') }}"><i class="elegant-icon {{ theme_option('social_' . $i . '_icon') }}"></i></a></li>
                                @endif
                            @endfor
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


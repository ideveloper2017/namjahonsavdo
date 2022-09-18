@if ($sidebar == 'footer_sidebar_1')
    <div class="col-lg-3 col-md-6 col-12">
        <div class="single-widget widget-quicklinks">
        <h5 class="widget-title">{{ $config['name'] }}</h5>

        {!!
                           Menu::generateMenu([
                               'slug'    => $config['menu_id'],
                               'options' => []
                           ])
                       !!}

        @if ($sidebar == 'footer_sidebar_1')
    </div>
    </div>
@endif

    <div class="col-md-3 col-sm-6 col-xs-12 footer-colmun" style="display: none">
        <div class="service-widget footer-widget">
            @else
             @endif
                <div class="footer-title">
                        <h4>{{ $config['name'] }}</h4>
                    </div>

                        {!!
                            Menu::generateMenu([
                                'slug'    => $config['menu_id'],
                                'options' => ['class' => ($config['menu_id'] == 'social' ? 'social social--simple social--widget' : '') . ($sidebar == 'footer_sidebar_2' ? ' list' : '') ]
                            ])
                        !!}


        @if ($sidebar == 'footer_sidebar_1')
    </div>
    </div>
@endif

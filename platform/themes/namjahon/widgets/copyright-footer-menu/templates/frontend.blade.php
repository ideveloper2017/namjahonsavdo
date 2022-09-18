<div class="col-sm-6 col-md-4 footer-links">
    <h3>{{ $config['name'] }}</h3>
    {!! Menu::generateMenu(['slug' => $config['menu_id']]) !!}
</div>

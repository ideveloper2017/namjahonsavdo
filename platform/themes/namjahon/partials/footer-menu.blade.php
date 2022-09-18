
<ul>
    @foreach ($menu_nodes as $key => $row)
        <li @if ($row->has_child) class="dropdown{{ $row->css_class }}" @endif>
            <i class="icofont icofont-check"></i>
            <a href="{{ $row->url }}" target="{{ $row->target }}">
                @if ($row->icon_font)<i class='{{ trim($row->icon_font) }}'></i> @endif{{ $row->title }}
                @if ($row->has_child) <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>@endif
            </a>
            @if ($row->has_child)
                {!!
                    Menu::generateMenu([
                        'menu'       => $menu,
                        'menu_nodes' => $row->child,
                        'view'       => 'footer-menu',
                        'options'    => ['class' => 'dropdown'],
                    ])
                !!}
            @endif
        </li>
    @endforeach
</ul>

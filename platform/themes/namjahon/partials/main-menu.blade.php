<ul {!! clean($options) !!}>
    @foreach ($menu_nodes as $key => $row)
        <li class="@if ($row->has_child) {!! (!$row->parent_id)?"tm-navigation-dropdown":""!!}   @endif {{ $row->css_class }} @if ($row->url == Request::url()) active current @endif" >
            <a  href="{{ $row->url }}" target="{{ $row->target }}">
                @if ($row->icon_font)<i class='{{ trim($row->icon_font) }}'></i> @endif{{ $row->title }}
                    @if ($row->has_child)
                        @if ($row->parent_id) <i class="icofont-rounded-right"></i> @else <i class="icofont-rounded-down"></i> @endif
                    @endif
            </a>
            @if ($row->has_child)
                {!!
                    Menu::generateMenu([
                        'menu'       => $menu,
                        'menu_nodes' => $row->child,
                        'view'       => 'main-menu',
                        'options'    => [],
                    ])
                !!}
            @endif
        </li>
    @endforeach
</ul>

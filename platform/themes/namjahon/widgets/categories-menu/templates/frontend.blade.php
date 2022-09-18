<div class="single-widget widget-categories">
    <h5 class="widget-title">{{ $config['name'] }}</h5>
    <ul>
        @foreach(get_popular_categories(5) as $category)
            <li >
                <a href="{{ $category->url }}">{{ $category->name }}  ({{ $category->posts_count }})</a>
            </li>
        @endforeach

    </ul>
</div>

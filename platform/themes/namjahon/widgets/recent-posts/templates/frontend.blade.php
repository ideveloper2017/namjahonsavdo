@if (is_plugin_active('blog'))
    @php
        $posts = get_recent_posts($config['number_display']);
    @endphp

<div class="col-lg-3 col-md-6 col-12">
        <div class="single-widget widget-recentpost">
            <h5 class="widget-title">{{ $config['name'] }}</h5>
            <ul>
                @foreach ($posts as $post)
                <li>
                    <a href="{{ $post->url }}" class="widget-recentpost-image">
                        <img src="{{ RvMedia::getImageUrl($post->image, 'thumb', false, RvMedia::getDefaultImage()) }}" alt="blog thumbnail">
                    </a>
                    <div class="widget-recentpost-content">
                        <h6><a href="{{ $post->url }}">{{ $post->name }}</a></h6>
                        <span>{{ $post->created_at->translatedFormat(' d F, Y') }}</span>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
     </div>
@endif


@php Theme::set('section-name', $category->name) @endphp
<div class="tm-section blogs-area bg-white tm-padding-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="tm-blog-list sticky-sidebar">
                    <div class="row mt-30-reverse blog-masonry-active">

                        @if ($posts->count() > 0)
                            @foreach ($posts as $post)
                        <div class="col-lg-6 col-md-6 col-12 mt-30 blog-masonry-item">
                            <div class="blog-slider-item">
                                <div class="tm-blog wow fadeInUp">
                                    <div class="tm-blog-image">
                                        <a href="{{ $post->url }}">
                                            <figure><img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="tm-blog-content">
                                        <div class="tm-blog-meta">
                                            @if ($post->author->username)
                                                <span><i class="fa fa-user-o"></i>{{ $post->author->name }}</span>
                                         @endif
                                               <span><i class="fa fa-calendar-o"></i>{{ $post->created_at->translatedFormat('d.M.Y') }}</span>
                                        </div>
                                        <h5><a href="{{ $post->url }}">{{ $post->name }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @else
                            <div class="alert alert-warning">
                                <p>{{ __('There is no data to display!') }}</p>
                            </div>
                        @endif
                    </div>

                    <div class="tm-pagination mt-50">
                        {!! $posts->links() !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="widgets sidebar-widgets sticky-sidebar">
                    {!! dynamic_sidebar('primary_sidebar') !!}
                </div>
            </div>
        </div>
    </div>
</div>
<section class="our-blog news-section blog-page sidebar-page-container" style="display: none">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12 content-side">
                <div class="blog-content">
                    <div class="row">
                        @if ($posts->count() > 0)
                            @foreach ($posts as $post)
                        <div class="col-md-6 col-sm-6 col-xs-12 news-colmun">
                            <div class="single-item wow fadeInUp animated animated animated" style="visibility: visible; animation-name: fadeInUp;">
                                <div class="img-box"><a href="{{ $post->url }}"><figure><img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""></figure></a></div>
                                <div class="news-content">
                                    <div class="date">{{ $post->created_at->translatedFormat('d') }}<div class="text">{{ $post->created_at->translatedFormat('M') }}</div></div>
                                    <ul class="meta">
                                        @if ($post->author->username)
                                            <li><i class="fa fa-user" aria-hidden="true"></i>{{ $post->author->name }}</li>
                                        @endif
                                        <li><i class="fa fa-folder" aria-hidden="true"></i><a href="{{ $category->url }}">{{ $category->name }}</a></li>
                                        <li><i class="fa fa-eye" aria-hidden="true"></i>{{ $post->views }}</li>
                                    </ul>
                                    <h4><a href="{{ $post->url }}">{{ $post->name }}</a></h4>
                                </div>
                            </div>
                        </div>
                       @endforeach

                    </div>

                    <ul class="link-btn">
                        {!! $posts->links() !!}

{{--                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>--}}
{{--                        <li><a href="#" class="active">1</a></li>--}}
{{--                        <li><a href="#">2</a></li>--}}
{{--                        <li><a href="#">3</a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>--}}
                    </ul>
                    @else
                        <div class="alert alert-warning">
                            <p>{{ __('There is no data to display!') }}</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-4 col-sm-8 col-xs-12 sidebar-side">
                <div class="sidebar">
                    <div class="sidebar-search sidebar-widget">
                        <div class="search-box">
                            <input type="text" placeholder="Search...">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>

                    {!! Theme::partial('sidebar') !!}
                </div>
            </div>
        </div>
    </div>
</section>

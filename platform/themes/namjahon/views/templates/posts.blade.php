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
                        {!! $posts->withQueryString()->links() !!}
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
<div class="sidebar-overflow" style="display: none">
    <div class="container">
        <div class="row pad-top">

                <div class="sidebar-padding">
                    @if ($posts->count() > 0)
                        @foreach ($posts as $post)
                    <div class="blog-list">
                        <div class="blog-img">
                            <img src="{{ RvMedia::getImageUrl($post->image, 'small', false, RvMedia::getDefaultImage()) }}" alt="{{ $post->name }}">
                        </div>
                        <div class="blog-text d-sm-flex">
                            <div class="meta-box-wrap col-auto pl-0 mb-3">
                                <a href="#" class="post-date"><i class="icofont icofont-calendar"></i>{{ $post->created_at->translatedFormat('d.F.Y') }}</a>
                            </div>
                            <div class="blog-details">
                                <h3><a href="{{ $post->url }}">{{ $post->name }}</a></h3>
                                <p>{{ $post->description }}</p>
                                <a href="{{ $post->url }}" class="btn-theme bg-orange mt-3">{{ trans('labels.readmore') }} <i class="icofont icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                            @endforeach
                        @endif

                    <div class="pagination">
                        {!! $posts->withQueryString()->links() !!}
                    </div>
                </div>
            </div>
         </div>
    </div>


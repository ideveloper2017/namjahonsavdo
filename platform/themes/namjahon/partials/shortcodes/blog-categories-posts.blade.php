<div class="tm-section blogs-area bg-white tm-padding-section" >
    <div class="container">
        @if (!empty($category))
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10 col-12">
                <div class="tm-section-title text-center">
                    <h2>{{ $category->name }}</h2>
                    <span class="divider animateon"><i class="fa fa-superpowers"></i></span>
                </div>
            </div>
        </div>
        <div class="blog-slider-active tm-slider-arrow tm-slider-arrow-hovervisible slick-initialized slick-slider"><button class="tm-slider-arrow-prev slick-arrow" style=""><i class="fa fa-angle-left"></i></button>

            <!-- Single Blog -->
            <div class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 5200px; transform: translate3d(-1600px, 0px, 0px);">
                    @foreach($category->posts->sortByDesc('id')->take(4) as $post)
                    <div class="blog-slider-item slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 400px;">
                        <div class="tm-blog wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="tm-blog-image"><a href="{{ $post->url }}" tabindex="-1">
                                    <img src="{{ RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage())}}" alt="blog image"></a>
                            </div>
                            <div class="tm-blog-content">
                                <div class="tm-blog-meta">
                                    <span><i class="fa fa-calendar-o"></i>{{ $post->created_at->format('d M, Y') }}</span>
                                </div>
                                <h5><a href="{{ $post->url }}" tabindex="-1">{{ $post->name }}</a></h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <button class="tm-slider-arrow-next slick-arrow" style=""><i class="fa fa-angle-right"></i></button></div>
        @endif
    </div>
</div>
<div class="bg-grey pt-50 pb-50" style="display: none">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if (!empty($category))
                    <div class="post-module-2">
                        <div class="widget-header-1 position-relative mb-30  wow fadeInUp animated">
                            <h5 class="mt-5 mb-30">{{ $category->name }}</h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            <div class="row">
                                @foreach($category->posts->sortByDesc('id')->take(4) as $post)
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            {!! Theme::partial('components.post-card', compact('post')) !!}
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
                <div class="post-module-3" style="display: none">
                    <div class="widget-header-1 position-relative mb-30">
                        <h5 class="mt-5 mb-30">{{ __('Latest posts') }}</h5>
                    </div>
                    <div class="loop-list loop-list-style-1">
                        @foreach(get_latest_posts(3, !empty($category) ? $category->posts->sortByDesc('id')->take(4)->pluck('id')->all() : [], ['slugable', 'categories', 'categories.slugable']) as $post)
                            <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                {!! Theme::partial('components.post-list-item', compact('post')) !!}
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="display: none">
                <div class="widget-area">
                    {!! AdsManager::display('top-sidebar-ads', ['class' => 'mb-30']) !!}
                    {!! dynamic_sidebar('primary_sidebar') !!}
                    {!! AdsManager::display('bottom-sidebar-ads', ['class' => 'mt-30 mb-30']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

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
                                        <a href="blog-details.html">
                                            <figure><img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="tm-blog-content">
                                        <div class="tm-blog-meta">
                                            <span><i class="fa fa-user-o"></i>By <a href="blog.html">Anderson</a></span>
                                            <span><i class="fa fa-calendar-o"></i>October
                                                                15,
                                                                2018</span>
                                        </div>
                                        <h5><a href="blog-details.html">The Most Advance Business Plan</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod
                                            tempor incdidunt ut labore et.</p>
                                        <a href="blog-details.html" class="tm-readmore">Continue Reading...</a>
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

                    <!-- Single Widget -->
                    <div class="single-widget widget-search">
                        <h5 class="widget-title">Search</h5>
                        <form action="#" class="widget-search-form">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <div class="single-widget widget-categories">
                        <h5 class="widget-title">Categories</h5>
                        <ul>
                            <li><a href="blog.html">Business Report</a></li>
                            <li><a href="blog.html">Business Growth</a></li>
                            <li><a href="blog.html">Business Strategy</a></li>
                            <li><a href="blog.html">Financial Advise</a></li>
                            <li><a href="blog.html">Creative Idea</a></li>
                            <li><a href="blog.html">Marketing</a></li>
                        </ul>
                    </div>
                    <!--// Single Widget -->

                    <!-- Single Widget -->
                    <div class="single-widget widget-recentpost">
                        <h5 class="widget-title">Recent Posts</h5>
                        <ul>
                            <li>
                                <a href="blog-details.html" class="widget-recentpost-image">
                                    <img src="assets/images/blog/thumbnails/blog-thumbnail-1.jpg" alt="blog thumbnail">
                                </a>
                                <div class="widget-recentpost-content">
                                    <h6><a href="blog-details.html">Fundamental analysis
                                            services</a></h6>
                                    <span>August 01, 2018</span>
                                </div>
                            </li>
                            <li>
                                <a href="blog-details.html" class="widget-recentpost-image">
                                    <img src="assets/images/blog/thumbnails/blog-thumbnail-2.jpg" alt="blog thumbnail">
                                </a>
                                <div class="widget-recentpost-content">
                                    <h6><a href="blog-details.html">Steps to a successful
                                            Business</a></h6>
                                    <span>August 01, 2018</span>
                                </div>
                            </li>
                            <li>
                                <a href="blog-details.html" class="widget-recentpost-image">
                                    <img src="assets/images/blog/thumbnails/blog-thumbnail-3.jpg" alt="blog thumbnail">
                                </a>
                                <div class="widget-recentpost-content">
                                    <h6><a href="#blog-details.html">Development Progress
                                            Conference</a></h6>
                                    <span>August 01, 2018</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--// Single Widget -->

                    <!-- Single Widget -->
                    <div class="single-widget widget-archives">
                        <h5 class="widget-title">Archives</h5>
                        <ul>
                            <li><a href="blog.html">January 2018</a></li>
                            <li><a href="blog.html">March 2018</a></li>
                            <li><a href="blog.html">April 2018</a></li>
                            <li><a href="blog.html">July 2018</a></li>
                            <li><a href="blog.html">September 2018</a></li>
                            <li><a href="blog.html">October 2018</a></li>
                        </ul>
                    </div>
                    <!--// Single Widget -->

                    <!-- Single Widget -->
                    <div class="single-widget widget-tags">
                        <h5 class="widget-title">Categories</h5>
                        <ul>
                            <li><a href="blog.html">Business</a></li>
                            <li><a href="blog.html">Idea</a></li>
                            <li><a href="blog.html">Service</a></li>
                            <li><a href="blog.html">Clean</a></li>
                            <li><a href="blog.html">Marketing</a></li>
                            <li><a href="blog.html">Agency</a></li>
                            <li><a href="blog.html">Unique</a></li>
                            <li><a href="blog.html">Creative</a></li>
                            <li><a href="blog.html">Clear</a></li>
                            <li><a href="blog.html">Business Plan</a></li>
                            <li><a href="blog.html">Corporate</a></li>
                        </ul>
                    </div>
                    <!--// Single Widget -->

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

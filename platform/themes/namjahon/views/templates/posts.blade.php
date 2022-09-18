<div class="tm-section blogs-area bg-white tm-padding-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">

                <div class="tm-blog-list sticky-sidebar">
                    <div class="row mt-30-reverse blog-masonry-active">
                        <!-- Single Blog -->
                        @if ($posts->count() > 0)
                            @foreach ($posts as $post)
                        <div class="col-lg-6 col-md-6 col-12 mt-30 blog-masonry-item">
                            <div class="blog-slider-item">
                                <div class="tm-blog wow fadeInUp">
                                    <div class="tm-blog-image">
                                        <a href="{{ $post->url }}">
                                            <img src="{{ RvMedia::getImageUrl($post->image, 'small', false, RvMedia::getDefaultImage()) }}" alt="blog image">
                                        </a>
                                    </div>
                                    <div class="tm-blog-content">
                                        <div class="tm-blog-meta">
{{--                                            <span><i class="fa fa-user-o"></i>By <a href="blog.html">Anderson</a></span>--}}
                                            <span><i class="fa fa-calendar-o"></i>{{ $post->created_at->translatedFormat('d.F.Y') }}</span>
                                        </div>
                                        <h5><a href="{{ $post->url }}">{{ $post->name }}</a></h5>
{{--                                        <p>{{ $post->description }}</p>--}}

                                    </div>
                                </div>
                            </div>
                        </div>


                            @endforeach
                        @endif
                    <div class="tm-pagination mt-50">
                        {!! $posts->withQueryString()->links() !!}
                    </div>
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
                    <!--// Single Widget -->

                    <!-- Single Widget -->
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


<section class="wide-tb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="head-main">
                    <h1>{!! clean($title) !!}</h1>
                </div>
            </div>
            <!-- Blog Wrap -->
            @foreach (get_latest_posts(6, [], ['slugable']) as $post)
                <div class="col-sm-4">
                    <div class="blog-wrap">
                        <a href="{{ $post->url }}"><img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""></a>
                        <div class="inner-content">
                            <div class="meta-box">
                                 <span><i class="icofont icofont-calendar"></i>{{ $post->created_at->translatedFormat('d.F.Y') }}</span>
                            </div>
                            <h4 class="h4-md mb-3"><a href="{{ $post->url }}">{{ $post->name }}</a></h4>
                            <p>{{ mb_substr($post->description,0,175) }}</p>
                            <a href="{{ $post->url }}" class="btn-theme bg-navy-blue">{{ trans('labels.readmore') }} <i class="icofont icofont-rounded-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 news-colmun" style="display: none">
                    <div class="single-item wow fadeInUp animated animated animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="img-box"><a href="{{ $post->url }}"><figure><img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt=""></figure></a></div>
                        <div class="news-content">
                            <div class="date">{{ $post->created_at->translatedFormat('d') }}<div class="text">{{ $post->created_at->translatedFormat('M') }}</div></div>
                            <ul class="meta">
                                <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                                <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li>
                            </ul>
                            <h4><a href="{{ $post->url }}">{{ $post->name }}</a></h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


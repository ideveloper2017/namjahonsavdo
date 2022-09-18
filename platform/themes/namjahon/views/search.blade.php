@php Theme::set('section-name', __('Search result for: ') . ' "' . Request::input('q') . '"') @endphp
<div id="body-content">
    <div class="sidebar-overflow">
        <div class="container">
            <div class="row pad-top">

                <div class="col-md-12 col-lg-8">
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

{{--        <article class="post post__horizontal mb-40 clearfix">--}}
{{--            <div class="post__thumbnail">--}}
{{--                <img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt="{{ $post->name }}"><a href="{{ $post->url }}" class="post__overlay"></a>--}}
{{--            </div>--}}
{{--            <div class="post__content-wrap">--}}
{{--                <header class="post__header">--}}
{{--                    <h3 class="post__title"><a href="{{ $post->url }}">{{ $post->name }}</a></h3>--}}
{{--                    <div class="post__meta"><span class="post__created-at"><i class="ion-clock"></i>{{ $post->created_at->translatedFormat('M d, Y') }}</span>--}}
{{--                        @if ($post->author->username)--}}
{{--                            <span class="post__author"><i class="ion-android-person"></i><span>{{ $post->author->name }}</span></span>--}}
{{--                        @endif--}}
{{--                        <span class="post-category"><i class="ion-cube"></i>--}}
{{--                            @if ($post->categories->first())--}}
{{--                                <a href="{{ $post->categories->first()->url }}">{{ $post->categories->first()->name }}</a>--}}
{{--                            @endif--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </header>--}}
{{--                <div class="post__content">--}}
{{--                    <p data-number-line="4">{{ $post->description }}</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </article>--}}
    @endforeach

    <div class="page-pagination text-right">
        {!! $posts->withQueryString()->links() !!}
    </div>
 </div>
@else
    <div class="alert alert-warning">
        <p>{{ __('There is no data to display!') }}</p>
    </div>
@endif
                </div>
                <div class="col-md-12 col-lg-4 sidebar-left order-lg-first">
                    <aside class="sidebar-spacer row">
                    {!! dynamic_sidebar('primary_sidebar') !!}
            </div>
        </div>
    </div>
</div>
</div>

@php
    Theme::set('section-name', $post->name);
    $post->loadMissing('metadata');

    $bannerImage = $post->getMetaData('banner_image', true);

    if ($bannerImage) {
        Theme::set('breadcrumbBannerImage', RvMedia::getImageUrl($bannerImage));
    }
@endphp

<div class="tm-section blogs-area bg-white tm-padding-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="tm-blog tm-blog-details sticky-sidebar">
                    <div class="tm-blog-image">
                        <a href="blog-details.html">
                            <img src="{!! RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) !!}" alt="blog image">
                        </a>
                    </div>
                    <div class="tm-blog-content">
                        <div class="tm-blog-meta">
{{--                            <span><i class="fa fa-user-o"></i>By <a href="blog.html">Anderson</a></span>--}}
                            <span><i class="fa fa-calendar-o"></i>{{ $post->created_at->translatedFormat('d.F.y') }}</span>
{{--                            <span><i class="fa fa-folder-o"></i><a href="blog.html">Business</a></span>--}}
                        </div>
                        <h3>{{ $post->name }}</h3>
                        <p>{!! clean($post->content) !!}</p>
                        @if (defined('GALLERY_MODULE_SCREEN_NAME') && !empty($galleries = gallery_meta_data($post)))
                            {!! render_object_gallery($galleries, ($post->first_category ? $post->first_category->name : __('Uncategorized'))) !!}
                        @endif
                    </div>

                            @if (!$post->tags->isEmpty())
                        <div class="tm-blog-tags">
                                    <span class="tm-blog-tags-title">
                                        <i class="fa fa-tags"></i>
                                    </span>
                            <ul>
                                @php
                                    if (is_plugin_active('language-advanced')) {
                                        $post->tags->loadMissing('translations');
                                    }
                                @endphp
                        @foreach ($post->tags as $tag)
                                    <li><a href="{{ $tag->url }}">{{ $tag->name }}</a></li>
                        @endforeach
                            </ul>
                        </div>
                   @endif

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

<div id="body-content" style="display: none">
    <div class="sidebar-overflow">
        <div class="container">
            <div class="row pad-top">
                <div class="col-md-12 col-lg-8">
                    <div class="sidebar-padding-right">
                        <div class="blog-list">
                            <div class="blog-img">
                                <img src="{!! RvMedia::getImageUrl($post->image, 'medium_large', false, RvMedia::getDefaultImage()) !!}" alt="{{ $post->name }}">
                            </div>
                            <div class="blog-text d-sm-flex">

                                <div class="blog-details">
                                    <div class="meta-box-wrap col-auto pl-0 mb-3">
                                        <a href="#" class="post-date"><i class="icofont icofont-calendar"></i>{{ $post->created_at->translatedFormat('d.F.y') }}</a>
                                    </div>
                                    <h2 class="h2-xl txt-orange mb-3">{{ $post->name }}</h2>
                                    <p>{!! clean($post->content) !!}</p>
                                    @if (defined('GALLERY_MODULE_SCREEN_NAME') && !empty($galleries = gallery_meta_data($post)))
                                        {!! render_object_gallery($galleries, ($post->first_category ? $post->first_category->name : __('Uncategorized'))) !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (!$post->tags->isEmpty())
                        @php
                            if (is_plugin_active('language-advanced')) {
                                $post->tags->loadMissing('translations');
                            }
                        @endphp
                        <span class="post__tags"><i class="ion-pricetags"></i>
                    @foreach ($post->tags as $tag)
                                <a href="{{ $tag->url }}">{{ $tag->name }}</a>
                            @endforeach
                </span>
                    @endif
                </div>
                <!-- Sidebar Left Start -->
                <div class="col-md-12 col-lg-4 sidebar-left single-right">
                    <aside class="sidebar-spacer row">
                        {!! dynamic_sidebar('primary_sidebar') !!}
                    </aside>
                </div><!-- Sidebar Left End -->
            </div>
        </div>

    </div>
</div>

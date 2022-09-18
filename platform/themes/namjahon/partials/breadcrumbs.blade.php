@if (Theme::get('section-name'))
    <div class="tm-breadcrumb-area tm-padding-section text-center" data-overlay="1" data-bgimage="{!! Theme::asset()->url('images/bg/bg-breadcrumb.jpg') !!}" style="background-image: url({!! Theme::asset()->url('images/bg/bg-breadcrumb.jpg') !!});">
        <div class="container">
            <div class="tm-breadcrumb">
                <h2 class="tm-breadcrumb-title">{{ Theme::get('section-name') }}</h2>
                <ul>
                    @foreach (Theme::breadcrumb()->getCrumbs() as $i => $crumb)
                        @if ($i != (count(Theme::breadcrumb()->getCrumbs()) - 1))
                            <li><a href="{{ $crumb['url'] }}">{!! $crumb['label'] !!}</a></li>
                        @else
                            <li><a href="{{ $crumb['url'] }}">{!! $crumb['label'] !!}</a></li>

                        @endif
                    @endforeach
{{--                    <li><a href="index.html">Home</a></li>--}}
{{--                    <li><a href="blog.html">Blogs</a></li>--}}
{{--                    <li>The Most Advance Business Plan</li>--}}
                </ul>
            </div>
        </div>
    </div>
    <section class="breadcrumbs-wrap" style="display:none;">
    <div class="container">
        <ul>
            @foreach (Theme::breadcrumb()->getCrumbs() as $i => $crumb)
                @if ($i != (count(Theme::breadcrumb()->getCrumbs()) - 1))
                    <li><a href="#"><i class="icofont icofont-home"></i></a></li>
                    <li><a href="{{ $crumb['url'] }}">{!! $crumb['label'] !!}</a></li>
                @else
                    <li><a href="{{ $crumb['url'] }}">{!! $crumb['label'] !!}</a></li>

                @endif
            @endforeach

        </ul>
<h1>{{ Theme::get('section-name') }}</h1>
    </div>
</section>
@endif

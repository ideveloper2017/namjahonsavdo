<div class="tm-section funfact-area tm-padding-section tm-parallax" data-bgimage="{!! Theme::asset()->url('images/bg/bg-image-1.jpg') !!}"
     data-overlay="9">
    <div class="container">
        <div class="row tm-funfact-wrapper">
            @foreach($counters as $counter)
            <!-- Single Funfact -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="tm-funfact wow fadeInUp">
                                <span class="tm-funfact-icon">
                                    <i class="flaticon-group"></i>
                                </span>
                    <div class="tm-funfact-content">
                        <span class="odometer" data-count-to="{{ $counter->number }}"></span>
                        <h5>{{ clean($counter->name) }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="statistics-counter-wrap wide-tb-100 m-0" style="display: none">
    <div class="container">
        <div class="row smart-mar">
            @foreach($counters as $counter)
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="stats-wrap">
                        <i class="icofont icofont-globe-alt"></i>
                        <div class="box">{{ clean($counter->name) }}</div>
                        <span class="counter">{{ $counter->number }}</span>
                    </div>
                </div>
            @endforeach

        </div><!-- Statistic Counter End -->
    </div>
</div>

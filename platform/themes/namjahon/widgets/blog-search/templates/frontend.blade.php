@if (is_plugin_active('blog'))
    <div class="single-widget widget-search">
        <h5 class="widget-title">Search</h5>
        <form action="#" class="widget-search-form">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <div class="sidebar-primary col-lg-12 col-md-6" style="display: none">
        <div class="widgets-sidebar">
            <h3 class="h3-md fw-6 mb-4">{{ $config['name'] }}</h3>
            <form role="search" method="get" action="{{ route('public.search') }}" class="sidebar-search">
                <input type="search" class="form-control"  name="q" value="{{ request()->query('q') }}" placeholder="{{ __('Search...') }}">
                <button type="submit" class="btn-theme bg-orange"><i class="icofont icofont-search"></i></button>
            </form>
        </div><!-- Widget End -->
    </div>
@endif

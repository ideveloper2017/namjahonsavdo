{!! Theme::partial('header') !!}

{!! Theme::partial('breadcrumbs') !!}

<main class="page-content">
    <div class="tm-section blogs-area bg-white tm-padding-section">
        <div class="container">
    {!! Theme::content() !!}
        </div>
    </div>
</main>

{!! Theme::partial('footer') !!}

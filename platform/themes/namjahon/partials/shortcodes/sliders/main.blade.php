<div class="heroslider">
    <div class="heroslider-slider heroslider-animted tm-slider-arrow">
        @foreach($sliders as $key=>$slider)
            {!! Theme::partial('shortcodes.sliders.content', compact('slider', 'shortcode','key')) !!}
        @endforeach
    </div>
    <div class="heroslider-slidecounter"></div>
</div>

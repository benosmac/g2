<section
    class='hero min-h-96 m-auto grid max-w-6xl grid-cols-1 items-center gap-10 p-10 sm:grid-cols-[minmax(333px,_1fr)_1fr]'>
    @if ($hero_image)
        <img class="hero-img col-start-1" src={{ $hero_image['url'] }} srcset="">
    @endif
    <span class='hero-text text-balance prose prose-xl max-w-prose sm:col-start-2'>
        {!! $content !!}
        <a href={{ $url }} class="btn">{{ $btn_text }}</a>
    </span>

</section>

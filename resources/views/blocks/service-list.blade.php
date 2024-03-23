<section class=''>
    @if ($services)
        <h2>I want to:</h2>
        <ul class="flex items-center gap-10">
            @foreach ($services as $id)
                @include('partials.service-listitem', ['id' => $id])
            @endforeach
    @endif

</section>

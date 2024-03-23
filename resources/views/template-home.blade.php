{{--
  Template Name: Home Template
--}}

@extends('layouts.app')
@section('content')
    @while (have_posts())
        @php(the_post())
        <section class="p-10">
            @include('partials.content-page')
        </section>
    @endwhile
@endsection

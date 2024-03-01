{{--
  Template Name: Home Template
--}}

@extends('layouts.app')
@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.home-header')
    <section class="p-10">
    @include('partials.content-page')
    </section>
  @endwhile
@endsection

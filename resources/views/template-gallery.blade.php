{{--
  Template Name: Gallery Template
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())


    <div class="w-full h-auto pb-5 px-3 flex flex-col items-center justify-center md:pb-14 md:px-0">
        <div class="w-full h-auto max-w-7xl flex flex-col items-center justify-center">
            <div class="wp-contents w-full h-auto px-2 md:w-2/3 md:px-0">
                @include('partials.page-header')
                @include('partials.content-page')
                <x-flickr-gallery full="true" order="asc" />
            </div>
        </div>
    </div>

    @endwhile
@endsection

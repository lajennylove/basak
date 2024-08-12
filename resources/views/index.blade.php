@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php(the_post())
  <div class="w-full h-auto pb-5 px-3 flex flex-col items-center justify-center md:pb-14 md:px-0">
      <div class="w-full h-auto max-w-7xl flex flex-col items-center justify-center">
          <div class="wp-contents w-full h-auto px-2 md:w-2/3 md:px-0">
            @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
          </div>
      </div>
  </div>
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection

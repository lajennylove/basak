@extends('layouts.app')

@section('content')

    <div class="w-full h-auto py-5 px-3 flex flex-col items-center justify-center md:py-12 md:px-0">
        <div class="w-full h-auto max-w-7xl flex flex-col items-center justify-center">

            <div class="hero-banner w-full h-auto">
                @if ( get_field('hero_banner', 'option') )
                    @php( $hero_banner = get_field('hero_banner', 'option') )
                    <img class="w-full h-48 object-cover md:h-[600px]" src="{{ $hero_banner['url'] }}" alt="{{ $hero_banner['alt'] }}">
                @endif
            </div>

            <div class="w-full h-auto py-5 px-2 md:w-2/3 md:py-16 md:px-0">
                <!-- div class="text-3xl font-DMSerifDisplay font-bold md:text-4xl">This is how it all started…</div -->
                <div class="mt-4 text-xl font-SourceSansPro md:mt-8">
                    {!! get_field('about', 'option') !!}
                </div>

                <x-author-card />
            </div>

        </div>
    </div>

    @if ( get_field('show_flickr_module', 'option') === 'yes' )
        <x-flickr-module />
    @endif

    @if ( get_field('show_lastsposts_module', 'option') === 'yes' )
        <x-lasts-posts />
    @endif

@endsection

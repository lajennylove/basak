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

            <div class="w-full h-auto mt-3 py-5 px-2 md:w-2/3 md:mt-10 md:py-16 md:px-0">
                <div class="text-3xl font-DMSerifDisplay font-bold md:text-4xl">This is how it all started…</div>
                <div class="mt-4 text-xl font-SourceSansPro md:mt-8">
                    {!! get_field('about', 'option') !!}
                </div>

                <x-authorcard />
            </div>

        </div>
    </div>

    <div class="w-full h-auto bg-zinc-50 py-5 px-3 flex flex-col items-center justify-center md:py-14 md:px-0">
        <div class="w-full h-auto max-w-7xl flex flex-col items-center justify-center">
            <x-socialicon icon="flickr" size="w-9 h-9" />
            <div class="mt-3 text-2xl font-DMSerifDisplay font-bold md:mt-5 md:text-4xl">Follow Me On Flickr</div>
            <a href="https://www.flickr.com/people/{!! get_field('flickr_username', 'option') !!}/" target="_blank" class="text-base font-SourceSansPro text-stone-500 md:text-xl">
                &commat;{!! get_field('flickr_username', 'option') !!}
            </a>
            <x-flickrgallery />
        </div>
    </div>

    <div class="w-full h-auto py-5 px-3 flex flex-col items-center justify-center md:py-14 md:px-0">
        <div class="w-full h-auto max-w-7xl flex flex-col items-start justify-center md:flex-row">
        @foreach($posts as $post)
            <div class="w-full h-auto py-5 px-2 flex flex-col items-center justify-center md:w-1/3 md:py-0 md:px-4">
                <div class="my-0 text-2xl font-DMSerifDisplay font-bold md:my-3 md:text-2xl"> {!! $post->post_title !!} </div>
                <div class="min-h-64 font-SourceSansPro md:min-h-72 md:text-xl">
                    <div class="py-2 font-bold"> {{ (new DateTime($post->post_date))->format('F j, Y') }} </div>
                    <div class="py-2 text-stone-500"> {!! get_the_excerpt( $post->ID ) !!} </div>
                </div>
                <a href="{{ get_permalink($post->ID) }}" class="w-full h-auto flex items-center justify-center mt-3 py-3 px-3 bg-black text-base font-SourceSansPro text-white uppercase md:mt-5 md:py-3 md:px-4">Read More</a>
            </div>
        @endforeach
        </div>

    </div>

@endsection

<div class="autor-card w-full h-auto mt-3 py-3  flex flex-row items-center justify-center md:mt-8">
    <div class="w-1/3 h-auto flex items-center justify-center md:w-1/5">
        @if ( get_field('avatar', 'option') )
            @php( $avatar = get_field('avatar', 'option') )
            <img class="w-24 h-24 rounded-full object-cover md:w-32 md:h-32" src="{{ $avatar['url'] }}" alt="{{ $avatar['alt'] }}">
        @endif
    </div>
    <div class="w-2/3 h-auto flex flex-col md:w-4/5">
        <div class="my-0 text-2xl font-DMSerifDisplay font-bold md:my-3 md:text-3xl"> {!! get_field('name', 'option') !!}</div>
        <p class="text-base font-SourceSansPro md:text-xl"> {!! get_field('head_line', 'option') !!}</p>
    </div>
</div>

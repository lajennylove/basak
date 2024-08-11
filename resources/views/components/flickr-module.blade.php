<div class="w-full h-auto bg-zinc-50 py-5 px-3 flex flex-col items-center justify-center md:py-14 md:px-0">
    <div class="w-full h-auto max-w-7xl flex flex-col items-center justify-center">
        <x-socialicon icon="flickr" size="w-9 h-9" />
        <div class="mt-3 text-2xl font-DMSerifDisplay font-bold md:mt-5 md:text-4xl">Follow Me On Flickr</div>
        <a href="https://www.flickr.com/people/{!! get_field('flickr_username', 'option') !!}/" target="_blank" class="text-base font-SourceSansPro text-stone-500 md:text-xl">
            &commat;{!! get_field('flickr_username', 'option') !!}
        </a>
        <x-flickr-gallery order="random" />
    </div>
</div>

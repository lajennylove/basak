<div id="flickr-gallery" class="w-full h-auto py-5 grid grid-cols-2 grid-flow-row gap-4 justify-center md:grid-cols-4 md:py-12">
    @foreach($gallery as $photo)
        <div class="w-full h-auto flex items-center justify-center">
            <img
                class="flickr_image w-40 h-40 object-cover md:w-64 md:h-64 cursor-pointer"
                src="{{ $photo['large'] }} "
                alt="{{ $photo['title'] }}"
                >
        </div>
    @endforeach
</div>
<div id="modal" class="fixed inset-0 z-10 hidden items-center justify-center bg-black bg-opacity-80">
    <div class="modal-overlay w-full h-full absolute top-0 left-0 grid place-items-center">
        <img id="modal-image" class="object-contain h-auto w-full md:w-1/2 bg-white border-8 border-white" src="" alt="">
    </div>
    <button id="modal-close" class="absolute top-4 right-4 text-white text-3xl">&times;</button>
</div>

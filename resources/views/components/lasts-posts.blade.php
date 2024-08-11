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

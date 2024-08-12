@foreach($posts as $post)
    <div class="w-full h-auto py-5 {{ $loop->last ? '' : 'border-b border-b-neutral-200' }}">
        <a href="{{ get_permalink($post->ID) }}">
            <div class="my-0 text-2xl font-DMSerifDisplay font-bold md:my-3 md:text-2xl"> {!! $post->post_title !!} </div>
        </a>
        <div class="font-SourceSansPro md:text-xl">
            <div class="py-2 font-bold"> {{ (new DateTime($post->post_date))->format('F j, Y') }} </div>
            <div class="py-2 text-stone-500"> {!! get_the_excerpt( $post->ID ) !!} </div>
        </div>
    </div>
@endforeach

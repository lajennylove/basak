<div class="w-full h-auto py-5 px-3 flex flex-col items-center justify-center border-t border-b border-t-neutral-200 border-b-neutral-200 md:py-14 md:px-0">
    <div class="w-full h-auto max-w-7xl flex flex-col items-start justify-center md:flex-row">
        <div class="w-full h-auto py-3 px-2 flex flex-col items-start justify-center md:w-1/4 md:py-0 md:px-5">
            <div class="w-full h-auto py-3 text-2xl font-DMSerifDisplay font-bold md:text-2xl">{!! get_field('footer_col_1_title', 'option') !!}</div>
            <p class="text-stone-500">{!! get_field('footer_col_1_content', 'option') !!}</p>
            <div class="w-full h-auto mt-3 py-3 flex flex-row items-center justify-center md:mt-5">
                <a class="w-1/4 h-auto flex items-center justify-center" href="{!! get_field('linkedin', 'option') !!}" target="_blank">
                    <x-socialicon icon="linkedin" size="w-8 h-8" />
                </a>
                <a class="w-1/4 h-auto flex items-center justify-center" href="{!! get_field('facebook', 'option') !!}" target="_blank">
                    <x-socialicon icon="facebook" size="w-8 h-8" />
                </a>
                <a class="w-1/4 h-auto flex items-center justify-center" href="https://www.flickr.com/people/{!! get_field('flickr_username', 'option') !!}/" target="_blank">
                    <x-socialicon icon="flickr" size="w-8 h-8" />
                </a>
            </div>
        </div>
        <div class="w-full h-auto py-3 px-2 flex flex-col items-start justify-center md:w-1/4 md:py-0 md:px-5">
            <div class="w-full h-auto py-3 text-2xl font-DMSerifDisplay font-bold md:text-2xl">{!! get_field('footer_col_2_title', 'option') !!}</div>
            <p class="text-stone-500">{!! get_field('footer_col_2_content', 'option') !!}</p>

        </div>
        <div class="w-full h-auto py-3 px-2 flex flex-col items-start justify-center md:w-1/4 md:py-0 md:px-5">
            <div class="w-full h-auto py-3 text-2xl font-DMSerifDisplay font-bold md:text-2xl">{!! get_field('footer_col_3_title', 'option') !!}</div>
            <p class="text-stone-500">{!! get_field('footer_col_3_content', 'option') !!}</p>
        </div>
        <div class="w-full h-auto py-3 px-2 flex flex-col items-start justify-center md:w-1/4 md:py-0 md:px-5">
            <div class="w-full h-auto py-3 text-2xl font-DMSerifDisplay font-bold md:text-2xl">{!! get_field('footer_col_4_title', 'option') !!}</div>
            <p class="text-stone-500">{!! get_field('footer_col_4_content', 'option') !!}</p>
        </div>
    </div>
</div>
<div class="w-full h-auto py-5 px-3 flex flex-col items-center justify-center md:py-14 md:px-0">
    <div class="w-full h-auto max-w-7xl flex flex-col items-center justify-center md:flex-row">
        Copyright {{ date('Y') }} | {!! bloginfo( 'title' ); !!}
    </div>
</div>
<div class="w-9/12"></div>

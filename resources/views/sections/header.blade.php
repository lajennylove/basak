<header class="w-full h-auto py-5 px-3 flex flex-col items-center justify-center md:py-12 md:px-0">
    <div class="w-full h-auto max-w-7xl flex flex-col items-center justify-center">
        <h2 class="w-full h-auto flex items-center justify-center pb-4 text-4xl font-DMSerifDisplay font-bold md:pb-8 md:text-7xl">
            <a href="{!! bloginfo( 'url' ); !!}">
                {!! bloginfo( 'title' ); !!}
            </a>
        </h2>

        @if ( bloginfo( 'description' ) )
            <p class="w-full h-auto flex items-center justify-center text-3xl font-SourceSansPro md:text-2xl">
                {!! bloginfo( 'description' ); !!}
            </p>
        @endif

        @if ( has_nav_menu('primary_navigation') )
            <div class="w-full h-auto flex items-center justify-start mt-5 py-2 border-t border-b border-t-neutral-200 border-b-neutral-200 md:justify-center md:mt-16 md:py-5">
                <div id="menu_button" class="w-1/6 flex items-center justify-center md:hidden">
                    <div class="text-gray-500 w-10 h-10 relative focus:outline-none">
                        <span class="sr-only">Open main menu</span>
                        <div class="block w-5 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <span id="menu_top" aria-hidden="true"
                                    class="block absolute h-1 w-7 bg-black rounded-lg transform transition duration-500 ease-in-out -translate-y-1.5"></span>
                            <span id="menu_middle" aria-hidden="true"
                                    class="block absolute h-1 w-7 bg-black rounded-lg transform transition duration-500 ease-in-out"></span>
                            <span id="menu_bottom" aria-hidden="true"
                                    class="block absolute h-1 w-7 bg-black rounded-lg transform transition duration-500 ease-in-out translate-y-1.5"></span>
                        </div>
                    </div>
                </div>
                <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                    {!! wp_nav_menu([
                        'menu_id'           => 'main-menu',
                        'theme_location'    => 'primary_navigation',
                        'container_class'   => 'nav-container relative flex-col items-center justify-center md:justify-center',
                        'menu_class'        => 'menu w-80 mb-3 hidden absolute bg-white opacity-100 flex-row items-center justify-start text-base border-t border-b border-t-neutral-200 border-b-neutral-200 md:w-auto md:mb-0 md:relative md:text-base md:flex md:flex-row md:bg-transparent md:border-t-0 md:border-b-0',
                        'li_class'          => 'w-full px-3 py-2 group flex items-center justify-start cursor-pointer md:w-auto md:justify-center md:px-5 hover:bg-neutral-100',
                    ]) !!}
                </nav>
            </div>
        @endif

    </div>
</header>

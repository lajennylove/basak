<article @php(post_class('h-entry'))>
  <header>
    <h1 class="p-name mt-6 text-2xl font-DMSerifDisplay font-bold md:mt-9 md:text-4xl">
      {!! $title !!}
    </h1>

    @include('partials.entry-meta')
  </header>

  <div class="e-content pb-8">
    @php(the_content())
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>

  @php(comments_template())
</article>

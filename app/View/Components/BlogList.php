<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogList extends Component
{
    public array $posts;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Get the number of posts to display
        $post_per_page = get_field('items_to_display', get_the_ID() ) ?: 3;

        // Get the order by
        $order_by = get_field('orderby', get_the_ID() ) ?: 'desc';

        // Get the posts
        $args = array(
            'posts_per_page' => $post_per_page,
            'orderby' => 'date',
            'order' => $order_by,
        );

        $this->posts = query_posts( $args );
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog-list');
    }
}

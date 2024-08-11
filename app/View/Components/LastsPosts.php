<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LastsPosts extends Component
{
    public array $posts;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $args = array(
            'posts_per_page' => 3,
            'orderby' => 'title',
            'order' => 'ASC'
        );

        $this->posts = query_posts( $args );
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.lasts-posts');
    }
}

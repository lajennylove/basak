<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Providers\FlickrProvider;

class FlickrGallery extends Component
{

    public array $gallery = array();

    /**
     * Create a new component instance.
     *
     * @param bool $full
     * @param string $order
     */
    public function __construct( bool $full = false, string $order = "desc" )
    {

        // Get the Flickr Grid amount from the options page if full is false
        $grid = match( $full ) {
            true => -1,
            false => get_field("flickr_grid", "option") ?? 8,
        };

        // Initialize the Flickr Provider
        $this->gallery = (new FlickrProvider())->getImages( $grid, $order );
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.flickr-gallery');
    }
}

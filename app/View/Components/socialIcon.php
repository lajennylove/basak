<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class socialIcon extends Component
{
    public string $icon;
    public string $size;
    public string $color;

    /**
     * Create a new component instance.
     */
    public function __construct( string $icon, string $size = "w-7 h-7", string $color = "fill-black" )
    {
        $this->icon = $icon;
        $this->size = $size;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.social-icon');
    }
}

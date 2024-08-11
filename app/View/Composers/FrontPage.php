<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class FrontPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'front-page',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        //
    }
}

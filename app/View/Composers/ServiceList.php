<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class ServiceList extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'blocks.service-list'
    ];
    public function with()
    {
        return [
            'services' => $this->services(),
        ];
    }

    public function services()
    {
        return get_field('services');
    }
}

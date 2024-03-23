<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Hero extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'blocks.hero',
    ];
    public function with()
    {
        return [
            'hero' => $this->hero(),
            'heroTagline' => $this->heroTagline(),
            'heroBtn' => $this->heroBtn()
        ];
    }

    public function hero()
    {
        return get_field('hero');
    }

    public function heroTagline()
    {
        return get_field('hero_tagline');
    }
    public function heroBtn()
    {
        return get_field('hero_btn');
    }
}

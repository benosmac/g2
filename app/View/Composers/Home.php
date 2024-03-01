<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Home extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-home',
    ];
public function with(){
    return [
        'hero' => $this->hero(),
        'heroTagline' => $this->heroTagline()
    ];
}

    public function hero() { 
        return get_field('hero'); 
    }

    public function heroTagline() { 
         return get_field('hero_tagline'); 
        //return 'AWWWW'; 
    }

}

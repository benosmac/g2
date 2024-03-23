<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Service extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'service',
        'partials.service-listitem',
    ];
    public function with()
    {
        return [
            'intent' => $this->getFieldOutsideLoop('intent'),
            'description' => $this->getFieldOutsideLoop('description'),
            'icon' => $this->getFieldOutsideLoop('icon'),
        ];
    }
    /** 
     * Retrieves the ID if needed and returns the field value
     *
     * @return mixed
     */

    public function getFieldOutsideLoop($field)
    {
        $currentView = $this->view->name();
        $currentView == 'service' ? $id = get_the_ID() : $id = $this->data->get('id');
        return get_field($field, $id);
    }
}

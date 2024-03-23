<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class Service extends Field
{
    /**
     * The field group.
     */
    public function fields(): array
    {
        $service = Builder::make('service');

        $service
            ->setLocation('post_type', '==', 'service');

        $service
            ->addText('intent')
            ->addTextarea('description')
            ->addImage('icon');

        return $service->build();
    }
}

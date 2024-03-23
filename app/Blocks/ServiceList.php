<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class ServiceList extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Service List';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Displays a list of services from the services post type.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'formatting';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'editor-ul';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = ['page'];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The ancestor block type allow list.
     *
     * @var array
     */
    public $ancestor = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'preview';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = '';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => false,
        'align_text' => false,
        'align_content' => false,
        'full_height' => false,
        'anchor' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
        'color' => [
            'background' => false,
            'text' => false,
            'gradient' => false,
        ],
    ];

    /**
     * The block styles.
     *
     * @var array
     */
    public $styles = ['light', 'dark'];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [

        'services' => [],
    ];

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'services' => $this->getServices(),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $serviceList = Builder::make('serviceList');

        $serviceList
            ->addPostObject('services', [
                'label' => 'Select Services',
                'post_type' => ['service'],
                'instructions' => 'Select services to be included in the list.',
                'multiple' => 1,
                'return_format' => 'id',
            ]);

        return $serviceList->build();
    }

    /**
     * Retrieve the field
     *
     * @return string
     */

    public function getServices()
    {
        return get_field('services');
    }
}

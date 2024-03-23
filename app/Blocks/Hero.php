<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class Hero extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Hero';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Hero block.';

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
        'align' => true,
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

        'content' => 'Some content',
        'hero_image' => '',
        'btn_text' => 'Get started',
        'url' => '/',
    ];

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'content' => $this->content(),
            'hero_image' => $this->hero_image(),
            'btn_text' => $this->btn_text(),
            'url' => $this->url(),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $hero = Builder::make('hero');

        $hero
            ->addWysiwyg('content')
            ->addImage('hero_image')
            ->addText('btn_text')
            ->addPageLink('url');

        return $hero->build();
    }

    /**
     * Retrieve the field
     *
     * @return string
     */

    public function content()
    {
        return get_field('content') ?: $this->example['content'];
    }

    /**
     * Retrieve the field
     *
     * @return array
     */

    public function hero_image()
    {
        return get_field('hero_image') ?: $this->example['hero_image'];
    }

    /**
     * Retrieve the fields
     *
     * @return string
     */

    public function btn_text()
    {
        return get_field('btn_text') ?: $this->example['btn_text'];
    }

    /**
     * Retrieve the fields
     *
     * @return string
     */

    public function url()
    {
        return get_field('url') ?: $this->example['url'];
    }
}

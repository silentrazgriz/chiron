<?php

declare(strict_types=1);


namespace Gaia\Chiron\Component;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

/**
 * Class CollectionRenderer
 * @package App\Component
 */
class CollectionList
{
    /**
     * @var string
     */
    protected $title = 'Table';

    /**
     * @var array
     */
    protected $fields = [];

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var string
     */
    protected $source;

    /**
     * CollectionRenderer constructor.
     * @param string $title
     * @param array $fields
     * @param array $options
     */
    public function __construct(
        string $title = '',
        array $fields = [],
        array $options = []
    ) {
        $this->title = $title;
        $this->fields = $fields;
        $this->options = array_replace_recursive(
            config('chiron.collections'),
            $options
        );
    }

    /**
     * @param string $source
     */
    public function setSource(string $source)
    {
        $this->source = $source;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('chiron::core', [
            'chiron' => $this->toArray()
        ]);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        if ($this->options['actions']['detail'] || $this->options['actions']['update'] || $this->options['actions']['destroy']) {
            array_push($this->fields, [
                'data' => 'action',
                'label' => 'Action',
                'type' => 'html',
                'orderable' => false,
                'searchable' => false
            ]);
        }

        return [
            'title' => $this->title,
            'fields' => $this->fields,
            'options' => $this->options,
            'source' => $this->source,
        ];
    }
}
<?php

declare(strict_types=1);


namespace Gaia\Chiron\component;

use Illuminate\Database\Eloquent\Collection;
use Yajra\DataTables\CollectionDataTable;

class FormatTransformer
{
    public static function transform(CollectionList $list, CollectionDataTable $data)
    {
        $fields = $list->getFields();

        foreach ($fields as $field) {
            $data->editColumn($field['data'], function ($item) use ($field) {
                if ($field['type'] == 'number') {
                    $item = number_format($item);
                } else if ($field['type'] == 'capacity') {
                    $item = number_format($item, 3);
                }

                if (isset($field['prefix'])) {
                    $item = $field['prefix'].' '.$item;
                }
                if (isset($field['suffix'])) {
                    $item = $item.' '.$field['suffix'];
                }

                return $item;
            });
        }

        return $data;
    }
}
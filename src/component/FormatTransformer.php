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
            if (!in_array($field['type'], ['text', 'html'])) {
                $data->editColumn($field['data'], function ($item) use ($field) {
                    $target = data_get($item, $field['data']);

                    if ($field['type'] == 'number') {
                        $target = number_format(floatval($target), 0, '.', ' ');
                    } else if ($field['type'] == 'capacity') {
                        $target = number_format(floatval($target), 3, '.', ' ');
                    }

                    if (isset($field['prefix'])) {
                        $target = $field['prefix'] . ' ' . $target;
                    }
                    if (isset($field['suffix'])) {
                        $target = $target . ' ' . $field['suffix'];
                    }

                    return $target;
                });
            }
        }

        return $data;
    }
}
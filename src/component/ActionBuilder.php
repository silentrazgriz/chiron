<?php
declare(strict_types=1);


namespace Gaia\Chiron\component;

use Illuminate\Database\Eloquent\Collection;

class ActionBuilder
{
    public static function build(CollectionList $list, Collection $data)
    {
        $options = $list->getOptions();
        if (!$options['actions']['detail'] && !$options['actions']['update'] && !$options['actions']['destroy']) {
            return;
        }
        
        $data->map(function (&$item) use ($list) {
            $item->action = view(
                    'chiron::components.rows.action',
                    array_merge(
                        $list->toArray(),
                        ['collection' => $item]
                    )
                )->render();
            $item->action = preg_replace('/\s+/', ' ', $item->action);
            $item->action = str_replace('> <', '><', $item->action);
            $item->action = str_replace(' >', '>', $item->action);
        });

        return $data;
    }
}
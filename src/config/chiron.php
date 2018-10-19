<?php

return [
    'collections' => [
        'actions' => [
            'detail' => false,
            'store' => true,
            'update' => false,
            'destroy' => false,
            'search' => false
        ],
        'route' => [
            'default' => 'root',
            'show' => null,
            'create' => null,
            'update' => null,
            'destroy' => null
        ],
    ],
    'paginate' => [
        'per-page' => 15
    ]
];
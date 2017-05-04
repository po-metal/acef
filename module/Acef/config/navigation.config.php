<?php

return [
    'navigation' => [
        'default' => [
                [
                'label' => 'Clientes',
                'detail' => '',
                'icon' => 'glyphicon glyphicon-user',
//                'permission' => '',
                'route' => 'Acef/Clientes/Grid',
            ],
                [
                'label' => 'Estado',
                'detail' => '',
                'icon' => 'glyphicon glyphicon-stats',
//                'permission' => '',
                'route' => 'Acef/Estados/Grid',
            ],
                [
                'label' => 'Productos',
                'detail' => '',
                'icon' => 'glyphicon glyphicon-list-alt',
//                'permission' => '',
                'route' => 'Acef/Productos/Grid',
            ],
                [
                'label' => 'Bitacora',
                'detail' => '',
                'icon' => 'glyphicon glyphicon-book',
//                'permission' => '',
                'route' => 'Acef/BitacoraCliente/Grid',
            ],
        ],
    ],
];

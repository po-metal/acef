<?php

return [
    'navigation' => [
        'default' => [
            [
                'label' => 'Clientes',
                'detail' => '',
                'icon' => '',
                'permission' => 'general-editar',
                'route' => 'Acef/Clientes/Grid',
            ],
            [
                'label' => 'Estado',
                'detail' => '',
                'icon' => '',
                'permission' => '',
                'route' => 'Acef/Estados/Grid',
            ],
            [
                'label' => 'Productos',
                'detail' => '',
                'icon' => '',
                'permission' => '',
                'route' => 'Acef/Productos/Grid',
            ],
            [
                'label' => 'Bitacora',
                'detail' => '',
                'icon' => '',
                'permission' => '',
                'route' => 'Acef/BitacoraCliente/Grid',
            ],
        ],
    ],
];
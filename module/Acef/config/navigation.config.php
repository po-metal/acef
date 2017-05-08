<?php

return [
    'navigation' => [
        'default' => [
            [
                'label' => 'INICIO',
                'detail' => '',
                'icon' => '',
                'uri' => '',
                'pages' => [
                    [
                        'label' => 'Clientes',
                        'detail' => '',
                        'icon' => 'fa fa-users',
                        'route' => 'Acef/Clientes/Grid',
                    ],
                    [
                        'label' => 'Tablas Maestras',
                        'detail' => '',
                        'icon' => 'fa fa-cog',
                        'route' => 'Acef/TablasMaestras/Main',
                        'pages' => [
                            [
                                'label' => 'Tipo de Estados',
                                'detail' => '',
                                'icon' => '',
                                'route' => 'Acef/Estados/Grid',
                            ],
                            [
                                'label' => 'Tipo de Productos',
                                'detail' => '',
                                'icon' => '',
                                'route' => 'Acef/TipoProducto/Grid',
                            ],
                        ],
                    ],
                ],
                'route' => 'Acef/Inicio/Main',
            ],
        ],
    ],
];
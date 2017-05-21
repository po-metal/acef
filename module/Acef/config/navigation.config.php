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
                        'label' => 'Configuración',
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
                    [
                        'label' => 'Administración',
                        'detail' => '',
                        'icon' => 'fa fa-delicious',
                        'permission' => 'general-admin',
                        'uri' => '',
                        'pages' => [
                            [
                                'label' => 'Usuarios',
                                'detail' => '',
                                'icon' => '',
                                'permission' => 'general-admin',
                                'uri' => '/admin/users',
                            ],
                        ],
                    ],
                ],
                'route' => 'Acef/Inicio/Main',
            ],
        ],
    ],
];
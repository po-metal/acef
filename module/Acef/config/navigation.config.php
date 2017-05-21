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
                                'label' => 'Estados',
                                'detail' => '',
                                'icon' => '',
                                'route' => 'Acef/Estados/Grid',
                            ],
                            [
                                'label' => 'Productos',
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
                    [
                        'label' => 'Simulación',
                        'detail' => '',
                        'icon' => 'fa fa-coffee',
                        'route' => 'Acef/CalculoDeuda/Simulador',
                    ],
                ],
                'route' => 'Acef/Inicio/Main',
            ],
        ],
    ],
];
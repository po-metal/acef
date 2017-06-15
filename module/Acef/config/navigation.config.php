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
                            [
                                'label' => 'Tipo de Cliente',
                                'detail' => '',
                                'icon' => '',
                                'route' => 'Acef/TipoClientes/Grid',
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
                        'label' => 'Simulador Deudas',
                        'detail' => '',
                        'icon' => 'fa fa-pencil-square-o',
                        'route' => 'Acef/CalculoDeuda/Simulador',
                        'pages' => [
                            [
                                'label' => 'Refinanciacion',
                                'detail' => '',
                                'icon' => '',
                                'permission' => 'general-editar',
                                'route' => 'Acef/CalculoDeuda/Refinanciacion',
                            ],
                            [
                                'label' => 'Actualización',
                                'detail' => '',
                                'icon' => '',
                                'permission' => 'general-editar',
                                'route' => 'Acef/CalculoDeuda/Actualizacion',
                            ],
                        ],
                    ],
                ],
                'route' => 'Acef/Inicio/Main',
            ],
        ],
    ],
];
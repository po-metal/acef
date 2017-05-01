<?php

return [
    'router' => [
        'routes' => [
            'Acef' => [
                'type' => 'literal',
                'mayTerminate' => false,
                'options' => [
                    'route' => '/acef',
                    'defaults' => [
                        'controller' => \Acef\Controller\ClientesController::CLASS,
                        'action' => 'grid',
                    ],
                ],
                'child_routes' => [
                    'Clientes' => [
                        'type' => 'literal',
                        'mayTerminate' => false,
                        'options' => [
                            'route' => '/clientes',
                            'defaults' => [
                                'controller' => \Acef\Controller\ClientesController::CLASS,
                                'action' => 'grid',
                            ],
                        ],
                        'child_routes' => [
                            'Grid' => [
                                'type' => 'segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/grid',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\ClientesController::CLASS,
                                        'action' => 'grid',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Estados' => [
                        'type' => 'literal',
                        'mayTerminate' => false,
                        'options' => [
                            'route' => '/estados',
                            'defaults' => [
                                'controller' => \Acef\Controller\EstadosController::CLASS,
                                'action' => 'grid',
                            ],
                        ],
                        'child_routes' => [
                            'Grid' => [
                                'type' => 'segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/grid',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\EstadosController::CLASS,
                                        'action' => 'grid',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Productos' => [
                        'type' => 'literal',
                        'mayTerminate' => false,
                        'options' => [
                            'route' => '/productos',
                            'defaults' => [
                                'controller' => \Acef\Controller\ProductosController::CLASS,
                                'action' => 'grid',
                            ],
                        ],
                        'child_routes' => [
                            'Grid' => [
                                'type' => 'segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/grid',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\ProductosController::CLASS,
                                        'action' => 'grid',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'BitacoraCliente' => [
                        'type' => 'literal',
                        'mayTerminate' => false,
                        'options' => [
                            'route' => '/bitacora-cliente',
                            'defaults' => [
                                'controller' => \Acef\Controller\BitacoraClienteController::CLASS,
                                'action' => 'grid',
                            ],
                        ],
                        'child_routes' => [
                            'Grid' => [
                                'type' => 'segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/grid',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\BitacoraClienteController::CLASS,
                                        'action' => 'grid',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
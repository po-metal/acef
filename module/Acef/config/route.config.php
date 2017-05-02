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
                    'ManagerCliente' => [
                        'type' => 'literal',
                        'mayTerminate' => false,
                        'options' => [
                            'route' => '/manager-cliente',
                            'defaults' => [
                                'controller' => \Acef\Controller\ManagerClienteController::CLASS,
                                'action' => 'main',
                            ],
                        ],
                        'child_routes' => [
                            'Main' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/main/:clienteId',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\ManagerClienteController::CLASS,
                                        'action' => 'main',
                                    ],
                                ],
                            ],
                            'Productos' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/productos/:clienteId',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\ManagerClienteController::CLASS,
                                        'action' => 'productos',
                                    ],
                                ],
                            ],
                            'Bitacoras' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/bitacoras/:clienteId',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\ManagerClienteController::CLASS,
                                        'action' => 'bitacoras',
                                    ],
                                ],
                            ],
                            'EditarCliente' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/editar-cliente/:clienteId',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\ManagerClienteController::CLASS,
                                        'action' => 'editarCliente',
                                    ],
                                ],
                            ],
                            'VerCliente' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/ver-cliente/:clienteId',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\ManagerClienteController::CLASS,
                                        'action' => 'verCliente',
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
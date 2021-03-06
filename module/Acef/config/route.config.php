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
                            'GetClientes' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/get-clientes/:nombreCliente',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\ManagerClienteController::CLASS,
                                        'action' => 'getClientes',
                                    ],
                                ],
                            ],
                            'Refinanciacion' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/refinanciacion/:clienteId',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\ManagerClienteController::CLASS,
                                        'action' => 'refinanciacion',
                                    ],
                                ],
                            ],
                            'Pagos' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/pagos/:clienteId',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\ManagerClienteController::CLASS,
                                        'action' => 'pagos',
                                    ],
                                ],
                            ],
                            'Deuda' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/deuda/:clienteId',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\ManagerClienteController::CLASS,
                                        'action' => 'deuda',
                                    ],
                                ],
                            ],
                            'Deudas' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/deudas/:clienteId',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\ManagerClienteController::CLASS,
                                        'action' => 'deudas',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Inicio' => [
                        'type' => 'Literal',
                        'mayTerminate' => false,
                        'options' => [
                            'route' => '/inicio',
                            'defaults' => [
                                'controller' => \Acef\Controller\InicioController::CLASS,
                                'action' => 'main',
                            ],
                        ],
                        'child_routes' => [
                            'Main' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/main',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\InicioController::CLASS,
                                        'action' => 'main',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'TipoProducto' => [
                        'type' => 'Literal',
                        'mayTerminate' => false,
                        'options' => [
                            'route' => '/tipo-producto',
                            'defaults' => [
                                'controller' => \Acef\Controller\TipoProductoController::CLASS,
                                'action' => 'grid',
                            ],
                        ],
                        'child_routes' => [
                            'Grid' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/grid',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\TipoProductoController::CLASS,
                                        'action' => 'grid',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'TablasMaestras' => [
                        'type' => 'Literal',
                        'mayTerminate' => false,
                        'options' => [
                            'route' => '/tablas-maestras',
                            'defaults' => [
                                'controller' => \Acef\Controller\TablasMaestrasController::CLASS,
                                'action' => 'main',
                            ],
                        ],
                        'child_routes' => [
                            'Main' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/main',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\TablasMaestrasController::CLASS,
                                        'action' => 'main',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'CalculoDeuda' => [
                        'type' => 'Literal',
                        'mayTerminate' => false,
                        'options' => [
                            'route' => '/calculo-deuda',
                            'defaults' => [
                                'controller' => \Acef\Controller\CalculoDeudaController::CLASS,
                                'action' => 'simulador',
                            ],
                        ],
                        'child_routes' => [
                            'Simulador' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/simulador',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\CalculoDeudaController::CLASS,
                                        'action' => 'simulador',
                                    ],
                                ],
                            ],
                            'Refinanciacion' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/refinanciacion',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\CalculoDeudaController::CLASS,
                                        'action' => 'refinanciacion',
                                    ],
                                ],
                            ],
                            'Actualizacion' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/actualizacion',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\CalculoDeudaController::CLASS,
                                        'action' => 'actualizacion',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'TipoClientes' => [
                        'type' => 'Literal',
                        'mayTerminate' => false,
                        'options' => [
                            'route' => '/tipo-clientes',
                            'defaults' => [
                                'controller' => \Acef\Controller\TipoClientesController::CLASS,
                                'action' => 'grid',
                            ],
                        ],
                        'child_routes' => [
                            'Grid' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/grid',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\TipoClientesController::CLASS,
                                        'action' => 'grid',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'DeudaRefinanciacion' => [
                        'type' => 'Literal',
                        'mayTerminate' => false,
                        'options' => [
                            'route' => '/deuda-refinanciacion',
                            'defaults' => [
                                'controller' => \Acef\Controller\DeudaRefinanciacionController::CLASS,
                                'action' => 'form',
                            ],
                        ],
                        'child_routes' => [
                            'Form' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/form/:clienteId',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\DeudaRefinanciacionController::CLASS,
                                        'action' => 'form',
                                    ],
                                ],
                            ],
                            'Grid' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/grid',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\DeudaRefinanciacionController::CLASS,
                                        'action' => 'grid',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'DeudaActualizacion' => [
                        'type' => 'Literal',
                        'mayTerminate' => false,
                        'options' => [
                            'route' => '/deuda-actualizacion',
                            'defaults' => [
                                'controller' => \Acef\Controller\DeudaActualizacionController::CLASS,
                                'action' => 'form',
                            ],
                        ],
                        'child_routes' => [
                            'Form' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/form/:clienteId',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\DeudaActualizacionController::CLASS,
                                        'action' => 'form',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Pago' => [
                        'type' => 'Literal',
                        'mayTerminate' => false,
                        'options' => [
                            'route' => '/pago',
                            'defaults' => [
                                'controller' => \Acef\Controller\PagoController::CLASS,
                                'action' => 'grid',
                            ],
                        ],
                        'child_routes' => [
                            'Grid' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/grid',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\PagoController::CLASS,
                                        'action' => 'grid',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Deuda' => [
                        'type' => 'Literal',
                        'mayTerminate' => false,
                        'options' => [
                            'route' => '/deuda',
                            'defaults' => [
                                'controller' => \Acef\Controller\DeudaController::CLASS,
                                'action' => 'grid',
                            ],
                        ],
                        'child_routes' => [
                            'Grid' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/grid',
                                    'defaults' => [
                                        'controller' => \Acef\Controller\DeudaController::CLASS,
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
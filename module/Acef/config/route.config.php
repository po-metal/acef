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
                ],
            ],
        ],
    ],
];
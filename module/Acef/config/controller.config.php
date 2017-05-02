<?php

return array(
    'controllers' => array(
        'factories' => array(
            \Acef\Controller\ClientesController::class => \Acef\Factory\Controller\ClientesControllerFactory::class,
            \Acef\Controller\EstadosController::class => \Acef\Factory\Controller\EstadosControllerFactory::class,
            \Acef\Controller\ProductosController::class => \Acef\Factory\Controller\ProductosControllerFactory::class,
            \Acef\Controller\BitacoraClienteController::class => \Acef\Factory\Controller\BitacoraClienteControllerFactory::class,
            \Acef\Controller\ManagerController::class => \Acef\Factory\Controller\ManagerControllerFactory::class,
            \Acef\Controller\ManagerClienteController::class => \Acef\Factory\Controller\ManagerClienteControllerFactory::class,
        ),
    ),
);
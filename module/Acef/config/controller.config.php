<?php

return array(
    'controllers' => array(
        'factories' => array(
            'Acef\\Controller\\ManagerController' => \Acef\Factory\Controller\ManagerControllerFactory::class,
            \Acef\Controller\ClientesController::class => \Acef\Factory\Controller\ClientesControllerFactory::class,
            \Acef\Controller\EstadosController::class => \Acef\Factory\Controller\EstadosControllerFactory::class,
            \Acef\Controller\ProductosController::class => \Acef\Factory\Controller\ProductosControllerFactory::class,
            \Acef\Controller\BitacoraClienteController::class => \Acef\Factory\Controller\BitacoraClienteControllerFactory::class,
            \Acef\Controller\ManagerClienteController::class => \Acef\Factory\Controller\ManagerClienteControllerFactory::class,
            \Acef\Controller\InicioController::class => \Acef\Factory\Controller\InicioControllerFactory::class,
            \Acef\Controller\TipoProductoController::class => \Acef\Factory\Controller\TipoProductoControllerFactory::class,
            \Acef\Controller\TablasMaestrasController::class => \Acef\Factory\Controller\TablasMaestrasControllerFactory::class,
            \Acef\Controller\CalculoDeudaController::class => \Acef\Factory\Controller\CalculoDeudaControllerFactory::class,
            \Acef\Controller\TipoClientesController::class => \Acef\Factory\Controller\TipoClientesControllerFactory::class,
            \Acef\Controller\DeudaRefinanciacionController::class => \Acef\Factory\Controller\DeudaRefinanciacionControllerFactory::class,
            \Acef\Controller\DeudaActualizacionController::class => \Acef\Factory\Controller\DeudaActualizacionControllerFactory::class,
            \Acef\Controller\PagoController::class => \Acef\Factory\Controller\PagoControllerFactory::class,
        ),
    ),
);
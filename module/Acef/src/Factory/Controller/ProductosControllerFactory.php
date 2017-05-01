<?php

namespace Acef\Factory\Controller;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * ProductosControllerFactory
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class ProductosControllerFactory implements FactoryInterface
{

    public function __invoke(\Interop\Container\ContainerInterface $container, $requestedName, array $options = null)
    {
        /* @var $em \Doctrine\ORM\EntityManager */
        $em = $container->get("doctrine.entitymanager.orm_default");
        /* @var $grid \ZfMetal\Datagrid\Grid */
        $grid = $container->build("zf-metal-datagrid", ["customOptionsKey" => "Acef-Entity-Producto"]);
        return new \Acef\Controller\ProductosController($em,$grid);
    }


}


<?php

namespace Acef\Factory\Controller;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * EstadosControllerFactory
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class EstadosControllerFactory implements FactoryInterface
{

    public function __invoke(\Interop\Container\ContainerInterface $container, $requestedName, array $options = null)
    {
        /* @var $em \Doctrine\ORM\EntityManager */
        $em = $container->get("doctrine.entitymanager.orm_default");
        /* @var $grid \ZfMetal\Datagrid\Grid */
        $grid = $container->build("zf-metal-datagrid", ["customOptionsKey" => "Acef-Entity-Estado"]);
        return new \Acef\Controller\EstadosController($em,$grid);
    }


}


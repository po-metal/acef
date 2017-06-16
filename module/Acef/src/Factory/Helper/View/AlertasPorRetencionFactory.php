<?php

namespace Acef\Factory\Helper\View;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * AlertasPorRetencionFactory
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class AlertasPorRetencionFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
    	//ENTITY MANAGER
        $em = $container->get('doctrine.entitymanager.orm_default');
        
        $fechaInicio = new \DateTime(date('Y-m-d'));
        $fechaFin = clone $fechaInicio;
        $fechaFin->modify('+15 day');

        $clientes = $em->getRepository('Acef\Entity\Cliente')->getClientesPorRetencion($fechaInicio, $fechaFin);
        return new \Acef\Helper\View\AlertasPorRetencion($clientes);
    }


}


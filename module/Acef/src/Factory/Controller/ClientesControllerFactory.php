<?php

namespace Acef\Factory\Controller;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * ClientesControllerFactory
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class ClientesControllerFactory implements FactoryInterface
{

	public function __invoke(\Interop\Container\ContainerInterface $container, $requestedName, array $options = null)
	{
		$authService = $container->get('zf-metal-security.authservice');
		/* @var $em \Doctrine\ORM\EntityManager */
		$em = $container->get("doctrine.entitymanager.orm_default");
		/* @var $grid \ZfMetal\Datagrid\Grid */


		$role = $authService->getIdentity()->getRoles()->filter(
			function($entry) {
				return $entry->getName() == 'superUser'?true:false;
			}
		);

		$mainEntityField = null;
		$mainEntity = null;
		
		if(!$role->count()){
			$usuario = $em->getRepository('ZfMetal\Security\Entity\User')->find($authService->getIdentity()->getId());
			$mainEntityField = 'responsable';
			$mainEntity = $usuario;
		}

		$builder = $container->build('zf-metal-datagrid-grid-builder',['container'=>$container]);

		$grid = $builder->build( "acef-entity-cliente",$mainEntityField, $mainEntity );

		return new \Acef\Controller\ClientesController($em,$grid);
	}

}


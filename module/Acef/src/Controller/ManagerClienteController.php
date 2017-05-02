<?php

namespace Acef\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * ManagerClienteController
 *
 * Provee la gestión de los clientes y sus entidades relacionadas.
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class ManagerClienteController extends AbstractActionController
{

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    public $em = null;

    public function getEm()
    {
        return $this->em;
    }

    public function setEm(\Doctrine\ORM\EntityManager $em)
    {
        $this->em = $em;
    }

    public function __construct(\Doctrine\ORM\EntityManager $em)
    {
        $this->em = $em;
    }

    public function mainAction()
    {
        return [];
    }

    public function productosAction()
    {
        return [];
    }

    public function bitacorasAction()
    {
        return [];
    }


}

